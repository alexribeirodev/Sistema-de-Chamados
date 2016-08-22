<?php

	include "conexao.php";
	error_reporting(0);
	//INICIA A SESSÃO
	session_start();

	//VARIÁVEIS DE CPF E SENHA USADOS NO LOGIN
	$cpfLogin = $_POST['cpfLogin'];
	$senhaLogin = $_POST['senhaLogin'];
	
	//CPF COM DOMÍNIO
	$ldap_cpfLogin='buriti\\'.$cpfLogin;

	//A VARIÁVEL $resultadoBanco PEGA A VARIÁVEL $cpfLogin, FAZ PESQUISA NO BANCO E COMPARA
	$sqlCpf = "SELECT * 
	FROM usuario
	WHERE cpf='".$cpfLogin."'";
	$resultadoBanco = mysqli_query($con,$sqlCpf);

	$contadorBanco = mysqli_num_rows($resultadoBanco);
	
	if($contadorBanco!=0)
	{
		//USUÁRIO EXISTE NO BANCO LOCAL
		//CONECTA AO SERVIDOR LDAP
		$ldapConexao = ldap_connect("buriti.df.gov.br")or die("Não é possível conectar ao servidor.");
	
		if ($ldapConexao)
		{
			//VERIFICA USUÁRIO E SENHA DENTRO DO SERVIDOR LDAP 
			$ldapBind = ldap_bind($ldapConexao, $ldap_cpfLogin, $senhaLogin);
			
			if ($ldapBind)
			{

				$sql = "SELECT nome FROM usuario WHERE cpf = '".$cpfLogin."'";
				$resultNome = mysqli_query($con,$sql);
				$nomeUsuario = mysqli_fetch_array($resultNome);
				$_SESSION["nome"] = $nomeUsuario[0];
				$_SESSION["cpf"] = $cpfLogin;
				
				echo "<script>location.href='inicio.php';</script>";

			}else{
				echo "<script>location.href='index.php?acao=usuarioInvalido';</script>";
			}
		}
	}
	else
	{
		//USUÁRIO NÃO EXISTE NO BANCO LOCAL

		//CONECTA AO SERVIDOR LDAP
		$ldapConexao = ldap_connect("buriti.df.gov.br")or die("Não é possível conectar ao servidor.");
	
		if ($ldapConexao)
		{
			//VERIFICA USUÁRIO E SENHA DENTRO DO SERVIDOR LDAP 
			$ldapBind = ldap_bind($ldapConexao, $ldap_cpfLogin, $senhaLogin);
			
			if ($ldapBind)
			{
				//DEFINE ARRAY COM ATRIBUTOS DO LDAP
				$atributosLdap = array("cn","samaccountname");
				//BANCO DE DADOS DO LDAP
				$baseLdap ="OU=Buriti,DC=buriti,DC=df,DC=gov,DC=br";
				//REALIZA BUSCA DENTRO DO BANCO(recebe o cpf sem o domínio)
				$consultaLdap = ldap_search($ldapConexao, $baseLdap, "samaccountname=$cpfLogin*", $atributosLdap) or die ("erro ao efetuar busca por usuário");
				//ADICIONA O RESULTADO DENTRO DA ARRAY
				$info = ldap_get_entries($ldapConexao, $consultaLdap);

				$nomeUsuario=utf8_encode($info[0]["cn"][0]);
				$cpfUsuario=utf8_encode($info[0]["samaccountname"][0]);

				$sqlInsereBanco = mysqli_query($con,"INSERT INTO usuario (nome,cpf) VALUES ('".$nomeUsuario."','".$cpfUsuario."')");

				$_SESSION["nome"] = $nomeUsuario;
				$_SESSION["cpf"] = $cpfUsuario;

				echo "<script>location.href='inicio.php';</script>";

			}else{
				echo "<script>location.href='index.php?acao=usuarioInvalido';</script>";
			}
		}
	}
?>
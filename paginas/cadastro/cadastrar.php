<?php

	//INICIA A SESSÃO
    session_start();

	switch ($_REQUEST['acao']) {
		case 'chamado':
			
			break;

		case 'natureza':
			$nomeNatureza = utf8_decode($_REQUEST['nomeNatureza']);
			$sql = "INSERT INTO natureza (natureza) VALUES ('".$nomeNatureza."')";
			$query = mysqli_query($con,$sql);

			echo "<script>location.href='inicio.php?pagina=consultarNatureza&cadastrado=true';</script>"; 

			break;

		case 'setor':
			$nomeSetor = utf8_decode($_REQUEST['nomeSetor']);
			$descricaoSetor = utf8_decode($_REQUEST['descricaoSetor']);
			$ramalSetor = utf8_decode($_REQUEST['ramalSetor']);
			$sql = "INSERT INTO setor (setor,descricao,ramal) VALUES ('".$nomeSetor."','".$descricaoSetor."','".$ramalSetor."')";
			$query = mysqli_query($con,$sql);

			echo "<script>location.href='inicio.php?pagina=consultarSetor&cadastrado=true';</script>";
			break;

		case 'setorSelecionado':
			
			$idSetor = utf8_decode($_REQUEST['idSetor']);

			$sql = "UPDATE usuario SET setor_id='$idSetor' WHERE cpf='".$_SESSION["cpf"]."'";
			$query = mysqli_query($con,$sql);

			echo "<script>location.href='inicio.php';</script>";

			break;

	}

?>
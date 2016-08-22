<?php include "head.php";

    //INICIA A SESSÃO
    session_start();

    $consultaTipoUsuario = mysqli_query($con, "SELECT tipo FROM usuario WHERE cpf = '".$_SESSION["cpf"]."'");
    $resultadoTipoUsuario = mysqli_fetch_array($consultaTipoUsuario);

    $_SESSION["tipo"] = $resultadoTipoUsuario[0]; 

    if(empty($_SESSION["cpf"])){
        echo "<script>location.href='index.php?acao=deslogado';</script>";
    }
?>

<!-- MENU -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#barraMenu" aria-expanded="false">
                <span class="sr-only">Navegação alternada</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- TITULO DO MENU -->
            <a class="navbar-brand" href="inicio.php">SICVIGO</a>
        </div>

        <!-- ITENS DO MENU -->
        <div class="collapse navbar-collapse" id="barraMenu">
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-bullhorn"></span> Chamado<span class="caret"></a>
                    <ul class="dropdown-menu">
                        <li><a href="?pagina=novoChamado"><span class="glyphicon glyphicon-plus"></span> Novo</a></li>
                        <li><a href="?pagina=consultarChamado"><span class="glyphicon glyphicon-search"></span> Consultar</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="?pagina=cadastrarNatureza"><span class="glyphicon glyphicon-plus"></span> Cadastrar Natureza</a></li>
                        <li><a href="?pagina=consultarNatureza"><span class="glyphicon glyphicon-search"></span> Consultar Natureza</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-tree-deciduous"></span> Setor <span class="caret"></a>
                    <ul class="dropdown-menu">
                        <li><a href="?pagina=cadastrarSetor"><span class="glyphicon glyphicon-plus"></span> Cadastrar</a></li>
                        <li><a href="?pagina=consultarSetor"><span class="glyphicon glyphicon-search"></span> Consultar</a></li>
                    </ul>
                </li>
                <li><a href="?pagina=usuarios"><span class="glyphicon glyphicon-user"></span> Usuários</a></li>
                <li><a href="?pagina=estoque"><span class="glyphicon glyphicon-list-alt"></span> Estoque</a></li>
                <li><a href="?pagina=relatorio"><span class="glyphicon glyphicon-file"></span> Relatório</a></li>
                <li><a href="?pagina=bancoConhecimento"><span class="glyphicon glyphicon-hddglyphicon glyphicon-education"></span> Banco de Conhecimento</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <p class="navbar-text">Bem vindo(a), <?php echo $_SESSION["nome"]; ?>!</p>
                <li><a href="?pagina=sair">Sair</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container" style="margin-top:80px;">
    <!-- CONTEÚDO -->
    <?php

        //CONTROLE DE EXIBIÇÃO DO CONTEÚDO
        switch ($_REQUEST['pagina']) {
            case 'novoChamado':
                include "paginas/cadastro/cadastroChamado.php";
                break;

            case 'consultarChamado':
                include "paginas/consulta/consultaChamado.php";
                break;

            case 'cadastrarNatureza':
                include "paginas/cadastro/cadastroNatureza.php";
                break;

            case 'consultarNatureza':
                include "paginas/consulta/consultaNatureza.php";
                break;

            case 'cadastrarSetor':
                include "paginas/cadastro/cadastroSetor.php";
                break;

            case 'consultarSetor':
                include "paginas/consulta/consultaSetor.php";
                break;

            case 'usuarios':
                include "paginas/consulta/consultaUsuarios.php";
                break;

            case 'cadastrar':
                include "paginas/cadastro/cadastrar.php";
                break;

            case 'escolherSetor':
                include "paginas/cadastro/selecionarSetor.php";
                break;

            case 'estoque':
                
                break;

            case 'sair':
                include "paginas/sair.php";
                break;

            case 'relatorio':
                
                break;

            case 'bancoConhecimento':
                
                break;
            
            default:
                include "paginas/paginaInicial.php";
                break;
        }

    ?>

</div>

<?php include "footer.php"; ?>
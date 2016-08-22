<?php include "head.php"; 

	session_start();

	if(!empty($_SESSION["cpf"])){
        echo "<script>location.href='inicio.php';</script>";
    }

?>

<div class="container" style="margin-top: 45px;">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<div class="well">
				<center><h1>SICVIGO <small>Sistema de Chamados da Vice Governadoria</small></h1></center>
			</div>
		</div>
		<div class="col-md-2"></div>
	</div>
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<?php
				switch ($_GET['acao']) {
					case 'usuarioInvalido':
						echo "<div class='alert alert-success' role='alert'><p>CPF ou senha inválidos!</p></div>";
						break;

					case 'deslogado':
						echo "<div class='alert alert-success' role='alert'><p>Precisa estar logado para acessar o sistema.</p></div>";
						break;
				}
			?>
			<div class="jumbotron">
				<div class="container">
					<form method="POST" action="validarLogin.php">
						<div class="form-group">
							<label for="cpfLogin">CPF</label>
							<input type="text" name="cpfLogin" class="form-control" id="cpfLogin">
						</div>
						<div class="form-group">
							<label for="senhaLogin">Senha</label>
							<input type="password" name="senhaLogin" class="form-control" id="senhaLogin">
						</div>
						<div class="form-group">
							<label>Domínio: BURITI</label>
						</div>
						<button type="submit" class="btn btn-primary btn-lg btn-block">Entrar</button>
					</form>
				</div>
			</div>
		</div>
		<div class="col-md-3"></div>
	</div>
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<div class="well">
				<center><address class="text-left">
					<strong>Coordenadoria de Tecnologia da Informação - Vice Governadoria</strong><br>
					Anexo do Palácio do Buriti, Praça do Buriti, 16º andar<br>
					Brasília, DF 71691-004<br>
					<abbr title="telefone">Telefone</abbr>: 3961-1796 / 3961-1795<br>
				</address></center>
			</div>
		</div>
		<div class="col-md-2"></div>
	</div>
</div>

<?php include "footer.php"; ?>
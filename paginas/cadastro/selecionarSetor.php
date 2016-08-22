<div class="row">
	<div class="col-md-3"></div>
	<div class="col-md-6">
		<h2 class="text-center">Escolha qual o seu setor</h2>
		<form method="POST" action="?pagina=cadastrar&acao=setorSelecionado" class="form-horizontal">
			<div class="form-group">
				<select name="idSetor" class="form-control">
					<?php
						$sql = "SELECT id,setor FROM setor WHERE id <> 6";
						$resultadoConsulta = mysqli_query($con, $sql);

						if(mysqli_num_rows($resultadoConsulta) > 0){
							while ($linhas = mysqli_fetch_assoc($resultadoConsulta)) {
								echo "<option value='".$linhas["id"]."'>".$linhas["setor"]."</option>";
							}
						}
					?>
				</select>
			</div>
			<center><button type="submit" class="btn btn-primary">Cadastrar</button></center>	
		</form>
	</div>
	<div class="col-md-3"></div>
</div>
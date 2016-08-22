<div class="row">
	<div class="col-md-2"></div>
	<div class="col-md-8">
		<h2 class="text-center">Novo Chamado</h2>
		<form method="POST" action="" class="form-horizontal">
			<div class="form-group">
				<label for="naturezaChamado" class="col-sm-2 control-label">Natureza do Chamado</label>
				<div class="col-sm-10">
					<select class="form-control" name="naturezaChamado" id="naturezaChamado">
						<?php
							$sql = "SELECT natureza FROM natureza";
							$resultadoConsulta = mysqli_query($con, $sql);

							if(mysqli_num_rows($resultadoConsulta) > 0){
								while ($linhas = mysqli_fetch_assoc($resultadoConsulta)) {
									echo "<option>".$linhas["natureza"]."</option>";
								}
							}
						?>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label for="descricaoChamado" class="col-sm-2 control-label">Descrição</label>
				<div class="col-sm-10">
					<textarea class="form-control" id="descricaoChamado" name="descricaoChamado" rows="3" placeholder="Descreva aqui a situação ou problema ao qual se encontra"></textarea>
				</div>
			</div>
			<center><button type="submit" class="btn btn-primary">Abrir Chamado</button></center>
		</form>
	</div>
	<div class="col-md-2"></div>
</div>
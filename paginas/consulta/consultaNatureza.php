<center><h2>Naturezas</h2></center>

<div class="row">
	<div class="col-md-2"></div>
	<div class="col-md-8">
		<?php
			if ($_REQUEST['cadastrado']) {
				echo "<div class='alert alert-success' role='alert'><p>Natureza cadastrada com sucesso!</p></div>";
			}
		?>
		<div class="table-responsive">
			<table class="table table-hover">
				<thead>
					<th>#</th>
					<th>Nome</th>
					<th>Opções</th>
				</thead>
				<tbody>
					<?php
						$sql = "SELECT id,natureza FROM natureza";
						$resultadoConsulta = mysqli_query($con, $sql);

						if(mysqli_num_rows($resultadoConsulta) > 0){
							while ($linhas = mysqli_fetch_assoc($resultadoConsulta)) {
								echo "<tr>";
									echo "<td>".$linhas["id"]."</td>";
									echo "<td>".$linhas["natureza"]."</td>";
									echo "<td>";
										echo "<div class='btn-group' role='group' aria-label=''>";
											echo "<button class='btn btn-info' type='button'><span class='glyphicon glyphicon-edit'></span></button>";
											echo "<button class='btn btn-danger' type='button'><span class='glyphicon glyphicon-remove'></span></button>";
										echo "</div>";
									echo "</td>";
								echo "</tr>";
							}
						}
					?>
				</tbody>
			</table>
		</div>
	</div>
	<div class="col-md-2"></div>
</div>
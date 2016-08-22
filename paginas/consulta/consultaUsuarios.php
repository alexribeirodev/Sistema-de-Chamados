<h2 class="text-center">Usuários</h2>
<div class="container">
	<div class="col-md-4 col-md-offset-8">
		<form method="POST" action="" class="form-horizontal">
			<div class="input-group">
				<input type="text" name="pesquisaUsuario" class="form-control">
				<span class="input-group-btn">
				<button class="btn btn-default" type="submit">Pesquisar</button>
				</span>
			</div>
		</form>
	</div>
</div>

<div class="table-reponsive">
	<table class="table table-hover">
		<thead>
			<tr>
				<th>Nome</th>
				<th>CPF</th>
				<th>Setor</th>
				<th>Ramal</th>
				<th>Tipo</th>
				<th>Opções</th>
				</tr>
		</thead>
		<tbody>
			<?php
				$sql = "SELECT id,nome,cpf,tipo,setor_id FROM usuario";
				$resultadoConsulta = mysqli_query($con, $sql);

				if(mysqli_num_rows($resultadoConsulta) > 0){
					while ($linhas = mysqli_fetch_assoc($resultadoConsulta)) {
						echo "<tr>";
							echo "<td>".$linhas["nome"]."</td>";
							echo "<td>".$linhas["cpf"]."</td>";
							
							$sqlSetor = "SELECT id,setor,ramal FROM setor WHERE ".$linhas["setor_id"]."=id";
							$resultadoConsultaSetor = mysqli_query($con, $sqlSetor);
							$linhaSetor = mysqli_fetch_assoc($resultadoConsultaSetor);
							echo "<td>".$linhaSetor["setor"]."</td>";
							echo "<td>".$linhaSetor["ramal"]."</td>";

							switch ($linhas["tipo"]) {
								case 'adm':
									echo "<td>Administrador</td>";
									break;

								case 'usr':
									echo "<td>Usuário</td>";
									break;
							}

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
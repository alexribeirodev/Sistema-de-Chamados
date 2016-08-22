<?php

	$idSetorUsuario = mysqli_query($con,"SELECT setor_id FROM usuario WHERE cpf='".$_SESSION["cpf"]."'");
    $resultIdSetorUsuario = mysqli_fetch_array($idSetorUsuario);

    $comparaSetor = mysqli_query($con,"SELECT id FROM setor WHERE id='".$resultIdSetorUsuario[0]."'");
    $verificaSetor = mysqli_fetch_array($comparaSetor);

    if($verificaSetor[0] == 6){
        echo "<script>location.href='inicio.php?pagina=escolherSetor';</script>";
    }

?>

<div class="row">
	<div class="col-md-4"></div>
	<div class="col-md-4">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3>Chamados</h3>
			</div>
			<div class="panel-body">
				<div class="list-group">
					<button type="button" class="list-group-item"><span class="badge">0</span>Chamados Abertos</button>
					<button type="button" class="list-group-item"><span class="badge">0</span>Chamados Em Andamento</button>
					<button type="button" class="list-group-item"><span class="badge">0</span>Chamados Concluídos</button>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-4"></div>
</div>
<div class="row">
	<div class="col-md-4"></div>
	<div class="col-md-4">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3>Usuários</h3>
			</div>
			<div class="panel-body">
				<div class="list-group">
					<button type="button" class="list-group-item"><span class="badge">0</span>Cadastrados</button>
					<button type="button" class="list-group-item"><span class="badge">0</span>Desativados</button>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-4"></div>
</div>

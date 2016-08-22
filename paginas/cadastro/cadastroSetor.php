<div class="row">
	<div class="col-md-3"></div>
	<div class="col-md-6">
		<h2 class="text-center">Cadastrar Setor</h2>
		<form method="POST" action="?pagina=cadastrar&acao=setor" class="form-horizontal">
			<div class="form-group">
				<label class="col-sm-2 control-label" for="nomeSetor">Setor</label>
				<div class="col-sm-10">
					<input type="text" name="nomeSetor" id="nomeSetor" class="form-control" placeholder="Digite aqui o nome do setor">
				</div>
			</div>

			<div class="form-group">
				<label class="col-sm-2 control-label" for="descricaoSetor">Descrição</label>
				<div class="col-sm-10">
					<textarea class="form-control" name="descricaoSetor" id="descricaoSetor" placeholder="Descreva aqui este setor" rows="3"></textarea>
				</div>
			</div>
			
			<div class="form-group">
				<label class="col-sm-2 control-label" for="ramalSetor">Ramal</label>
				<div class="col-sm-10">
					<input type="text" name="ramalSetor" id="ramalSetor" class="form-control" placeholder="Digite aqui o número do Ramal desse setor, se for mais de um separe com um espaço">
				</div>
			</div>

			<center><button type="submit" class="btn btn-primary">Cadastrar</button></center>	
		</form>
	</div>
	<div class="col-md-3"></div>
</div>
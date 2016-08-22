<h2 class="text-center">Consulta de Chamado</h2>

<div class="row">
	<div class="col-md-2"></div>
	<div class="col-md-8">
		<div class="jumbotron">
			<form class="form-horizontal" method="POST" action="">
				<div class="form-group">
					<label for="buscaNomeUsuario" class="col-sm-3 control-label">Nome do Usuário</label>
					<div class="col-sm-9">
						<input class="form-control" type="text" name="buscaNomeUsuario" id="buscaNomeUsuario">
					</div>
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label class="col-sm-3 control-label">Setor</label>
							<div class="col-sm-9">
								<select class="form-control">
									<option></option>
									<option>TI</option>
								</select>
							</div>
						</div>
					</div>	
					<div class="col-md-6">
						<div class="form-group">
							<label class="col-sm-3 control-label">Atribuição</label>
							<div class="col-sm-9">
								<select class="form-control">
									<option></option>
									<option>Alex</option>
									<option>Rafael</option>
								</select>
							</div>
						</div>
					</div>	
				</div>

				<div class="col-md-7 col-md-offset-5">
					<button class="btn btn-primary btn-lg" type="submit">Buscar</button>
				</div>
			</form>
		</div>
	</div>
	<div class="col-md-2"></div>
</div>

<div class="row">
	<div class="col-md-4"></div>
	<div class="col-md-4">
		<div class="btn-group" role="group" aria-label="filtroChamado">
			<button type="button" class="btn btn-default">Todos</button>
			<button type="button" class="btn btn-active">Abertos</button>
			<button type="button" class="btn btn-info">Em Andamento</button>
			<button type="button" class="btn btn-success">Concluídos</button>
		</div>
	</div>
	<div class="col-md-4"></div>
</div>

<div class="table-responsive">
	<table class="table table-hover">

		<thead>
			<tr>
				<th>Estado</th>
				<th>Natureza</th>
				<th>Usuário</th>
				<th>Setor</th>
				<th>Data / Hora</th>
				<th>Atrubuição</th>
				<th>Opções</th>
			</tr>
		</thead>
		<tbody>
			<tr class="active">
				<td><span class="label label-default">Aberto</span></td>
				<td>Suporte ao Usuário</td>
				<td>Alex</td>
				<td>TI</td>
				<td>23/06/2016 - 15:00</td>
				<td>Rafael</td>
				<td>
					<div class="btn-group" role="group" aria-label="">
						<button class="btn btn-primary" type="button"><span class="glyphicon glyphicon-asterisk"></span></button>
					</div>

					<div class="btn-group" role="group" aria-label="">
						<button class="btn btn-info" type="button"><span class="glyphicon glyphicon-edit"></span></button>
						<button class="btn btn-danger" type="button"><span class="glyphicon glyphicon-remove"></span></button>
					</div>
				</td>
			</tr>
			<tr class="info">
				<td><span class="label label-info">Em Andamento</span></td>
				<td>Suporte ao Usuário</td>
				<td>Alex</td>
				<td>TI</td>
				<td>23/06/2016 - 15:00</td>
				<td>Rafael</td>
				<td>
					<div class="btn-group" role="group" aria-label="">
						<button class="btn btn-success" type="button"><span class="glyphicon glyphicon-ok"></span></button>
					</div>

					<div class="btn-group" role="group" aria-label="">
						<button class="btn btn-info" type="button"><span class="glyphicon glyphicon-edit"></span></button>
						<button class="btn btn-danger" type="button"><span class="glyphicon glyphicon-remove"></span></button>
					</div>
				</td>
			</tr>
			<tr class="success">
				<td><span class="label label-success">Concluído</span></td>
				<td>Suporte ao Usuário</td>
				<td>Alex</td>
				<td>TI</td>
				<td>23/06/2016 - 15:00</td>
				<td>Rafael</td>
				<td>
					<div class="btn-group" role="group" aria-label="">
						<button class="btn btn-warning" type="button">Reabrir</span></button>
					</div>

					<div class="btn-group" role="group" aria-label="">
						<button class="btn btn-info" type="button"><span class="glyphicon glyphicon-edit"></span></button>
						<button class="btn btn-danger" type="button"><span class="glyphicon glyphicon-remove"></span></button>
					</div>
				</td>
			</tr>
		</tbody>
		
	</table>
</div>
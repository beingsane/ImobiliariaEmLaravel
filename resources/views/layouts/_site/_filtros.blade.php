<div class="row">
	<form action="{{ route('site.busca') }}">
		<div class="input-field col s6 m4">
			<select name="status">
				<option value="todos">Aluga e Vende</option>
				<option value="aluga">Aluga</option>
				<option value="vende">Vende</option>
			</select>
			<label>Status</label>
		</div>
		<div class="input-field col s6 m4">
			<select name="tipo_id">
				<option value="todos">Todos os Tipos</option>
				@foreach($tipos as $tipo)
					<option value="{{ $tipo->id }}">{{ $tipo->titulo }}</option>
				@endforeach
			</select>
			<label>Tipo de imóvel</label>
		</div>
		<div class="input-field col s6 m4">
			<select name="cidade_id">
				<option value="todas">Todas as Cidades</option>
				@foreach($cidades as $cidade)
					<option value="{{ $cidade->id }}">{{ $cidade->nome }}</option>
				@endforeach
			</select>
			<label>Cidade</label>
		</div>
		<div class="input-field col s6 m3">
			<select name="dormitorios">
				<option value="todos">Todos</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">Mais</option>
			</select>
			<label>Dormitórios</label>
		</div>
		<div class="input-field col s12 m4">
			<select name="valor">
				<option value="todos">Todos os Valores</option>
				<option value="1">Até R$ 500,00</option>
				<option value="2">De R$ 500,00 a R$ 1.000,00</option>
				<option value="3">De R$ 1.000,00 a R$ 5.000,00</option>
				<option value="4">De R$ 5.000,00 a R$ 10.000,00</option>
				<option value="5">De R$ 10.000,00 a R$ 50.000,00</option>
				<option value="6">De R$ 50.000,00 a R$ 100.000,00</option>
				<option value="7">De R$ 100.000,00 a R$ 500.000,00</option>
				<option value="8">De R$ 500.000,00 a R$ 1.000.000,00</option>
				<option value="9">Acima de R$ 1.000.000,00</option>
			</select>
			<label>Valor</label>
		</div>
		<div class="input-field col s12 m3">
			<input class="validate" type="text" name="bairro">
			<label>Bairro</label>
		</div>
		<div class="input-field col s12 m2">
			<button class="btn deep-range darken-1 right">Filtrar</button>
		</div>
	</form>
</div>
@extends('layout.principal') 
@section('conteudo')
<form class = "formulario" action="/cep/InformaEndereco" method="get">
		<label class = "formulario">CEP</label> 
		<input class = "formulario" name="cep"  /> 
	  
		<button class = "formulario" type="submit">Validar</button>
</form>

@stop
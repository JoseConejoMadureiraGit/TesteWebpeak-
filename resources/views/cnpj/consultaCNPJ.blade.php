@extends('layout.principal') 
@section('conteudo')
<form class = "formulario" action="cnpj/validaCNPJ" method="get">
		<label class = "formulario">CNPJ</label> 
		<input class = "formulario" name="cnpj"  /> 
	  
		<button class = "formulario" type="submit">Validar</button>
</form>

@stop
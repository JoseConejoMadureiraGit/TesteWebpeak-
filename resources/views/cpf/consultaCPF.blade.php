@extends('layout.principal') 
@section('conteudo')
<form class = "formulario" action="/cpf/validaCPF" method="get">
		<label class = "formulario">CPF</label> 
		<input class = "formulario" name="cpf"  /> 
	  
		<button class = "formulario" type="submit">Validar</button>
</form>

@stop
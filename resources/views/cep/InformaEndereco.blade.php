@extends('layout.principal') 
@section('conteudo')

<table class="table">
	<tr>
		<td>rua</td>
		<td>bairro</td>
		<td>estado</td>
		<td >cidade</td>
		
	</tr>
		<td>{{$endereco["logradouro"]}}</td>
		<td>{{$endereco["bairro"]}}</td>
		<td>{{$endereco["uf"]}}</td>
		<td>{{$endereco["localidade"]}}</td>
	
	</tr>
</table>
@stop
@extends('layout.principal') 
@section('conteudo')

@if($cpf)
<div class=bg-success  >
<strong> cpf valido</strong>
</div>

@else

<div class=bg-danger  >
<strong> cpf invalido</strong>
</div>
@endif



@stop
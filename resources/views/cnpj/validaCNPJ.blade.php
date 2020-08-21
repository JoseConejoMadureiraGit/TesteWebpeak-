@extends('layout.principal') 
@section('conteudo')

@if($cpnj)
<div class=bg-success  >
<strong> cnpj  valido</strong>
</div>

@else

<div class=bg-danger  >
<strong> cnpj invalido</strong>
</div>
@endif


@stop
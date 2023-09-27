@extends('layouts.main')

@section('title', 'Produtos')

@section('content')
    
    @if ($busca != '')
        <p>O usuário esta buscando por: {{$busca}}</p>
    @endif
    
@endsection
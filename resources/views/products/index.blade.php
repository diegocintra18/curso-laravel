@extends('adminlte::page')

@section('title', 'Produtos')

@section('content_header')
    <div class="row">
        <div class="col-11">
            <h1>Produtos</h1>
        </div>
        <div class="col-1">
            <button class="btn btn-success">Adicionar</button>
        </div>
    </div>
@stop

@section('content')
<div class="container-fluid">
    <x-product-list :products="$products" />
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
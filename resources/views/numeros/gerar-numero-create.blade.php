@extends('layout')
@push('styles')
    <link rel="stylesheet" href="{{ URL::asset('css/layout.css') }}">
@endpush
@section('titulo')
    Gerar numero
@endsection
@section('cabecalho')

@endsection
@section('conteudo')
        <!--
        <form method="post" action="mostrar-numero">
            @csrf
            <label for="numero">Informe a quantidade de numeros a serem sorteados</label>
            <input type="number" id="numero" name="numero">
            <button>Gerar número</button>
        </form>
        -->
@endsection

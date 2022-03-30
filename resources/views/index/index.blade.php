@extends('layout')
@push('styles')
    <link rel="stylesheet" href="{{ URL::asset('css/layout.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/index.css') }}">
@endpush
@section('titulo')
    Gerador
@endsection
@section('cabecalho')

@endsection
@section('conteudo')
    <div id="principal">
        <a href="{{ route('nome') }}" class="btn btn-dark mb-2">
            Gerar nome
        </a>
        <a href="{{ route('gametag') }}" class="btn btn-dark mb-2">
            Gerar Gametag
        </a>
        <a href="{{ route('numero') }}" class="btn btn-dark mb-2">
            Gerar número
        </a>
        <a href="{{ route('verificar') }}" class="btn btn-dark mb-2">
            Verificar histórico
        </a>
    </div>
@endsection

@extends('layout.app')

@section('titulo', 'minha página - filho')

@section('barralateral')
@parent
<p>essa parte é do filho</p>
@endsection

@section('conteudo')
        <p>Este é o conteudo filho</p>
@endsection
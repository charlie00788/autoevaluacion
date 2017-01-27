@extends('layout')

@section('title')

    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-sm-12">
            <h2>{{ $usuario->unity->unity }}</h2>
        </div>
    </div>

@endsection

@section('content')

    @include('partials.errors')

    soy disciplina

@endsection
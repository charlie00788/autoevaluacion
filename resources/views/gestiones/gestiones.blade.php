@extends('layout')

@section('title')

    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-sm-12">
            <h2>{{ $usuario->unity->unity }}</h2>
            <ol class="breadcrumb">
                <li>
                    Gestiones de Autoevaluación: {{ $gestiones->count() }}
                </li>
            </ol>
        </div>
    </div>

@endsection

@section('content')
    <div class="wrapper wrapper-content">

        @include('partials.errors')
        {!! Alert::render() !!}

        <div class="row">
            <div class="col-lg-12 animated fadeInRight">
                <div class="ibox-content">
                    <a class="btn btn-primary" href="{{ route('getAgregarGestion') }}">
                        Agregar Gestión para Autoevaluación
                    </a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 animated fadeInRight">
                <div class="ibox-content" style="display: block">
                    <table class="table table-hover" width="100%">
                        <thead>
                        <tr>
                            <th>Gestiones</th>
                            <th  colspan="3" style="text-align: center">Opciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($gestiones as $gestion)
                            <tr>
                                <td>{{ $gestion->year }}</td>
                                <td style="text-align: center"><a href="{{ route('getAutoevaluacion', $gestion->id) }}">Ver</a></td>
                                <td style="text-align: center"><a href="{{ route('getEditarEvaluacion', $gestion->id) }}">Editar</a></td>
                                <td style="text-align: center"><a href="{{ route('getGrafico', $gestion->id) }}">Gráficos</a></td>
                            <tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
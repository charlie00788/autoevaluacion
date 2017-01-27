@extends('layout2')

@section('title')

    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-sm-12">
            <h2>{{ $usuario->unity->unity }}</h2>
            <ol class="breadcrumb">
                <li>
                    Gestión de Autoevaluación: {{ $anio_ev }}
                </li>
            </ol>
        </div>
    </div>

@endsection

@section('content')

    <script>
        var e1 = "{{ $notas['1'] }}";
        var e2 = "{{ $notas['2'] }}";
        var e3 = "{{ $notas['3'] }}";
        var e4 = "{{ $notas['4'] }}";

        var e11 = "{{ $notas['11'] }}";
        var e12 = "{{ $notas['12'] }}";
        var e13 = "{{ $notas['13'] }}";
        var e21 = "{{ $notas['21'] }}";
        var e22 = "{{ $notas['22'] }}";
        var e23 = "{{ $notas['23'] }}";
        var e24 = "{{ $notas['24'] }}";
        var e31 = "{{ $notas['31'] }}";
        var e32 = "{{ $notas['32'] }}";
        var e33 = "{{ $notas['33'] }}";
        var e34 = "{{ $notas['34'] }}";
        var e41 = "{{ $notas['41'] }}";
        var e42 = "{{ $notas['42'] }}";
        var e43 = "{{ $notas['43'] }}";
    </script>

    <div class="wrapper wrapper-content">

        @include('partials.errors')
        {!! Alert::render() !!}

        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Roseta de Calidad por Componentes</h5>
                    </div>
                    <div class="ibox-content">
                        <div>
                            <canvas id="radarChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Roseta de Calidad por Dimensiones</h5>
                    </div>
                    <div class="ibox-content">
                        <div>
                            <canvas id="radarChart2"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
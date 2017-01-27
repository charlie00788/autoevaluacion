<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Inicio de Sesión</title>

    {!! Html::style('css/bootstrap.css') !!}
    {!! Html::style('font-awesome/css/font-awesome.css') !!}
    {!! Html::style('css/animate.css') !!}
    {!! Html::style('fuentespropias/open-sans.css') !!}
    {!! Html::style('css/style.min.css') !!}
    {!! Html::style('css/mystyles.css') !!}

</head>

<body class="gray-bg">

<div class="loginColumns animated fadeInDown">

    <div class="row">
        <div class="col-md-2">
            <img src="{{ asset('imagenes/armabol.png') }}" alt="" width="100%">
        </div>
        <div class="col-md-8">
            <h2 class="font-bold" align="center">
                Sistema de Gestión de la Escuela de Guerra Naval
            </h2>
        </div>
        <div class="col-md-2">
            <img src="{{ asset('imagenes/dpto.png') }}" alt="" width="100%">
        </div>
    </div>
    <div class="row">

        <div class="col-md-6">

            <p align="justify">

            Bienvenidos al Sistema de Gestión de la Escuela de Guerra Naval,
            donde podrás acceder a la gestión de datos.

        </p>

        <p align="justify">
            La Escuela de Guerra Naval ha desarrollado el Sistema de Gestión
            donde se realizará la gestión de datos de la Escuela de Guerra Naval.
        </p>

        <p align="justify">
            <small>Para poder ingresar al Sistema deberá registrarse en la Escuela de Guerra Naval
            donde se le asignará un usuario y contraseña, todo ingreso a la plataforma
                estará registrado en el sistema.</small>
        </p>

        </div>
        <div class="col-md-6">

            @include('partials.errors')

            @yield('content')

        </div>
    </div>
    <hr/>
    <div class="row">
        <div class="col-md-8">
            Desarrollado por TF. CGON. Charlie Seoane Sanchez
        </div>
        <div class="col-md-4 text-right">
            <small>Copyright © 2016</small>
        </div>
    </div>
</div>

</body>

</html>

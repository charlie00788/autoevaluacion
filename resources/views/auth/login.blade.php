@extends('auth.layout')

@section('content')

<div class="ibox-content">
    {!! Form::open(['route' => 'login', 'method' => 'POST', 'role' => 'form']) !!}

        <div class="form-group">
            {!! Form::text('nickName', old('nickName'), ['class' => 'form-control', 'placeholder' => 'Usuario']) !!}

        </div>
        <div class="form-group">
            {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Contraseña']) !!}
        </div>
        {!! Form::submit('Iniciar sesión', ['class' => 'btn btn-primary block full-width m-b']) !!}

        <a href="{{ url('password/email') }}">
            <small>Olvidó su contraseña?</small>
        </a>

    {!! Form::close() !!}
    <p class="m-t">
        <small>Escuela de Guerra Naval &copy; 2016</small>
    </p>
</div>

@endsection
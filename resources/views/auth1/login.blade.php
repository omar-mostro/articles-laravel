<!-- resources/views/auth/login.blade.php -->

@extends('app')

@section('title')

    Login page

@stop

@section('content')

    {!! form::open(['url' => '/auth/login']) !!}


    <div class="form-group">
        {!! Form::label('email', 'Email: ')!!}
        {!! Form::text('email', old('email'), ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('password', 'Password: ')!!}
        {!! Form::password('email', ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('remember', 'Remember:')!!}
        {!! Form::checkbox('remember', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Login', ['class' => 'form-control btn btn-success'])!!}
    </div>

    {!! form::close()!!}

@stop
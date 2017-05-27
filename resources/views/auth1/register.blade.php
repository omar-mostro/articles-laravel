<!-- resources/views/auth/register.blade.php -->

{!! form::open(['url' => '/auth/register']) !!}
@extends('app')

@section('title')

    Login page

@stop

@section('content')

    <div class="form-group">
        {!! Form::label('name', 'Name: ')!!}
        {!! Form::text('name', old('name'), ['class' => 'form-control']) !!}

    </div>


    <div class="form-group">
        {!! Form::label('email', 'Email: ')!!}
        {!! Form::text('email', old('email'), ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('password', 'Password: ')!!}
        {!! Form::password('email', ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('password_confirmation', 'Confirm Password: ')!!}
        {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Register', ['class' => 'form-control btn btn-success'])!!}
    </div>

    {!! form::close()!!}

@stop
@extends('app');

@section('title')

    Create Article
@stop

@section('content')

    <h2>Create Article</h2>

    @include('errors.list')

    {!! Form::open(['url' => 'articles']) !!}

    @include('articles._form', ['submitButtonText' => 'Create it'])

    {!! Form::close() !!}
@stop
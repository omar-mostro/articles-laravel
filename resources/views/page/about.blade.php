@extends('app')

@section('title')
    Test
@stop

@section('content')
    <h1>About {{$apellidos}}</h1>
@stop

@section('footer')
    &copy; {{date('Y')}} Omar
@stop


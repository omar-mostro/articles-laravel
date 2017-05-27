@extends('app');

@section('title')

    Edit Article
@stop

@section('content')

    <h2>Edit {{$article->title}}</h2>

    {{--Esta sección va en la carpeta de errores --}}
    {{--@if($errors->any())--}}
        {{--<ul class="alert alert-danger list-unstyled">--}}

            {{--@foreach($errors->all() as $error)--}}

                {{--<li>--}}
                    {{--{{$error}}--}}
                {{--</li>--}}

            {{--@endforeach--}}

        {{--</ul>--}}

    {{--@endif--}}

    @include('errors.list')


    {!! Form::model($article,['method' => 'PUT', 'url' => 'articles/'. $article->id]) !!}

    @include('articles._form', ['submitButtonText' => 'Done']);


    {!! Form::close() !!}
@stop
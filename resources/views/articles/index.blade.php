@extends('app');

@section('title')

    articles

@stop

@section('content')

    <h1>Articles</h1>

    <a class="btn btn-danger" href="{{action('ArticlesController@create')}}">New Article</a>

    @foreach($articles as $article)

        <article>
            <h2><a href="{{action('ArticlesController@show', [$article->id])}}">{{$article->title}}</a></h2>

            <div class="well">{{$article->body}}</div>

        </article>

    @endforeach

@stop
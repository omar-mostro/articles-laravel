@extends('app');

@section('title')

    article

@stop

@section('content')

    <h1>Title: {{$findedArticle->title}}</h1>

    <article>

        <div class="well">{{$findedArticle->body}}</div>

    </article>

    @unless($findedArticle->tags->isEmpty())

        <h5>Tags:</h5>
        <ul>
            @foreach($findedArticle->tags as $tag)
                <li>{{$tag->name}}</li>
            @endforeach
        </ul>

    @endunless


@stop
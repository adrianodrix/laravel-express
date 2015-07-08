@extends('template')

@section('title')Posts @stop

@section('content')
    <h1>Blog</h1>
    <hr/>
    @foreach($posts as $post)
        <h2>{{ $post->title }} <i>({{ $post->created_at  }})</i></h2>
        <p>{{ $post->content }}</p>
        <p><b>Tags: </b>
        @foreach($post->tags as $tag)
            {{ $tag->name }},
        @endforeach
        </p>
        <h3>Comentários</h3>
        @foreach($post->comments as $comment)
            <b>Nome: </b> {{ $comment->name }}<br/>
            <b>Comentário: </b> {{ $comment->comment }}
        @endforeach
        <hr/>
    @endforeach
@stop
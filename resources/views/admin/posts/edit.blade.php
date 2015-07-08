@extends('template')

@section('title')Blog | Administracão @stop

@section('content')
    <h1>Edit post: {{ $post->title }}</h1>

    {!! Form::model($post, ['route'=>['admin.posts.update', $post->id], 'method'=>'put']) !!}

    @include('admin.posts._form');

    <div class="form-group">
            {!! Form::submit('Save Post', ['class'=>'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
@stop
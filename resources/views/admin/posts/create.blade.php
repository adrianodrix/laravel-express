@extends('template')

@section('title')Blog | Administracão @stop

@section('content')
    <h1>Create new post</h1>

    {!! Form::open(['route'=>'admin.posts.store', 'method'=>'post']) !!}

    @include('admin.posts._form');

    <div class="form-group">
            {!! Form::submit('Create Post', ['class'=>'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
@stop
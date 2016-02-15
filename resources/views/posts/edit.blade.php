@extends('layout')

@section('content')
    <h1>Edit: {{ $post->title }}</h1>

    <hr/>

    @include('errors.form_errors')
    
    {!! Form::model($post, ['method' => 'PATCH', 'url' => ['posts', $post->id]]) !!}
    @include('posts.form', ['published_at' => $post->published_at->format('Y-m-d'), 'submitButton' => 'Edit post'])
    {!! Form::close() !!}
@endsection

@extends('layout')

@section('content')
    <h1>記事編集: {{ $post->title }}</h1>

    <hr/>

    @include('errors.form_errors')

    {!! Form::model($post, ['method' => 'PATCH', 'url' => ['posts', $post->id]]) !!}
        @include('posts.form', ['title' => $post->title, 'submitButton' => '編集する'])
    {!! Form::close() !!}
@endsection

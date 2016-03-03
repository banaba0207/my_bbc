@extends('layout')

@section('content')

    <h1>新規記事作成: {{ $posts[0]->title }}</h1>

    <hr/>
    @foreach($posts as $post)
        @include('posts.one_article',['post' => $post])
    @endforeach

    <hr/>

    {!! Form::open(['route' => 'posts.store', 'files' => true]) !!}
    <input type="hidden" name="post_id" value= {{ $posts[0]['post_id'] }} >
    @include('posts.form', ['title' => "Re: ".$posts[0]['title'], 'submitButton' => '投稿する'])
    {!! Form::close() !!}
@endsection

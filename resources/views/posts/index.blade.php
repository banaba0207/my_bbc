@extends('layout')

@section('content')
    <h1>記事一覧</h1>
    <hr/>

    @foreach($posts as $post)
        @include('posts.one_article',['post' => $post])
    @endforeach
@endsection


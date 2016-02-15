@extends('layout')

@section('content')
    <h1>{{ $post->title }}</h1>
    <hr/>

    <post>
        <div class = "body">{{ $post->body }}</div>
    </post>
    {!! link_to(action('PostsController@edit', [$post->id]), '編集', ['class' => 'btn btn-primary']) !!}

    <br/>
    <br/>

    {!! delete_form(['posts', $post->id]) !!}

@endsection

@extends('layout')

@section('content')
    <h1>検索画面</h1>
    <?php
    $maxid = count($posts) - 1;
    ?>

    検索語     : <font size='5' color='ff0000'>{{ $word }}</font>
    <br>
    ヒット件数 : <font size='5' color='ff0000'>{{ $maxid }}</font>
    <hr>

    @foreach ($posts as $post)
        @include('posts.one_article',['post' => $post])
        <hr>
    @endforeach
    
    検索語     : <font size='5' color='ff0000'>{{ $word }}</font>
    <br>
    ヒット件数 : <font size='5' color='ff0000'>{{ $maxid }}</font>
    <hr>
@endsection


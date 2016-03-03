@extends('layout')

@section('content')
    <h1>記事一覧</h1>
    <?php
    if (!empty($_GET['page'])) {
        $page = $_GET['page'];
    }else {
        $page = 0;
    }
    $maxid = count($posts);
    echo $maxid;
    ?>
    <hr/>

    @foreach($posts as $post)
        @include('posts.one_article',['post' => $post])
    @endforeach
@endsection


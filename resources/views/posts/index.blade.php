@extends('layout')

@section('content')
    <h1>記事一覧</h1>
    <?php
    if (!empty($_GET['page'])) {
        $page = $_GET['page'];
    }else {
        $page = 0;
    }
    if (!empty($_GET['show_num'])) {
        $show_num = $_GET['show_num'];
    }else {
        $show_num = 10;
    }
    $maxid = count($posts);
    echo "総スレッド数 : ".$maxid;
    ?>
    @include('posts.my_pagenation', ['page' => $page, 'show_num' => $show_num])
    <hr>

    @for ($i = $show_num * $page; $i < $show_num * ($page + 1); ++$i)
        <?php
            if ($i >= $maxid) break;
            $post = $posts[$i];
        ?>
        @include('posts.one_article',['post' => $post])
    @endfor
    
    <hr>
    @include('posts.my_pagenation', ['page' => $page, 'show_num' => $show_num])
    <br>
@endsection


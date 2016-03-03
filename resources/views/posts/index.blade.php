@extends('layout')

@section('content')
    <h1>記事一覧</h1>
    <?php
    if (!empty($_GET['page'])) {
        $page = $_GET['page'];
    }else {
        $page = 0;
    }
    $show_num = 10;
    $maxid = count($posts) - 1;
    print("posts:{$maxid}<br>");
    for ($i = 0; $i <= ceil($maxid / $show_num) - 1; ++$i) {
        print("<a href='?page=$i'>");
        if ($i != $page){
            print("$i");
        }else{
            print("<font size='5' color='1253A4'><b>$i</b></font>");
        }
        print('</a>　');
    }
    ?>
    <hr/>

    @for ($i = $show_num * $page; $i < $show_num * ($page + 1); ++$i)
        <?php
            if ($i >= $maxid) break;
            $post = $posts[$i];
        ?>
        @include('posts.one_article',['post' => $post])
    @endfor
@endsection


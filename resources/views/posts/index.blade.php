@extends('layout')

@section('content')
    <h1>記事一覧</h1>
    
    <?php
    //ページネーションの実装
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

    $maxid = count($posts) - 1;
    $maxpage = ceil($maxid / $show_num) - 1;
    print("posts:{$maxid}<br>");

    //bootstrapのページネーションの使用準備
    print("<div class='bs-example' data-example-id='simple-pagination'>");
    print("<nav>");
    print("<ul class='pagination'>");

    //左端のヤジルシを page = 0 に対応させる
    print("<li>");
    print("<a href='?page=0&show_num=$show_num' aria-label='Previous'><span aria-hidden='true'>&laquo;</span></a>");
    print("</li>");

    //ページ番号のリンクを生成
    for ($i = 0; $i <= $maxpage; ++$i) {
        if ($i != $page){
            print("<li><a href='?page=$i&show_num=$show_num'>$i");
        }else{ //表示中のページ番号を大きく表示
            print("<li class='active'><a href='?page=$i&show_num=$show_num'>$i");
        }
        print('</a>');
        print("</li>");
    }

    //右端のヤジルシを page = maxpage に対応させる
    print("<li>");
    print("<a href='?page=$maxpage&show_num=$show_num' aria-label='Next'><span aria-hidden='true'>&raquo;</span></a>");
    print("</li>");
    print("</ul>");

    print("</nav></div>");
    //ページネーション終了

    //表示件数用アクションボタン
    print("<!-- Single button -->");
    print("<div class='btn-group'>");
    print("<button type='button' class='btn btn-default dropdown-toggle' data-toggle='dropdown'>");
    print("10 <span class='caret'></span>");
    print("</button>");
    print("<ul class='dropdown-menu' role='menu'>");
    $num_array = [10, 20, 50, 100];
    foreach($num_array as $j) {
        print("<li><a href='?page=0&show_num=$j'>$j</a></li>");
    }
    print("</ul>");
    print("</div>");
    //表示件数用アクションボタン終了

    print("<hr/>");
?>

    @for ($i = $show_num * $page; $i < $show_num * ($page + 1); ++$i)
        <?php
            if ($i >= $maxid) break;
            $post = $posts[$i];
        ?>
        @include('posts.one_article',['post' => $post])
    @endfor
@endsection


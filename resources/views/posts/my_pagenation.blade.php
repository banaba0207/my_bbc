<?php
$maxpage = ceil($maxid / $show_num) - 1;

print("<div align='right'>");
//    print("<table border='5' cellspacing='30' cellpadding='0'>");
    print("<table>");
        print("<tr>");
            print("<td>");
    //表示件数用アクションボタン {{{
print("表示件数: ");
print("<!-- Single button -->");
print("<div class='btn-group'>");
print("<button type='button' class='btn btn-default dropdown-toggle' data-toggle='dropdown'>");
print("$show_num <span class='caret'></span>");
print("</button>");
print("<ul class='dropdown-menu' role='menu'>");
$num_array = [10, 20, 50, 100];
foreach($num_array as $j) {
    print("<li><a href='?page=0&show_num=$j'>$j</a></li>");
}
print("</ul>");
print("</div>");
//表示件数用アクションボタン終了 }}}
            print("</td>");
            print("<td>　　</td>");
            print("<td>");

//ページネーションの実装 {{{
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
//ページネーション終了 }}}

            print("</td>");
print("</tr>");
print("</table>");
print("</div>");

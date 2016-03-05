@extends('layout')

@section('content')
    <h1>カラオケの音合せページ</h1>
<?php
$oniki = ['lowF', 'lowF_s', 'lowG', 'lowG_s',
    'mid1A', 'mid1A_s', 'mid1B', 'mid1C', 'mid1C_s', 'mid1D', 'mid1D_s', 'mid1E', 'mid1F', 'mid1F_s', 'mid1G', 'mid1G_s',
    'mid2A', 'mid2A_s', 'mid2B', 'mid2C', 'mid2C_s', 'mid2D', 'mid2D_s', 'mid2E', 'mid2F', 'mid2F_s', 'mid2G', 'mid2G_s',
    'hiA', 'hiA_s', 'hiB', 'hiC', 'hiC_s', 'hiD', 'hiD_s', 'hiE', 'hiF', 'hiF_s', 'hiG', 'hiG_s',
    'hihiA', 'hihiA_s', 'hihiB'];

if (!empty($_GET['origkey']) && array_search($_GET['origkey'], $oniki) === FALSE) {
    $origkey = $_GET['origkey'];
}else {
    $origkey = 'mid2G_s';
}
if (!empty($_GET['adkey']) && !array_search($_GET['adkey'], $oniki) === FALSE) {
    $adkey = $_GET['adkey'];
}else {
    $adkey = 'hiA';
}


//フォーム作成
print("<table>");
print("<tr><td>");

//origkeyフォーム {{{
print("あなたの最高音");
print("<form method='get' action=''>");
print("<p>");
print("<select name='origkey'>");
foreach ($oniki as $oto) {
    if ($oto === $origkey)
        print("<option value='$oto' selected>$oto</option>");
    else 
        print("<option value='$oto'>$oto</option>");
}
print("</select>");
print("</p>");
//}}}

print("</td><td>　　</td><td>");

//adkeyフォーム {{{
print("歌いたい曲の最高音");
print("<p>");
print("<select name='adkey'>");
foreach ($oniki as $oto) {
    if ($oto === $adkey)
        print("<option value='$oto' selected>$oto</option>");
    else 
        print("<option value='$oto'>$oto</option>");
}
print("</select>");
print("</p>");
//}}}

print("</td><td>　　</td><td>");

//送信フォーム {{{
print("<p><input type='submit' value='調節する' class='btn btn-primary'></p>");
print("</form>");
//}}}

print("</td><td>　　</td><td>");
print("</td><td>音域の参考になるサイト : <a href='http://www.music-key.com/' target='_blank'>音域.com</a></td><td>");

print("</td></tr></table>");

print("<hr>");
$fullpath = "python karaokeForLaravel.py $origkey $adkey";
exec($fullpath, $outpara);

$type = $outpara[2];
$diff_key = $outpara[3];
print("あなたの最高音　　　: <font size='5' color='ff0000'>$origkey</font> <br>");
print("歌いたい曲の最高音　: <font size='5' color='ff0000'>$adkey</font> <br>");

print("<font size='6'>");
print("原曲キーから <font size='7' color='ff0000'>$diff_key</font> 調節");

switch($type){
case 'Original':
    print("すると、調度良く歌えます.");
    break;
case '1OctaveUp':
    print("して<font size='7' color='ff0000'>1オクターブ上</font>で歌えば、調度良く歌えます.");
    break;
case '1OctaveDown':
    print("して<font size='7' color='ff0000'>1オクターブ下</font>で歌えば、調度良く歌えます.");
    break;
}
print("</font>");
?>
@endsection


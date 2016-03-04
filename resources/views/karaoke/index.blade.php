@extends('layout')

@section('content')
    <h1>カラオケの音合せページ</h1>

<?php
    if (!empty($_GET['orig'])) {
        $orig = $_GET['orig'];
    }else {
        $orig = 'mid2G_s';
    }
    if (!empty($_GET['adkey'])) {
        $adkey = $_GET['adkey'];
    }else {
        $adkey = 'hiA';
    }
    print("<hr>");
    $fullpath = "python karaokeForLaravel.py $orig $adkey";
    exec($fullpath, $outpara);

    $origkey = $outpara[0];
    $adkey = $outpara[1];
    $type = $outpara[2];
    $diff_key = $outpara[3];
    print("あなたの最高音　　　: <font size='5' color='ff0000'>$origkey</font> <br>");
    print("歌いたい曲の最高音　: <font size='5' color='ff0000'>$adkey</font> <br>");
    print("原曲キーから <font size='5' color='ff0000'>$diff_key</font> 調節");

    switch($type){
        case 'Original':
            print("すると、調度良く歌えます.");
            break;
        case '1OctaveUp':
            print("して<font size='5' color='ff0000'>1オクターブ上</font>で歌えば、調度良く歌えます.");
            break;
        case '1OctaveDown':
            print("して<font size='5' color='ff0000'>1オクターブ下</font>で歌えば、調度良く歌えます.");
            break;
    }
?>
@endsection


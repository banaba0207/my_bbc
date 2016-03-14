@extends('layout')

@section('content')
    <h1>検索画面</h1>
    <?php
    $maxid = count($posts);
    ?>
    <br>
    <p><ul type="disc">
    <li>タイトル、投稿者、本文から、少なくともキーワードを1回含む記事を検索します。</li>
    </ul></p>

    {{-- 検索フォーム --}}
    <hr>
    <form action="{{route('posts.search') }}">
    <div class="input-group">
    <input type="text" class="form-control" name="word" placeholder="キーワード">
    <span class="input-group-btn">
        <button class="btn btn-default" type="submit">
        <i class='glyphicon glyphicon-search'></i>
        </button>
    </span>
    </div>
    </form>

    @if ($word != 'not_search')

    <br>
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
    @endif
    
    <hr>
@endsection


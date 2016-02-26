@extends('layout')

@section('content')
    <h1>記事一覧</h1>
    <hr/>


    @foreach($posts as $post)
        <post>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2 class="panel-title">
                        【{{ $post->post_id }}】　　
                        <a href="{{url('posts', $post->post_id) }}">
                            <font size="5" color="ff0000"><b>{{ $post->title }}</b></font>
                        </a>
                        　　投稿者名: {{ $post->contributor }}
                        　　投稿日時: {{ $post->created_at }}
                    </h2>
                </div>
                <div class='panel-boby'>
                    <div style="padding:10px">
                        {{ $post->body }}
                    </div>
                </div>
                {{-- Image view start --}}
                @if (!empty($post->fig_orig))
                    <?php
                    $image_base64 = base64_encode($post->fig_orig);
                    ?>
                    <img src='data:img/png;base64,{{$image_base64}}'>
                @endif
                {{-- Image view end --}}
            </div>
        </post>
    @endforeach
@endsection


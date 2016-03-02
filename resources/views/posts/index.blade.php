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
                        【{{ $post->res_id }}】　
                        <a href="posts/{{ $post->post_id }}">
                            <font size="5" color="ff0000"><b>{{ $post->title }}</b></font>
                        </a>
                        <br><br>
                        投稿者名: {{ $post->contributor }}　
                        投稿日時: {{ $post->created_at }}
                        @if ($post->res_id == 0)
                        　
                        <a href="posts/{{ $post->post_id }}">
                            <font size="3" color="1253A4"><b>記事詳細</b></font>
                        </a>
                        @endif
                        <a href="posts/{{ $post->post_id }}/edit">
                            <font size="3" color="1253A4"><b>編集</b></font>
                        </a>
                    </h2>
                </div>
                <div class='panel-boby'>
                    <div style="padding:10px">
                        {{ $post->body }}
                    </div>
                </div>
                {{-- Image view start --}}
                @if (!empty($post->fig_name))
                    <div style="padding:10px">
                        <a href="media/{{ $post->fig_name}}"
                            data-lightbox="image-1" />
                        <img src="media/mini/{{ $post->fig_name}}"
                            alt="{{ $post->fig_name }}" height="400" width="400"/>
                        </a>
                    </div>
                @endif
                {{-- Image view end --}}
                <div align="right">
                <div class="btn-group">
                {!! delete_form(['posts', $post->id]) !!}
                </div>
                </div>
            </div>
        </post>
    @endforeach
@endsection


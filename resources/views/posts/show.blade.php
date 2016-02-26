@extends('layout')

@section('content')

    @foreach($posts as $post)
        <post>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2 class="panel-title">
                        【{{ $post->id }}】　　
                        <a href="{{url('posts', $post->id) }}">
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
                    <div style="padding:10px">
                    <img src='data:img/png;base64,{{$image_base64}}'>
                    </div>
                @endif
                {{-- Image view end --}}
                {!! link_to(action('PostsController@edit', [$post->id]), '編集', ['class' => 'btn btn-primary']) !!}
                <br/>
                {!! delete_form(['posts', $post->id]) !!}
            </div>
        </post>
    @endforeach

    <hr/>

@endsection

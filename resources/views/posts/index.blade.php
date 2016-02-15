@extends('layout')

@section('content')
    <h1>posts</h1>
    <hr/>

    {!! link_to('posts/create', '新規作成', ['class' => 'btn btn-primary']) !!}
   
    <br><br>

    @foreach($posts as $post)
        <post>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2 class="panel-title">
                        <a href="{{url('posts', $post->id) }}">
                            {{ $post->title }}
                        </a>
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


@extends('layout')

@section('content')
    <h1>posts</h1>
    <hr/>

    {!! link_to('posts/create', '新規作成', ['class' => 'btn btn-primary']) !!}

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
            </div>
        </post>
    @endforeach
@endsection


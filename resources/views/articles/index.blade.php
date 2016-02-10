@extends('layout')

@section('content')
    <h1>Articles</h1>
    <hr/>

    {!! link_to('articles/create', '新規作成', ['class' => 'btn btn-primary']) !!}

    @foreach($articles as $article)
        <article>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2 class="panel-title">
                        <a href="{{url('articles', $article->id) }}">
                            {{ $article->title }}
                        </a>
                    </h2>
                </div>
                <div class='panel-boby'>
                    {{ $article->body }}
                </div>
            </div>
        </article>
    @endforeach
@endsection


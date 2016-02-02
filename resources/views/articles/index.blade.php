@extends('layout')

@section('content')
    <h1>Articles</h1>
    <hr/>

    {!! link_to('articles/create', '$B?75,:n@.(B', ['class' => 'btn btn-primary']) !!}

    @foreach($articles as $article)
        <article>
            <h2>
                <a href="{{url('articles', $article->id) }}">
                    {{ $article->title }}
                </a>
            </h2>
            <div class='boby'>
                {{ $article->body }}
            </div>
        </article>
    @endforeach
@endsection


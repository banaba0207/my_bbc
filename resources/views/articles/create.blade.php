@extends('layout')

@section('content')
    <h1>Write a New Article</h1>
    <hr/>
    
    @if (isset($errors) && count($errors) > 0)
        <div class="alert alert-danger">
                <ul>
                            @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    {!! Form::open(['url' => 'articles']) !!}
    @include('articles.form', ['published_at' => date('Y-m-d'), 'submitButton' => 'Add Article'])
    {!! Form::close() !!}
@endsection

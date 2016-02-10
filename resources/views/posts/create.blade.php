@extends('layout')

@section('content')
    <h1>Write a New post</h1>
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

    {!! Form::open(['route' => 'posts.store']) !!}
    @include('posts.form', ['published_at' => date('Y-m-d'), 'submitButton' => 'Add post'])
    {!! Form::close() !!}
@endsection

@extends('layout')

@section('content')
<?PHP
header("Content-type: text/html; charset=UTF-8");
?>
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

    {!! Form::open(['route' => 'posts.store', 'files' => true]) !!}
    @include('posts.form', ['published_at' => date('Y-m-d-H-i-s'), 'submitButton' => 'Add post'])
    {!! Form::close() !!}
@endsection

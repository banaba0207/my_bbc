@extends('layout')

@section('content')
<?PHP
header("Content-type: text/html; charset=UTF-8");
?>
    <h1>新規記事作成</h1>
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
    <input type="hidden" name="post_id" value="-1" >
    @include('posts.form', ['title' => null, 'submitButton' => '投稿する'])
    {!! Form::close() !!}
@endsection

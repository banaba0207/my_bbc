<div class="form-group">
    {!! Form::label('title', 'タイトル:') !!}
    {!! Form::text('title', $title, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('contributor', '投稿者名:') !!}
    {!! Form::text('contributor', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('body', '本文:') !!}
    {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('fig_orig', '画像ファイル:') !!}
    {!! Form::file('data') !!}
</div>

<br>

<div class="form-group">
    {!! Form::submit($submitButton, ['class' => 'btn btn-primary form-control']) !!}
</div>

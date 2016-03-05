<div class="form-group">
    <div class="row">
        <div class="col-xs-4">
    {!! Form::label('title', 'タイトル:') !!}
    {!! Form::text('title', $title, ['class' => 'form-control', 'size' => '10']) !!}
        </div>
    </div>
</div>
<div class="form-group">
    <div class="row">
        <div class="col-xs-4">
    {!! Form::label('contributor', '投稿者名:') !!}
    {!! Form::text('contributor', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>
<div class="form-group">
    {!! Form::label('body', '本文:') !!}
    {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('fig_orig', '画像ファイル:') !!}
    {!! Form::file('data') !!}
</div>

<div class="form-group">
    {!! Form::submit($submitButton, ['class' => 'btn btn-primary form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', $title, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('contributor', 'Contributor:') !!}
    {!! Form::text('contributor', "No name", ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('body', 'Body:') !!}
    {!! Form::textarea('body', "", ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('fig_orig', 'Figure:') !!}
    {!! Form::file('data') !!}
</div>

<br>

<div class="form-group">
    {!! Form::submit($submitButton, ['class' => 'btn btn-primary form-control']) !!}
</div>

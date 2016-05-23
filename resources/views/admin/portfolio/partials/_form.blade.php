<!-- Name Form Input -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Description Form Input -->
<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description',  null, ['class' => 'form-control']) !!}
</div>

<!-- Url Form Input -->
<div class="form-group">
    {!! Form::label('url', 'Url:') !!}
    {!! Form::text('url', null, ['class' => 'form-control']) !!}
</div>

<!-- Github Url Form Input -->
<div class="form-group">
    {!! Form::label('github_url', 'Github Url:') !!}
    {!! Form::text('github_url', null, ['class' => 'form-control']) !!}
</div>

<!-- Screenshot Form Input -->
<div class="form-group">
    {!! Form::label('screenshot', 'Screenshot:') !!}
    {!! Form::file('screenshot', ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
</div>
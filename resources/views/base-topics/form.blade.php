<div class="form-group">
    {!! Form::label('name', 'Name') !!}
    {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Enter base topic name (lowercase, used in URL)']) !!}
</div>

<div class="form-group">
    {!! Form::label('title', 'Title') !!}
    {!! Form::text('title', null, ['class'=>'form-control', 'placeholder'=>'Enter base topic title']) !!}
</div>

<div class="form-group">
    {!! Form::label('description', 'Description') !!}
    {!! Form::textarea('description', null, ['class'=>'form-control', 'placeholder'=>'Enter base topic description', 'rows' => 2]) !!}
</div>

<p>A thumbnail will be here</p>

<div class="form-group">
    <label class="radio-inline">{!! Form::radio('is_published', true, null) !!} published</label>
    <label class="radio-inline">{!! Form::radio('is_published', false, null) !!} unpublished</label>
</div>

{!! Form::submit($submitButtonText, ['class'=>'btn btn-primary btn-block']) !!}

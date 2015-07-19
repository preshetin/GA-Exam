<div class="form-group">
    @foreach(App\BaseTopic::all() as $baseTopic)
        <div class="radio">
            <label>
                {!! Form::radio('base_topic_id', $baseTopic->id, null, ['id'=>$baseTopic->id]) !!}
                {{ $baseTopic->title }}
            </label>
        </div>
    @endforeach
</div>

<div class="form-group">
    {!! Form::label('name', 'Name') !!}
    {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Enter topic name (lowercase, used in URL)']) !!}
</div>

<div class="form-group">
    {!! Form::label('title', 'Title') !!}
    {!! Form::text('title', null, ['class'=>'form-control', 'placeholder'=>'Enter topic title']) !!}
</div>

<div class="form-group">
    {!! Form::label('description', 'Description') !!}
    {!! Form::textarea('description', null, ['class'=>'form-control', 'placeholder'=>'Enter question description', 'rows' => 2]) !!}
</div>

{!! Form::submit($submitButtonText, ['class'=>'btn btn-primary btn-block']) !!}

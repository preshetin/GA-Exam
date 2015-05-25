@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1>New Topic</h1>

                @include('errors.list')
                {!! Form::open(['url' => action("TopicsController@store")]) !!}

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

                {!! Form::submit('Create Topic', ['class'=>'btn btn-primary btn-block']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop
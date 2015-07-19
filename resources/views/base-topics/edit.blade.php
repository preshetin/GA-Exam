@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1>Edit: {{ $baseTopic->title }}</h1>

                @include('errors.list')
                {!! Form::model($baseTopic, ['method' => 'PATCH', 'url' => [ action("BaseTopicsController@update", $baseTopic->id) ]]) !!}
                @include('base-topics.form', ['submitButtonText' => 'Update Base Topic'])
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop
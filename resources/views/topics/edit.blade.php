@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1>Edit: {{ $topic->title }}</h1>

                @include('errors.list')
                {!! Form::model($topic, ['method' => 'PATCH', 'url' => [ action("TopicsController@update", $topic->id) ]]) !!}
                    @include('topics.form', ['submitButtonText' => 'Update Topic'])
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop
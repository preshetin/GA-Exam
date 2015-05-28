@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1>New Topic</h1>

                @include('errors.list')
                {!! Form::open(['url' => action("TopicsController@store")]) !!}
                    @include('topics.form', ['submitButtonText' => 'Create Topic'])
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop
@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1>New Base Topic</h1>

                @include('errors.list')
                {!! Form::open(['url' => action("BaseTopicsController@store")]) !!}
                @include('base-topics.form', ['submitButtonText' => 'Create Base Topic'])
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop
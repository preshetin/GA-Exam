@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1>Question # {{ $question->id }}</h1>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a href="{{ action('QuestionsController@index') }}" class="btn btn-default"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span> Back</a>
                        {{--<a href="{{ action('QuestionsController@edit', $question->id) }}" class="btn btn-default"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Edit</a>--}}

                        {!! Form::open(['url' => action('QuestionsController@destroy', $question->id), 'method' => 'delete']) !!}
                            {!! Form::submit('Delete', ['class'=>'btn btn-danger']) !!}
                        {!! Form::close() !!}

                    </div>
                    <div class="panel-body">
                        @if ($question->topic)
                            <div class="pull-right"><span class="glyphicon glyphicon-tag" aria-hidden="true"></span> {{ $question->topic->title }}</div>
                        @endif
                        <p class="lead">{{ $question->description }}</p>
                        <ul>
                            @foreach($question->answers as $answer)
                                <div class="radio">
                                    <li>
                                        @if($answer->is_correct)
                                            <span class="glyphicon glyphicon-ok"></span>
                                        @endif
                                        {{ $answer->description }}
                                    </li>
                                </div>
                            @endforeach
                        </ul>
                    </div>
                </div>
                </div>
        </div>
    </div>
@stop
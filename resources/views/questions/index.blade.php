@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">

                @if(Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ Session::get('success') }}
                    </div>
                @endif

                <h1>Questions <a href="{{ action('QuestionsController@create') }}" class="btn btn-lg btn-default"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> New</a>
                </h1>
                @foreach($questions as $question)
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a href="{{ action('QuestionsController@show', $question->id) }}" class="btn btn-default"> Show</a>
                            <small>id: {{ $question->id }}, created {{ $question->created_at->diffForHumans() }} </small>
                            {{--<a href="{{ action('QuestionsController@edit', $question->id) }}" class="btn btn-default"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Edit</a>--}}
                        </div>
                        <div class="panel-body">
                            @if ($question->topic)
                                <div class="pull-right"><span class="glyphicon glyphicon-tag" aria-hidden="true"></span> {{ $question->topic->title }}</div>
                            @endif
                            <p class="lead">{!! $question->renderDescription() !!}</p>
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
                @endforeach
            </div>
        </div>
    </div>
@stop
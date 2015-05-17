@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>{{ $topic->title }} Training</h1>

            <div class="progress">
                <div class="progress-bar progress-bar-primary" style="width: {{ ( $questionNumber * 100 ) / count($topic->questions) }}%">

                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">
                    Question #{{ $questionNumber }} <div class="pull-right">{{ $questionNumber }} of {{ count($topic->questions) }}</div>
                </div>
                <div class="panel-body">
                    <p class="lead">{{ $question->description }}<p>

                    {!! Form::open(['class'=>'ajax']) !!}
                    {!! Form::hidden('questionId', $question->id) !!}

                    @foreach($answers as $answer)
                        <div class="radio">
                            <label>
                                {!! Form::radio('chosenAnswerId', $answer->id, null, ['id' => $answer->id, 'class' => 'required']) !!}
                                {{ $answer->description }}
                            </label>
                        </div>
                    @endforeach

                    {!! Form::submit('Reply', ['class'=>'btn btn-default']) !!}
                    <a class="next-question-button btn {{ $next['class'] }}" href="{{ $next['url'] }}" style="display: none;" role="button">{{ $next['text'] }}</a>
                    <p id="validation-error-container"></p>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@stop
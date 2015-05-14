@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Exam</h1>

            <div class="panel panel-default">
                <div class="panel-heading">Question #{{ $question->id }}</div>

                <div class="panel-body">
                    <p class="lead">{{ $question->description }}<p>

                    {!! Form::open(['class'=>'ajax']) !!}
                    @foreach($answers as $answer)
                        <div class="radio">
                            <label>
                                {!! Form::radio('chosenAnswerId', $answer->id, null, ['id' => $answer->id, 'class' => 'required']) !!}
                                {{ $answer->description }}
                            </label>
                        </div>
                    @endforeach

                    {!! Form::submit('Reply', ['class'=>'btn btn-default']) !!}
                    <a class="btn btn-default next-question-button" href="{{ $nextQuestionLink }}" style="display: none;" role="button">Next</a>
                    <p id="validation-error-container"></p>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@stop
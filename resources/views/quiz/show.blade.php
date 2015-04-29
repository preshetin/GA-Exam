@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Question #{{ $question->id }}</div>

                <div class="panel-body">
                    <p class="lead">{{ $question->description }}<p>
                </div>

                <div class="list-group">
                    @foreach($answers as $answer)
                        <a href="#" class="list-group-item"><span class="glyphicon glyphicon-ok-sign" style="color:green;" aria-hidden="true"></span> {{ $answer->description }}</a>
                    @endforeach

                </div>

            </div>
            <button class="btn btn-primary form-control" type="submit">Answer</button>
        </div>
    </div>
</div>

    {!! Form::open(['class'=>'ajax']) !!}
    <div class="form-group">
        @foreach($answers as $answer)
            <div class="radio">
                <label>
                    {!! Form::radio('chosenAnswerId', $answer->id, null, ['id'=>$answer->id]) !!}
                    {{ $answer->description }}
                </label>
            </div>
        @endforeach

        {!! Form::submit('Reply', ['class'=>'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
    <div class="reply_result"></div>

@stop
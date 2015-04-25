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

                <ul class="list-group">
                    @foreach($answers as $answer)
                        <li class="list-group-item">{{ $answer->description }}</li>
                    @endforeach
                </ul>
            </div>
            <button class="btn btn-primary form-control" type="submit">Answer</button>
        </div>
    </div>
</div>
@stop
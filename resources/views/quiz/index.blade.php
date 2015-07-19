@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1>Тренировка</h1>
                @foreach($baseTopics as $baseTopic)
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <h2><a href="/train/{{ $baseTopic->name }}">{{ $baseTopic->title }}</a></h2>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@stop
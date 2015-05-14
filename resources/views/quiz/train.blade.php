@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1>Train</h1>

                <div class="list-group">
                    @foreach($topics as $topic)
                        <a href="#" class="list-group-item">
                            <span class="badge">5</span>
                            <h4 class="list-group-item-heading">{{ $topic->title }}</h4>
                            <p class="list-group-item-text">{{ $topic->description }}</p>
                        </a>
                    @endforeach
                </div>

            </div>
        </div>
    </div>
@stop

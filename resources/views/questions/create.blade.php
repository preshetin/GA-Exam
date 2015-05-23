@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1>New Question</h1>

                @include('errors.list')
                
                {!! Form::open(['url' => action("QuestionsController@store")]) !!}

                <div class="form-group">
                {!! Form::label('description', 'Description') !!}
                {!! Form::textarea('description', null, ['class'=>'form-control', 'placeholder'=>'Enter question description']) !!}
                </div>

                {{--<div class="form-group">--}}
                    {{--{!! Form::label('answer_1', 'Answer 1') !!}--}}
                    {{--{!! Form::text('answer_1', null, ['class'=>'form-control', 'placeholder'=>'Enter answer variant']) !!}--}}
                    {{--<div class="checkbox">--}}
                        {{--<label>--}}
                        {{--{!! Form::checkbox('is_correct_1', false) !!} is correct--}}
                        {{--</label>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="form-group">--}}
                    {{--{!! Form::label('answer_2', 'Answer 2') !!}--}}
                    {{--{!! Form::text('answer_2', null, ['class'=>'form-control', 'placeholder'=>'Enter answer variant']) !!}--}}
                    {{--<div class="checkbox">--}}
                        {{--<label>--}}
                            {{--{!! Form::checkbox('is_correct_2', false) !!} is correct--}}
                        {{--</label>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="form-group">--}}
                    {{--<a href="" class="btn btn-default" id="addAnswerVariant">Add answer variant</a>--}}
                {{--</div>--}}

                <div class="form-group">
                    @foreach(App\Topic::all() as $topic)
                    <div class="radio-inline">
                        <label>
                            {!! Form::radio('topic_id', $topic->id, null, ['id'=>$topic->id]) !!}
                            {{ $topic->title }}
                        </label>
                    </div>
                     @endforeach
                </div>

                {!! Form::submit('Create Question', ['class'=>'btn btn-primary btn-block']) !!}

                {!! Form::close() !!}

            </div>
        </div>
    </div>
@stop
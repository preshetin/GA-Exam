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

                <h1>Topics <a href="{{ action('TopicsController@create') }}" class="btn btn-lg btn-default"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> New</a></h1>
                <table class="table table-bordered">
                    @foreach($topics as $topic)
                        <div>
                            <tr>
                                <td>
                                    <h3 class="list-group-item-heading">{{ $topic->title }}</h3>
                                    <p class="list-group-item-text">{{ $topic->description }}</p>
                                </td>
                                <td>
                                    <a href="{{ url('admin/topics/' . $topic->id . '/edit' ) }}" class="btn btn-default"><span class="glyphicon glyphicon-edit" aria-hidden="true">Edit</span></a>
                                    {!! Form::open(['url' => action('TopicsController@destroy', $topic->id), 'method' => 'delete']) !!}
                                    {!! Form::submit('Delete', ['class'=>'btn btn-danger pull-right']) !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        </div>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@stop

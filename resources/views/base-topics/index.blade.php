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

                <h1>Base Topics <a href="{{ action('BaseTopicsController@create') }}" class="btn btn-lg btn-default"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> New</a></h1>
                <table class="table table-bordered">
                    @foreach($baseTopics as $baseTopic)
                        <div>
                            <tr>
                                <td>
                                    <h3 class="list-group-item-heading">{{ $baseTopic->title }}</h3>
                                    <p class="list-group-item-text">{{ $baseTopic->description }}</p>
                                </td>
                                <td>
                                    <a href="{{ url('admin/base-topics/' . $baseTopic->id . '/edit' ) }}" class="btn btn-default"><span class="glyphicon glyphicon-edit" aria-hidden="true">Edit</span></a>
                                    {!! Form::open(['url' => action('BaseTopicsController@destroy', $baseTopic->id), 'method' => 'delete']) !!}
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

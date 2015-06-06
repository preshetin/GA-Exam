@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
            <h1>Hello, {{ $user->name }}</h1>
			<div class="panel panel-default">
				<div class="panel-heading">Replies report</div>
				<div class="panel-body">
                    @if(count($user->replies))
                        @foreach($topics as $topic)
                            @if (count($topic->questions))
                                <h3><a href="{{ url('train/'. $topic->name . '/1') }}">{{ $topic->title }}</a></h3>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-success" style="width: {{ $user->percentCorrectRepliesByTopic($topic) }}%">
                                        {{ $user->percentCorrectRepliesByTopic($topic) }}%
                                    </div>
                                    <div class="progress-bar progress-bar-danger" style="width: {{ $user->percentIncorrectRepliesByTopic($topic) }}%">
                                        {{ $user->percentIncorrectRepliesByTopic($topic) }}%
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    @else
                        <div style="text-align: center; color: grey;">
                            <h3>No replies stats.</h3>
                            <p class="lead" >Try to challenge <a href="/train/math/1">Mathematics</a>, <a href="/train/music/1">Music&Artists</a> or <a href="/train/startups/1">Startups</a> topics.</p>
                        </div>
                    @endif

				</div>
			</div>
		</div>
	</div>
</div>
@endsection

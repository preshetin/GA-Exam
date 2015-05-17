@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
            <h1>Dashboard</h1>
			<div class="panel panel-default">
				<div class="panel-heading">Replies report</div>
				<div class="panel-body">
                    @foreach($topics as $topic)
                        <h4>{{ $topic->title }}</h4>
                        <div class="progress">
                            <div class="progress-bar progress-bar-success" style="width: {{ $topic->userCorrectRepliesPercentage() }}%">
                                {{ $topic->userCorrectRepliesPercentage() }}%
                            </div>
                            <div class="progress-bar progress-bar-danger" style="width: {{ $topic->userIncorrectRepliesPercentage() }}%">
                                {{ $topic->userIncorrectRepliesPercentage() }}%
                            </div>
                        </div>
                        {{--<p>Total questions: {{ count($topic->questions) }}. Total replies: {{ count($topic->userReplies) }}. Replied correct: {{ count($topic->userCorrectReplies) }}. Replied incorrect: {{ count($topic->userIncorrectReplies) }}</p>--}}
                    @endforeach
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

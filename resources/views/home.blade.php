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
                            <div class="progress-bar progress-bar-success" style="width: {{ ( $topic->correct_replies * 100) / $topic->total_questions }}%">
                                {{ round(( $topic->correct_replies * 100) / $topic->total_questions) }}%
                            </div>
                            <div class="progress-bar progress-bar-danger" style="width: {{ ( $topic->incorrect_replies * 100) / $topic->total_questions }}%">
                                {{ round(( $topic->incorrect_replies * 100) / $topic->total_questions) }}%
                            </div>
                        </div>
                        <p>Total questions: {{ $topic->total_questions }} Replied correct: {{ $topic->correct_replies }} Replied incorrect: {{ $topic->incorrect_replies }}</p>
                    @endforeach
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

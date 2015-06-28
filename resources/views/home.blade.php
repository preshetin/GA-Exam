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
                            <h3><a href="{{ url('train/'. $topic->name . '/1') }}">{{ $topic->title }}</a></h3>
                            <div class="progress">
                                <div class="progress-bar progress-bar-success" style="width: {{ $user->percentCorrectRepliesByTopic($topic) }}%">
                                    {{ $user->percentCorrectRepliesByTopic($topic) }}%
                                </div>
                                <div class="progress-bar progress-bar-danger" style="width: {{ $user->percentIncorrectRepliesByTopic($topic) }}%">
                                    {{ $user->percentIncorrectRepliesByTopic($topic) }}%
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div style="text-align: center; color: grey;">
                            <h3>У вас нет ответов на вопросы</h3>
                            <p class="lead" >Попробуйте пройти, например, тест по <a href="/train/campaigns/1">Рекламным кампаниям</a>.</p>
                        </div>
                    @endif

				</div>
			</div>
		</div>
	</div>
</div>
@endsection

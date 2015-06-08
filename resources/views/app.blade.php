<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Google Analytics Exam</title>

	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/bootstrap-social.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

    <!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="{{ url('/') }}"><i class="fa fa-graduation-cap"></i> GA Exam</a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="{{ url('home') }}"><i class="fa fa-bar-chart"></i> Результаты</a></li>
                    <li><a href="{{ url('train') }}"><i class="fa fa-bicycle"></i> Тренировка</a></li>
                @if(\Auth::user() && \Auth::user()->isAdmin())
                        <li class="dropdown">
                            {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Manage <span class="caret"></span></a>--}}
                            {{--<ul class="dropdown-menu" role="menu">--}}
                                <li><a href="{{ url('questions') }}"><span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Questions</a></li>
                                <li><a href="{{ url('topics') }}"><span class="glyphicon glyphicon-tag" aria-hidden="true"></span> Topics</a></li>
                                <li><a href="{{ url('users') }}"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Users</a></li>
                            {{--</ul>--}}
                        </li>

                    @endif
                </ul>

				<ul class="nav navbar-nav navbar-right">
					@if (Auth::guest())
						<li><a href="{{ url('/login') }}">Login</a></li>
					@else
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><img src="{{ Auth::user()->avatar }}" style="width:22px; border: 1px solid #dddddd;"> {{ Auth::user()->anyName() }} <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="{{ url('/logout') }}">Logout</a></li>
							</ul>
						</li>
					@endif
				</ul>
			</div>
		</div>
	</nav>

	@yield('content')

    <div class="mastfoot">
        <div class="inner">
            <p><a href="{{ url('about-gaiq-exam') }}"><i class="fa fa-certificate"></i> Об экзамене GAIQ</a> <a href="{{ url('about') }}"><i class="fa fa-rocket"></i> О проекте</a> <a href="{{ url('contact') }}"><i class="fa fa-envelope-o"></i>  Контакты</a></p>
        </div>
    </div>

	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/jquery.validation/1.13.1/jquery.validate.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script src="/js/main.js"></script>
</body>
</html>

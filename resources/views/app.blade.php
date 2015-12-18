<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Google Analytics Test</title>

	<link href="{{ asset('css/main.css') }}" rel="stylesheet">

    <!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

    <!-- Google Analytics Tracking Code -->
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-63933047-1', 'auto');
        ga('send', 'pageview');

    </script>
    <!-- Google Analytics Tracking Code -->

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
				<a class="navbar-brand" href="{{ url('/') }}"><i class="fa fa-graduation-cap"></i> GA Test</a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="{{ url('home') }}"><i class="fa fa-bar-chart"></i> Результаты</a></li>
                    <li><a href="{{ url('train') }}"><i class="fa fa-bicycle"></i> Тренировка</a></li>
                @if(\Auth::user() && \Auth::user()->isAdmin())
                        <li class="dropdown">
                            {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Manage <span class="caret"></span></a>--}}
                            {{--<ul class="dropdown-menu" role="menu">--}}
                                <li><a href="{{ url('admin/questions') }}"><span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Questions</a></li>
                                <li><a href="{{ url('admin/topics') }}"><span class="glyphicon glyphicon-tag" aria-hidden="true"></span> Topics</a></li>
                                <li><a href="{{ url('admin/base-topics') }}"><span class="glyphicon glyphicon-tag" aria-hidden="true"></span> Base Topics</a></li>
                                <li><a href="{{ url('admin/users') }}"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Users</a></li>
                                <li><a href="{{ url('admin/email-list') }}"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> Email list</a></li>
                            {{--</ul>--}}
                        </li>

                    @endif
                </ul>

				<ul class="nav navbar-nav navbar-right nav-pills">
					@if (Auth::guest())
                        <li>
                            <div class="btn-nav">
                                <a href="/oauth/facebook" class="btn btn-social btn-block btn-sm btn-facebook navbar-btn"><i class="fa fa-facebook"></i>Войти c Facebook</a>
                            </div>
                        </li>
                        <li>
                            <div class="btn-nav">
                                <a href="/oauth/google" class="btn btn-social btn-block btn-sm btn-google navbar-btn"><i class="fa fa-google"></i>Войти c Google</a>
                            </div>
                        </li>
                    @else
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><img src="{{ Auth::user()->avatar }}" style="width:22px; border: 1px solid #dddddd;"> {{ Auth::user()->anyName() }} <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="{{ url('/logout') }}"><i class="fa fa-sign-out"></i> Выйти</a></li>
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

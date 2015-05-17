<html>
	<head>
		<title>Laravel</title>

		<link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>
        <link href="{{ asset('/css/app.css') }}" rel="stylesheet">

		<style>
			body {
				margin: 0;
				padding: 0;
				width: 100%;
				height: 100%;
				color: #B0BEC5;
				display: table;
				font-weight: 100;
				font-family: 'Lato';
			}

			.container {
				text-align: center;
				display: table-cell;
				vertical-align: middle;
			}

			.content {
				text-align: center;
				display: inline-block;
			}

			.title {
				font-size: 96px;
				margin-bottom: 40px;
			}

			.quote {
				font-size: 24px;
                margin-bottom: 30px;
			}
		</style>
	</head>
	<body>
		<div class="container">
			<div class="content">
				<div class="title">Google Analytics Exam</div>
                <p class="quote">Prepare yourself for GA exam by training on quiz questions</p>
                <p><a class="btn btn-primary btn-lg" href="/auth/register" role="button">Get Started</a></p>
			</div>
		</div>
	</body>
</html>

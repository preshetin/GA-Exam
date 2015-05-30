<html>
	<head>
		<title>Laravel</title>

        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- jQuery library (served from Google) -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        <!-- bxSlider Javascript file -->
        <script src="/js/jquery.bxslider.min.js"></script>
        <!-- bxSlider CSS file -->
        <link href="/css/jquery.bxslider.css" rel="stylesheet" />

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
				font-size: 76px;
				margin-bottom: 30px;
			}

			.quote {
				font-size: 24px;
                margin-bottom: 30px;
			}

            .slider_image {
                width:700px;
            }

            .slider {
                width: 700px;
                margin-left: auto;
                margin-right: auto;
                margin-bottom: 15px;

            }

            .bx-wrapper {
                margin: 0 auto 30px;
            }

            .active img {
                border-color: #2e6da4;
            }
		</style>
	</head>
	<body>
		<div class="container">
			<div class="content">
				<div class="title">Google Analytics Exam</div>

                <div class="slider">
                    <ul class="bxslider">
                        <li><img class="slider_image" src="/images/slider_image_1.png" /></li>
                        <li><img class="slider_image" src="/images/slider_image_2.png" /></li>
                        <li><img class="slider_image" src="/images/slider_image_3.png" /></li>
                    </ul>

                    <div id="bx-pager">
                        <a data-slide-index="0" href=""><img src="/images/thumbs/slider_image_1.png" class="img-thumbnail" /></a>
                        <a data-slide-index="1" href=""><img src="/images/thumbs/slider_image_2.png" class="img-thumbnail" /></a>
                        <a data-slide-index="2" href=""><img src="/images/thumbs/slider_image_3.png" class="img-thumbnail" /></a>
                    </div>
                </div>

                <p class="quote">Prepare yourself for GA exam by training on quiz questions</p>
                <p><a class="btn btn-primary btn-lg" href="/train/math/1" role="button">Get Started</a></p>
			</div>
		</div>

    <script>
        $(document).ready(function(){
            $('.bxslider').bxSlider({
                auto: true,
                pagerCustom: '#bx-pager'
            });
        });
    </script>

	</body>
</html>

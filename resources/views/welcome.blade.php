<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Google Analytics Exam</title>

    <!-- jQuery library (served from Google) -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <!-- bxSlider Javascript file -->
    <script src="/js/jquery.bxslider.min.js"></script>
    <!-- bxSlider CSS file -->
    <link href="/css/jquery.bxslider.css" rel="stylesheet" />

    <link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/bootstrap-social.css') }}" rel="stylesheet">

    <!-- Fonts -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


    <style>
        body {
            margin: 0;
            padding: 0;
            color: #B0BEC5;
            font-weight: 100;
            font-family: 'Roboto';
            text-align: center;

        }

        .vertical-center {
            min-height: 100%;
            min-height: 100vh;
            display: flex;
            align-items: center;
        }

        .container {
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
            margin-bottom: 15px;
            margin-top: 15px;
        }

        .title {
            font-size: 26px;
        }

        .quote {
            font-size: 20px;
            margin-bottom: 10px;
            margin-top: 15px;
        }
    </style>

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
<body class="vertical-center">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script src="/js/jquery.bxslider.min.js"></script>
<link href="/css/jquery.bxslider.css" rel="stylesheet" />

    <div class="container">
                <div class="title"><i class="fa fa-graduation-cap" style="font-size:140%;"></i><br />Google Analytics Test</div>
                <p class="quote">Проверьте свои знания по GA, пройдя тестирование по разным темам</p>

                <div class="slider">
                    <ul class="bxslider">
                        <li><img class="slider_image" src="/images/slider_image_1.png" /></li>
                        <li><img class="slider_image" src="/images/slider_image_2.png" /></li>
                        <li><img class="slider_image" src="/images/slider_image_3.png" /></li>
                    </ul>
                </div>

                <a href="oauth/facebook" class="btn btn-block btn-social btn-lg btn-facebook"><i class="fa fa-facebook"></i>Войти через Facebook</a>
                <a href="oauth/google" class="btn btn-block btn-social btn-lg btn-google"><i class="fa fa-google"></i>Войти через Google</a>
    </div>
    <script>
        $(document).ready(function(){
            $('.bxslider').bxSlider({
                auto: true,
            });
        });
    </script>
</body>
</html>

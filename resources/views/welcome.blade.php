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
        }

        .title {
            font-size: 35px;
        }

        .quote {
            font-size: 20px;
            margin-bottom: 10px;
        }
    </style>

</head>
<body class="vertical-center">

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script src="/js/jquery.bxslider.min.js"></script>
<link href="/css/jquery.bxslider.css" rel="stylesheet" />

    <div class="container">
                <div class="title">Google Analytics Exam</div>
                <p class="quote">Prepare yourself for GA exam by training on quiz questions</p>

                <div class="slider">
                    <ul class="bxslider">
                        <li><img class="slider_image" src="/images/slider_image_1.png" /></li>
                        <li><img class="slider_image" src="/images/slider_image_2.png" /></li>
                        <li><img class="slider_image" src="/images/slider_image_3.png" /></li>
                    </ul>
                </div>

                <a href="oauth/facebook" class="btn btn-lg btn-primary btn-block">Log in with Facebook</a>
                <a href="oauth/google" class="btn btn-lg btn-danger btn-block">Log in with Google</a>
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

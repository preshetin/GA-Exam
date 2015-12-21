<!DOCTYPE html>
<html lang="en" prefix="og: http://ogp.me/ns#>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GA Test - тесты по Google Analytics</title>

    <meta property="og:title" content="Подготовка к экзамену по Google Analytics" />
    <meta property="og:site_name" content="GA Test"/>
    <meta property="og:url" content="http://www.gatest.ru/" />
    <meta property="og:image" content="{{ env('FACEBOOK_IMAGE_URL', '') }}" />
    <meta property="fb:app_id" content="389709951229208" />
    <meta property="og:description" content="GA Test помогает подготовиться к официальному экзамену по Google Analytics (GAIQ). Проверьте свои знания по GA, пройдя тестирование по разным темам." />

    <link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">

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
            font-weight: 100;

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
            text-align: center;
        }

        .quote {
            font-size: 20px;
            margin-bottom: 10px;
            margin-top: 15px;
            text-align: center;
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
<body class="vertical-center welcome-page">

<!-- Facebook Like button start -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/ru_RU/sdk.js#xfbml=1&version=v2.3&appId=389709951229208";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
<!-- Facebook Like button end -->

<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

    <div class="container">
        <div class="title"><i class="fa fa-graduation-cap" style="font-size:140%;"></i><br />Google Analytics Test</div>
        <p class="quote">Проверьте свои знания по GA, пройдя тестирование по разным темам</p>

        <div class="list-group">
            @foreach($topics as $topic)
                <a href="{{ url('train/'. $baseTopic->name . '/' . $topic->name . '/1') }}" class="list-group-item">
                    <span class="badge">{{ count($topic->questions) }}</span>
                    <h3 class="list-group-item-heading">{{ $topic->title }}</h3>
                    <p class="list-group-item-text">{{ $topic->description }}</p>
                </a>
            @endforeach
        </div>

        <div class="mastfoot">
            <div class="inner">
                <p><a href="{{ url('about-gaiq-exam') }}"><i class="fa fa-certificate"></i> Об экзамене GAIQ</a> <a href="{{ url('about') }}"><i class="fa fa-rocket"></i> О проекте</a> <a href="{{ url('contact') }}"><i class="fa fa-envelope-o"></i>  Контакты</a></p>

                <div class="fb-like" data-href="http://www.gatest.ru/" data-width="270" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>

            </div>
        </div>
    </div>

</body>
</html>

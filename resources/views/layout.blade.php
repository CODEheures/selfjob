<!DOCTYPE html>
<html lang="fr" class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="">
    <meta name="author" content="CODEheures">
    <meta name="robots" content="all,follow">
    <meta property="og:site_name" content="{{ env('APP_NAME') }}"/>
    <meta property="og:title" content="Le Recrutement sans CV"/>
    <meta property="og:description" content="{{ env('APP_NAME') }} le recrutement personnalisé sans CV. Une même chance pour tous et la fin du tri de CV. #savoirFaire #savoirEtre"/>
    <meta property="og:image" content="{{ asset('/img/site_thumbnail.jpg') }}">
    <meta property="og:url" content="{{ route('home') }}">
    <meta property="og:type" content="website"/>

    <!-- PACE -->
    <script src="{{ asset('/js/pace.min.js') }}"></script>
    <link href="{{ asset('/css/pace-theme2.css') }}" rel="stylesheet">
    <!-- Bootstrap and Font Awesome css-->
    <link rel="stylesheet" href="{{ asset('/css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
    <!-- Google fonts-->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Pacifico">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
    <!-- Theme stylesheet-->
    <link rel="stylesheet" href="{{ asset('/css/style.default.css') }}" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{ asset('/css/custom.css') }}">
    <!-- Favicon-->
    <link rel="shortcut icon" href="favicon.png">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    <!-- shares -->
    <link type="text/css" rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.jssocials/1.3.0/jssocials.css"/>
    <link type="text/css" rel="stylesheet"
          href="https://cdn.jsdelivr.net/jquery.jssocials/1.3.0/jssocials-theme-flat.css"/>
    <title>{{ env('APP_NAME') }} | Recrutement humain</title>
    @yield('css')
</head>
<body>
<div style="background-image: url('{{ asset('/img/urban3.jpg') }}')" class="main">
    <div class="overlay"></div>
    @yield('goto')
    <div class="container">
       @yield('content')
    </div>
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p class="who"><a href="{{ route('home') }}">©2016 self-job.tk</a>
                        <br><a href="{{ route('mentions') }}">Mentions légales</a>
                    </p>
                </div>
                <div class="col-md-6">
                    <p class="credit">Made by <a href="https://codeheures.fr">CODEheures</a>
                        <br>With <a href="https://www.bootstrapious.com">Bootstrapious</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- JAVASCRIPT FILES -->
<script src="//code.jquery.com/jquery-3.1.0.min.js"></script>
<script src="{{ asset('/js/bootstrap.min.js') }}"></script>
<script src="http://cdn.rawgit.com/tabalinas/jssocials/v1.3.1/dist/jssocials.min.js"></script>
<!--Start Cookie Script--> <script type="text/javascript" charset="UTF-8" src="http://chs03.cookie-script.com/s/a593d5e27a7f5923fcfb575ab610b58c.js"></script> <!--End Cookie Script-->
@yield('script')
</body>
</html>
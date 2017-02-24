<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Restaurant</title>
    <link rel="stylesheet" href="/css/frontend/custom.css">
    {{--<link rel="stylesheet" href="/css/frontend/normalize.css">--}}
    <link rel="stylesheet" href="/css/frontend/main.css" media="screen" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Playball' rel='stylesheet' type='text/css'>
    {{--<link rel="stylesheet" href="/css/frontend/bootstrap.css">--}}
    {{--<link rel="stylesheet" href="/css/frontend/style-portfolio.css">--}}
    {{--<link rel="stylesheet" href="/css/frontend/picto-foundry-food.css"/>--}}
    {{--<link rel="stylesheet" href="/css/frontend/jquery-ui.css">--}}
    {{--<meta name="viewport" content="width=device-width, initial-scale=1.0">--}}
    {{--<link href="/css/frontend/font-awesome.min.css" rel="stylesheet">--}}
    {{--<link rel="icon" href="favicon-1.ico" qEAtype="image/x-icon">--}}
    {{--<script--}}
            {{--src="https://code.jquery.com/jquery-3.1.1.js"--}}
            {{--integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA="--}}
            {{--crossorigin="anonymous"></script>--}}
    {{--<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"--}}
          {{--integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">--}}
    {{--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"--}}
            {{--integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"--}}
            {{--crossorigin="anonymous"></script>--}}
    {{--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">--}}

    <!-- Compiled and minified JavaScript -->
    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>--}}




    <script src="/js/frontend/script.js">   </script>
</head>

<body>
<nav class="block navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="row">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">BalearSkills</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav main-nav  clear navbar-right ">
                    <li><a class="@yield('welcomeActive') color_animation"
                           href="#top">@lang('frontend.menu.welcome')</a></li>
                    <li><a class="@yield('restaurantsActive') color_animation"
                           href="/restaurants">@lang('frontend.menu.restaurants')</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div>
    </div><!-- /.container-fluid -->
</nav>

@yield('content')

{{--<footer class="sub_footer">--}}
{{--<div class="container">--}}
{{--<div class="col-md-4"><p class="sub-footer-text text-center">&copy; Josep Pons Pons 2017  </p> </div>--}}
{{--<div class="col-md-4"><p class="sub-footer-text text-center"> <a href="#top">Sube <i class="fa fa-arrow-up"></i></a></p></div>--}}
{{--<div class="col-md-4"><p class="sub-footer-text text-center"> <a href="http://www.iesjoanramis.org/">Ies Joan ramis</a></p>--}}
{{--</div>--}}
{{--</div>--}}
{{--</footer>--}}

{{--<script type="text/javascript" src="/js/jquery-1.10.2.min.js"></script>--}}
{{--<script type="text/javascript" src="/js/bootstrap.min.js"></script>--}}
{{--<script type="text/javascript" src="/js/jquery-1.10.2.js"></script>--}}
{{--<script type="text/javascript" src="/js/jquery.mixitup.min.js"></script>--}}
{{--<script type="text/javascript" src="/js/main.js"></script>--}}
<script>
    var date = new Date();
    $('.date').text(date.getFullYear());
</script>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=-1" />
    {{--<meta >--}}

    {{--<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Exo+2:200,300,400,500,600,600italic,700">--}}

    <link rel="shortcut icon" href="/icon.png">
    @include('assets');

    <title>@yield('title')</title>

    <link rel="stylesheet" href="//code.jquery.com/jquery-1.12.0.min.js">
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <link href="/css/epm.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/assets/css/messervices.css">
    <link rel="stylesheet" type="text/css" href="/assets/DataTables/datatables.min.css"/>

    <script type="text/javascript" src="/assets/DataTables/datatables.min.js"></script>

    <!-- Fonts -->
    {{--<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>--}}

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <!--<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>-->
    <!--<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>-->
    <![endif]-->
</head>

<body class="breadcrumb-white footer-top-dark">

<div id="page">
    <div id="header-wrapper">
        <div id="header">
            <div id="header-inner">
                <nav class="navbar navbar-default">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse"
                                    data-target="#navbar-main">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>

                            <a class="navbar-brand" href="/">
                                <span class="logo-styled">
                                    <span class="logo-title">
                                        <img src="/img/logo.png" class="logo" alt="">
                                    </span><!-- /.logo-title -->
                                </span><!-- /.logo-styled -->
                            </a>
                        </div>

                        <div class="collapse navbar-collapse" id="navbar-main">
                            <ul class="nav navbar-nav navbar-right">
                                <li class="menuparent hidden-sm">
                                    <a href="{{ url('/') }}">Accueil</a>
                                </li>
                                <li class="menuparent">
                                    <a href="/services">Services</a>
                                    <ul>
                                        {{--@foreach($services as $service)--}}
                                        {{--<li><a href="/services/{{ $service->id }}">{{ $service->libelleService }}</a></li>--}}
                                        {{--@endforeach--}}
                                    </ul>
                                </li>
                                @if(Auth::user())
                                    @if(Auth::user()->user_roles_id ==1)
                                        <li class="menuparent">
                                            <a href="/annonces">Mes Annonces</a>
                                            @if(isset($_SESSION['count']))
                                                <span class="badge">{{ $_SESSION['count'] }}</span>
                                            @endif
                                        </li>
                                        <li class="menuparent">
                                            <a href="/demandes">Demandes</a>
                                            @if(isset($_SESSION['non_lu']))
                                                @if($_SESSION['non_lu'] != 0)
                                                    <span class="badge">{{ $_SESSION['non_lu'] }} new</span>
                                                @endif
                                            @endif
                                        </li>
                                    @endif
                                    @if(Auth::user()->user_roles_id ==2)
                                        <li class="menuparent"><a href="/administration">Gestion des utilisateurs</a>
                                        </li>
                                    @endif
                                @endif
                                @if (Auth::guest())
                                    <li class="menuparent">
                                        <a href="{{ url('/auth/login') }}">
                                            <i class="glyphicon glyphicon-log-in"></i>
                                            <span class="hidden-xs"> Connexion</span>
                                        </a>
                                    </li>
                                    <li class="menuparent">
                                        <a href="/terms/">
                                            <i class="glyphicon glyphicon-pencil"></i>
                                            <span class="hidden-xs">Inscription</span>
                                        </a>
                                    </li>
                                @else
                                    <li class="menuparent">
                                        <a href="/compte">Profil <span class="caret"></span></a>
                                        <ul>
                                            <li><a href="{{ url('compte') }}"><i
                                                            class="glyphicon glyphicon-user"></i><span
                                                            class="hidden-xs"> Mon profil</span></a></li>
                                            <li><a href="{{ url('/auth/logout') }}"><i
                                                            class="glyphicon glyphicon-log-out"></i> <span
                                                            class="hidden-xs"> D&eacute;connexion</span></a></li>
                                        </ul>
                                    </li>
                                @endif
                            </ul>
                            <!-- /.nav -->
                        </div>
                        <!-- /.navbar-collapse -->
                    </div>
                </nav>
            </div>
            <!-- /#header-inner -->
        </div>
        <!-- /#header -->
    </div>
    <!-- /#header-wrapper -->
    <div id="main-wrapper">
        <div id="main">
            <div id="main-inner">
                <div class="container">
                    <div class="block-content background-white fullwidth">
                        <div class="block-content-inner">
                            @yield('content')
                        </div>
                        <!-- /.block-content-inner -->
                    </div>
                    <!-- /.block-content -->
                </div>
                <!-- /.container -->

            </div>
            <!-- /#main-inner -->
        </div>
        <!-- /#main -->
    </div>
    <!-- /#main-wrapper -->
    <div id="footer-wrapper">
        <div id="footer">
            <div id="footer-inner">
                <div class="footer-bottom">
                    <div class="container">
                        <nav class="clearfix">
                            Developpé par CookArt
                        </nav>

                        <div class="copyright">
                            BTS SIO SLAM 2016
                        </div>
                    </div>
                    <!-- /.container -->
                </div>
                <!-- /.footer-bottom -->
            </div>
            <!-- /#footer-inner -->
        </div>
        <!-- /#footer -->
    </div>
    <!-- /#footer-wrapper -->
</div>
<!-- /#page -->
<script>
    $('div.alert').delay(3000).slideUp(300);
    $('body').css("z-index", "-5");
</script>

{{--<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>--}}

</body>
</html>

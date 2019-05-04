<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Penyakit</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="robots" content="all,follow">
        <!-- Bootstrap CSS-->
        <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
        <!-- Font Awesome & Pixeden Icon Stroke icon font-->
        <link rel="stylesheet" href="/assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="/assets/css/pe-icon-7-stroke.css">
        <!-- Google fonts - Roboto Condensed & Roboto-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Condensed:700|Roboto:300,400">
        <!-- lightbox-->
        <link rel="stylesheet" href="/assets/css/lightbox.min.css">
        <!-- theme stylesheet-->
        <link rel="stylesheet" href="/assets/css/style.sea.css" id="theme-stylesheet">
        <!-- Custom stylesheet - for your changes-->
        <link rel="stylesheet" href="/assets/css/custom.css">
        <!-- Favicon-->
        <link rel="shortcut icon" href="/favicon.ico">
        <!-- Tweaks for older IEs--><!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    </head>
    <body 
        @if(isset($home))
            @if($home)
                class="home"
            @endif
        @endif
    >
        <!-- navbar-->
        <header class="header">
            <div role="navigation" class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header"><a href="index.html" class="navbar-brand">Penyakit</a>
                    <div class="navbar-buttons">
                        <button type="button" data-toggle="collapse" data-target=".navbar-collapse" class="navbar-toggle navbar-btn">Menu<i class="fa fa-align-justify"></i></button>
                    </div>
                </div>
                
                @php $segmentPertama = strtolower(Request::segment(1)); @endphp
                <div id="navigation" class="collapse navbar-collapse navbar-right">
                <ul class="nav navbar-nav">
                    <li class="@if(empty($segmentPertama)) active @endif"><a href="/">Home</a></li>
                    <!--<li><a href="text.html">Text page</a></li>-->
                    <li class="dropdown @if($segmentPertama == 'penyakit') active @endif"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Penyakit <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            @php $daftarPenyakit = App\Penyakit::all(); @endphp
                            @if (isset($daftarPenyakit))	
                                @if (sizeOf($daftarPenyakit) > 0)
                                    @foreach($daftarPenyakit as $penyakit)
                                        <li><a href="/penyakit/{{ $penyakit->id }}">{{ $penyakit->nama }}</a></li>
                                    @endforeach
                                @else
                                    <li><a>Tidak Ada Daftar</a></li>
                                @endif
                            @else
                                <li><a>Tidak Ada Daftar</a></li>
                            @endif
                        </ul>
                    </li>
                    <li class="@if($segmentPertama == 'kontak') active @endif"><a href="/kontak") ?>Kontak</a></li>
                </ul><a href="#" data-toggle="modal" data-target="#login-modal" class="btn navbar-btn btn-white pull-left"><i class="fa fa-sign-in"></i>Log in</a>
                </div>
            </div>
            </div>
        </header>

        @yield('konten')

        @if(!isset($hilangkanFooter))
            <footer class="footer">
                <div class="footer__copyright">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <p>&copy;2017 Your name goes here</p>
                            </div>
                            <div class="col-md-6">
                                <p class="credit">Template by <a href="https://bootstrapious.com/free-templates" class="external">Bootstrapious templates</a></p>
                                <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        @endif

        <!-- Javascript files-->
        <script src="/assets/js/jquery.min.js"></script>
        <script src="/assets/js/bootstrap.min.js"></script>
        <script src="/assets/js/jquery.cookie.js"> </script>
        <script src="/assets/js/lightbox.min.js"></script>
        <script src="/assets/js/front.js"></script><!-- substitute:livereload -->
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID.-->
        <!---->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>
    </body>
</html>

<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/style.css?'. time()) }}" rel="stylesheet">
    <link href="{{ asset('node_modules/simple-slideshow/src/slideshow.css?'. time()) }}" rel="stylesheet">
    <link href="{{ asset('node_modules/SpryAssets/SpryMenuBarHorizontal.css') }}" rel="stylesheet">
    <link href="{{ asset('node_modules/SpryAssets/SprySlidingPanels.css') }}" rel="stylesheet">
    <link href="{{ asset('bower_components/bootstrap/dist/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('bower_components/bootstrap-social/bootstrap-social.css') }}" rel="stylesheet">
    <link href="{{ asset('bower_components/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    @yield('css')
</head>

<style>
@media (min-width: 1100px) {

    .container{
        width: 900px !important;
    }

}

@media (max-width:767px){

        .dogTalent #header {
            padding-top: 0;
            border-bottom: 1px dashed #CCC;
            margin-bottom: 15px;
        }
}


@media (min-width:767px){

        .dogTalent #header {
            padding-top: 0;
            height: 120px;
            border-bottom: 1px dashed #CCC;
            margin-bottom: 15px;
        }

}

.navbar{
        margin-bottom: 0px !important;
}

.navbar-toggle:hover, .navbar-default .navbar-toggle:focus {
    background-color: #ddd !important;
}

.navbar-toggle {
    border-color: #ddd !important;
}

.navbar-toggle .icon-bar {
    background-color: #888 !important;
}

.navbar-toggle .icon-bar {
    display: block !important;
    width: 22px !important;
    height: 2px !important;
    border-radius: 1px !important;
}

.content-wrapper{
    margin-bottom:15px;
}

</style>
<body class="dogTalent">

    <div class="container">

        <div id="header">
            <div class="logo">
                <a href="{{route('home')}}"><img class="img-responsive" src="{{ URL::asset('/storage/logo/logo1.png') }}" style=""></a>
            </div>

            <div class="topbutton hidden-xs">               
                {{ menu('main_menu', 'layouts.nav') }} 
            </div>
            <div class="navbar hidden-lg hidden-md hidden-sm">
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>

                </div>
                <div class="collapse navbar-collapse">
                  <ul class="nav navbar-nav">
                   {{ menu('main_menu', 'layouts.mobile_nav') }} 
                </div><!--/.nav-collapse -->   
            </div>        
        </div>

        <!-- End Header -->
             @yield('banner')
             @if(count($errors->all()))
                <div class="alert alert-danger pop-alert">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if(session('status'))
                <div class="alert alert-success pop-alert">
                    {{session('status')}}
                </div>
            @endif
            <div class="content-wrapper">
            @yield('content')
            </div>
        <div id="footer">
           {{ menu('footer_menu', 'layouts.footer') }} 
        </div>
    </div>
   
        


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('node_modules/simple-slideshow/src/slideshow.js') }}"></script>
    <script src="{{ asset('node_modules/SpryAssets/SpryMenuBar.js') }}"></script>
    <script src="{{ asset('node_modules/SpryAssets/SprySlidingPanels.js') }}"></script>
    <script type="text/javascript">
        function fade() {
            $('.pop-alert').delay(2500).fadeOut(1000,"swing");
        }
        fade();
    </script> 
    
    @yield('js')
</body>
</html>

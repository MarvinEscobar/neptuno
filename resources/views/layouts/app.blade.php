<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">    

    <title>{{ config('app.name', 'NEPTUNO') }}</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>    

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container head">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <span class="sr-only">Toggle Navigation</span>
                     <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/home') }}">
                        {{ config('app.name', '') }}
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    @include("includes.nav_log")                        
                    <!-- Right Side Of Navbar -->                    
                </div>
            </div>
        </nav>
        <div class="sidebar-panel">
            @include("includes.nav")        
        </div>
            
        <div class="content-panel">
            @yield('content')
        </div>
    </div>
    @if(session('info'))
                <div class="container alert">
                    <div class="row">
                        <div class="col-md8 clo-md-offset-2">
                            <div class="alert alert-success">
                                {{ session('info') }}
                                
                            </div>                            
                        </div>                        
                    </div>                    
                </div>
            @endif
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>

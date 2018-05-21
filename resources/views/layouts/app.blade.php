<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

    <!-- CSS Files -->
    <link href="{{ url('assets/css/bootstrap.min.css')}} " rel="stylesheet"/>
    <link href= "{{ url('assets/css/material-kit.css') }}" rel="stylesheet"/>
    <title>Intership</title>



</head>
<body>
    <div id="app">
         <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>


                    <a class="navbar-brand" href="{{ url('/welcome') }}">
                        Internships
                    </a>

                    <a class="navbar-brand" href="{{ url('/home')}}">
                        Home
                    </a>



                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">

                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>


                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links-->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                                                        <img src="/assets/img/{{Auth::user()->pic}}" alt="Circle Image" class="img-circle img-responsive img-raised" style="width:32px; height:32px; top:20px;right:250px; position:absolute; border-radius:50%;">

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ ucwords(Auth::user()->name) }} <span class="caret"></span>
                                 </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>


                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>


                                    </li>

                                </ul>
                                <li>
                                 <a href="{{ url('/profile') }}/{{Auth::user()->slug}}">Profile</a>
</li>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>


       @yield('content')

                     <script src="{{ url('assets/js/jquery.min.js')}}" type="text/javascript"></script>
    <script src="{{url('assets/js/bootstrap.min.js')}}" type="text/javascript"></script>
    <script src="{{('assets/js/material.min.js')}}"></script>

    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="{{('assets/js/nouislider.min.js')}}" type="text/javascript"></script>

    <!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
    <script src="{{('assets/js/bootstrap-datepicker.js')}}" type="text/javascript"></script>

    <!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
    <script src="{{('assets/js/material-kit.js')}}" type="text/javascript"></script>

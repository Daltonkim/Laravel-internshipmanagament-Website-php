@extends('layouts.app')

@section('content')
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="/assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="/assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Profile</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

    <!--     Fonts and icons     -->


</head>

<body class="profile-page">


    <div class="wrapper">
        <div class="header header-filter" style="background-image: url('/assets/img/examples/city.jpg');"></div>

        <div class="main main-raised">
            <div class="profile-content">
                <div class="container">
                    <div class="row">
                        <div class="profile">
                            <div class="avatar">
                                <img src="/assets/img/{{Auth::user()->pic}}" alt="Circle Image" class="img-circle img-responsive img-raised" >
                                @if(Auth::user())
                                <a href="{{'/changephoto'}}" class="btn btn-primary">change image</a>
                                @endif
                            </div>
                            <div class="name">
                                <h3 class="title">{{Auth::user()->name}} {{Auth::user()->secondName}}</h3>
                                <h6>Taking <strong>{{Auth::user()->course}}</strong></h6>
                                <h6> Studied at <strong>{{Auth::user()->university}}</strong></h6>
                                <h6>From <strong>{{Auth::user()->county}}</strong></h6>
                                <h6>Email <strong>{{Auth::user()->email}}</strong></h6>

                            </div>
                        </div>
                    </div>

                    <div class="description text-center jumbotron">
                    <label>About:</label>
                        <p>{{Auth::user()->bio}} </p>
                        <label>Here as</label>
                        <p>{{Auth::user()->category}} </p>

                    </div>



                            <!-- End Profile Tabs -->
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
@include('layouts.footer')


</body>
    <!--   Core JS Files   -->


</html>

@endsection
<!--<div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <div class="profile-tabs">
                                <div class="nav-align-center">
                                    <ul class="nav nav-pills" role="tablist">
                                        <li class="active">
                                            <a href="#studio" role="tab" data-toggle="tab">
                                                <i class="material-icons">camera</i>
                                                Studio
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#work" role="tab" data-toggle="tab">
                                                <i class="material-icons">palette</i>
                                                Work
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#shows" role="tab" data-toggle="tab">
                                                <i class="material-icons">favorite</i>
                                                Favorite
                                            </a>
                                        </li>
                                    </ul>

                                    <div class="tab-content gallery">
                                        <div class="tab-pane active" id="studio">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <img src="{{ url ('assets/img/examples/chris1.jpg')}}" class="img-rounded" />
                                                    <img src="{{ url ('assets/img/examples/chris1.jpg')}}" class="img-rounded" />
                                                </div>
                                                <div class="col-md-6">
                                                    <img src="{{ url ('assets/img/examples/chris1.jpg')}}" class="img-rounded"/>
                                                    <img src="{{ url ('assets/img/examples/chris1.jpg')}}" class="img-rounded" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane text-center" id="work">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <img src="{{ url ('assets/img/examples/chris1.jpg')}}" class="img-rounded" />
                                                    <img src="{{ url ('assets/img/examples/chris1.jpg')}}" class="img-rounded" />
                                                    <img src="{{ url ('assets/img/examples/chris1.jpg')}}" class="img-rounded" />
                                                </div>
                                                <div class="col-md-6">
                                                    <img src="{{ url ('assets/img/examples/chris1.jpg')}}" class="img-rounded" />
                                                    <img src="{{ url ('assets/img/examples/chris1.jpg')}}" class="img-rounded" />
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>-->

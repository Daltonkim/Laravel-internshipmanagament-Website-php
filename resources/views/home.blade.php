@extends('layouts.app')

@section('content')

<body class="landing-page">

    <div class="wrapper">
        <div class="header header-filter" style="background-image: url('/assets/img/examples/city.jpg');">
            <div class="container" style="padding-top: 2px;">
                <div class="row">
                    <div class="col-md-6">
                        <h1 class="title">Internship Management System</h1>
                        <h4></h4>
                        <br />
                        @if(Auth::user()->category !== 'student')
                        <a href="/welcome" class="btn btn-danger btn-raised btn-lg">
                            <i class="fa fa-play"></i> Post an internship opportunity
                        </a>
                        <a href="/welcome" class="btn btn-success btn-raised btn-lg">
                            <i class="fa fa-play"></i> This message has appeared because this is an Institution
                        </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <div class="main main-raised">
            <div class="container">
                <div class="section text-center section-landing">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <h2 class="title"></h2>
                            <h5 class="description"></h5>
                        </div>
                    </div>

                    <div class="features">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="info">
                                    <div class="icon icon-primary">
                                        <i class="material-icons"></i>
                                    </div>
                                    <h4 class="info-title">First Fea</h4>
                                    <p></p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="info">
                                    <div class="icon icon-success">
                                        <i class="material-icons"></i>
                                    </div>
                                    <h4 class="info-title">Second Feature</h4>
                                    <p></p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="info">
                                    <div class="icon icon-danger">
                                        <i class="material-icons"></i>
                                    </div>
                                    <h4 class="info-title"></h4>
                                    <p></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="section text-center">
                    <h2 class="title"></h2>

                    <div class="team">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="team-player">
                                    <img src="" alt="Thumbnail Image" class="img-raised img-circle">
                                    <h4 class="title"><br />
                                        <small class="text-muted"></small>
                                    </h4>
                                    <p class="description"></p>
                                    <a href="#pablo" class="btn btn-simple btn-just-icon"><i class="fa fa-twitter"></i></a>
                                    <a href="#pablo" class="btn btn-simple btn-just-icon"><i class="fa fa-instagram"></i></a>
                                    <a href="#pablo" class="btn btn-simple btn-just-icon btn-default"><i class="fa fa-facebook-square"></i></a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="team-player">
                                    <img src="" alt="Thumbnail Image" class="img-raised img-circle">
                                    <h4 class="title"><br />
                                        <small class="text-muted"></small>
                                    </h4>
                                    <p class="description"> </p>
                                    <a href="#pablo" class="btn btn-simple btn-just-icon"><i class="fa fa-twitter"></i></a>
                                    <a href="#pablo" class="btn btn-simple btn-just-icon"><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="team-player">
                                    <img src="" alt="Thumbnail Image" class="img-raised img-circle">
                                    <h4 class="title"><br />
                                        <small class="text-muted"></small>
                                    </h4>
                                    <p></p>
                                    <a href="#pablo" class="btn btn-simple btn-just-icon"><i class="fa fa-google-plus"></i></a>
                                    <a href="#pablo" class="btn btn-simple btn-just-icon"><i class="fa fa-youtube-play"></i></a>
                                    <a href="#pablo" class="btn btn-simple btn-just-icon btn-default"><i class="fa fa-twitter"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


                <div class="section landing-section">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <h2 class="text-center title">Work with us</h2>
                            <h4 class="text-center description"></h4>
                            <form class="contact-form">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Your Name</label>
                                            <input type="email" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Your Email</label>
                                            <input type="email" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group label-floating">
                                    <label class="control-label">Your Messge</label>
                                    <textarea class="form-control" rows="4"></textarea>
                                </div>

                                <div class="row">
                                    <div class="col-md-4 col-md-offset-4 text-center">
                                        <button class="btn btn-primary btn-raised">
                                            Send Message
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>

        </div>

 @include('layouts.footer')


    </div>
</body>
@endsection

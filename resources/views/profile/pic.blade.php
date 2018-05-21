@extends('layouts.app')

@section('content')
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="/assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="/assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title></title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

    <!--     Fonts and icons     -->
    

</head>

<body class="profile-page">
    {{csrf_field()}}

    <div class="wrapper">
        <div class="header header-filter" style="background-image: url('/assets/img/examples/city.jpg');"></div>

        <div class="main main-raised">
            <div class="profile-content">
                <div class="container">
                    <div class="row">
                        <div class="profile">
                            <div class="avatar">
                                <img src="/assets/img/{{Auth::user()->pic}}" alt="Circle Image" class="img-circle img-responsive img-raised">
                                <form action="{{url('/uploadPhoto')}}" method="post" enctype="multipart/form-data">
                           
                            <label class="label label-danger" style="float: left;">browse and change, jpg and png pics required</label>
                                 <input type="file" name="pic" class="">
                                

                            <input type="submit" class="btn btn-success" value="change" name="btn">

                  <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            </form>
                            
                            </div>
                            
                        </div>
                        
                    </div>
                    <div class="description text-center">
                        <p>An artist of considerable range, Chet Faker — the name taken by Melbourne-raised, Brooklyn-based Nick Murphy — writes, performs and records all of his own music, giving it a warm, intimate feel with a solid groove structure. </p>
                    </div>

                    
                            <!-- End Profile Tabs -->
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
<footer class="footer">
        <div class="container">
            <nav class="pull-left">
                <ul>
                    <li>
                        <a href="/home">
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="">
                        </a>
                    </li>
                    
                </ul>
            </nav>
            <div class="copyright pull-right">
            </div>
        </div>
    </footer>


</body>
    <!--   Core JS Files   -->
   

</html>

@endsection

@extends('layouts.app')
<!-- Search space-->


 <link href="{{ asset('css/app.css') }}" rel="stylesheet">
 <script type="text/javascript">
  $(function() {
    $( "#datepicker" ).datepicker({
      changeMonth: true,
      changeYear: true
    });
  });
  </script>
<style type="text/css">

 .list-group-horizontal .list-group-item {

      display: inline-block;
  }
  .list-group-horizontal .list-group-item {
      margin-bottom: 0;
      margin-left:-4px;
      margin-right: 0;

  }
/*.search-form{
float:center;
margin-right: 10dp;
margin-left: 20dp;

}*/
  .list-group-horizontal .list-group-item:first-child {

      border-top-right-radius:0;

      border-bottom-left-radius:4px;

  }

  .list-group-horizontal .list-group-item:last-child {

      border-top-right-radius:4px;

      border-bottom-left-radius:0;

  }

</style>
@section('content')

<!-- Modal Core -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">

<div class="row">
<h4>Create Internship</h4>

<div class="col col-md-12 ">
<form action="/createjob" method="post" >
{{csrf_field()}}
<div class="form-group{{ $errors->has('jobtitle') ? ' has-error' : '' }}">
<label class="control-label" for="jobtitle">Jobtitle</label>
<input  placeholder="Ex: Senior Mobile Developer" type="text" name="jobtitle" class="form-control" value="{{ old('jobtitle') }}" required autofocus>
@if ($errors->has('jobtitle'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('jobtitle') }}</strong>
                                    </span>
                                @endif

</div>
<div class="form-group{{ $errors->has('location') ? ' has-error' : '' }}">

<label class="control-label" for="location">Location</label>
<input placeholder="Ex:Hyderabad"  type="text" name="location" class="form-control" value="{{ old('location') }}" required autofocus>
@if ($errors->has('location'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('location') }}</strong>
                                    </span>
                                @endif
</div>
<div class="form-group{{ $errors->has('deadline') ? ' has-error' : '' }}">

<label class="control-label" for="deadline">Deadline</label>
<input placeholder="Ex:12/08/2017"  type="text" name="deadline" class="form-control" value="{{ old('deadline') }}" required autofocus>
@if ($errors->has('location'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('deadline') }}</strong>
                                    </span>
                                @endif
</div>
  <div class="form-group required">

<label  for="jobtype" class='control-label'>Jobtype</label>
<select class="form-control" name="jobtype">
<option value="Full Time">Full Time</option>
<option value="Part Time">Part Time</option>
<option value="Contract">Contract</option>

</select>
</div>

<div class="form-group {{ $errors->has('jobdesc') ? ' has-error' : '' }}">

<label for="jobdesc" class='control-label'>Job Description</label>
<textarea type="text" class="form-control" rows="7" name="jobdesc" value="{{ old('jobdesc') }}" required autofocus></textarea> </textarea>
@if ($errors->has('jobdesc'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('jobdesc') }}</strong>
                                    </span>
                                @endif
  </div>
<div class="form-group {{ $errors->has('companyname') ? ' has-error' : '' }}">

<label  for="companyname" class='control-label'>companyname</label>
<input type="text" name="companyname"  class="form-control"  placeholder="Ex:Infosys"  value="{{ old('companyname') }}" required autofocus>
 @if ($errors->has('companyname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('companyname') }}</strong>
                                    </span>
                                @endif
  </div>
  <div class="form-group {{ $errors->has('howto') ? ' has-error' : '' }}">
    <label for="howto" class='control-label'>How to Apply</label>
<textarea class="form-control" name="howto" rows="4" placeholder="For Example: Email your resume to jobs@xyz.com"  value="{{ old('howto') }}" required autofocus></textarea>
@if ($errors->has('howto'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('howto') }}</strong>
                                    </span>
                                @endif
  </div>

<button type="submit" value="submit" class="btn btn-success" >Publish</button>
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">


</form>

</div>
</div>

</form>

</div>
      </div>

    </div>
  </div>


<div class="jumbotron">
          <div class="col-md-6 col-md-offset-3">
              <h1> Search Internships</h1>
          </div>
    <div class="#">
              <form action="{{ route ('search.results')}}" class="search-form">
                  <div class="form-group has-feedback">
                <label for="search" class="sr-only">Search</label>
                  <input type="text" class="form-control" name="search" placeholder="Search">
                    <span class="glyphicon glyphicon-search form-control-feedback"></span>
                    <div class="col-lg-12" id="search-results">
                </div>
                  </div>
              </form>
</div>
</div>
<body class="profile-page">
    <div class="wrapper">
        <div class="header header-filter" style="background-image: url('assets/img/examples/city.jpg');"></div>

        <div class="main main-raised">

            <div class="profile-content">
                <div class="container">
                    <div class="row">
                        <div class="profile">

                            <div class="name">
                                <h3 class="title">Internships</h3>
                                <h6>Posted by your Organisations    </h6>


                            </div>


                        </div>
                    </div>

                    @if (Auth::user()->category !=='student')
                              <button class="btn btn-primary main-raised" style="padding-top: 10px;" data-toggle="modal" data-target="#myModal">
                             Click Here To Post An internship
                     @endif
                              </button>
                    <div class="description text-center" style="color: black; font-size:20px;">
                        <p>This are the lists of available internship opportunities for you to explore, feel free to apply as many as posiible according to your respective fields, as it increases your chances of landing a position in that place </p>
                    </div>

             </div>

            </div>

<hr style="color: black;">
<ul class="list-group-horizontal mbr-header mbr-header--inline row">
<li class="list-group-item">
   @foreach($posts as $post)
<div class="profile-content form-horizontal" >
                <div class="container">
                    <div class="row">

                        <div class="profile" >

                            <div class="name">
                                <h3 class="title">{{$post->jobtitle}} <strong> position</strong> </h3>
                                <h6>Posted by <strong> {{$post->companyname}} </strong>   </h6>
                                <h6>Located in <strong>{{$post->location}} </strong>   </h6>
                                <h6>It is a <strong>{{$post->jobtype}} </strong> job.   </h6>

                      <div class="description text-center" style="text-color:black;">
                        <p>{{$post->jobdesc}} </p>

                        @foreach($users as $user)

                        @endforeach
                    </div>
                    <h6>Deadline of application is <strong> {{$post->deadline}} </strong>   </h6>
                    <h6>How to apply  <strong> {{$post->howto}} </strong>   </h6>

                            @if(Auth::user()->category !== 'institution')
                              <button class="btn btn-primary" data-toggle="modal">
                             Apply
                              </button>
                              @endif
                             @if(Auth::user()->category !=='student')
                               <button class="btn btn-primary" data-toggle="modal" data-target="#myModa">
                             Edit
                              </button>
                            @endif
                            </div>

                        </div>
                    </div>



             </div>


            </div>


 @endforeach
 </li>
 </ul>
</div>

 </div>
</div>








    @include('layouts.footer')


    <!-- Button trigger modal -->





</body>
<!--edit modal -->
<div class="modal fade" id="myModa" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">

<div class="row">
<h4>Create Internship</h4>

<div class="col col-md-12 ">
<form action="#" method="post" >
{{csrf_field()}}
<div class="form-group{{ $errors->has('jobtitle') ? ' has-error' : '' }}">
<label class="control-label" for="jobtitle">Jobtitle</label>
<input  placeholder="Ex: Senior Mobile Developer" type="text" name="jobtitle" class="form-control" value="{{ old('jobtitle') }}" required autofocus>
@if ($errors->has('jobtitle'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('jobtitle') }}</strong>
                                    </span>
                                @endif

</div>
<div class="form-group{{ $errors->has('location') ? ' has-error' : '' }}">

<label class="control-label" for="location">Location</label>
<input placeholder="Ex:Hyderabad"  type="text" name="location" class="form-control" value="{{ old('location') }}" required autofocus>
@if ($errors->has('location'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('location') }}</strong>
                                    </span>
                                @endif
</div>

  <div class="form-group required">

<label  for="jobtype" class='control-label'>Jobtype</label>
<select class="form-control" name="jobtype">
<option value="Full Time">Full Time</option>
<option value="Part Time">Part Time</option>
<option value="Contract">Contract</option>

</select>
</div>

<div class="form-group {{ $errors->has('jobdesc') ? ' has-error' : '' }}">

<label for="jobdesc" class='control-label'>Job Description</label>
<textarea type="text" class="form-control" rows="7" name="jobdesc" value="{{ old('jobdesc') }}" required autofocus></textarea> </textarea>
@if ($errors->has('jobdesc'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('jobdesc') }}</strong>
                                    </span>
                                @endif
  </div>



<div class="form-group {{ $errors->has('companyname') ? ' has-error' : '' }}">

<label  for="companyname" class='control-label'>companyname</label>
<input type="text" name="companyname"  class="form-control"  placeholder="Ex:Infosys"  value="{{ old('companyname') }}" required autofocus>
 @if ($errors->has('companyname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('companyname') }}</strong>
                                    </span>
                                @endif
  </div>
  <div class="form-group {{ $errors->has('howto') ? ' has-error' : '' }}">
    <label for="howto" class='control-label'>How to Apply</label>
<textarea class="form-control" name="howto" rows="4" placeholder="For Example: Email your resume to jobs@xyz.com"  value="{{ old('howto') }}" required autofocus></textarea>
@if ($errors->has('howto'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('howto') }}</strong>
                                    </span>
                                @endif
  </div>

<button type="submit" value="submit" class="btn btn-success" >Publish</button>
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">


</form>

<!--  -->
</div>
</div>

</form>
@endsection

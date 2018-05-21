<!--
<div class="row">
<h4>Create Internship</h4>

<div class="col col-md-8">
<form action="/createjob" method="post">
{{csrf_field()}}
<div class="form-group{{ $errors->has('jobtitle') ? ' has-error' : '' }}">
<label class="control-label" for="jobtitle">Jobtitle</label>
<input  placeholder="Ex: Senior Mobile Developer" type="text" name="jobtitle" value="{{ old('jobtitle') }}" required autofocus>
@if ($errors->has('jobtitle'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('jobtitle') }}</strong>
                                    </span>
                                @endif

</div>
<div class="form-group{{ $errors->has('location') ? ' has-error' : '' }}">

<label class="control-label" for="location">Location</label>
<input placeholder="Ex:Hyderabad"  type="text" name="location" value="{{ old('location') }}" required autofocus>
@if ($errors->has('location'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('location') }}</strong>
                                    </span>
                                @endif
</div>
  <div class="form-group required">

<label  for="jobtype" class='control-label'>Jobtype</label>
<select class="form-control" name="jobtype">
<option>Full Time</option>
<option>Part Time</option>
<option>Contract</option>

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
</div>-->

<div class="row" >
                        <div class="col-md-6">
                         <i class="material-icons">camera</i>
                                                Jobs
                        </a>
         @foreach($posts as $post)
           <form class="form-control">
      
        <td>{{$post->jobtitle}}</td><br>
        <td>{{$post->companyname}}</td><br>
        <td>{{$post->jobdesc}}</td><br>
        <td>{{$post->location}}</td><br>
        <td>{{$post->howto}}</td><br>
                <td>{{$post->jobtype}}</td>

<button class="btn btn-success">Apply</button>
</form> 

           
@endforeach
</div>
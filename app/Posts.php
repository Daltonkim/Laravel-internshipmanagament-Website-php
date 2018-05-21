<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Http\Requests;
use App\User;



class Posts extends Model
{
    //
    protected $fillable = ['jobtitle','location','jobtype','jobdesc','companyname','howto','deadline'];
     protected $guarded = array();

    public static $rules = array();

  public function users(){

  return $this->belongsTo('App\User');
}

}
/*
<div class="row">
  <h4>Post a Job</h4>
 <div class="col col-md-2"></div>
    <div class="col col-md-8">
  <form action="{{'/createjob'}}" method="post" class="">
  {{ csrf_field()}}
  <div class="form-group {{ $errors->has('jobtitle') ? ' has-error' : '' }}">
    <label for="jobtitle" class='control-label'>Job Title</label>
    <input type="text" class="form-control" id="jobtitle" aria-describedby="emailHelp" value="{{ old('jobtitle') }}" placeholder="Ex: Senior Mobile Developer" required autofocus>
     @if ($errors->has('jobtitle'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('jobtitle') }}</strong>
                                    </span>
                                @endif
    <!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
  </div>
  <div class="form-group{{ $errors->has('location') ? ' has-error' : '' }} "   >
    <label for="Location" class='control-label'>Location</label>
    <input type="text" class="form-control" id="Location" placeholder="Ex:Hyderabad" value="{{ old('location') }}" required autofocus>
     @if ($errors->has('location'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('location') }}</strong>
                                    </span>
                                @endif
  </div>
  <div class="form-group required">
    <label for="jobtype" class='control-label'>Job Type</label>
    <select class="form-control" id="jobtype">
      <option value="Full Time">Full Time</option>
      <option value="Part Time">Part Time</option>
      <option value="Contract">Contract</option>
    </select>
  </div>

  <div class="form-group {{ $errors->has('jobdesc') ? ' has-error' : '' }}">
    <label for="jobdesc" class='control-label'>Job Description</label>
    <textarea class="form-control" id="jobdesc" rows="7" value="{{ old('jobdesc') }}" required autofocus></textarea>
    @if ($errors->has('jobdesc'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('jobdesc') }}</strong>
                                    </span>
                                @endif
  </div>

  <div class="form-group {{ $errors->has('companyname') ? ' has-error' : '' }}">
    <label for="companyname" class='control-label'>Company Name</label>
    <input type="text" class="form-control" id="companyname" placeholder="Ex:Infosys"  value="{{ old('companyname') }}" required autofocus>
  @if ($errors->has('companyname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('companyname') }}</strong>
                                    </span>
                                @endif
  </div>

  <div class="form-group {{ $errors->has('howto') ? ' has-error' : '' }}">
    <label for="howto" class='control-label'>How to Apply</label>
    <textarea class="form-control" id="howto" rows="4" placeholder="For Example: Email your resume to jobs@xyz.com"  value="{{ old('howto') }}" required autofocus></textarea>

@if ($errors->has('howto'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('howto') }}</strong>
                                    </span>
                                @endif
  </div>
    <ul class="media-date text-uppercase reviews list-inline">
    <li class="aaaa"><button type="submit" class="btn btn-success">Publish</button></li>
  </ul>
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
</form>
</div>


</div>

@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal"  method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} ">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="secondName" class="col-md-4 control-label">Second Name</label>

                            <div class="col-md-6">
                               <input id="secondName" type="text" class="form-control" name="secondName" value="{{ old('secondName') }}" required autofocus>
                                 @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                    <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
                            <label for="gender" class="col-md-4 control-label">Gender</label>

                            <div class="col-md-6">
                        <!--  <input id="gender" type="text" class="form-control" name="gender" value="{{ old('gender') }}" required autofocus> -->
                         <select class="form-control" name="gender">
                             <option value="male">Male</option>
                             <option value="female">Female</option>
                         </select>

                                @if ($errors->has('gender'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('gender') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('category') ? ' has-error' : '' }}">
                            <label for="category" class="col-md-4 control-label">category</label>

                            <div class="col-md-6">
                        <!--  <input id="gender" type="text" class="form-control" name="gender" value="{{ old('gender') }}" required autofocus> -->

                         <select class="form-control" name="category">
                             <option value="student">Student</option>
                             <option value="institution">Institution/Organization</option>
                         </select>

                                @if ($errors->has('category'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('category') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('university') ? ' has-error' : '' }}">
                            <label for="university" class="col-md-4 control-label">University</label>

                            <div class="col-md-6">
                               <input id="university" type="text" class="form-control" name="university" value="{{ old('university') }}" required autofocus>

                                @if ($errors->has('university'))                                    <span class="help-block">
                                        <strong>{{ $errors->first('university') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('county') ? ' has-error' : '' }}">
                            <label for="county" class="col-md-4 control-label">County</label>

                             <div class="col-md-6">
                             <select class="form-control" name="county" id="county">
                             <option value="Uasin Gishu">Uasin Gishu</option>
                             <option value="Nandi">Nandi</option>
                             <option value="Uasin Gishu">Nairobi</option>
                             <option value="Nandi">Kericho</option>
                             <option value="Uasin Gishu">Bomet</option>
                             <option value="Nandi">Garrisa</option>
                             <option value="Uasin Gishu">Samburu</option>
                             <option value="Nandi">Kisumu</option>
                             <option value="Uasin Gishu">Bungoma</option>
                             <option value="Nandi">Laikipia</option>
                             <option value="Uasin Gishu">Baringo</option>
                             <option value="Nandi">Busia</option>
                             <option value="Uasin Gishu">Elgeyo Marakwet</option>
                             <option value="Nandi">Embu</option>
                             <option value="Uasin Gishu">Homa Bay</option>
                             <option value="Nandi">Isiolo</option>
                             <option value="Uasin Gishu">Kajiado</option>
                             <option value="Nandi">Kakamega</option>
                             <option value="Uasin Gishu">Kericho</option>
                             <option value="Nandi">Kiambu</option>
                             <option value="Uasin Gishu">Kilifi</option>
                             <option value="Nandi">Kirinyaga</option>
                             <option value="Uasin Gishu">Kisii</option>
                             <option value="Nandi">Kisumu</option>
                             <option value="Nandi">Kitui</option>
                              <option value="Nandi">Kwale</option>
                             <option value="Nandi">Lamu</option>
                              <option value="Nandi">Machakos</option>
                             <option value="Nandi">Makueni</option>
                            <option value="Nandi">Mandera</option>
                            <option value="Nandi">Meru</option>
                           <option value="Nandi">Migori</option>
                           <option value="Nandi">Marsabit</option>
                          <option value="Nandi">Mombasa</option>
                          <option value="Nandi">Muranga</option>
                         <option value="Nandi">Nairobi</option>
                         <option value="Nandi">Nakuru</option>
                        <option value="Nandi">Narok</option>
                        <option value="Nandi">Nyandarua</option>
                       <option value="Nandi">Nyeri</option>
                       <option value="Nandi">Siaya</option>
                      <option value="Nandi">Taita Taveta</option>
                      <option value="Nandi">Tana River</option>
                      <option value="Nandi">Tharake Nithi</option>
                     <option value="Nandi">Trans Nzoia</option>
                     <option value="Nandi">Turkana</option>
                     <option value="Nandi">Vihiga </option>
                     <option value="Nandi">Wajir </option>
                    <option value="Nandi">West Pokot </option>


                         </select>

                                @if ($errors->has('county'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('county') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('course') ? ' has-error' : '' }}">
                            <label for="course" class="col-md-4 control-label">Course</label>

                            <div class="col-md-6">
                               <input id="course" type="text" class="form-control" name="course" value="{{ old('course') }}" required autofocus>

                                @if ($errors->has('course'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('course') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('bio') ? ' has-error' : '' }}">
                            <label for="bio" class="col-md-4 control-label">Tell Us something about you or your Institution</label>

                            <div class="col-md-6">
                                <textarea id="bio" type="text"  rows ="5" placeholder="Tell Us something about you or your Institution" class="form-control" name="bio" value="{{ old('bio') }}" required > </textarea>

                                @if ($errors->has('bio'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('bio') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>

                        </div>
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

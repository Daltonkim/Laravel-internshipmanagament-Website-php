@extends('layouts.app')

@section('content')
<div class="profile-content form-horizontal" >
                <div class="container">
                    <div class="row">

                        <div class="profile" >


                            <div class="name">
                                <h3 class="title">{{$posts->jobtitle}} <strong> position</strong> </h3>
                                <h6>Posted by <strong> {{$posts->companyname}} </strong>   </h6>
                                <h6>Located in <strong>{{$posts->location}} </strong>   </h6>
                                <h6>It is a <strong>{{$posts->jobtype}} </strong> job.   </h6>

                      <div class="description" style="text-color:black;">
                        <p>{{$posts->jobdesc}} </p>


                    </div>
                    <h6>Deadline of application is <strong> {{$posts->deadline}} </strong>   </h6>
                    <h6>How to apply  <strong> {{$posts->howto}} </strong>   </h6>

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
@endsection

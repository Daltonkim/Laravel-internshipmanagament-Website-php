

@extends('layouts.app')
@section('content')

<h3> Your results for "{{Request::input('search')}}"</h3>

@if(!$posts->count())

<p> No Results were Found. Sorry</p>

@else


<div class="row">
<div class="col-lg-12">

@foreach ($posts as $posts)

@include('user/partials/userblock')

@endforeach
@endif

</div>

	</div>

@endsection

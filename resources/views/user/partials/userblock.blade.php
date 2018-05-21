<div>
<a class="pull-left" href="{{ route('profile.searched', ['jobtitle' => $posts->jobtitle])}}">

</a>
<div class="jumbotron" style="float:center;">
<div class="media-body ">

<h4 class="media-heading"><a href="{{ route('profile.searched', ['jobtitle' => $posts->jobtitle])}}">{{ $posts->jobtitle}} {{ $posts->jobtype}}</a></h4>

<!-- @if($posts->jobtitle)

<p>{{ $posts->jobtitle}}</p>

@endif -->
	</div>


</div>
</div>

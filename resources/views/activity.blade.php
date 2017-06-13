<html>
<body>
	<h2> {{ $username }}'s activities... </h2>
	@foreach ($activities as $activity)
		@if ($activity->name == 'created_post')
			{{ $activity->user->name }} published a post {{ $activity->created_at->diffForHumans() }}<br>
		@endif
		@if ($activity->name == 'created_comment')
			{{ $activity->user->name }} left a comment {{ $activity->created_at->diffForHumans() }}<br>
		@endif
	@endforeach
</body>
</html>

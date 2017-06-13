<html>
<body>
	<h2> Your Activities </h2>
	@foreach ($activities as $activity)
		@if ($activity->name == 'created_post')
			{{ $activity->user->name }} published a post on {{ $event->created_at->diffForHumans() }}
		@endif
		@if ($activity->name == 'created_comment')
			{{ $activity->user->name }} left a comment on {{ $event->created_at->diffForHumans() }}
		@endif
	@endforeach
</body>
</html>

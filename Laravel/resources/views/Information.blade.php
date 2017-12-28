<!DOCTYPE html>
<html>
<head>
	<title>Information</title>
</head>
<body>
<ul>

	@foreach ($tasks as $task)
		<li> 
		<a href="/info/{{ $task->id }}">
		{{ $task->body }}
		</a>
		</li>
	@endforeach

</ul>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1> {{ $task->body }} </h1>


<div class="comments">
    <ul class="list-group">
    
       @foreach ($task->comments as $comment)
       <li class="list-group-item">

       <strong>
 	
			 {{ $comment->created_at->diffForHumans() }}: &nbsp;


	   </strong>
 	
   {{ $comment->body }}


       </li>
	@endforeach
</ul>


</div>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>

  <div class="blog-post">
  <br>
  <a href="/info/{{ $task->id }}">
  <h2 class="blog-post-title"> {{ $task->title }}
  </a>
  </h2>

  <p class="blog-post-meta">
    
    {{ $task->created_at->toFormattedDateString() }}
  </p>

  {{ $task->body }}
 
   </div>
  

</body>
</html>
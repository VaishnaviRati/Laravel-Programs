@extends ('welcome')

@section ('content')
<br>
<br>
<h1> Create A Post</h1><br><br>

<form method="POST" action="/posts">
{{csrf_field()}}

  <div class="form-group">
    <label for="body">Body</label>
    <textarea id="body" name="body" class="form-control" ></textarea>
    
  </div>

  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" name="title" >
  </div>

  <button type="submit" class="btn btn-primary">Publish</button>

@include ('errors')

</form>
@endsection

@section ('footer')

<h1>Thank you</h1>

@endsection
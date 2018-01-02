@extends ('welcome')

@section ('content')

@foreach ($tasks as $task)

@include('posts')

@endforeach

@endsection

@section ('footer')

@endsection
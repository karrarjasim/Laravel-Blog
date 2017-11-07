@extends('master')

@section('content')



<!-- First Blog Post -->
@foreach ($posts as $post)
<h2>
    <a href="/post/{{$post->id}}">{{ $post->title }}</a>
</h2>
<hr>
<p><span class="glyphicon glyphicon-time"></span> Posted on {{ $post->created_at}}  </p>

@if ($post->url)
<img class="img-responsive" src="../upload/{{ $post->url}}" alt="">
@endif
<hr>
<p class="lead">{{ $post->body}}</p>
<a class="btn btn-primary" href="/post/{{$post->id}}">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

<hr>
@endforeach
<form method="POST" action="/post/store" enctype="multipart/form-data">
{{ csrf_field() }}
<div class="form-groub">
<label for="title">Title</label>
<input type="text" name="title" id="title" class="form-control">
</div>
<div class="form-groub">
<label for="title">Body</label>
<input type="text" name="body" id="body" class="form-control">
</div>

<div class="form-groub">
<label for="url">Image</label>
<input type="file" class="form-control" id="url" name="url">
</div>

<div class="form-groub">
<button type="submit" class="btn btn-info">Add Post</button>
</div>
</form>
   <div>
   @foreach ( $errors->all() as $error)
   {{ $error}}
<br>
@endforeach   
   </div>



@stop
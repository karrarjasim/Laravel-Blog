@extends('master')

@section('content')


<head>
<link href="../css/style.css" rel="stylesheet">
</head>
             
    
                <h2>
                    <a href="#">{{ $post->title }}</a>
                </h2>
              
                <p><span class="glyphicon glyphicon-time"></span> Posted on {{ $post->created_at->toDayDateTimeString()}}</p>
                <hr>
                <img class="img-responsive" src="../upload/{{ $post->url}}" alt="">
                <hr>
                <p class="lead">{{ $post->body}}</p>
              
                <hr>
                <br>
<div class="comment">
    @foreach ( $post->commetns as $comment)

<div class="well">  {{$comment->body}} </div>


    @endforeach
</div>


                <br>
                <form method="POST" action="/post/{{ $post->id}}/store" >             
{{ csrf_field() }}


<div class="form-groub">
<textarea name="body" id="body" class="form-control"> </textarea> 
</div>

<div class="form-groub">
<button type="submit" class="btn btn-info">Add Comment</button>
</div>
</form>
            
                <!-- Pager -->
                <ul class="pager">
                    <li class="previous">
                        <a href="#">&larr; Older</a>
                    </li>
                    <li class="next">
                        <a href="#">Newer &rarr;</a>
                    </li>
                </ul>



@stop
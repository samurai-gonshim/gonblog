@extends('layouts/layout')

@section('content')
<div class="starter-template">
    <h1>
       Blog Page
    </h1>

    <dl>
    @foreach($blogs as $blog) 
	    <dt> <h3>{{ $blog->title }}<h3> </dt>
	    <dd>
	   	<p class="bg-info"> {{ $blog->body }} </p>
	   	@foreach($blog->comments as $comment)
	   		<blockquote>
	   		<p>{{ $comment->comment }}</p>
	   		<footer> {{ $comment->user->username }} </footer>
	   		</blockquote>
	   	@endforeach
	   	</dd>
	@endforeach
	</dl>
</div>
@stop
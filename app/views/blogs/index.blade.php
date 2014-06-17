@extends('layouts/layout')

@section('content')

<div class="container">

    <div class="row">

        <div class="col-lg-12">
            <h1 class="page-header">Gon's Camp
                <small>Blog Homepage</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="index.html">Home</a>
                </li>
                <li class="active">Blog Home</li>
            </ol>
        </div>

    </div>

    <div class="row">

        <div class="col-lg-8">

		@foreach($blogs as $blog)
            <h1><a href="blog-post.html">{{ $blog->title }}</a></h1>
            <p class="lead">by <a href="#">{{ $blog->user->username }}</a></p>
            <hr>
            <p><i class="fa fa-clock-o"></i> Posted on {{ $blog->created_at}} </p>
            <hr>
            <a href="blog-post.html">
                <img src="http://placehold.it/900x300/daebe9&text=No+Photo+Yet" class="img-responsive">
            </a>
            <hr>
            <p>{{ str_limit($blog->body, 200, '...') }} </p>
            <h5> <strong> Tags : </strong>
                @foreach($blog->tags as $tag)
                    <a class="btn btn-xs btn-success" href="#" role="button">{{ $tag->tag }}</a>
                @endforeach
            </h6>
            
            <a class="btn btn-sm btn-primary" href="blog-post.html">Read More <i class="fa fa-angle-right"></i></a>

            <hr>
		@endforeach


            <ul class="pager">
                <li class="previous"><a href="#">&larr; Older</a>
                </li>
                <li class="next"><a href="#">Newer &rarr;</a>
                </li>
            </ul>

        </div>

        <div class="col-lg-4">
            <div class="well">
                <h4>Blog Search</h4>
                <div class="input-group">
                    <input type="text" class="form-control">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button"><i class="fa fa-search"></i>
                        </button>
                    </span>
                </div>
                <!-- /input-group -->
            </div>
            <!-- /well -->
            <div class="well">
                <h4>Popular Blog Categories</h4>
                <div class="row">
                    <div class="col-lg-6">
                        <ul class="list-unstyled">
                            <li><a href="#dinosaurs">Dinosaurs</a>
                            </li>
                            <li><a href="#spaceships">Spaceships</a>
                            </li>
                            <li><a href="#fried-foods">Fried Foods</a>
                            </li>
                            <li><a href="#wild-animals">Wild Animals</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <ul class="list-unstyled">
                            <li><a href="#alien-abductions">Alien Abductions</a>
                            </li>
                            <li><a href="#business-casual">Business Casual</a>
                            </li>
                            <li><a href="#robots">Robots</a>
                            </li>
                            <li><a href="#fireworks">Fireworks</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /well -->
            <div class="well">
                <h4>Side Widget Well</h4>
                <p>Bootstrap's default well's work great for side widgets! What is a widget anyways...?</p>
            </div>
            <!-- /well -->
        </div>
    </div>

</div>

@stop
@extends('layouts/layout')

@section('meta-title', 'Blog')

@section('content')

<div class="container">
    
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header"> 
                {{ $blog->title }}
            </h2>
        </div>
    </div>

    <div class="row">

        <div class="col-lg-8">

            <!-- the actual blog post: title/author/date/content -->
            <p><i class="fa fa-clock-o"></i> Posted on {{ $blog->created_at }} by {{ HTML::mailto($blog->user->email, $blog->user->username) }}</a>
            </p>
            <img src="http://placehold.it/900x300" class="img-responsive">
            <hr>
            <p>{{{ $blog->body }}}</p>
            <p><strong>Placeholder text by:</strong>
            </p>
            <ul>
                <li><a href="http://spaceipsum.com/">Space Ipsum</a>
                </li>
                <li><a href="http://cupcakeipsum.com/">Cupcake Ipsum</a>
                </li>
                <li><a href="http://tunaipsum.com/">Tuna Ipsum</a>
                </li>
            </ul>

            <hr>


            <!-- the comments -->
            <h3>Start Bootstrap
                <small>9:41 PM on August 24, 2013</small>
            </h3>
            <p>This has to be the worst blog post I have ever read. It simply makes no sense. You start off by talking about space or something, then you randomly start babbling about cupcakes, and you end off with random fish names.</p>

            <h3>Start Bootstrap
                <small>9:47 PM on August 24, 2013</small>
            </h3>
            <p>Don't listen to this guy, any blog with the categories 'dinosaurs, spaceships, fried foods, wild animals, alien abductions, business casual, robots, and fireworks' has true potential.</p>

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
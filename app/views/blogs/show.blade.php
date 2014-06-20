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
            <!-- Tags -->
            @include('layouts.partials.tag')


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
            @foreach($blog->comments as $comment)
                <h3>{{ $comment->user->username }}
                    <small>{{ $comment->created_at }}</small>
                </h3>
                <i class="fa fa-comment-o fa-2x pull-left fa-border text-info"></i><p>{{ $comment->comment }}</p>
            @endforeach

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
            @if($blog->user_id === Auth::user()->id)
            <div class="well">
                <h4>Blog Edits</h4>
                <p>{{ HTML::decode(link_to_route('blogs.destroy', '<i class="fa fa-trash-o"></i>'.'  Delete This Post', [$blog->id], ['class' => 'btn btn-sm btn-danger'])) }} </p>
            </div>
            @endif
            <!-- /well -->
        </div>
    </div>

</div>


@stop
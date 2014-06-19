@extends('layouts/layout')

@section('meta-title', 'Blog')

@section('content')

<div class="container">
    
       <div class="row">

            <div class="col-lg-12">
                <h1 class="page-header">Blog Post
                    <small>{{ $blog->title }}</small>
                </h1>
                <ol class="breadcrumb">
                    
                    @foreach (Request::segments() as $seg) 
                        <li class={{ set_active(Request::path()) }} >{{ $seg }}</li>
                    @endforeach

                </ol>
            </div>
            <p>{{ Request::url() }}</p>
            <p>{{{ URL::current() }}}</p>
            <p>{{{ Route::currentRouteName() }}}</p>
<!--             <p>{{ strpos(Request::url(), route('blogs.show')) !== false ? 'Yay' : 'Nay' }}</p>
 -->

        </div>

</div>


@stop
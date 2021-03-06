@extends('layouts/layout')

@section('meta-title', 'Edit a blog id '.$blog->id)

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-lg-12">
                <h1 class="page-header">Gon's Camp
                    <small>Edit post</small>
                </h1>
                <ol class="breadcrumb">
                    <li> {{ link_to_route('home', 'Home') }} </li>
                    <li class={{ set_active_route('blogs') }}>Blog Home</li>
                </ol>
            </div>
        </div>

        {{ Form::model($blog, ['route' => ['blogs.update', $blog->id], 'method' => 'PATCH']) }}  

            <!-- Title Field -->
            <div class="form-group">
                {{ Form::label('title', 'Blog Title: ') }}
                {{ Form::text('title', null, ['class' => 'form-control', 'required' => 'required']) }}
                {{ $errors->first('title', '<span class="error">:message</span>') }}
            </div>
        
            <!-- Body Field -->
            <div class="form-group">
                {{ Form::label('body', 'Body: ') }}
                {{ Form::textarea('body', null, ['class' => 'form-control', 'required' => 'required']) }}
                {{ $errors->first('body', '<span class="error">:message</span>') }}
            </div>
            
            <div class="form-group">
                {{ Form::hidden('user_id', Auth::user()->id) }}
            </div>
            <!-- Submit Field -->
            <div class="form-group">
                {{ Form::submit('Update', ['class' => 'btn btn-sm btn-primary']) }}
            </div>

        {{ Form::close() }}
    </div>
@stop
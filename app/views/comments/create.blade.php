@extends('layouts/layout')

@section('meta-title', 'New comment')

@section('content')

    <div class="container">
        <div class="row">

            <div class="col-lg-12">
                <h1 class="page-header">Gon's Camp
                    <small>New comment</small>
                </h1>
                <ol class="breadcrumb">
                    <li> {{ link_to_route('home', 'Home') }} </li>
                    <li class={{ set_active_route('blogs') }}>Blog Home</li>
                </ol>
            </div>

        </div>        

        {{ $request }}

        {{ Form::open(['route' => 'comments.store']) }}

            <!-- Body Field -->
            <div class="form-group">
                {{ Form::label('comment', 'Comment: ') }}
                {{ Form::textarea('comment', null, ['class' => 'form-control', 'required' => 'required']) }}
                {{ $errors->first('comment', '<span class="error">:message</span>') }}
            </div>
            
            <div class="form-group">
                {{ Form::hidden('user_id', Auth::user()->id) }}
            </div>

            <!-- Submit Field -->
            <div class="form-group">
                {{ Form::submit('Submit', ['class' => 'btn btn-sm btn-primary']) }}
            </div>
        {{ Form::close() }}
        
    </div>
@stop
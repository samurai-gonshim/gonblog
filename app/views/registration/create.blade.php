@extends('layouts/layout')

@section('meta-title', 'Sign Up')


@section('content')
            <h1>Sign Up</h1>
        
            {{ Form::open(['route' => 'registration.store']) }}

                <!-- Username Field -->
                <div class="form-group">
                    {{ Form::label('username', 'Username:') }}
                    {{ Form::text('username', null, ['class' => 'form-control', 'required' => 'required']) }}
                    {{ $errors->first('username', '<span class="error">:message</span>') }}
                </div>
            
                <!-- Email Field -->
                <div class="form-group">
                    {{ Form::label('email', 'Email:') }}
                    {{ Form::text('email', null, ['class' => 'form-control', 'required' => 'required']) }}
                    {{ $errors->first('email', '<span class="error">:message</span>') }}
                </div>

                <!-- Password Field -->
                <div class="form-group">
                    {{ Form::label('password', 'Password:') }}
                    {{ Form::password('password', ['class' => 'form-control', 'required' => 'required']) }}
                    {{ $errors->first('password', '<span class="error">:message</span>') }}
                </div>

                <!-- Password Field -->
                <div class="form-group">
                    {{ Form::label('password_confirmation', 'Password:') }}
                    {{ Form::password('password_confirmation', ['class' => 'form-control', 'required' => 'required']) }}
                </div>
            
                <!-- Create Account Field -->
                <div class="form-group">
                    {{ Form::submit('Create Account', ['class' => 'btn btn-sm btn-primary']) }}
                </div>
            {{ Form::close() }}

@stop


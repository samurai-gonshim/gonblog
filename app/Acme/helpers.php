<?php

function errors_for($attribute, $errors)
{
	return $errors->first($attribute, '<span class="error">:message</span>');
}

function link_to_profile($text = 'Profile')
{
    return link_to_route('profile', $text, Auth::user()->username);
}

// 
// active state indicator by path
function set_active($path, $active = 'active')
{
	return Request::is($path) ? $active : '';
}

// 
// active state detector by named route 
// true if $route='blogs' and currentRouteName='blogs.show'
//
function set_active_route($route, $active = 'active')
{
    return (strpos(Route::currentRouteName(), $route) !== false) ? $active : '';
}

// return gravatar url 
function gravatar_url($email)
{
    return 'http://www.gravatar.com/avatar/'.md5($email);
}
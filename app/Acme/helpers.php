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
// active state indicator
function set_active($path, $active = 'active')
{
	return Request::is($path) ? $active : '';
}

// 
// active state indicator by named route
function set_active_route($route, $active = 'active')
{
    return (Route::currentRouteName() === $route) ? $active : '';
}
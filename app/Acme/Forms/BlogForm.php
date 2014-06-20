<?php namespace Acme\Forms;

use Laracasts\Validation\FormValidator;

class BlogForm extends FormValidator {

	protected $rules = [
		'title'     => 'required',
		'body'      => 'required',
        'user_id'   => 'required|integer'
	];

} 
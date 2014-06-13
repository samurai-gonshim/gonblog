<?php

class BlogsController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$blogs = Blog::with('User')->get();

        return View::make('blogs.index', compact('blogs'));
	}



}

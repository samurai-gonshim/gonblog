<?php

class CommentsController extends BaseController {

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{

		$request = Request::query();
		$id = Request::get('id');
		$commentable = Request::get('commentable');
		// var_dump($id);
		// return var_dump($commentable);
		// return var_dump($request);
        return View::make('comments.create')->with($request);
	}

	/**
	 * Store comment
	 * 
	 * @param  int $id
	 */
	public function store()
	{
		$comment = Input::only('comment');
		$id = Input::only('id');
		$commentable = Input::only('commentable');

		var_dump($id);
		var_dump($commentable);
		return var_dump($comment);
		// return 'store comment id of '. $id;
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}

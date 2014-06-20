<?php

use Acme\Forms\BlogForm;

class BlogsController extends BaseController {

    /**
     * @var BlogForm
     */
    protected $blogForm;

    /**
     * @param BlogForm $blogForm
     */
    function __construct(BlogForm $blogForm)
    {
        $this->blogForm = $blogForm;
    }

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
    /**
     * Show the form for creating a new blog
     *
     * @return Response
     */
    public function create()
    {
        return View::make('blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $input = Input::only('title', 'body', 'user_id');
        // user_id gets passed through hidden form

        $this->blogForm->validate($input);  // see /app/start/global.php for error handling 
        // var_dump($input);

        Blog::create($input);

        return Redirect::route('blogs.index');
    }

    /**
     * Display the specified blog.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $blog = Blog::with('User')->findOrFail($id);

        return View::make('blogs.show', compact('blog'));
    }

    /**
     * Show the form for editing the specified blog.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $blog = Blog::find($id);

        return View::make('blogs.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        $blog = Blog::findOrFail($id);

        $validator = Validator::make($data = Input::all(), Blog::$rules);

        if ($validator->fails())
        {
            return Redirect::back()->withErrors($validator)->withInput();
        }

        $blog->update($data);

        return Redirect::route('blogs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        var_dump('destory id of '.$id);

        // Blog::destroy($id);

        // return Redirect::route('blogs.index');
    }


}

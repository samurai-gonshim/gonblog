<?php

class Blog extends Eloquent {
	protected $guarded = array();

    /**
     * Fillable fields
     *
     * @var array
     */
    protected $fillable = [
        'title', 'body', 'user_id'
    ];

    public function user()
    {
        return $this->belongsTo('User');
    }

    public function comments()
    {
        return $this->morphMany('Comment', 'commentable');
    }

    public function tags()
    {
        return $this->morphToMany('Tag', 'taggable');
    }

    public function isOwner()
    {
        if (Auth::guest()) return false;

        return Auth::user()->id == $this->user_id;

    }
    public function deleteAssociated()
    {
        if($this->comments()->count()) {
            $this->comments()->delete();
        }
    }
    // A Helper function 
    // return the number of comments for the blog
    public function returnNumOfComments()
    {
        $count = $this->comments()->count();
        if($count > 1) 
            return $count.' Comments';
        else 
            return $count.' Comment';
    }

}

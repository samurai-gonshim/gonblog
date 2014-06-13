<?php

class Blog extends Eloquent {
	protected $guarded = array();

    /**
     * Fillable fields
     *
     * @var array
     */
    protected $fillable = [
        'title', 'body'
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

}

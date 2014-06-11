<?php

class Comment extends Eloquent {
	protected $guarded = array();

    protected $fillable = [
        'comment'
    ];

    public function commentable()
    {
        return $this->morphTo();
    }

    public function user()
    {
        return $this->belongsTo('User');
    }


}

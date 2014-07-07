<?php

class Comment extends Eloquent {
    protected $guarded  = array();

    protected $fillable = [
    'comment', 'user_id', 'commentable_id', 'commentable_type'
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

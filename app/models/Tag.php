<?php

class Tag extends Eloquent {
	protected $guarded = array();

    /**
     * Fillable fields
     *
     * @var array
     */
    protected $fillable = [
        'tag'
    ];

    public function blogs() 
    {
    	return $this->morphedByMany('Blog', 'taggable');
    }


}

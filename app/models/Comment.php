<?php
/**
 * Created by PhpStorm.
 * User: tt
 * Date: 06-11-2014
 * Time: 10:06
 */

class Comment extends Eloquent {

	public function commentable()
	{
		return $this->morphTo();
	}

	public function author()
	{
		return $this->belongsTo('User');
	}
} 
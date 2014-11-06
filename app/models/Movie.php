<?php
/**
 * Created by PhpStorm.
 * User: tt
 * Date: 06-11-2014
 * Time: 10:10
 */

class Movie extends Eloquent {

	public function comments()
	{
		return $this->morphMany('Comment', 'commentable');
	}
} 
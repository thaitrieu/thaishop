<?php
/**
 * Created by PhpStorm.
 * User: tt
 * Date: 06-11-2014
 * Time: 10:12
 */

class Book extends Eloquent {
	public function comments()
	{
		return $this->morphMany('Comment', 'commentable');
	}
} 
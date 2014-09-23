<?php
/**
 * Created by PhpStorm.
 * User: tt
 * Date: 23-09-2014
 * Time: 12:33
 */



class Product extends Eloquent{

    public $timestamps = true;
    public $fillable = ['name', 'price', 'description', 'quantity', 'manufacturers_id'];
} 
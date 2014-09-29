<?php
/**
 * Created by PhpStorm.
 * User: tt
 * Date: 29-09-2014
 * Time: 12:23
 */


class Cart {

    protected $items;

    protected $sum;

    protected $userId;

    public function __construct()
    {
        $this->sum = 5;
    }

    public function addItem()
    {

    }

    public function removeItem()
    {

    }

    public function getItems()
    {

    }

    public function getSum()
    {
        return $this->sum;
    }

    public function getUserId()
    {

    }
} 
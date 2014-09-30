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

    public function __construct($items)
    {
        $this->items = $items;
    }

    public function addItem()
    {
        //
    }

    public function removeItem()
    {
        //
    }

    public function getItems()
    {
        return $this->items;
    }

    public function getSum()
    {
        return $this->sum;
    }

    public function getUserId()
    {
        //
    }
} 
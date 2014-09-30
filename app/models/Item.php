<?php
/**
 * Created by PhpStorm.
 * User: tt
 * Date: 30-09-2014
 * Time: 13:55
 */

class Item {

    protected $id;

    protected $name;

    protected $price;

    public function __construct($id, $name, $price)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getPrice()
    {
        return $this->price;
    }

} 
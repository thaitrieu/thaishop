<?php
/**
 * Created by PhpStorm.
 * User: tt
 * Date: 23-09-2014
 * Time: 13:55
 */

class ProductRepository implements ProductRepositoryInterface {

    public function getAll()
    {
        return Product::all()->toArray();
    }
} 
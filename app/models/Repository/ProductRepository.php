<?php
/**
 * Created by PhpStorm.
 * User: tt
 * Date: 23-09-2014
 * Time: 13:55
 */

//namespace Models\Repository;

class ProductRepository implements ProductRepositoryInterface {

//    public function __construct(Product $product)
//    {
//        $this->model = $product;
//    }


    public function getAll()
    {
        return Product::all();
    }



    public function getTitle()
    {
        $products = Product::all();
        foreach ($products as $p) {
            $data[] = $p->name;
        }
        return $data;
    }
} 
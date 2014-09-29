<?php
/**
 * Created by PhpStorm.
 * User: tt
 * Date: 29-09-2014
 * Time: 09:11
 */

class ManufacturerRepository implements ManufacturerRepositoryInterface {

    public function getAll()
    {
        $manufacturers = Manufacturer::all();

        return $manufacturers;
    }

    public function getManufacturerProducts($id)
    {
        $products = Product::all();
        $manufacturerProducts = [];

        foreach($products as $p) {
            if($p->manufacturer_id == $id){
                $manufacturerProducts[] = $p;
            }
        }

        return $manufacturerProducts;
    }
} 
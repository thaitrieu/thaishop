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

    public function addProduct()
    {
        $input = Input::all();


        $rules = [
            'name' => 'required|alpha_num',
            'description' => 'required',
            'price' => 'required',
            'quantity' => 'required'];

        $validator = Validator::make($input, $rules);

        if(!$validator->passes()) {
            return Redirect::back()->withInput()->withErrors($validator);
        }

        $product = new Product();
        $product->name = Input::get('name');
        $product->description = Input::get('description');
        $product->quantity = Input::get('quantity');
        $product->price = Input::get('price');
        $product->manufacturer_id = Input::get('manufacturer_id');
        $product->save();

        return $product;
    }
}
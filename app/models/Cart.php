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

    protected $productList = [];

    public function __construct()
    {

    }

    public function addItems($items)
    {
        $this->items = $items;
    }

    public function getProducts()
    {
        $items = $this->items;

//        foreach($items as $i){
//            $qtySelected = $items[key($items)];
//
//            //sørg for at bruge array indexet her!
//            $product = Product::find(key($items));
//
//            $productSum = $qtySelected * $product->price; // sum per produkt
//
//            $this->sum += $productSum; //tilføje produkt sum til samlet sum
//
//            $product->qtySelected = $qtySelected; //tilføje $qtySelected til object
//
//            $product->productSum = $productSum;
//
//            $this->productList[] = $product; //tilføje item til et array, som bliver sendt tilbage
//
//
//        }

        for($i = 0; $i < count($items); $i++){

            $productObject = Product::find(key($items)); //henter data om det valgte produkt

            $qtySelected = $items[key($items)]; //henter antal stk fra session for hvert produkt

            $productSum = $qtySelected * $productObject->price; // sum per produkt

            $this->sum += $productSum; //tilføje produkt sum til samlet sum

            $productObject->qtySelected = $qtySelected; //tilføje $qtySelected til object

            $productObject->productSum = $productSum;

            $this->productList[] = $productObject; //tilføje item til et array, som bliver sendt tilbage

            next($items);
        }

//        $i = 0;
//        while($i <= count($items)){
//            $productObject = Product::find(key($items)); //henter data om det valgte produkt
//
//            $qtySelected = $items[key($items)]; //henter antal stk fra session for hvert produkt
//
//            $productSum = $qtySelected * $productObject->price; // sum per produkt
//
//            $this->sum += $productSum; //tilføje produkt sum til samlet sum
//
//            $productObject->qtySelected = $qtySelected; //tilføje $qtySelected til object
//
//            $productObject->productSum = $productSum;
//
//            $this->productList[] = $productObject; //tilføje item til et array, som bliver sendt tilbage
//
//            next($items);
//
//            $i++;
//        }

        return $this->productList;
    }

    public function getQty()
    {
        $items = $this->items;
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
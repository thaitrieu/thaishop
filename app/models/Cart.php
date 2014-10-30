<?php
/**
 * Created by PhpStorm.
 * User: tt
 * Date: 29-09-2014
 * Time: 12:23
 */


class Cart {

    public $items;

    protected $sum;

    protected $productList = [];

    public function __construct()
    {

    }

    public function addItems($items)
    {
        $this->items = $items;
    }

//    public function addSingleItem($product_id)
//    {
//        if(Session::has('items')){                              //tjekker om der allrede findes det/andre varer gemt i session
//            $items = Session::get('items');
//
//            if(array_key_exists($product_id, $items)){          //tjekker om det valgte allerede findes
//                $items[$product_id] += 1;
//            } else {
//                $items[$product_id] = 1;
//            }
//
//            Session::put('items', $items);                      // gemmer opdatering i session
//
//        } else {
//            $items = [$product_id => 1];                        // opretter og gemmer, fordi intet findes i session
//            Session::put('items', $items);
//        }
//    }

	public function addItemsToSession($productId, $quantity)
	{
		if(Session::has('items')){
			$items = Session::get('items');

			if(array_key_exists($productId, $items)){
				$items[$productId] += $quantity;
			} else {
				$items[$productId] = $quantity;
			}

			Session::put('items', $items);
		} else {
			$items = [$productId => $quantity];

			Session::put('items', $items);
		}
	}

    public function updateCart($newQty)
    {
        $oldQty = Session::get('items');

        foreach($newQty as $n){
            $oldQty[key($newQty)] = $n;
            next($newQty);
        }

        Session::put('items', $oldQty);
    }

    public function getProducts()
        {
        // refactor koden

        $items = $this->items;

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

        return $this->productList;
    }

    public function getSum()
    {
        return $this->sum;
    }

    public function emptyCart()
    {
        Session::forget('items');
    }

    public function getItemList()
    {
        if(Session::has('items')) {
            $items = Session::get('items');     // Find $items array i session

            $this->addItems($items);      // send $items array til cart // gammel kode?

            $productList = $this->getProducts();      // brug cart til at læse det og sende nødvendig data tilbage

            return $productList;
        } else {
            return null;
        }
    }
}
<?php



class CartsController extends \BaseController {


    public function __construct(ManufacturerRepositoryInterface $manufacturer)
    {
        $this->manufacturer = $manufacturer;
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $cart = new ShoppingCart();
//        $p = new Product();
//        $p->

        $item1 = new Item(1, 'Nike Air', 200);
        $item2 = new Item(2, 'Adidas Air', 300);
        $item3 = new Item(3, 'Pumja Air', 400);

        $cart->addItem($item1);
        $cart->addItem($item2);
        $cart->updateItem($item2, 99);

        dd($cart);

//        $manufacturers = $this->manufacturer->getAll();
//
//        $cart = new Cart(Session::get('items'));
//
//        dd($cart->getItems());
//
////        $cart->getData(); // ikke implementeret
//
//        return View::make('cart.index', compact('manufacturers'));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
        $product_id = (integer) Input::get('product_id');

        if(Session::has('items')){
            $items = Session::get('items');

            if(array_key_exists($product_id, $items)){
                $items[$product_id] += 1;
            } else {
                $items[$product_id] = 1;
            }

            Session::put('items', $items);

        } else {
            $items = [Input::get('product_id') => 1];
            Session::put('items', $items);
            return Session::get('items');
        }

        return Redirect::action('CartsController@index');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
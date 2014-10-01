<?php



class CartsController extends \BaseController {


    public function __construct(ManufacturerRepositoryInterface $manufacturer, ProductRepositoryInterface $product)
    {
        $this->manufacturer = $manufacturer;
        $this->product = $product;
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        if(Session::has('cart'))
        {
            dd(Session::get('cart'));
        } else {
            return 'Indkøbskurven eksisterer ikke i session!';
        }

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
        $cart = new ShoppingCart();

        if(Session::has('cart')){
            $cart = Session::get('cart');
        }

        $product_id = Input::get('product_id');

        $product = $this->product->getProduct($product_id);

        $name = $product->name;
        $price = $product->price;

        $item = new Item($product_id, $name, $price);

        $cart->updateItem($item, 1);

        Session::put('cart', $cart);

        return Redirect::action('CartsController@index');

//        $product_id = (integer) Input::get('product_id');
//
//        if(Session::has('items')){
//            $items = Session::get('items');
//
//            if(array_key_exists($product_id, $items)){
//                $items[$product_id] += 1;
//            } else {
//                $items[$product_id] = 1;
//            }
//
//            Session::put('items', $items);
//
//        } else {
//            $items = [Input::get('product_id') => 1];
//            Session::put('items', $items);
//            return Session::get('items');
//        }
//
//        return Redirect::action('CartsController@index');
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

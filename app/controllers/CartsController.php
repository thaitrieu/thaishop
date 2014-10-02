<?php



class CartsController extends \BaseController {

    protected $manufacturer;

    protected $product;

    protected $cart;

    public function __construct(ManufacturerRepositoryInterface $manufacturer, ProductRepositoryInterface $product, Cart $cart)
    {
        $this->manufacturer = $manufacturer;
        $this->product = $product;
        $this->cart = $cart;
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{

        // Find $items array i session
        // send $items array til cart
        // brug cart til at læse det og sende nødvendig data tilbage
        // vis det i view

        $manufacturers = $this->manufacturer->getAll();

        if(Session::has('items'))
        {
            $items = Session::get('items');

            $this->cart->addItems($items);

            $productList = $this->cart->getProducts();

            $sum = $this->cart->getSum();

            return View::make('cart.index', compact('productList', 'manufacturers', 'sum'));
        } else {
            return View::make('cart.index', compact('manufacturers'));
        }
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
            $items = [$product_id => 1];
            Session::put('items', $items);
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
        return 'du er nået frem til edit';
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update()
	{
		// Læse ændringer i kurven og opdater
        $oldQty = Session::get('items');
        $newQty = Input::get('newQty');

        foreach($newQty as $n){
            $oldQty[key($newQty)] = $n;
            next($newQty);
        }

        Session::put('items', $oldQty);

        return Redirect::action('CartsController@index');

	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy()
	{
		Session::forget('items');
        return Redirect::action('CartsController@index');
	}


}

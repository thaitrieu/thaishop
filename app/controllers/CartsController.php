<?php



class CartsController extends \BaseController {

    protected $manufacturer;

    protected $product;

    protected $cart;

    protected $cartRepo;

    public function __construct(ManufacturerRepositoryInterface $manufacturer, ProductRepositoryInterface $product, Cart $cart, CartRepositoryInterface $cartRepo)
    {
        $this->manufacturer = $manufacturer;
        $this->product = $product;
        $this->cart = $cart;
        $this->cartRepo = $cartRepo;
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $manufacturers = $this->manufacturer->getAll();

        View::share('manufacturers', $manufacturers);

        $itemList = $this->cart->getItemList();

        if($itemList){

            $sum = $this->cart->getSum();       //henter sum

            return View::make('cart.index', compact('itemList', 'manufacturers', 'sum'));    // vis det i view

        } else {
            return View::make('cart.index', compact('manufacturers'));      // vis det i view
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
        $product_id = (integer) Input::get('product_id');       //henter valgte produkt id fra formen

        $this->cart->addSingleItem($product_id);

        return Redirect::action('CartsController@index');       // viser indkøbskurv
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
        $newQty = Input::get('newQty');

        $this->cart->updateCart($newQty);

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
		$this->cart->emptyCart();

        return Redirect::action('CartsController@index');
	}


}

<?php

class ProductsController extends \BaseController {

    public function __construct(ProductRepositoryInterface $product)
    {
        $this->product = $product;    //!!!!!!!!!!!!!!!
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $manufacturers = Manufacturer::all();   //ud i repo
        $data = $this->product->getAll();

        return View::make('products.index', compact('data', 'manufacturers'));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
//        $data = $this->product->addProduct();
//
//        return Redirect::to('products');
        $manufacturers = Manufacturer::all();   //ud i repo
        return View::make('products.create', compact('manufacturers'));
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
        $this->product->addProduct();

        return Redirect::back();
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

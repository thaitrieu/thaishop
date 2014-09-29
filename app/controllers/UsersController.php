<?php

class UsersController extends \BaseController {

    public function __construct(UserRepositoryInterface $user, ManufacturerRepositoryInterface $manufacturer)
    {
        $this->manufacturer = $manufacturer;

        $this->user = $user;
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $manufacturers = $this->manufacturer->getAll();

        if(Auth::check()) {
            $manufacturers = $this->manufacturer->getAll();
            return View::make('user.index', compact('manufacturers'));
        }
        return View::make('user.login', compact('manufacturers'));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        $manufacturers = $this->manufacturer->getAll();

		return View::make('user.create', compact('manufacturers'));
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
        $manufacturers = $this->manufacturer->getAll();
		$this->user->createUser();

        return View::make('user.login', compact('manufacturers'));
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

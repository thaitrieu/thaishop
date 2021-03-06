<?php

class SessionsController extends \BaseController {

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
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        $manufacturers = $this->manufacturer->getAll();

        if(Auth::check()){
            $manufacturers = $this->manufacturer->getAll();
            return Redirect::to('users', compact('manufacturers'));}

		return View::make('user.login', compact('manufacturers'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
        $manufacturers = $this->manufacturer->getAll();

        $credentials = Input::only('email', 'password');

        if (Auth::attempt($credentials)) {
            return View::make('user.index', compact('manufacturers'));
        }

        return Redirect::back()->withInput();
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
	public function destroy()
	{
        Auth::logout();
        return Redirect::route('sessions.create');
	}
}
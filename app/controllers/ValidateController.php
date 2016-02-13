<?php

class ValidateController extends \BaseController {

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
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
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

	public function utama()
	{
		return View::make('utama');
	}

	public function process()
	{
		$rules=array(
			'email' => 'required|email|different:username',
			'username'=>'required|min:6',
			'password'=>'required|same:password_confirm'
		);

		$validation = Validator::make(Input::all(), $rules);
		if($validation->fails())
		{
			return Redirect::to('validate')->withErrors($validation)->withInput();
		}
		return Redirect::to('userresults')->withInput();
	}

	public function upload()
	{
		$file = array('image' => Input::file('image'));
		$rules = array('image' => 'required',);
		$validator = Validator::make($file,$rules);

		if($validator->fails())
		{
			return Redirect::to('upload')->withInput()->withErrors($validator);
		}
		else
		{
			if(Input::file('image')->isValid())
			{
				$destinationPath = 'uploads';
				$extension = Input::file('image')->getClientOriginalExtension();
				$fileName= rand(11111,99999).'.'.$extension;

				Input::file('image')->move($destinationPath,$fileName);

				Session::flash('success','Upload successfully');

				return Redirect::to('upload');
			}
			else
			{
				Session::flash('error','upload file is not valid');
				return Redirect::to('upload');
			}
		}

	}
}

<?php

class UploadsController extends \BaseController {
	protected $layout = "layout";
	
	public function __construct() {
		$this->beforeFilter('csrf', array('on'=>'post'));
		$this->beforeFilter('auth', array('only'=>array('getDashboard')));
	}

	/**
	 * Display a listing of uploads
	 *
	 * @return Response
	 */
	public function index()
	{
		$uploads = Upload::where('user_id', Auth::user()->id)->get();

		return View::make('uploads.index', compact('uploads'));
	}

	/**
	 * Show the form for creating a new upload
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('uploads.create');
	}

	/**
	 * Store a newly created upload in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Upload::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Upload::create($data);

		return Redirect::route('uploads.index');
	}

	/**
	 * Display the specified upload.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$upload = Upload::findOrFail($id);

		return View::make('uploads.show', compact('upload'));
	}

	/**
	 * Show the form for editing the specified upload.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$upload = Upload::find($id);

		return View::make('uploads.edit', compact('upload'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$upload = Upload::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Upload::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$upload->update($data);

		return Redirect::route('uploads.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Upload::destroy($id);

		return Redirect::route('uploads.index');
	}
	
	public function post_upload(){
 
		$input = Input::all();
		$rules = array();

		$validation = Validator::make($input, $rules);

		if ($validation->fails())
		{
		return Response::make($validation->errors->first(), 400);
		}
	 
		$file = Input::file('file');
 
		$destinationPath = 'uploaded';
		$filename = str_random(12);
		//$filename = $file->getClientOriginalName();
		//$extension =$file->getClientOriginalExtension(); 
		$upload_success = Input::file('file')->move($destinationPath, $filename.".".$file->getClientOriginalExtension());
		 
		if( $upload_success ) {
			
			$upload = new Upload;
			$upload->name = $file->getClientOriginalName();
			$upload->extension = $file->getClientOriginalExtension();
			$upload->user_id = Auth::user()->id;
			$upload->filename = $filename.".".$file->getClientOriginalExtension();
			$upload->save();
				
		   return Redirect::route('uploads.index');
		} else {
		   return Response::json('error', 400);
		}
	}

}
?>
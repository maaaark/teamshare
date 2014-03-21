<?php

class BaseController extends Controller {
	
	protected $layout = "layout";
	
	public function __construct() {
		$this->beforeFilter('auth', array('only'=>array('dashboard')));
	}
	
	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}
	
	public function dashboard() {
		$users = User::all();
		$this->layout->content = View::make('dashboard')->with('users', $users);
	}

}
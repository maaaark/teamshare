<?php
 
	class UsersController extends BaseController {
		protected $layout = "start";
		
		public function __construct() {
			$this->beforeFilter('csrf', array('on'=>'post'));
			$this->beforeFilter('auth', array('only'=>array('getDashboard')));
		}
		
		public function getRegister() {
			$this->layout->content = View::make('users.register');
		}
		
		public function index()
		{
			$users = User::all();
			return View::make('users.index')->with('users', $users);
		}
		
		public function show($id) {
			$user = User::find($id);
			if(is_null($user))
			{
				return Redirect::route('users.index');
			}

			$this->layout = View::make('layout');
			$this->layout->content = View::make('users.profile')->with('user', $user);
		}
		
		public function edit($id)
		{
			$user = User::find($id);
			if (is_null($user))
			{
				return Redirect::route('users.index');
			}
			return View::make('users.edit', compact('user'));
		}
		
		public function update($id)
		{
			$rules2 = array(
			'firstname'       => 'required',
			'lastname'        => 'required'
			);
			$validator = Validator::make(Input::all(), $rules2);

			// process the login
			if ($validator->fails()) {
				return Redirect::to('users/' . $id . '/edit')
					->withErrors($validator)
					->withInput(Input::except('password'));
			} else {
				// store
				$user = User::find($id);
				$user->firstname = Input::get('firstname');
				$user->lastname = Input::get('lastname');
				$user->save();

				// redirect
				Session::flash('message', 'Successfully updated user!');
				return Redirect::to('users/'.$id);
			}
		}
		
		public function destroy($id)
		{
			User::find($id)->delete();
			return Redirect::route('users.index');
		}
	
		public function getLogin() {
			$this->layout->content = View::make('users.login');
		}
				
		public function signin() {
		
			if (Auth::attempt(array('email'=>Input::get('email'), 'password'=>Input::get('password')))) {
				return Redirect::to('/dashboard')->with('message', 'You are now logged in!');
			} else {
				return Redirect::to('users/login')
					->with('message', 'Your username/password combination was incorrect')
					->withInput();
			}

		}
		
		public function create()
		{
			return View::make('users.register');
		}
		
		
		public function store()
		{
			$input = Input::all();
			$validation = Validator::make($input, User::$rules);

			if ($validation->passes())
			{
				$user = new User;
				$user->firstname = Input::get('firstname');
				$user->lastname = Input::get('lastname');
				$user->email = Input::get('email');
				$user->password = Hash::make(Input::get('password'));
				$user->save();

				return Redirect::to('/login')->with('message', 'Vielen Dank für deine Registrierung!');
			}

			return Redirect::route('users.create')
				->withInput()
				->withErrors($validation)
				->with('message', 'There were validation errors.');
		}
		
		public function logout() {
			Auth::logout();
			return Redirect::to('login')->with('message', 'Your are now logged out!');
		}
	
	}

?>
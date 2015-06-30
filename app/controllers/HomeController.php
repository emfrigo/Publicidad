<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function index()
	{
		return View::make('login');
	}

	public function dashboard(){
		return View::make('dashboard');
	}

	public function users(){
		return View::make('users');
	}

	public function clients(){
		return View::make('clients');
	}

	public function billing(){
		return View::make('billing');
	}

	public function campains(){
		return View::make('campains');
	}

	public function pattern(){
		return View::make('patterns');
	}

	// Recepcion de informacion de loguero
	public function login() {

			$username 	= Input::get('username');
			$password 	= Input::get('password');

		if ( $username == 'demo' && $password == 'demo' ) {
			return Redirect::to('dashboard');
		}

		return Redirect::to('login')->with('error_message', 'Usuario y/o contraseña invalidos');

	}

	// Cierre de session
	public function logout() {
		Auth::logout();
		return Redirect::to('login');
	}
}

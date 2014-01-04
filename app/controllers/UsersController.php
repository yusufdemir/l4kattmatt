<?php

class UsersController extends BaseController {

	protected $layout = "layouts.main";

	public function __construct() {
		$this->beforeFilter('csrf', array('on'=>'post'));
        // giriş yapılmadan erişilemeyecek yerleri buradan belirliyoruz!
		//$this->beforeFilter('auth', array('only'=>array('getDashboard')));
	}

	public function getRegister() {
		$this->layout->content = View::make('users.register');
	}

	public function postCreate() {
		$validator = Validator::make(Input::all(), User::$rules);

		if ($validator->passes()) {
			$user = new User;
			$user->firstname = Input::get('firstname');
			$user->lastname = Input::get('lastname');
			$user->email = Input::get('email');
			$user->password = Hash::make(Input::get('password'));
			$user->save();

			return Redirect::to('users/login')->with('successMessage', 'Kayıt Olduğunuz İçin Teşekkür Ederiz.!');
		} else {
			return Redirect::to('users/register')->with('errorMessage', 'Kayıt Sırasında Birkaç Hata Oluştu ')->withErrors($validator)->withInput();
		}
	}

	public function getLogin() {
		$this->layout->content = View::make('users.login');
	}

	public function postSignin() {
		if (Auth::attempt(array('email'=>Input::get('email'), 'password'=>Input::get('password')))) {
			return Redirect::to('users/dashboard')->with('successMessage', 'Başarıyla Giriş Yapıldı');
		} else {
			return Redirect::to('users/login')
				->with('errorMessage', 'Bu bilgilere sahip bir kullanıcı bulunamadı!Bilgileri kontrol edip tekrar deneyiniz!')
				->withInput();
		}
	}

	public function getDashboard() {
		$this->layout->content = View::make('home.dashboard');
	}

	public function getLogout() {
		Auth::logout();
		return Redirect::to('users/login')->with('successMessage', 'Başarıyla Çıkış Yaptın!');
	}
}
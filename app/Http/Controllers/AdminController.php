<?php 
	namespace App\Http\Controllers;

	use App\Http\Controller\SessionController;
	use Illuminate\Http\Request;
	use App\Models\Admin\Admin;

	class LoginController extends SessionController{

		protected $login_key;

		public function __construct(){
			$this->login_key = md5('admin_login_key');
		}

		protected function checkLogin(){
			if($this->checkSession($this->login_key)){
				return true;
			}
			else{
				return false;
			}
		}

		public function doLogin(Request $request, Admin $admin){
			$username = $request->input('username');
			$password = $request->input('password');

			$master = $admin->select('password','admin_id')->where('username',$username)->get();
			if($master->count()){
				if(password_verify($password,$master[0]['password'])){
					$this->setSession($this->login_key,$master[0]['admin_id']);
					return redirect()->back();
				}
				else
				return redirect()->back()->with('message','Password invalid!');
			}
			else
			return redirect()->back()->with('message','Username not found!');
			return redirect('bookingindex');
		}
	}
<?php
	namespace App\Http\Controllers\Admin;
	
	use App\Http\Controllers\SessionController;
	use Illuminate\Http\Request;
	use App\Models\Admin\Student;
	
	class LogoutController extends SessionController{
		
		protected $login_key;
		
		public function __construct(){
			$this->login_key = md5('admin_login_key');
		}
		
		public function doLogout(){
			$this->deleteSession($this->login_key);
			return redirect('bookingindex');
		}
	}
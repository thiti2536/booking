<?php
	namespace App\Http\Controllers\Admin;
	
	use App\Http\Controllers\SessionController;
	use Illuminate\Http\Request;
	use App\Models\Admin\Student;
	
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
		
		public function doLogin(Request $request, Student $student){
			$username = $request->input('username');
			$password = $request->input('password');
			
			$student_login = $student->select('student_id','student_password')->where('student_id',$username)->get();
			
			if($student_login->count()){
				if(password_verify($password,$student_login[0]['student_password'])){
					$this->setSession($this->login_key, $student_login[0]['student_id']);
					return redirect('bookingindex')->with('message', 'Login Success!');
				}
				else{
					return redirect()->back()->with('message', 'Password invalid!');
				}
			}
			else{
				return redirect()->back()->with('message', 'Username not found!');
			}
		}
	}
	
	
<?php
	namespace App\Http\Controllers;
	
	use DB;
	use App\Http\Controllers\Controller;
	
	class SessionController extends Controller{
		public function openSession(){
			if(session_status() == PHP_SESSION_NONE){
				session_start();
			}
		}
		
		protected function checkSession($key){
			$this->openSession();
			if(isset($_SESSION[$key])){
				return true;
			}
			else{
				return false;
			}
		}
		
		protected function getSession($key){
			$this->openSession();
			return $_SESSION[$key];
		}
		
		protected function setSession($key,$id){
			$this->openSession();
			$_SESSION[$key] = $id;
		}
		
		protected function deleteSession($key){
			$this->openSession();
			$_SESSION[$key] = NULL;
			unset($_SESSION[$key]);
		}
	}
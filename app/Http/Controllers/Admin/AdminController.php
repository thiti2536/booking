<?php 
	namespace App\Http\Controllers\Admin;
	
	use App\Http\Controllers\Admin\LoginController;
	use App\Models\Admin\Student;
	
	class AdminController extends LoginController{
		
		public function getStudentInfo(){
			$student = new Student;
			
			if($this->checkLogin()){
				$student_id = $this->getSession($this->login_key);
				$query = $student->select()->where('student_id',$student_id)->get();
				
				if($query->count()){
					return $query[0];
				}
				else{
					$this->deleteSession($this->login_key);
					return '';
				}
			}
			else{
				return '';
			}
		}
	}
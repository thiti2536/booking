<?php 
	namespace App\Http\Controllers;
	use DB;
	use App\Http\Controllers\Admin\AdminController;
	use Illuminate\Http\Request;
	use Illuminate\Pagination\LengthAwarePaginator;
	use Illuminate\Database\Query\Builder;

class BookingController extends AdminController {

	public function index(){
		//$room = DB::table('room')->paginate(10);
		//$student = DB::select('select * from student');
		//return view('booking.index')->with('data',$room)->with('data1',$student);
		
		if($this->checkLogin()){
			$check_login  = 1;
			$student_name = $this->getStudentInfo();
		}
		else{
			$check_login = 0;
			$student_name = "";
		}
		return view('booking.index',['check_login' => $check_login, 'student_name' => $student_name]);
	}

	public function profile(){
		$stu = "553020923-1";
		//$stushow = DB::table('student')->where('student_id',$stu);
		$student = DB::select('select * from student where student_id = :stu',['stu' => $stu]);
		return view('booking.profile')->with('student',$student);
	}































	public function logout(){
		\Session::pull('session', $username);
		return redirect('bookingindex');
	}
	
	public function login(Request $request){
		$post   = $request->all();
		$vlogin = \Validator::make($request->all(),[
			'username' => 'required',
			'password' => 'required',
		]);
		if($vlogin->fails()){
			return redirect()->back()->withErrors($vlogin->errors());
		}
		else{
			$check_username = "";
			
			$username       = $post['username'];
			$password       = $post['password'];

			//Check Student
			$check_username = DB::select('select * from student where student_id = :user',['user' => $username]);
			
			if(!empty($check_username)){

				$check_password = "";

				$check_password = DB::select('select * from student where student_id = :user and student_password = :pass',['user' => $username,'pass' => $password]);

				if(!empty($check_password)){
					\Session::flash('success','Login Success !!!');
					\Session::put('session', $username);
					return redirect('bookingindex');
				}
				else{
					\Session::flash('fails','Password is not true !!!');
					return redirect('bookingindex');
				}
			}
			else{
				$staff_username = "";

				//Check Staff
				$staff_username = DB::select('select * from staff where staff_id = :staffuser',['staffuser' => $username]);
				
				if(!empty($staff_username)){
					\Session::flash('success','Staff Login Success !!!');
					return redirect('bookingindex');
				}
				else{
					\Session::flash('fails','Not Found Staff !!!');
					return redirect('bookingindex');
				}
			}
		}
	}


}

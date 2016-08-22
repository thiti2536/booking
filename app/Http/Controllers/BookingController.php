<?php 
	namespace App\Http\Controllers;
	use DB;
	use Illuminate\Http\Request;
	use Illuminate\Pagination\LengthAwarePaginator;

class BookingController extends Controller {

	public function index(){
		$room = DB::table('room')->paginate(10);

		$student = DB::select('select * from student');

		return view('booking.index')->with('data',$room)->with('data1',$student);
	}
	
	public function login(){
		$data = array(
			'username' => $post['username'],
			'password' => $post['password'],
		);
		
		$login_result = DB::table('student')->where('student_id',$post['username']);
		if($login_result > 0){
			echo "ssss";
			return redirect('bookingindex');
		}
		
	}
	


}

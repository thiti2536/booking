<?php
	namespace App\Models\Admin;
	
	use Illuminate\Database\Eloquent\Model;

	class Student extends Model{
		protected $table = 'student';
		protected $key   = 'student_id';
	}
<?php

namespace ehealth3\Http\Controllers;
use ehealth3\Models\User;
use Illuminate\Http\Request;
use Auth;

class AuthController extends Controller
{
    //
    public function getPatientSignup(){
		return view('auth.patient.signup');
	}
	public function getDoctorSignup(){
		return view('auth.doctor.signup');
	}
	public function getAdminSignup(){
		return view('auth.admin.signup');
	}




	public function postPatientSignup(Request $request){
		$this->validate($request, [
			'first_name' => 'required|max:255',
			'last_name' => 'required|max:255',
			'gender'=>'required',
			'username' => 'required|unique:users|alpha_dash|max:20',
			'password' => 'required|min:6',
			'phone_number' => 'required',
			'address' => 'required',
			]);

		User::create([
			'first_name' => $request->input('first_name'),
			'last_name' => $request->input('last_name'),
			'gender'=>$request->input('gender'),
			'username' => $request->input('username'),
			'password' => bcrypt($request->input('password')),
			'phone_number' => $request->input('phone_number'),
			'address' => $request->input('address'),
			'is_patient'=> '1',

			]);


	

		return redirect()->route('home')->with('info', 'Thank you for registering with us! Your account is pending!');
	}

	public function postDoctorSignup(Request $request){
		$this->validate($request, [
			'first_name' => 'required|max:255',
			'last_name' => 'required|max:255',
			'gender'=>'required',
			'username' => 'required|unique:users|alpha_dash|max:20',
			'password' => 'required|min:6',
			'phone_number' => 'required',
			'speciality_area' => 'required',
			'hospital_name' => 'required',
			'hospital_location' => 'required',

			]);

		User::create([
			'first_name' => $request->input('first_name'),
			'last_name' => $request->input('last_name'),
			'gender'=>$request->input('gender'),
			'username' => $request->input('username'),
			'password' => bcrypt($request->input('password')),
			'phone_number' => $request->input('phone_number'),
			'speciality_area' => $request->input('speciality_area'),
			'hospital_name' => $request->input('hospital_name'),
			'hospital_location' => $request->input('hospital_location'),
			'is_doctor'=> '1',

			]);

		return redirect()->route('home')->with('info', 'Thank you for registering with us! Your account is pending!');

	}

	public function postAdminSignup(Request $request){
		$this->validate($request, [
			'username' => 'required|unique:users|alpha_dash|max:20',
			'password' => 'required|min:6',
			]);

		User::create([
			'username' => $request->input('username'),
			'password' => bcrypt($request->input('password')),
			'is_admin'=> '1',
			]);


	}
	public function getPatientSignin(){
		return view('auth.patient.signin');
		
	}

	 public function postPatientSignin(Request $request){

    	$this->validate($request,[
    		'username' => 'required',
    		'password' => 'required',

    		]);
		if(!Auth::attempt($request->only(['username','password']), $request->has('remember'))){

			return redirect()->back()->with('info', 'Could not sign you in with those details.');
		}
		return redirect()->route('home')->with('info', 'You are now logged in');
	}

	public function getDoctorSignin(){
		return view('auth.doctor.signin');
		
	}

	 public function postDoctorSignin(Request $request){

    	$this->validate($request,[
    		'username' => 'required',
    		'password' => 'required',

    		]);
		if(!Auth::attempt($request->only(['username','password']), $request->has('remember'))){

			return redirect()->back()->with('info', 'Could not sign you in with those details.');
		}
		return redirect()->route('home')->with('info', 'You are now logged in');
	}



public function getAdminSignin(){
		return view('auth.admin.signin');
		
	}

	 public function postAdminSignin(Request $request){

    	$this->validate($request,[
    		'username' => 'required',
    		'password' => 'required',

    		]);
		if(!Auth::attempt($request->only(['username','password']), $request->has('remember'))){

			return redirect()->back()->with('info', 'Could not sign you in with those details.');
		}
		return redirect()->route('home')->with('info', 'You are now logged in');
	}


	public function getUserSignout(){
		Auth::logout();
		return redirect()->route('home');
	}
}

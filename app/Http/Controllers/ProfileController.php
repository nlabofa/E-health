<?php
namespace ehealth3\Http\Controllers;
use ehealth3\Models\User;
use ehealth3\Models\Message;
use Illuminate\Http\Request;
use Auth;


Class ProfileController extends Controller{
	
	public function getProfile($username){
		$user = User::where('username', $username)->first();

		if(!$user){
			abort(404);
		}

		return view('profile.index')
		->with('user', $user);


	}

	public function getDoctorEdit(){
		return view('profile.doctor.edit');
	}
	public function postDoctorEdit(Request $request){
		$this->validate($request, [
		    'first_name' => 'required|max:255',
			'last_name' => 'required|max:255',
			'phone_number' => 'required',
			'speciality_area' => 'required',
			'hospital_name' => 'required',
			'hospital_location' => 'required',

			]);
		Auth::user()->update([
			'first_name' => $request->input('first_name'),
			'last_name' => $request->input('last_name'),
			'phone_number' => $request->input('phone_number'),
			'speciality_area' => $request->input('speciality_area'),
			'hospital_name' => $request->input('hospital_name'),
			'hospital_location' => $request->input('hospital_location'),
			]);

		return redirect()->route('profile.doctor.edit')->with('info', 'Your profile has been updated.');


	}

	public function getPatientEdit(){
		return view('profile.patient.edit');
	}
	public function postPatientEdit(Request $request){
		$this->validate($request, [
		    'first_name' => 'required|max:255',
			'last_name' => 'required|max:255',
			'phone_number' => 'required',
			'address' => 'required',
			]);
		Auth::user()->update([
			'first_name' => $request->input('first_name'),
			'last_name' => $request->input('last_name'),
			'phone_number' => $request->input('phone_number'),
			'address' => $request->input('address'),
			]);

		return redirect()->route('profile.patient.edit')->with('info', 'Your profile has been updated.');


	}
}

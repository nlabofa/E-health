<?php
namespace ehealth3\Http\Controllers;
use ehealth3\Models\User;
use ehealth3\Models\Diabetes;
use Illuminate\Http\Request;
use Auth;
use DB;

Class SelfCareController extends Controller{
	public function getIndex($username){
		$user = User::where('username', $username)->first();
		//$diabetes =  Diabetes::where('user_id', $username)->first();
		$diabetes=DB::table('diabetes')->get();
		if (!$user){
			return redirect()->route('home');
		}
		return view('selfcare.diabetes.index')->with('user',$user)->with('diabetes', $diabetes);
	}

	public function postDiabetesForm(Request $request){

		$this->validate($request, [
		    'age' => 'required',
		    'urinate' => 'required',
			'thirsty' => 'required',
			'hungry' => 'required',
			'weight' => 'required',
			'injury' => 'required',
			'irritated' => 'required',
			'tired' => 'required',
			'blurred' => 'required',
			]);

		Auth::user()->diabetes()->create([
			'age' => $request->input('age'),
			'urinate' => $request->input('urinate'),
			'thirsty' => $request->input('thirsty'),
			'hungry'=>$request->input('hungry'),
			'weight' => $request->input('weight'),
			'injury' => $request->input('injury'),
			'irritated' =>$request->input('irritated'),
			'tired' => $request->input('tired'),
			'blurred' => $request->input('blurred'),
			]);
		return redirect()->back()->with('info', 'posted');	

		
		}

		public function postDeleteDiabetes($user_id){
		$user = Diabetes::where('user_id', $user_id)->first();
		$user->delete();

		return redirect()->back();	

}
		public function getDiabetesCure(){
			return view('selfcare.diabetes.cure');
		}

		public function getDiabetesSymptoms(){
			return view('selfcare.diabetes.symptoms');
		}

		public function getDiabetesRisk(){
			return view('selfcare.diabetes.risk');
		}
		public function getDiabetesCause(){
			return view('selfcare.diabetes.cause');
		}
		public function getDiabetesPrevent(){
			return view('selfcare.diabetes.prevent');
		}
		public function getDiabetesCure2(){
			return view('selfcare.diabetes.cure2');
		}
		public function getDiabetesSymptoms2(){
			return view('selfcare.diabetes.symptoms2');
		}
		public function getDiabetesRisk2(){
			return view('selfcare.diabetes.risk2');
		}
		public function getDiabetesCause2(){
			return view('selfcare.diabetes.cause2');
		}
		public function getDiabetesPrevent2(){
			return view('selfcare.diabetes.prevent2');
		}


}



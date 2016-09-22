<?php
namespace ehealth3\Http\Controllers;
use DB;
use ehealth3\Models\User;
use Illuminate\Http\Request;


Class SearchController extends Controller{
	
	public function getResults(Request $request){
		$query= $request->input('query');

		if (!$query){
			return redirect()->route('home');
		}
		$users = User::where(DB::raw("CONCAT(first_name, ' ', last_name)"), 'LIKE', "%{$query}%")
		->orWhere('username', 'LIKE', "%{$query}%")
		->get();

		return view('search.results')->with('users', $users);


	}
}

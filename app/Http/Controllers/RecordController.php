<?php
namespace ehealth3\Http\Controllers;
use ehealth3\Models\User;
use ehealth3\Models\Diabetes;
use Illuminate\Http\Request;
use Auth;
use DB;
Class RecordController extends Controller{
	public function getIndex(){
		return view('record.index');
	}
}

<?php
namespace ehealth3\Http\Controllers;
use ehealth3\Models\User;
use ehealth3\Models\Status;
use Illuminate\Http\Request;
use Auth;


Class ForumController extends Controller{

	public function getIndex(){
		$statuses = Status::notReply()->where(function($query){
				return $query->where('user_id', Auth::user()->id)
				->orWhereIn('user_id', Auth::user()->friends()->lists('id'));
			})
			->orderBy('created_at', 'desc')
			->paginate(8);
		return view('forum.index')
		->with('statuses', $statuses);

	}
	public function postStatus(Request $request){
		$this->validate($request,[
			'status' =>'required|max:1000',
			]);

		Auth::user()->statuses()->create([
			'body'=>$request->input('status'),
			]);

		return redirect()->route('forum.index')->with('info', 'Status posted.');
	}
	public function postReply(Request $request, $statusId){
		$this->validate($request, [
			"reply-{$statusId}"=> 'required|max:1000'], [
			'required'=>  'The reply body is required.']);
		$status = Status::notReply()->find($statusId);

		if(!$status){
			return redirect()->route('home');
		}
		if(!Auth::user()->isFriendsWith($status->user) && Auth::user()->id !== $status->user->id){
			return redirect()->route('home');
		}
		$reply = Status::create([
			'body'=> $request->input("reply-{$statusId}"),
			])->user()->associate(Auth::user());

		$status->replies()->save($reply);

		return redirect()->back();
	}

	public function getLike($statusId){
		$status = Status::find($statusId);

		if (!$status){
			return redirect()->route('home');
		}
		if (!Auth::user()->isFriendsWith($status->user)){
			return redirect()->route('home');
		}
		if (Auth::user()->hasLikedStatus($status)){
			return redirect()->back();
		}
		$like = $status->likes()->create([]);
		Auth::user()->likes()->save($like);
		return redirect()->back();

	}
	
	}

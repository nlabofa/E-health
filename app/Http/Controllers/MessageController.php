<?php
namespace ehealth3\Http\Controllers;
use ehealth3\Models\User;
use ehealth3\Models\Message;
use Illuminate\Http\Request;
use Auth;


Class MessageController extends Controller{

	public function getIndex(){
		$messages = Message::notReply()->where(function($query){
				return $query->where('user_id', Auth::user()->id)
				->orWhereIn('user_id', Auth::user()->friends()->lists('id'));
			})
			->orderBy('created_at', 'desc')
			->paginate(8);
		return view('message.index')
		->with('messages', $messages);

	}


	
	public function postMessage(Request $request){
		$this->validate($request,[
			'message' =>'required|max:1000',
			]);

		Auth::user()->messages()->create([
			'body'=>$request->input('message'),
			]);

		return redirect()->route('message.index');
	}



	public function postReply(Request $request, $messageId){
		$this->validate($request, [
			"reply-{$messageId}"=> 'required|max:1000'], [
			'required'=>  'The reply body is required.']);

		$message = Message::notReply()->find($messageId);

		if(!$message){
			return redirect()->route('message.index');
		}
		if(!Auth::user()->isFriendsWith($message->user) && Auth::user()->id !== $message->user->id){
			return redirect()->route('message.index');
		}
		$reply =  Message::create([
			'body'=> $request->input("reply-{$messageId}"),
			])->user()->associate(Auth::user());

		$message->replies()->save($reply);

		return redirect()->back();
	}
	
	}

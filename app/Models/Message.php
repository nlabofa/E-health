<?php

namespace ehealth3\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model{
	protected $table = 'message';

	protected $fillable = ['body'];

	public function user(){
		return $this->belongsTo('ehealth3\Models\User', 'user_id');
	}
	public function scopeNotReply($query){
		return $query->whereNull('parent_id');
	}
	public function replies(){
		return $this->hasMany('ehealth3\Models\Message', 'parent_id');
	}
}
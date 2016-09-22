<?php

namespace ehealth3\Models;

use Illuminate\Database\Eloquent\Model;

class Status extends Model{
	protected $table = 'forum';

	protected $fillable = ['body'];

	public function user(){
		return $this->belongsTo('ehealth3\Models\User', 'user_id');
	}
	public function scopeNotReply($query){
		return $query->whereNull('parent_id');
	}
	public function replies(){
		return $this->hasMany('ehealth3\Models\status', 'parent_id');
	}
	public function likes(){
		return $this->morphMany('ehealth3\Models\Like', 'likeable');
	}
}
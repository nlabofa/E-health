<?php

namespace ehealth3\Models;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Auth;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class Diabetes extends Model implements AuthenticatableContract
{
    use Authenticatable;


    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'diabetes';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['age','urinate','thirsty','hungry','weight','injury','irritated','tired','blurred'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */

    public function user(){
        return $this->belongsTo('ehealth3\Models\User', 'user_id');
    }
}
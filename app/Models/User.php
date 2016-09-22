<?php

namespace ehealth3\Models;
use ehealth3\Models\Status;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Auth;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class User extends Model implements AuthenticatableContract
{
    use Authenticatable;


    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['first_name', 'last_name', 'gender', 'username','password','phone_number','address','speciality_area','hospital_name','hospital_location','is_patient','is_doctor','is_admin',];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];


    public function getName(){
        if ($this->first_name && $this->last_name){
            return "{$this->first_name} {$this->last_name}";
        }

        if ($this->first_name){
            return $this->first_name;
        }
        return null;
    }

    public function getNameOrUsername(){
        return $this->getName() ?: $this->username;
    }

    public function getFirstNameOrUsername(){
        return $this->first_name ?: $this->username;
    }

     public function getAvatarUrl(){
        return "https://www.gravatar.com/avatar/{{ md5($this->username) }}?d=mm&s=40";
    }
    public function messages(){
       return $this->hasMany('ehealth3\Models\Message', 'user_id');
   }
   public function statuses(){
       return $this->hasMany('ehealth3\Models\Status', 'user_id');
   }
   public function diabetes(){
       return $this->hasMany('ehealth3\Models\Diabetes', 'user_id');
   }
    public function likes(){
        return $this->hasMany('ehealth3\Models\Like', 'user_id');
    }
     public function friendsOfMine(){
        return $this->belongsToMany('ehealth3\Models\User', 'friends', 'doctor_id', 'patient_id');
    }
    public function friendOf(){
        return $this->belongsToMany('ehealth3\Models\User', 'friends', 'patient_id', 'doctor_id');
    }
    public function friends(){
        return $this->friendsOfMine()->wherePivot('accepted', true)->get()->Merge($this->friendOf()->where('accepted', true)->get());
    }

     public function friendRequests(){
        return $this->friendsOfMine()->wherePivot('accepted', false)->get();
    }
    public function friendRequestsPending(){
        return $this->friendOf()->wherePivot('accepted', false)->get();
    }
    public function hasFriendRequestPending(User $user){
        return (bool) $this->friendRequestsPending()->where('id', $user->id)->count();
    }
    public function hasFriendRequestReceived(User $user){
        return (bool) $this->friendRequests()->where('id', $user->id)->count();
    }

    public function addFriend(User $user){
         $this->friendOf()->attach($user->id);
    }
    public function deleteFriend(User $user){
         $this->friendOf()->detach($user->id);
         $this->friendsOfMine()->detach($user->id);
    }
    public function acceptFriendRequest(User $user){
        $this->friendRequests()->where('id', $user->id)->first()->pivot->update([
            'accepted' => true,]);
    }
    public function isFriendsWith(User $user){
        return (bool) $this->friends()->where('id', $user->id)->count();
    }
    public function hasLikedStatus(Status $status){
        return (bool) $status->likes->where('user_id', $this->id)->count();
    }
}
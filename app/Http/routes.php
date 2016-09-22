<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', [
    'uses'=>'\ehealth3\Http\Controllers\HomeController@index',
    'as'=> 'home',
]);

Route::get('/patientsignup', [
	'uses' => '\ehealth3\Http\Controllers\AuthController@getPatientSignup',
	'as' => 'auth.patients.signup',
	'middleware' => ['guest']

	]);

Route::get('/doctorsignup', [
	'uses' => '\ehealth3\Http\Controllers\AuthController@getDoctorSignup',
	'as' => 'auth.doctors.signup',
	'middleware' => ['guest']

	]);

Route::get('/adminsignup', [
	'uses' => '\ehealth3\Http\Controllers\AuthController@getAdminSignup',
	'as' => 'auth.admin.signup',
	'middleware' => ['guest']

	]);


Route::post('/patientsignup', [
	'uses' => '\ehealth3\Http\Controllers\AuthController@postPatientSignup',
	'middleware' => ['guest']

	]);

Route::post('/doctorsignup', [
	'uses' => '\ehealth3\Http\Controllers\AuthController@postDoctorSignup',
	'middleware' => ['guest']

	]);

Route::post('/adminsignup/', [
	'uses' => '\ehealth3\Http\Controllers\AuthController@postAdminSignup',
	'middleware' => ['guest']

	]);







Route::get('/patientsignin', [
	'uses' => '\ehealth3\Http\Controllers\AuthController@getPatientSignin',
	'as' => 'auth.patients.signin',
	'middleware' => ['guest']

	]);

Route::post('/patientsignin', [
	'uses' => '\ehealth3\Http\Controllers\AuthController@postPatientSignin',
	'middleware' => ['guest']
	]);

Route::get('/doctorsignin', [
	'uses' => '\ehealth3\Http\Controllers\AuthController@getDoctorSignin',
	'as' => 'auth.doctors.signin',
	'middleware' => ['guest']

	]);

Route::post('/doctorsignin', [
	'uses' => '\ehealth3\Http\Controllers\AuthController@postDoctorSignin',
	'middleware' => ['guest'],
	]);

Route::get('/adminsignin', [
	'uses' => '\ehealth3\Http\Controllers\AuthController@getAdminSignin',
	'as' => 'auth.admin.signin',
	'middleware' => ['guest'],

	]);

Route::post('/adminsignin', [
	'uses' => '\ehealth3\Http\Controllers\AuthController@postAdminSignin',
	'middleware' => ['guest'],
	]);

Route::get('/signout', [
	'uses' => '\ehealth3\Http\Controllers\AuthController@getUserSignout',
	'as' => 'auth.signout',

	]);

Route::get('/search', [
	'uses' => '\ehealth3\Http\Controllers\SearchController@getResults',
	'as' => 'search.results',
	]);


Route::get('/user-{username}', [
	'uses' => '\ehealth3\Http\Controllers\ProfileController@getProfile',
	'as' => 'profile.index',
	]);


Route::get('/doctoredit', [
	'uses' => '\ehealth3\Http\Controllers\ProfileController@getDoctorEdit',
	'as' => 'profile.doctor.edit',
	]);

Route::post('/doctoredit', [
	'uses' => '\ehealth3\Http\Controllers\ProfileController@postDoctorEdit',
	'as' => 'profile.doctor.edit',
	]);

Route::get('/patientedit', [
	'uses' => '\ehealth3\Http\Controllers\ProfileController@getPatientEdit',
	'as' => 'profile.patient.edit',
	]);

Route::post('/patientedit', [
	'uses' => '\ehealth3\Http\Controllers\ProfileController@postPatientEdit',
	'as' => 'profile.patient.edit',
	]);

Route::get('/friends', [
	'uses' => '\ehealth3\Http\Controllers\FriendsController@getIndex',
	'as' => 'friends.index',
	]);

Route::get('/addfriend-{username}', [
	'uses' => '\ehealth3\Http\Controllers\FriendsController@getAdd',
	'as' => 'friend.add',

	]);
Route::get('/acceptfriend-{username}', [
	'uses' => '\ehealth3\Http\Controllers\FriendsController@getAccept',
	'as' => 'friend.accept',
	]);

Route::post('/friends-delete-{username}', [
	'uses' => '\ehealth3\Http\Controllers\FriendsController@postDelete',
	'as' => 'friend.delete',
	]);
Route::get('/message', [
	'uses' => '\ehealth3\Http\Controllers\MessageController@getIndex',
	'as' => 'message.index',
	]);
Route::get('/message-post', [
	'uses' => '\ehealth3\Http\Controllers\MessageController@postMessage',
	'as' => 'message.post',
	]);

Route::post('/message-{messageId}-reply',[
	'uses' => '\ehealth3\Http\Controllers\MessageController@postReply',
	'as' => 'message.reply',
	]);

Route::get('/forum', [
	'uses' => '\ehealth3\Http\Controllers\ForumController@getIndex',
	'as' => 'forum.index',
	]);
Route::post('/forum-post', [
	'uses' => '\ehealth3\Http\Controllers\ForumController@postStatus',
	'as' => 'forum.post',
	]);
Route::post('/forum-{statusId}-reply',[
	'uses' => '\ehealth3\Http\Controllers\ForumController@postReply',
	'as' => 'status.reply',
	]);

Route::get('/forum-{statusId}-like',[
	'uses' => '\ehealth3\Http\Controllers\ForumController@getLike',
	'as' => 'status.like',
	]);


Route::get('/patientrecord', [
	'uses' => '\ehealth3\Http\Controllers\RecordController@getIndex',
	'as' => 'record.index',
	]);
Route::get('/selfcare-{username}', [
	'uses' => '\ehealth3\Http\Controllers\SelfCareController@getIndex',
	'as' => 'selfcare.index',
	]);

Route::post('/selfcare-{username}',[
	'uses' => '\ehealth3\Http\Controllers\SelfCareController@postDiabetesForm',
	]);

Route::post('/selfcareDelete-{user_id}',[
	'uses' => '\ehealth3\Http\Controllers\SelfCareController@postDeleteDiabetes',
	'as' => 'diabetes.delete',
	]);
Route::get('/selfcareDiacure', [
	'uses' => '\ehealth3\Http\Controllers\SelfCareController@getDiabetesCure',
	'as' => 'selfcare.diabetes.cure',
	]);

Route::get('/selfcareDiasymptoms', [
	'uses' => '\ehealth3\Http\Controllers\SelfCareController@getDiabetesSymptoms',
	'as' => 'selfcare.diabetes.symptoms',
	]);

Route::get('/selfcareDiarisk', [
	'uses' => '\ehealth3\Http\Controllers\SelfCareController@getDiabetesRisk',
	'as' => 'selfcare.diabetes.risk',
	]);
Route::get('/selfcareDiacause', [
	'uses' => '\ehealth3\Http\Controllers\SelfCareController@getDiabetesCause',
	'as' => 'selfcare.diabetes.cause',
	]);
Route::get('/selfcareDiaprevent', [
	'uses' => '\ehealth3\Http\Controllers\SelfCareController@getDiabetesPrevent',
	'as' => 'selfcare.diabetes.prevent',
	]);
Route::get('/selfcareDiaprevent2', [
	'uses' => '\ehealth3\Http\Controllers\SelfCareController@getDiabetesPrevent2',
	'as' => 'selfcare.diabetes.prevent2',
	]);

Route::get('/selfcareDiacure2', [
	'uses' => '\ehealth3\Http\Controllers\SelfCareController@getDiabetesCure2',
	'as' => 'selfcare.diabetes.cure2',
	]);
Route::get('/selfcareDiasymptoms2', [
	'uses' => '\ehealth3\Http\Controllers\SelfCareController@getDiabetesSymptoms2',
	'as' => 'selfcare.diabetes.symptoms2',
	]);
Route::get('/selfcareDiarisk2', [
	'uses' => '\ehealth3\Http\Controllers\SelfCareController@getDiabetesRisk2',
	'as' => 'selfcare.diabetes.risk2',
	]);
Route::get('/selfcareDiacause2', [
	'uses' => '\ehealth3\Http\Controllers\SelfCareController@getDiabetesCause2',
	'as' => 'selfcare.diabetes.cause2',
	]);

@extends('templates.default')

@section('content')
<h3>Update your profile</h3>

	<div class="row">
	    <div class="col-lg-6">
	        <form class="form-vertical" role="form" method="post" action="{{route('profile.patient.edit')}}">
	            <div class="row">
	                <div class="col-lg-6">
	                    <div class="form-group{{$errors->has('first_name') ?' has-error': ''}}">
	                        <label for="first_name" class="control-label">First name</label>
	                        <input type="text" name="first_name" class="form-control" id="first_name" value="{{Request::old('first_name') ?: Auth::user()->first_name}}">
	                        @if($errors->has('first_name'))
	                        <span class="help-block">{{$errors->first('first_name')}}</span>
	                        @endif
	                    </div>
	                </div>
	                <div class="col-lg-6">
	                    <div class="form-group{{$errors->has('last_name') ?' has-error': ''}}">
	                        <label for="last_name" class="control-label">Last name</label>
	                        <input type="text" name="last_name" class="form-control" id="last_name" value="{{Request::old('last_name') ?: Auth::user()->last_name}}">
	                        @if($errors->has('last_name'))
	                        <span class="help-block">{{$errors->first('last_name')}}</span>
	                        @endif
	                    </div>
	                </div>
	            </div>
	            <div class="form-group{{$errors->has('phone_number') ?' has-error': ''}}">
	                <label for="location" class="control-label">Phone number</label>
	                <input type="text" name="phone_number" class="form-control" id="location" value="{{Request::old('phone_number') ?: Auth::user()->phone_number}}">
	                @if($errors->has('phone_number'))
	                        <span class="help-block">{{$errors->first('phone_number')}}</span>
	                @endif
	            </div>
	             <div class="form-group{{$errors->has('address') ?' has-error': ''}}">
	                <label for="location" class="control-label">Address</label>
	                <textarea type="text" name="address" class="form-control" id="address"  value="{{Request::old('address') ?: Auth::user()->address}}"></textarea>
	                @if($errors->has('address'))
	                        <span class="help-block">{{$errors->first('address')}}</span>
	                @endif
	            </div>
	            <div class="form-group">
	                <button type="submit" class="btn btn-default">Update</button>
	            </div>
	            <input type="hidden" name="_token" value="{{Session::token()}}">
	        </form>
	    </div>
	</div>
@stop
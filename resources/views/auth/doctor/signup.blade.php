@extends('templates.default')

@section('content')

<section>
    <div class="container">
     <ol class="breadcrumb">
       <li><a href="#" style="color:#05A9E8;">Home</a></li>
       <li class="active" style="font-weight: bold;color:black;">Doctor Registration</li>
     </ol>
    </div>

    <div class="container">

      <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6" style="background-color:#05A9E8;">
           <h2 class="text-center" style="color:black;font-weight: bold;">DOCTOR REGISTRATION</h2> 
        </div>
        <div class="col-md-2" style="" ></div>
      </div>
      </br>
       <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
           <p class="text-center" style="background-color:#e1e1e1; "> <strong>I want to register as a Patient!</strong></p> 
        </div>
        <div class="col-md-4" style="" ></div>
      </div>

      <div class="row"> 
        <div class="col-md-4"></div>
        <div class="col-md-4">
          <a class="btn btn-block" href="#">
            <div class="row" style="background-color: #658ad0;">
              
                <h4 class="text-center" style="color:white;"> <i class="fa fa-facebook-square fa-2x" style="color:#fff;"></i>     SIGN UP WITH FACEBBOK</h4>      
            </div>
          </a>  
        </div>
        <div class="col-md-4"></div>
      </div>


      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
          <a class="btn btn-block" href="#">
           <div class="row" style="background-color:#02cbfc;">
             <h4 class="text-center" style="color:white;"><i class="fa fa-twitter fa-2x" style="color:#fff;"></i>   SIGN UP WITH TWITTER</h4> 
           </div>
          </a> 
        </div>
        <div class="col-md-4"></div>
      </div>


      <div class="row">
        <div class="col-md-4"></div>
          <div class="col-md-4">
            <a href="#" class="btn btn-block">
              <div class="row"  style="background-color: #ed1c24;">
                <h4 class="text-center" style="color:white;"><i class="fa fa-google-plus-square fa-2x" style="color:#fff;"></i>   SIGN UP WITH GOOGLE</h4>  
              </div>
            </a> 
          </div>
        <div class="col-md-4"></div>
      </div>
      <br>


    <div class="container">
        <div class="row">
          <div class="col-md-3"></div>
          <div class="col-md-6">
            <form class="form-vertical" role="form" method="post" action="{{route('auth.doctors.signup')}}">
                <div class="form-group{{$errors->has('first_name') ? ' has-error' : ''}}">
                    <label for="email" class="control-label">Your first name</label>
                    <input type="text" name="first_name" class="form-control" placeholder = "Enter Your first name"id="first_name" value="{{Request::old('first_name') ?: '' }}">

                    @if ($errors->has('first_name'))
                    <span class="help-block">{{$errors->first('first_name')}}</span>
                    @endif
                </div>

                <div class="form-group{{$errors->has('last_name') ? ' has-error' : ''}}">
                    <label for="last_name" class="control-label">Enter your last name</label>
                    <input type="text" name="last_name" class="form-control" placeholder = "Enter Your last name"id="last_name" value="{{Request::old('last_name') ?: '' }}">

                    @if ($errors->has('last_name'))
                    <span class="help-block">{{$errors->first('last_name')}}</span>
                    @endif
                </div>

                <div class="form-group">
                    <label for="gender" class="control-label">Gender</label>
                    <select name="gender" class="form-control" id="gender"><option>-----</option><option>Male</option><option>Female</option></select>
                </div>

                <div class="form-group{{$errors->has('username') ? ' has-error' : ''}}">
                    <label for="username" class="control-label">Choose a username</label>
                    <input type="text" name="username" class="form-control" placeholder = "Enter a username"id="username" value="{{Request::old('username') ?: '' }}">

                    @if ($errors->has('username'))
                    <span class="help-block">{{$errors->first('username')}}</span>
                    @endif
                </div>

                <div class="form-group{{$errors->has('password') ? ' has-error' : ''}}">
                    <label for="password" class="control-label">Choose a password</label>
                    <input type="password" name="password"placeholder = "Enter a password" class="form-control" id="password">

                    @if ($errors->has('password'))
                    <span class="help-block">{{$errors->first('password')}}</span>
                    @endif
                </div>

                <div class="form-group{{$errors->has('phone_number') ? ' has-error' : ''}}">
                    <label for="phone_number" class="control-label">Enter your phone number</label>
                    <input type="text" name="phone_number" class="form-control" placeholder = "Enter Your phone nuber"id="phone_number" value="{{Request::old('phone_number') ?: '' }}">

                    @if ($errors->has('phone_number'))
                    <span class="help-block">{{$errors->first('phone_number')}}</span>
                    @endif
                </div>

                <div class="form-group{{$errors->has('speciality_area') ? ' has-error' : ''}}">
                    <label for="speciality_area" class="control-label">Choose a speciality area</label>
                    <select name="speciality_area" class="form-control" id=""><option>-----</option><option>Diabetes</option><option>Bones</option><option>Kidney</option><option>Ulcer</option><option>Eyes</option><option>Others</option></select>
                    @if ($errors->has('speciality_area'))
                    <span class="help-block">{{$errors->first('speciality_area')}}</span>
                    @endif
                </div>

                <div class="form-group{{$errors->has('hospital_name') ? ' has-error' : ''}}">
                    <label for="hospital_name" class="control-label">Enter your hospital name</label>
                    <input type="text" name="hospital_name" class="form-control" id="hospital_name"placeholder = "Enter Your hospital name" value="{{Request::old('hospital_name') ?: '' }}">

                    @if ($errors->has('hospital_name'))
                    <span class="help-block">{{$errors->first('hospital_name')}}</span>
                    @endif
                </div>

                <div class="form-group{{$errors->has('hospital_location') ? ' has-error' : ''}}">
                    <label for="hospital_location" class="control-label">Enter your hospital location</label>
                    <textarea type="text" name="hospital_location" class="form-control" id="hospital_location" placeholder = "Enter address of the hospital"value="{{Request::old('hospital_location') ?: '' }}"></textarea>

                    @if ($errors->has('hospital_location'))
                    <span class="help-block">{{$errors->first('hospital_location')}}</span>
                    @endif
                </div>
                <div class="well">
                   <div class="form-group">
                   <div class="col-md-offset-0">
                     <div class="checkbox"> 
                       <label><input type="checkbox">I agree to Terms and Conditions</input></label></div>
                     </div>
                    </div>
                </div>
                
                <div class="form-group">
                    <button type="submit" class="btn pull-right" style="background-color:#05A9E8;"><span style="color:white;font-weight: bold;">Sign Up</span></button>
                </div>
                <input type="hidden" name="_token" value="{{Session::token()}}">
            </form>
          </div>
          <div class="col-md-3"></div>
        </div>
    </div>

</section>
   

@stop
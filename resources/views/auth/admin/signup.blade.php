@extends('templates.default')

@section('content')
<section>
    <div class="container">
     <ol class="breadcrumb">
       <li><a href="#" style="color:#05A9E8;">Home</a></li>
       <li class="active" style="font-weight: bold;color:black;">Admin Registration</li>
     </ol>
    </div>

    <div class="container">

      <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6" style="background-color:black;">
           <h2 class="text-center" style="color:#05A9E8;font-weight: bold;">Admin REGISTRATION</h2> 
        </div>
        <div class="col-md-2" style="" ></div>
      </div>
      </br>
       <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
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
            <form class="form-vertical" role="form" method="post" action="{{route('auth.admin.signup')}}">

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

                <div class="well">
                   <div class="form-group">
                   <div class="col-md-offset-0">
                     <div class="checkbox"> 
                       <label><input type="checkbox">I agree to Terms and Conditions</input></label></div>
                     </div>
                    </div>
                </div>
                
                <div class="form-group">
                    <button type="submit" class="btn pull-right" style="background-color: black;"><span style="color:white;font-weight: bold;">Sign Up</span></button>
                </div>
                <input type="hidden" name="_token" value="{{Session::token()}}">
            </form>
          </div>
          <div class="col-md-3"></div>
        </div>
    </div>

</section>
@stop
@extends('templates.default')

@section('content')
<section>
    <div class="container">
     <ol class="breadcrumb">
       <li><a href="#" style="color:#05A9E8;">Home</a></li>
       <li class="active" style="font-weight: bold;color:black;">Patient SignIn</li>
     </ol>
    </div>

    <div class="container">

      <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6" style="background-color:black;">
           <h2 class="text-center" style="color:#05A9E8;font-weight: bold;">SIGNIN</h2> 
        </div>
        <div class="col-md-2" style="" ></div>
      </div>
      </br>
       <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
           <p class="text-center" style="background-color:#e1e1e1; "> <strong>I want to signin as a Doctor!</strong></p> 
        </div>
        <div class="col-md-4" style="" ></div>
      </div>
      <br>

    <div class="container">
        <div class="row">
          <div class="col-md-3"></div>
          <div class="col-md-6">
            <form class="form-vertical" role="form" method="post" action="{{route('auth.patients.signin')}}">
                
                <div class="form-group{{$errors->has('username') ? ' has-error' : ''}}">
                    <label for="username" class="control-label">Enter your username</label>
                    <input type="text" name="username" class="form-control" placeholder = "Enter your username"id="username" value="{{Request::old('username') ?: '' }}">

                    @if ($errors->has('username'))
                    <span class="help-block">{{$errors->first('username')}}</span>
                    @endif
                </div>

                <div class="form-group{{$errors->has('password') ? ' has-error' : ''}}">
                    <label for="password" class="control-label">Enter your password</label>
                    <input type="password" name="password"placeholder = "Enter your password" class="form-control" id="password">

                    @if ($errors->has('password'))
                    <span class="help-block">{{$errors->first('password')}}</span>
                    @endif
                </div>

                <div class="well">
                   <div class="form-group">
                   <div class="col-md-offset-0">
                     <div class="checkbox"> 
                       <label><input type="checkbox" name="remember">Remember me</input></label></div>
                     </div>
                    </div>
                </div>
                
                <div class="form-group">
                    <button type="submit" class="btn pull-right" style="background-color: black;"><span style="color:white;font-weight: bold;">Sign In</span></button>
                </div>
                <input type="hidden" name="_token" value="{{Session::token()}}">
            </form>
          </div>
          <div class="col-md-3"></div>
        </div>
    </div>

</section>
@stop

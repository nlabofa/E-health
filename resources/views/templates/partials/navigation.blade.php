
<div class="row" style="padding-top: 10px;">
       <div class="col-md-3">
          <img class="img-responsive" src="img/logo.png" alt="image" style="max-height:150px;"></img>
       </div>
  @if (Auth::check())
   @if (Auth::user()->is_patient==true)
       <div class="col-md-9">
              <div class="col-md-5">
                <form class="navbar-form" role="search" action="{{route('search.results')}}">
                <div class="form-group">
                    <input type="text" name="query" class="form-control" placeholder="search users..">
                </div>
                <button type="submit" class="btn" style="background-color:#05a9e8;color:white;">Search</button>
                </form>
              </div>
              <div class="col-md-2"><a href="{{ route('profile.index', ['username'=> Auth::user()->username]) }}">{{ Auth::user()->getNameOrUsername()}}</a></div>
              <div class="col-md-2"><a href="{{ route('profile.patient.edit')}}">Update Profile</a></div>
              <div class="col-md-3"><a class="btn btn-block" type="submit" role="button" href="{{route('auth.signout')}}" style="background-color: black;color:white;"><h5 style="margin: 0px;">SIGNOUT</h5></a></div>
        </div>
        @elseif(Auth::user()->is_doctor==true)
        <div class="col-md-9">
              <div class="col-md-5">
                <form class="navbar-form" role="search" action="{{route('search.results')}}">
                <div class="form-group">
                    <input type="text" name="query" class="form-control" placeholder="search users..">
                </div>
                <button type="submit" class="btn" style="background-color:#05a9e8;color:white;">Search</button>
                </form>
              </div>
              <div class="col-md-2"><a href="{{ route('profile.index', ['username'=> Auth::user()->username]) }}">Dr. {{ Auth::user()->getNameOrUsername()}}</a></div>
              <div class="col-md-2"><a href="{{ route('profile.doctor.edit')}}">Update Profile</a></div>
              <div class="col-md-3"><a class="btn btn-block" type="submit" role="button" href="{{route('auth.signout')}}" style="background-color: black;color:white;"><h5 style="margin: 0px;">SIGNOUT</h5></a></div>
        </div>
        @elseif(Auth::user()->is_admin==true)
        <div class="col-md-9">
              <div class="col-md-7"></div>
              <div class="col-md-5"><a class="btn btn-block" type="submit" role="button" href="" style="background-color: black;color:white;"><h5 style="margin: 0px;">SIGNOUT</h5></a></div>
        </div>
        @endif
        @else
        <div class="col-md-9">
          <div class="col-md-6"></div>
            <div class="col-md-6">
                <div class="col-md-6">
                 <a class="btn btn-block" type="submit" role="button" href="{{route('auth.patients.signup')}}" style="background-color: black;color:white;"><h5 style="margin: 0px;">REGISTER</h5></a>
                </div>
                <div class="col-md-6">
                  <a class="btn btn-block" type="submit" role="button" href="{{route('auth.patients.signin')}}" style="background-color: #05a9e8;color:#FFF;"><h5 style="margin: 0px;">SIGNIN</h5></a></div>  
                </div>
            </div>
        </div>
        
        @endif
</div>

<div class="container">
  <div id="sec-nav">
    @if (Auth::check())
    @if (Auth::user()->is_patient==true)
    <ul>
      <!--<li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" >Forum<span class="caret"></span></a>
        <ul class="dropdown-menu" role="menu">
          <li><a href="#">Diabetes</a></li>
            <li><a href="#">Bones</a></li>
            <li><a href="#">Kidney</a></li>
            <li><a href="#">Ulcer</a></li>
            <li><a href="#">Aids</a></li>
            <li><a href="#">Eyes</a></li>
            <li><a href="#">Others</a></li>
        </ul>
      </li>-->
      <li><a href="{{route('forum.index')}}" >FORUM</a></li>
      <li><a href="{{route('record.index')}}" >HEALTH RECORD</a></li>
      <li><a href="#" >NEWS</a></li>
      <li><a href="{{route('selfcare.index', ['username'=> Auth::user()->username])}}" >SELF-CARE APP</a></li>
      <li><a href="{{route('friends.index')}}" >DOCTORS</a></li>
    </ul>
    @elseif (Auth::user()->is_doctor==true)
    <ul>
      <!--<li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" >FORUM<span class="caret"></span></a>
        <ul class="dropdown-menu" role="menu">
          <li><a href="#">Diabetes</a></li>
            <li><a href="#">Bones</a></li>
            <li><a href="#">Kidney</a></li>
            <li><a href="#">Ulcer</a></li>
            <li><a href="#">Aids</a></li>
            <li><a href="#">Eyes</a></li>
            <li><a href="#">Others</a></li>
        </ul>
      </li>-->
      <li><a href="{{route('forum.index')}}" >FORUM</a></li>
      <li><a href="#" >NEWS</a></li>
      <li><a href="" >REQUESTS</a></li>
      <li><a href="{{route('friends.index')}}" >PATIENTS</a></li>
    </ul>
     @elseif(Auth::user()->is_admin==true)
    <ul>
      <li><a href="#" >View all Users</a></li>
      <li><a href="#" >Respond requests</a></li>
      <li><a href="#" >New account</a></li>
    </ul>
    @endif
    @else
        <ul>
      <li class="active" style=""><a href="{{route('home')}}" >HOME</a></li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" >ABOUT US<span class="caret"></span></a>
        <ul class="dropdown-menu" role="menu">
          <li><a href="#">e-health Technology</a></li>
            <li><a href="#">what we do</a></li>
            <li><a href="#">Support&partners</a></li>
        </ul>
      </li>  
      <!--<li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" >Forum<span class="caret"></span></a>
        <ul class="dropdown-menu" role="menu">
          <li><a href="#">Diabetes</a></li>
            <li><a href="#">Bones</a></li>
            <li><a href="#">Kidney</a></li>
            <li><a href="#">Ulcer</a></li>
            <li><a href="#">Aids</a></li>
            <li><a href="#">Eyes</a></li>
            <li><a href="#">Others</a></li>
        </ul>
      </li>-->
      <li><a href="{{route('forum.index')}}" >FORUM</a></li>
      <li><a href="#"  data-toggle="tooltip" data-placement="top"title="You must be registered to view this." data-original-title="You must be registered to view this.">DOCTORS</a></li> 
     <li><a href="#" >NEWS</a></li>
      <li><a href="" >SELF-CARE APP</a></li>
      <li><a href="#" >RESOURCES</a></li>
    </ul>
    
    @endif
    <hr>
@extends('templates.default')

@section('content')

@if (Auth::user()->is_doctor==true)
	  <div class="row">
	    <div class="col-lg-6">
	        <h3>Your Patients</h3>
		     @if(!$friends->count())
				       <p>You have no patients presently.</p>
				       @else
					       @foreach ($friends as $user)
					          @include ('user/partials/userblock')
					       @endforeach

			       @endif			     

	    </div>
	    <div class="col-lg-6">
	        
	        <h3>Grant requests</h3>
	        @if(!$requests->count())
			       <p>You have no request.</p>
			       @else
				       @foreach ($requests as $user)
				          @include ('user/partials/userblock')
				       @endforeach

		       @endif
	       
	    </div>
	</div>
@else
    <div class="row">
	    <div class="col-lg-6">
	        <h3>Your Doctors</h3>
		     @if(!$friends->count())
				       <p>You have no doctors presently.</p>
				       @else
					       @foreach ($friends as $user)
					          @include ('user/partials/userblock')
					       @endforeach

			       @endif			     

	    </div>
	    <div class="col-lg-6">
	        
	        <h3>Grant requests</h3>
	        @if(!$requests->count())
			       <p>You have no request.</p>
			       @else
				       @foreach ($requests as $user)
				          @include ('user/partials/userblock')
				       @endforeach

		       @endif
	        
	    </div>
	</div>

@endif	

@stop

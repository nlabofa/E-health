@extends('templates.default')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-4">
			<form class="form-horizontal" role="form" method="post" action="{{route('selfcare.index', ['username'=> $user->username])}}">
			  <fieldset>
			    <legend>Diabetes self-care</legend>
			    <div class="form-group">
			    	 <label for="email" class="control-label">Enter your age</label>
                    <input type="text" name="age" class="form-control" value="{{Request::old('age') ?: '' }}">
			      <label for="select" class="control-label">How often do you urinate?</label>
			        <select class="form-control" name="urinate"><option>---</option><option>Very often</option><option>Not often</option></select>
			        <br>
			        <label for="select" class="control-label">Do you get thirsty easily?</label>
			        <select class="form-control" name="thirsty"><option>---</option><option>Yes</option><option>No</option></select>
			        <br>
			        <label for="select" class="control-label">How often do you get hungry?</label>
			        <select class="form-control" name="hungry"><option>---</option><option>Very often</option><option>Not often</option></select>
			        <br>
			        <label for="select" class="control-label">Do you observe losing weight recently?</label>
			        <select class="form-control" name="weight"><option>---</option><option>Yes</option><option>No</option></select>
			        <br>
			        <label for="select" class="control-label">Do you have an injury that won't heal quickly?</label>
			        <select class="form-control" name="injury"><option>---</option><option>Yes</option><option>No</option></select>
			        <br>
			        <label for="select" class="control-label">Do you get irritated easily?</label>
			        <select class="form-control" name="irritated"><option>---</option><option>Yes</option><option>No</option></select>
			        <br>
			        <label for="select" class="control-label">Do you get tired easily?</label>
			        <select class="form-control" name="tired"><option>---</option><option>Yes</option><option>No</option></select>
			        <br>
			        <label for="select" class="control-label">How often do you experience blurred vision?</label>
			        <select class="form-control" name="blurred"><option>---</option><option>Very often</option><option>Not often</option></select>
			        <br>
			    </div>
			    <div class="form-group pull-right">
			        <button type="reset" class="btn btn-default">Cancel</button>
			        <button type="submit" class="btn btn-primary">Submit
			        	<input type="hidden" name="_token" value="{{Session::token()}}">
			        </button>
			    </div>
			  </fieldset>
			</form>
		</div>
		<div class="col-md-4"><!--<?php echo $user->getName() ?>--></div>
		<div class="col-md-4">
			@foreach($diabetes as $diabetes)
			 @include('user.partials.diabetesblock')
			 @endforeach


		</div>
	</div>
</div>


@stop 
@if(Auth::user()->id === $diabetes->user_id)
	<table class="table table-striped table-hover " style="border: 2px solid #ce582f; " >
      <thead>
        <tr style="color:#ce582f;">
          <th style="display: inline-block;width:300px;">Your current Test Record</th>
        </tr>
      </thead><br>
      <tbody>
        <tr>
          <td>Your Age is:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $diabetes->age; ?></b></td>                  
        </tr>
        <tr class="danger">
          <td> You urinate: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $diabetes->urinate; ?></b></td>
        </tr>
        <tr class="warning">
          <td>You get thirsty easily?: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $diabetes->thirsty; ?></b></td>
        </tr>
        <tr class="success">
          <td>How often do you get hungry?: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $diabetes->hungry; ?></b></td>
        </tr>
        <tr>
          <td>You observed increase in weight?: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $diabetes->weight; ?></b></td>
        </tr>
        <tr class="danger">
          <td>Your injury doesn't heal quickly?: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $diabetes->injury; ?></b></td>
        </tr>
        <tr class="warning">
          <td>You get irritated easily? : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $diabetes->irritated; ?></b></td>
        </tr>
        <tr>
          <td>You get Tired easily?: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $diabetes->tired; ?></b></td>
        </tr>
        <tr>
          <td>You experience Blurr vision?: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $diabetes->blurred; ?></b></td>
        </tr>
      </tbody>
    </table> 
    <!--<p>Take a<a href="{{route('diabetes.delete', ['user_id'=> $diabetes->user_id])}}">  new test </a></p>-->
 

    @if ($diabetes->weight=="Yes" && $diabetes->injury=="No" && $diabetes->irritated=="Yes" && $diabetes->age < 15 )
	     "you are <b>most</b> likely to have type one disease" 
	     <form action="{{route('diabetes.delete', ['user_id'=> $diabetes->user_id])}}" method="post">
	            <input type="submit" value="Take  new test" class="btn btn-danger">
	            <input type="hidden" name="_token" value="{{csrf_token()}}">
	        </form>
		     <p><a href="{{route('selfcare.diabetes.cure')}}">check For treatments/drugs:</a></p>
		     <p><a href="{{route('selfcare.diabetes.symptoms')}}">check For symptoms:</a></p>
		     <p><a href="{{route('selfcare.diabetes.risk')}}">Risk Factors:</a></p>
		     <p><a href="{{route('selfcare.diabetes.cause')}}">Causes:</a></p>
		     <p><a href="{{route('selfcare.diabetes.prevent')}}">Prevention :</a></p>
	    @elseif($diabetes->injury=="No"  && $diabetes->age < 15)
	     "you are <b>very</b> likely to have type one disease"
	     <form action="{{route('diabetes.delete', ['user_id'=> $diabetes->user_id])}}" method="post">
	            <input type="submit" value="Take  new test" class="btn btn-danger">
	            <input type="hidden" name="_token" value="{{csrf_token()}}">
	        </form>
		     <p><a href="{{route('selfcare.diabetes.cure')}}">check For treatments/drugs:</a></p>
		     <p><a href="{{route('selfcare.diabetes.symptoms')}}">check For symptoms:</a></p>
		     <p><a href="{{route('selfcare.diabetes.risk')}}">Risk Factors:</a></p>
		     <p><a href="{{route('selfcare.diabetes.cause')}}">Causes:</a></p>
		     <p><a href="{{route('selfcare.diabetes.prevent')}}">Prevention :</a></p>
	    @elseif($diabetes->weight=="Yes" && $diabetes->age< 15) 
	     "you are <b>very</b> likely to have type one disease"
	     <form action="{{route('diabetes.delete', ['user_id'=> $diabetes->user_id])}}" method="post">
	            <input type="submit" value="Take  new test" class="btn btn-danger">
	            <input type="hidden" name="_token" value="{{csrf_token()}}">
	        </form>
		     <p><a href="{{route('selfcare.diabetes.cure')}}">check For treatments/drugs:</a></p>
		     <p><a href="{{route('selfcare.diabetes.symptoms')}}">check For symptoms:</a></p>
		     <p><a href="{{route('selfcare.diabetes.risk')}}">Risk Factors:</a></p>
		     <p><a href="{{route('selfcare.diabetes.cause')}}">Causes:</a></p>
		     <p><a href="{{route('selfcare.diabetes.prevent')}}">Prevention :</a></p>
	     <form action="{{route('diabetes.delete', ['user_id'=> $diabetes->user_id])}}" method="post">
	            <input type="submit" value="Take  new test" class="btn btn-danger">
	            <input type="hidden" name="_token" value="{{csrf_token()}}">
	        </form>
		     <p><a href="{{route('selfcare.diabetes.cure')}}">check For treatments/drugs:</a></p>
		     <p><a href="{{route('selfcare.diabetes.symptoms')}}">check For symptoms:</a></p>
		     <p><a href="{{route('selfcare.diabetes.risk')}}">Risk Factors:</a></p>
		     <p><a href="{{route('selfcare.diabetes.cause')}}">Causes:</a></p>
		     <p><a href="{{route('selfcare.diabetes.prevent')}}">Prevention :</a></p>
	    @elseif($diabetes->irritated=="Yes" && $diabetes->age< 15)  
	     "you are <b>very</b> likely to have type one disease"
	     <form action="{{route('diabetes.delete', ['user_id'=> $diabetes->user_id])}}" method="post">
	            <input type="submit" value="Take  new test" class="btn btn-danger">
	            <input type="hidden" name="_token" value="{{csrf_token()}}">
	        </form>
		     <p><a href="{{route('selfcare.diabetes.cure')}}">check For treatments/drugs:</a></p>
		     <p><a href="{{route('selfcare.diabetes.symptoms')}}">check For symptoms:</a></p>
		     <p><a href="{{route('selfcare.diabetes.risk')}}">Risk Factors:</a></p>
		     <p><a href="{{route('selfcare.diabetes.cause')}}">Causes:</a></p>
		     <p><a href="{{route('selfcare.diabetes.prevent')}}">Prevention :</a></p>
	    @elseif( $diabetes->age < 15 )
		     "you are <b>likely</b> to have type one disease. It could be a different illness. <br>Consult a doctor for further diagnosis"
		     <form action="{{route('diabetes.delete', ['user_id'=> $diabetes->user_id])}}" method="post">
                <input type="submit" value="Take  new test" class="btn btn-danger">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
	          </form>
		     <p><a href="{{route('selfcare.diabetes.cure')}}">check For treatments/drugs:</a></p>
		     <p><a href="{{route('selfcare.diabetes.sympsymptoms')}}">check For symptoms:</a></p>
		     <p><a href="{{route('selfcare.diabetes.risk')}}">Risk Factors:</a></p>
		     <p><a href="{{route('selfcare.diabetes.cause')}}">Causes:</a></p>
		     <p><a href="{{route('selfcare.diabetes.prevent')}}">Prevention :</a></p>
        @endif








    @if ($diabetes->weight=="Yes" && $diabetes->injury=="Yes" && $diabetes->irritated=="Yes" && $diabetes->age > 15 )
     "you are <b>most</b> likely to have type two disease" 
     <form action="{{route('diabetes.delete', ['user_id'=> $diabetes->user_id])}}" method="post">
            <input type="submit" value="Take  new test" class="btn btn-danger">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
     </form>
	     <p><a href="{{route('selfcare.diabetes.cure2')}}">check For treatments/drugs:</a></p>
		 <p><a href="{{route('selfcare.diabetes.symptoms2')}}">check For symptoms:</a></p>
		 <p><a href="{{route('selfcare.diabetes.risk2')}}">Risk Factors:</a></p>
		 <p><a href="{{route('selfcare.diabetes.cause2')}}">Causes:</a></p>
		 <p><a href="{{route('selfcare.diabetes.prevent2')}}">Prevention :</a></p>

	@elseif ($diabetes->injury=="Yes"  && $diabetes->age > 15 )
     "you are <b>most</b> likely to have type two disease" 
     <form action="{{route('diabetes.delete', ['user_id'=> $diabetes->user_id])}}" method="post">
            <input type="submit" value="Take  new test" class="btn btn-danger">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
     </form>
	     <p><a href="{{route('selfcare.diabetes.cure2')}}">check For treatments/drugs:</a></p>
		 <p><a href="{{route('selfcare.diabetes.symptoms2')}}">check For symptoms:</a></p>
		 <p><a href="{{route('selfcare.diabetes.risk2')}}">Risk Factors:</a></p>
		 <p><a href="{{route('selfcare.diabetes.cause2')}}">Causes:</a></p>
		 <p><a href="{{route('selfcare.diabetes.prevent2')}}">Prevention :</a></p>

    @elseif ($diabetes->weight=="Yes"  && $diabetes->age > 15 )
		 "you are <b>very</b> likely to have type two disease" 
		 <form action="{{route('diabetes.delete', ['user_id'=> $diabetes->user_id])}}" method="post">
		        <input type="submit" value="Take  new test" class="btn btn-danger">
		        <input type="hidden" name="_token" value="{{csrf_token()}}">
		 </form>
		 <p><a href="{{route('selfcare.diabetes.cure2')}}">check For treatments/drugs:</a></p>
		 <p><a href="{{route('selfcare.diabetes.symptoms2')}}">check For symptoms:</a></p>
		 <p><a href="{{route('selfcare.diabetes.risk2')}}">Risk Factors:</a></p>
		 <p><a href="{{route('selfcare.diabetes.cause2')}}">Causes:</a></p>
		 <p><a href="{{route('selfcare.diabetes.prevent2')}}">Prevention :</a></p>

	@elseif ($diabetes->irritated=="Yes"  && $diabetes->age > 15 )
		 "you are <b>very</b> likely to have type two disease" 
		 <form action="{{route('diabetes.delete', ['user_id'=> $diabetes->user_id])}}" method="post">
		        <input type="submit" value="Take  new test" class="btn btn-danger">
		        <input type="hidden" name="_token" value="{{csrf_token()}}">
		 </form>
		 <p><a href="{{route('selfcare.diabetes.cure2')}}">check For treatments/drugs:</a></p>
		 <p><a href="{{route('selfcare.diabetes.symptoms2')}}">check For symptoms:</a></p>
		 <p><a href="{{route('selfcare.diabetes.risk2')}}">Risk Factors:</a></p>
		 <p><a href="{{route('selfcare.diabetes.cause2')}}">Causes:</a></p>
		 <p><a href="{{route('selfcare.diabetes.prevent2')}}">Prevention :</a></p>
	@elseif($diabetes->injury=="Yes")
		     "you are <b>likely</b> to have type two disease. It could be a different illness. <br>Consult a doctor for further diagnosis"
		     <form action="{{route('diabetes.delete', ['user_id'=> $diabetes->user_id])}}" method="post">
                <input type="submit" value="Take  new test" class="btn btn-danger">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
	          </form>
		 <p><a href="{{route('selfcare.diabetes.cure2')}}">check For treatments/drugs:</a></p>
		 <p><a href="{{route('selfcare.diabetes.symptoms2')}}">check For symptoms:</a></p>
		 <p><a href="{{route('selfcare.diabetes.risk2')}}">Risk Factors:</a></p>
		 <p><a href="{{route('selfcare.diabetes.cause2')}}">Causes:</a></p>
		 <p><a href="{{route('selfcare.diabetes.prevent2')}}">Prevention :</a></p>	     
    @elseif($diabetes->age > 15 )
		     "you are <b>likely</b> to have type one disease. It could be a different illness. <br>Consult a doctor for further diagnosis"
		     <form action="{{route('diabetes.delete', ['user_id'=> $diabetes->user_id])}}" method="post">
                <input type="submit" value="Take  new test" class="btn btn-danger">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
	          </form>
		 <p><a href="{{route('selfcare.diabetes.cure2')}}">check For treatments/drugs:</a></p>
		 <p><a href="{{route('selfcare.diabetes.symptoms2')}}">check For symptoms:</a></p>
		 <p><a href="{{route('selfcare.diabetes.risk2')}}">Risk Factors:</a></p>
		 <p><a href="{{route('selfcare.diabetes.cause2')}}">Causes:</a></p>
		 <p><a href="{{route('selfcare.diabetes.prevent2')}}">Prevention :</a></p>
    @else
    <p>sorry, we cannot generate your result at this time</p>
	@endif


@endif






               
    


	        
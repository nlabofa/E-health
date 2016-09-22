@extends('templates.default')

@section('content')

<div class="container">
	<div class="row"><p style="font-size: 25px;font-weight: bold;">DIABETES CAUSE</p>
		<div class="col-md-3">
			<img class="img-responsive" src="img/diabetes-hazard.png" alt="image" style="max-height:150px;"></img><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
			<img class="img-responsive" src="img/diabetes-ark.png" alt="image" style="max-height:150px;"></img>
		</div>
		<div class="col-md-6">
			<blockquote>
			  <p>Type 1 diabetes is an autoimmune disease. It occurs when the body’s immune system attacks the beta cells of the pancreas. These are the cells that create insulin. People with type 1 diabetes cannot make enough insulin to control their blood sugar. </p>
			  <small>Aisha shirkov <cite title="#">Mayo Clinic</cite></small>
			</blockquote>
			<p>The exact cause of type 1 diabetes is unknown. In most people with type 1 diabetes, the body's own immune system &mdash; which normally fights harmful bacteria and viruses &mdash; mistakenly destroys the insulin-producing (islet) cells in the pancreas. Genetics may play a role in this process, and exposure to certain environmental factors, such as viruses, may trigger the disease.</p><div id='adsmobileBottom'></div>
			<p class="lead" style="font-size: 27px;"> The role of insulin</p>
			<p>Once a significant number of islet cells are destroyed, you'll produce little or no insulin. Insulin is a hormone that comes from the pancreas, a gland situated behind and below the stomach.</p>
			<ul>
			    <li>The pancreas secretes insulin into the bloodstream.</li>
			    <li>Insulin circulates, enabling sugar to enter your cells.</li>
			    <li>Insulin lowers the amount of sugar in your bloodstream.</li>
			    <li>As your blood sugar level drops, so does the secretion of insulin from your pancreas.</li>
			</ul>
			<p class="lead" style="font-size: 27px;"> The role of glucose</p>
			<p>Glucose &mdash; a sugar &mdash; is a main source of energy for the cells that make up muscles and other tissues.</p>
			<ul>
			    <li>Glucose comes from two major sources: food and your liver.</li>
			    <li>Sugar is absorbed into the bloodstream, where it enters cells with the help of insulin.</li>
			    <li>Your liver stores glucose as glycogen.</li>
			    <li>When your glucose levels are low, such as when you haven't eaten in a while, the liver converts stored glycogen into glucose to keep your glucose level within a normal range.</li>
			</ul>
			<p>In type 1 diabetes, there's no insulin to let glucose into the cells, so sugar builds up in your bloodstream, where it can cause life-threatening complications.</p>
			<p>The cause of type 1 diabetes is different from the cause of the more familiar type 2 diabetes. In type 2 diabetes, the islet cells are still functioning, but the body becomes resistant to insulin or the pancreas doesn't produce enough insulin or both.</p>

		</div>
		<div class="col-md-3">
			<h4><strong>Newsletter</strong></h4>
          <p>Signup with our newsletter for regular update</p>
          <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon" style="background-color: #f69679;"><i class="glyphicon glyphicon-user"></i></span>
                  <input type="text" class="form-control" placeholder="Enter your name">
                </div>
          </div>
          <div class="form-group">
            <div class="input-group">
                  <span class="input-group-addon" style="background-color: #f69679;"><i class="glyphicon glyphicon-envelope"></i></span>
                  <input type="text" class="form-control" placeholder="Enter an Email">
            </div>
            
          </div>
          <button class="btn pull-right" type="submit" style="background-color: #f69679;color:black;">Send</button>
        </div>
		</div>
	</div>
</div>


@stop 
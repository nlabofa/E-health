@extends('templates.default')

@section('content')

<div class="container">
	<div class="row"><p style="font-size: 25px;font-weight: bold;">DIABETES RISK FACTORS</p>
		<div class="col-md-3">
			<img class="img-responsive" src="img/diabetes-outlook.png" alt="image" style="max-height:150px;"></img>
		</div>
		<div class="col-md-6">
			<blockquote>
			  <p>Cold weather may increase risk for type 1 diabetes, so those who live in cold climates may have a higher risk. People in Finland are approximately 300 times more likely to develop type 1 diabetes than those in the United States.</p>
			  <small>Dr Benson  <cite title="#">Healthline Clinic</cite></small>
			</blockquote>
			<p class="lead" style="font-size: 27px;"> Risk Factors</p>
			<p>Some known risk factors for type 1 diabetes include:</p>
			<ul>
			    <li><strong>Family history.</strong> Anyone with a parent or sibling with type 1 diabetes has a slightly increased risk of developing the condition.</li>
			    <li><strong>Genetics.</strong> The presence of certain genes indicates an increased risk of developing type 1 diabetes.</li>
			    <li><strong>Geography.</strong> The incidence of type 1 diabetes tends to increase as you travel away from the equator. People living in Finland and Sardinia have the highest incidence of type 1 diabetes &mdash; about two to three times higher than rates in the United States and 400 times the incidence among people living in Venezuela.</li>
			    <li><strong>Age.</strong> Although type 1 diabetes can appear at any age, it appears at two noticeable peaks. The first peak occurs in children between 4 and 7 years old, and the second is in children between 10 and 14 years old.</li>
			</ul><div id='adsmobileBottom'></div>
			<p>Many other possible risk factors for type 1 diabetes have been investigated, though none have been proved. Some other possible risk factors include:</p>
			<ul>
			    <li>Exposure to certain viruses, such as the Epstein-Barr virus, Coxsackie virus, mumps virus and cytomegalovirus</li>
			    <li>Early exposure to cow's milk</li>
			    <li>Low vitamin D levels</li>
			    <li>Drinking water that contains nitrates</li>
			    <li>Early (before 4 months) or late (after 7 months) introduction of cereal and gluten into a baby's diet</li>
			    <li>Having a mother who had preeclampsia during pregnancy</li>
			    <li>Being born with jaundice</li>
			</ul>
			<p class="lead" style="font-size: 27px;"> Who Is at Risk for Type 1 Diabetes? </p>
			<p>Risk factors for type 1 diabetes are poorly understood. However, some factors have been tentatively identified. </p>

			<p>Heredity may be important in some cases of type 1 diabetes. If you have a family member with the condition, your risk of developing it is increased. Several genes have been tentatively linked to this condition. However, not everyone who is at risk for type 1 diabetes develops the condition. It is believed that there must be some type of trigger that causes type 1 diabetes to develop.</p>

			<p>Younger people are more likely to be diagnosed with type 1 diabetes. The most common age of diagnosis is between 11 and 14 years old. It is rarely diagnosed after age 40. </p>

			<p>Cold weather may increase risk for type 1 diabetes, so those who live in cold climates may have a higher risk. People in Finland are approximately 300 times more likely to develop type 1 diabetes than those in the United States.</p>

			<p>People with certain antibodies may also have a higher risk of developing type 1 diabetes.&nbsp; These antibodies, which are made by the body in response to certain viruses, are found in some people years before the diagnosis of type 1 diabetes. It is also thought that viruses may play a role in developing diabetes.</p>

			<p>Race may be a risk factor for type 1 diabetes. It is more common in Caucasians than in those of Asian and African descent.</p>

			<p>Finally, early diet may play a role, since those who are breastfed and introduced to solids foods later show a lower risk of type 1 diabetes. </p>
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
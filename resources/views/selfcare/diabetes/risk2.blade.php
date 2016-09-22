@extends('templates.default')

@section('content')

<div class="container">
	<div class="row"><p style="font-size: 25px;font-weight: bold;">DIABETES RISK FACTORS</p>
		<div class="col-md-3">
			<img class="img-responsive" src="img/diabetes-outlook.png" alt="image" style="max-height:150px;"></img>
		</div>
		<div class="col-md-6">
			<blockquote>
			  <p>Cold weather may increase risk for type 2 diabetes, so those who live in cold climates may have a higher risk. People in Finland are approximately 300 times more likely to develop type 1 diabetes than those in the United States.</p>
			  <small>Dr Benson  <cite title="#">Healthline Clinic</cite></small>
			</blockquote>
			<p class="lead" style="font-size: 27px;"> Risk Factors</p>
            <p>Researchers don't fully understand why some people develop type 2 diabetes and others don't. It's clear, however, that certain factors increase the risk, including:</p>
			<ul>
			    <li><strong>Weight.</strong> Being overweight is a primary risk factor for type 2 diabetes. The more fatty tissue you have, the more resistant your cells become to insulin. However, you don't have to be overweight to develop type 2 diabetes.</li>
			    <li><strong>Fat distribution.</strong> If your body stores fat primarily in your abdomen, your risk of type 2 diabetes is greater than if your body stores fat elsewhere, such as your hips and thighs.</li>
			    <li><strong>Inactivity.</strong> The less active you are, the greater your risk of type 2 diabetes. Physical activity helps you control your weight, uses up glucose as energy and makes your cells more sensitive to insulin.</li>
			    <li><strong>Family history.</strong> The risk of type 2 diabetes increases if your parent or sibling has type 2 diabetes.</li>
			    <li><strong>Race.</strong> Although it's unclear why, people of certain races &mdash; including blacks, Hispanics, American Indians and Asian-Americans &mdash; are more likely to develop type 2 diabetes than whites are.</li>
			    <li><strong>Age.</strong> The risk of type 2 diabetes increases as you get older, especially after age 45. That's probably because people tend to exercise less, lose muscle mass and gain weight as they age. But type 2 diabetes is also increasing dramatically among children, adolescents and younger adults.</li>
			    <li><strong>Prediabetes.</strong> Prediabetes is a condition in which your blood sugar level is higher than normal, but not high enough to be classified as diabetes. Left untreated, prediabetes often progresses to type 2 diabetes.</li>
			    <li><strong>Gestational diabetes.</strong> If you developed gestational diabetes when you were pregnant, your risk of developing type 2 diabetes increases. If you gave birth to a baby weighing more than 9 pounds (4 kilograms), you're also at risk of type 2 diabetes.</li>
			    <li><strong>Polycystic ovarian syndrome.</strong> For women, having polycystic ovarian syndrome &mdash; a common condition characterized by irregular menstrual periods, excess hair growth and obesity &mdash; increases the risk of diabetes.</li>
			</ul>                  
			            <h3>Complications</h3>
			            
			            <p>Type 2 diabetes can be easy to ignore, especially in the early stages when you're feeling fine. But diabetes affects many major organs, including your heart, blood vessels, nerves, eyes and kidneys. Controlling your blood sugar levels can help prevent these complications.</p>
			<p>Although long-term complications of diabetes develop gradually, they can eventually be disabling or even life-threatening. Some of the potential complications of diabetes include:</p>
			<ul>
			    <li><strong>Heart and blood vessel disease.</strong> Diabetes dramatically increases the risk of various cardiovascular problems, including coronary artery disease with chest pain (angina), heart attack, stroke, narrowing of arteries (atherosclerosis) and high blood pressure.</li>
			    <li><strong>Nerve damage (neuropathy).</strong> Excess sugar can injure the walls of the tiny blood vessels (capillaries) that nourish your nerves, especially in the legs. This can cause tingling, numbness, burning or pain that usually begins at the tips of the toes or fingers and gradually spreads upward. Poorly controlled blood sugar can eventually cause you to lose all sense of feeling in the affected limbs. Damage to the nerves that control digestion can cause problems with nausea, vomiting, diarrhea or constipation. For men, erectile dysfunction may be an issue.</li>
			    <li><strong>Kidney damage (nephropathy).</strong> The kidneys contain millions of tiny blood vessel clusters that filter waste from your blood. Diabetes can damage this delicate filtering system. Severe damage can lead to kidney failure or irreversible end-stage kidney disease, which often eventually requires dialysis or a kidney transplant.</li>
			    <li><strong>Eye damage.</strong> Diabetes can damage the blood vessels of the retina (diabetic retinopathy), potentially leading to blindness. Diabetes also increases the risk of other serious vision conditions, such as cataracts and glaucoma.</li>
			    <li><strong>Foot damage.</strong> Nerve damage in the feet or poor blood flow to the feet increases the risk of various foot complications. Left untreated, cuts and blisters can become serious infections, which may heal poorly. Severe damage might require toe, foot or leg amputation.</li>
			    <li><strong>Hearing impairment.</strong> Hearing problems are more common in people with diabetes.</li>
			    <li><strong>Skin conditions.</strong> Diabetes may leave you more susceptible to skin problems, including bacterial and fungal infections.</li>
			    <li><strong>Alzheimer's disease.</strong> Type 2 diabetes may increase the risk of Alzheimer's disease. The poorer your blood sugar control, the greater the risk appears to be. The exact connection between these two conditions still remains unclear.</li>
			</ul>       
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
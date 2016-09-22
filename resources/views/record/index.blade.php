@extends('templates.default')
@section('content')

<div class="container">
		<div class="row">
	        <div class="col-md-4"></div>
	        <div class="col-md-4">
	        	<table class="table table-striped table-hover " style="border: 2px solid #ce582f; " >
	              <thead>
	                <tr style="color:#ce582f;">
	                  <th style="display: inline-block;width:300px;"> Test Records</th>
	                </tr>
	              </thead><br>
	              <tbody>
	                <tr>
	                  <td>Gender: Female</td>                  
	                </tr>
	                <tr class="warning">
	                  <td>Weight: 70 kg</td>
	              </tr>
	              <tr class="warning">
	                  <td>Height: 153 cm</td>
	              </tr>
	                <tr class="danger">
	                  <td>Blood Group: O+</td>
	                </tr>
	                <tr class="warning">
	                  <td>Genotype:SS</td>
	                </tr>
	                <tr class="success">
	                  <td>A1C Test:8.5%</td>
	                </tr>
	                <tr>
	                  <td>Daytime sugar test:200 mg/dl</td>
	                </tr>
	                <tr class="danger">
	                  <td>Fasting sugar test:125 mg/dl</td>
	                </tr>
	                <tr class="warning">
	                  <td>Ketone/Insulin Level: 2.0</td>
	                </tr>
	                <tr>
	                  <td>Liprotein level:39 mg/dl.</td>
	                </tr>
	              </tbody>
	            </table> 
	        </div>
	        <div class="col-md-4"></div>
		</div>
	</div>	
@stop    
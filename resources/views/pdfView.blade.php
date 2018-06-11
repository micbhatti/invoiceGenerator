@extends('master')
@section('content')
<center>
<h2 style="color: #878180;
	font-size: 36px;">INVOICE</h2>
</center>
<h6 style="color: #000;
	font-size: 30px;
	font-weight: bold;">Michael Michael</h6>
 <table style="width: 100%;
	margin-bottom: 20px;">
 	<tr><td>4270 Ave Linton</td></tr>
 	<tr><td>App 1</td><td><strong>Date: </strong> {{date("d-M-Y")}}</td></tr>
 	<tr><td>Montreal, Quebec</td><td><strong>INVOICE # </strong> 1</td></tr>
 	<tr><td>H3S 1T6</td></tr>
 	<tr><td><strong>Phone:  </strong><a href="tel:+15147437866"></a>5147437866</td></tr>
 	<tr><td><strong>Email:  </strong><a href="mailto:micbhatti@gmail.com"></a>micbhatti@gmail.com</td></tr>
	</table>
	<p style="margin-bottom: 20px"><strong>BILL TO:</strong></p>
	<table style="width: 100%;
	margin-bottom: 40px;">
	<tr><td>Rosz</td></tr>
	<tr><td>6605 Chemin St. Francois</td></tr>
	<tr><td>St. Laurent </td></tr>
	<tr><td>Quebec</td></tr>
	<tr><td>H4S 1B6</td></tr>

 </table>

<table  style="width: 100%;
	margin-bottom: 50px;" class="table table-bordered">
	 <thead>
      <tr>
        <th>Description</th>
        <th>Time Spent (in hours)</th>
        <th>Amount</th>
      </tr>
    </thead>
	

	<tr>

		<td>Cameo Agency (www.agencecameo.ca) - 100% </td>
		<td>10</td>
		<td><p style="width: 20%;
	float: left;">$</p><p style="width: 70%;
	float: right;
	text-align: right;">300</p></td>

	</tr>
	<tr>

		<td>csit.co video fixed -100%</td>
		<td>2</td>
		<td><p style="width: 20%;
	float: left;">$</p><p style="width: 70%;
	float: right;
	text-align: right;">60</p></td>

	</tr>
	<tr>
		<td style="border: 0px"></td>
		<td style="border: 0px;text-align: right;"><strong>TOTAL</strong></td>
		<td><p style="width: 20%;
	float: left;">$</p><p style="width: 70%;
	float: right;
	text-align: right;">300</p></td>
	</tr>

</table>
<p class="make-payment">Make all checks payable to Michael Michael.<strong>Due on receipt.</strong></p>
<p class="thanks"><strong>THANK YOU FOR YOUR BUSINESS!</strong></p>
@endsection
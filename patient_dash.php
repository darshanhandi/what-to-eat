<?php
include 'session.php';
?>
<div class="container">
	<br>
	<div class="col-md-3">
		 <?php
$id=$_SESSION['id'];
$conn=new mysqli("localhost","root","","online");
 {
 	$qry="select * from patient where id='$id'";
	$result=$conn->query($qry);
 
 if($result->num_rows > 0){

 while($row=$result->fetch_array()){
 $id= $row["id"];
 $fname=$row["fname"];
 $lname=$row["lname"];
echo "<strong><h3>Name: $fname $lname </h3> </strong>";
}
}
}
?>
<hr style="width:1190px">
	</div>
	<div class="col-md-9">
<div class="row">
<div class="col-md-4"> 
</div>
<br>
<div class="col-md-1">
<input type="submit" value="Patient details" name="click" class="btn btn-sm" style="border-radius:2px;box-shadow:0px 0px 1px 1px green;color: blue" data-toggle="modal"  data-target="#details">

<?php

$id=$_SESSION['id'];
$conn=new mysqli("localhost","root","","online");
 {
 	$qry="select * from patient where id='$id'";
	$result=$conn->query($qry);
 
 if($result->num_rows > 0){

 while($row=$result->fetch_array()){
 $id= $row["id"];
 $fname=$row["fname"];
 $lname=$row["lname"];
 $address=$row["address"];
 $mobile=$row["mobile"];
 $emobile=$row["emobile"];
 $room=$row["room"];
 $payble=$row["payble"];
 $insurance=$row["insurance"];
 $password=$row["password"];
}
}
}
?>



<div class="modal about-modal w3-agileits fade" id="details" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header"><B>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
			</div> 
			
			<div class="modal-body" style="background-color:lightgray">

			<center><h2 style="color:darkorange"> Patient Details</h2></center>
			<form method="post"> <h4> <center>
				<div class="row">
					<div class="col-md-2">
				Fname:</div>
			<div class="col-md-4">
				<B>	<input type="text" name="fname" value="<?php echo ($fname) ;?>" class="form-control" style="box-shadow: 0px 0px 0px 1px black" disabled></B>
					 </div>
					<div class="col-md-2">
				Lname:</div>
			<div class="col-md-4">
					<B><input type="text" name="lname"  value="<?php echo ($lname) ;?>" class="form-control" style="box-shadow: 0px 0px 0px 1px black"  disabled></B>
					 </div></div> <br>
				<div class="row">
					<div class="col-md-2">
				Address:</div>
			<div class="col-md-4">
					<B><input type="text" name="address"  value="<?php echo ($address) ;?>" class="form-control" style="box-shadow: 0px 0px 0px 1px black" disabled></B>
					 </div>
					<div class="col-md-2">
				Phone:</div>
			<div class="col-md-4">
					<B><input type="text" name="mobile"  value="<?php echo ($mobile) ;?>" class="form-control" style="box-shadow: 0px 0px 0px 1px black" disabled >
					</B> </div></div> <br>
					 <div class="row">
					<div class="col-md-2">
				Emr contact:</div>
			<div class="col-md-4">
					<B><input type="text" name="emobile"  value="<?php echo ($emobile) ;?>" class="form-control" style="box-shadow: 0px 0px 0px 1px black" disabled></B>
					 </div>
					<div class="col-md-2">
				Room NO:</div>
			<div class="col-md-4">
					<B><input type="text" name="room"  value="<?php echo ($room) ;?>" class="form-control" style="box-shadow: 0px 0px 0px 1px black" disabled>
					</B> </div></div> <br>
					 <div class="row">
					<div class="col-md-2">
				Payble:</div>
			<div class="col-md-4">
					<B><input type="text" name="payble"  value="<?php echo ($payble) ;?>" class="form-control" style="box-shadow: 0px 0px 0px 1px black" disabled>
					 </B></div>
					<div class="col-md-2">
				Insurance:</div>
			<div class="col-md-4">
					<B><input type="text" name="insurance"  value="<?php echo ($insurance) ;?>" class="form-control" style="box-shadow: 0px 0px 0px 1px black" disabled>
					 </B></div></div> <br>
					 <div class="row">
					<div class="col-md-2">
				Password:</div>
			<div class="col-md-4">
				<B>	<input type="password" name="password"  value="<?php echo ($password) ;?>"class="form-control" style="box-shadow: 0px 0px 0px 1px black" disabled>
					</B> </div></div> <br>

</center>
</h4>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<br> <br>
<br> <br>
<div class="container">
<div class="col-md-8">
<h4> <p>
	<div class="row-sm">
		<div class="col-sm-2">
Select Diet plan: </div>
<div class="col-sm-3">
<select id="diet" name="diet" class="form-control" style="width:175px">
<option value=""> </option>	
<option value="Sugar">Sugar</option>
<option value="Astama">Astama</option>
<option value="food poisen">food poisen</option>
<option value="c">c</option>
<option value="d">d</option>
</select> </div>
<div class="col-sm-2"> <button type="submit" name="go" class="btn btn-sm" style="color:blue;box-shadow: 0px 0px 0px 1px green"> Go</button></div>  </p>

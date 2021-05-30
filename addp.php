<?php
include 'session.php';
?>
	<form method="post">
	<div class="container">
		
		<div class="col-md-4">
		</div>
		<div class="col-md-5">
			<h2 style="font-family:MS Serif;color:darkblue"> <center>ADD TO PATIENT
		</center> </h2>
		<BR>

			<div style="box-shadow:0px 0px 1px 2px red;padding:5px; border-radius:10px;height:100%;width:100%"> 
			<h4>
			First Name:
			<input type="text" name="fname" placeholder="Enter your name" class="form-control">
		<br>
			Last Name:
			<input type="text" name="lname" placeholder="Enter your last name" class="form-control">
			<br>
			Address:
			<input type="text" name="address" placeholder="Enter your address" class="form-control">
		<br>
			Mobile:
			<input type="text" name="mobile" placeholder="Enter your mobile" class="form-control">
		<br>

		Emg contact:
			<input type="text" name="emobile" placeholder="Enter your mobile" class="form-control">
		<br>
		

			Room No:
			<input type="text" name="room" placeholder="Enter your room no" class="form-control">
		<br>
			Payble:
			<input type="text" name="payble" placeholder="Enter Amount" class="form-control">
		<br>
			Insurance:
			<input type="text" name="insurance" placeholder="insurance" class="form-control">
		<br>

		<br>
		<center>
			<button type="submit" class="btn btn-default btn-md" name="submit"  style="box-shadow:0px 0px 0px 1px red;color:green;border-radius:5px"><b> submit 	</b> </button> 
			 	      	         	 &nbsp;&nbsp;
		     <button type="reset" class="btn btn-default btn-md" value="reset" name="reset" style="box-shadow:0px 0px 0px 1px red;color:red;border-radius:5px"><b> reset </b>   </button>
		     	      	         	 &nbsp;&nbsp;
		     	      	         	 
		     <button type="reset" class="btn btn-default btn-md" value="back" name="reset" style="box-shadow:0px 0px 0px 1px red;color:red;border-radius:5px"><b> 
		     	<a href="hospital_dash.php">back </b>   </button></a>


</center>
</h4>
</div>
 </body>
</html>




<?php
$conn=new mysqli("localhost","root","","online");
if (isset($_POST['submit'])) {
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$address=$_POST['address'];
	$mobile=$_POST['mobile'];
	$emobile=$_POST['emobile'];
	$room=$_POST['room'];
	$payble=$_POST['payble'];
	$insurance=$_POST['insurance'];
 	$chars = "0123456789";
	 $password = substr( str_shuffle( $chars ), 0, 4 );
	
	if(empty($fname&&$lname&&$address&&$mobile&&$emobile&&$room&&$payble&&$insurance))
	{
		echo"<script>alert('enter all values')</script>";
		exit();
	}
 


	else
	{
		$query="insert into patient
		(fname,lname,address,mobile,emobile,room,payble,insurance,password)values('$fname','$lname','$address','$mobile','$emobile','$room','$payble','$insurance','$password')";
		$result=$conn->query($query);
		if($result==true){

			echo"<strong>";
			echo "<script> alert('Your Password Is :$password') </script>";
			echo "</strong>";
		//echo "<script>alert('successfull') </script>";
		}
		else
		{
			echo"<script>alert('failed..................')</script>";
		exit();
					}
	}

}
?>
	
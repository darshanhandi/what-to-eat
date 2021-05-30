<?php

include 'session.php';
$id=$_SESSION['id'];
$conn=new mysqli("localhost","root","","online");
 {
 	$qry="select * from resturant_owner where id='$id'";
	$result=$conn->query($qry);
 
 if($result->num_rows > 0){

 while($row=$result->fetch_array()){
 $id= $row["id"];
 $name=$row["name"];
 $address=$row["address"];
 $email=$row["email"];
 $mobile=$row["mobile"];
 $password=$row["password"];
}
}
}
?>
 	<form method="POST">
    <div class="col-md-4">
	</div>

	<div class="col-md-5">
		<h1 style="color:darkblue"> <center>Profile </center></h1> <br>
					 
		      
			 	<div style="height:20% width:50%; padding:50px; border-radius:15px;box-shadow:0px 0px 1px 1PX  black " class="form-group"> <b>
                  <div class="form-group text-center">
                  <div class="row"> 
                  <div class="col-md-4"> 
			 	<label>Name: </label> 
			 	</div>
			 	<div class="col-md-8">
			 	<input type="text" name="name" id="First name" value="<?php echo($name);?>" placeholder="First Name" class="form-control" style="box-shadow:0px 0px 1px 1px">
			 <br>
			 </div>
			</div>
			 		<div class="row">
			 		<div class="col-md-4">
			 	<label>Address: </label>
			 </div>
			 <div class="col-md-8">
			 	<input type="text" name="address" value="<?php echo($address);?>" placeholder="Enter Address" class="form-control" style="box-shadow:0px 0px 1px 1px">
			 	<br>
			 </div>
			</div>


				<div class="row">
			 		<div class="col-md-4">
			 	<label>email: </label>
			 </div>
			 <div class="col-md-8">
			 	<input type="text" name="email" value="<?php echo($email);?>" placeholder="Enter landmark" class="form-control" style="box-shadow:0px 0px 1px 1px">
			 	<br>
			 </div>
			</div>

		    <div class="row">
		    	<div class="col-md-4">
			 	<label>mobile no: </label> 
			 </div>
			 <DIV class="col-md-8">
			 	<input type="text" name="mobile" value="<?php echo($mobile);?>" placeholder="Enter mobile no" class="form-control"style="box-shadow:0px 0px 1px 1px" >
			 	<br>
			 </DIV>
			</div>

					    <div class="row">
		    	<div class="col-md-4">
			 	<label>Password: </label> 
			 </div>
			 <DIV class="col-md-8">
			 	<input type="text" name="password" value="<?php echo($password);?>" placeholder="Enter mobile no" class="form-control" style="box-shadow:0px 0px 1px 1px">
			 	<br>
			</b> </DIV>
			</div>

			  <button type="submit" class="btn btn- btn-md" style="box-shadow:0px 0px 1px 1px black;color:green"  value="update" name="update"> update</button> &nbsp; &nbsp; 
			 <button type="button" class="btn btn- btn-md" style="box-shadow:0px 0px 1px 1px black;color:green" name="back">
		<a href="resturant_dash.php">Back </a> </button>

		    </div>
		</div>
	
<!--
	<button type="button" class="btn btn-info btn-md" name="back">
		<a href="edit.php">Back</a>	</button>
&nbsp;&nbsp;
	<button type="button" class="btn btn-info btn-md"  name="Home">
		<a href="project.php"> Home </a>
	</button>-->
</div>
</div>
</form>
</b>
</div>
</div>
</form>
</body>
</html>

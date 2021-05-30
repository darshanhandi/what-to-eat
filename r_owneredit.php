<?php
include 'session.php';
?>
  <form method="post">
		<h1 style="color:green"><center>Resturant Staff Details</center></h1>
      
      
<div class="header-nav">
        <nav class="navbar navbar-info">
           
      <div class="pull-left">
            <button type="button" class="btn btn-default btn-md" style="box-shadow:0px 0px 1px 1px green;color:green" name="back">
      <a href="a_resturant.php">Back </a> </button> </div>
                  </div>
                  </nav>
       <h5 style="color:blue"><b> SEARCH: </b> </h5>           
      <input type="number" name="cid" class="btn" style="box-shadow:0px 0px 1px 1px black" placeholder="Customer id"> <br>
              <H5> Or </H5> 
          
              <input type="text" name="cname" class="btn" style="box-shadow:0px 0px 1px 1px black" placeholder="customer name"> <br>
             
             <h5> Or </h5> 
          
              <input type="number" name="cmobile" class="btn" style="box-shadow:0px 0px 1px 1px black" placeholder="customer mobile no"> <br> <br>
              <input type="submit" class="btn btn-default btn-md" style="box-shadow:0px 0px 0px 1px blue;color:brown " value="search" name="search">
              <br><br><center>
          
    <table>
				<tr>
					<th >ID </th>
					<th >Staff Name </th>
					<th >Address</th> 
					<th > Mobile</th>
					<th >Email</th>
					<th type="password">Password </th>  
					<th >Action  </th>
				</tr>

<?php
$conn=mysqli_connect("localhost","root","","online");
if(isset($_POST['search']))
{
  $cid=$_POST['cid'];
  $cname=$_POST['cname'];
  $cmobile=$_POST['cmobile'];
  
if ($cid==''&& $cname=='' && $cmobile=='')

  {
    echo"<script>alert('enter any values')</script>";
    exit();
 }
 else if(!$cid==''){
  $sql="select * from resturant_owner where id='$cid'" ;
  $result=$conn->query($sql);
   
 if($result->num_rows>0)
 {

 while($row=$result->fetch_array()){
 $id= $row["id"];
 echo "<tr><td>".$row["id"]."</td>
  <td>".$row["name"]."</td>
  <td>".$row["address"]."</td>
 <td>".$row["mobile"]."</td>
  <td>".$row["email"]."</td>
  <td>".$row["password"]."</td>
  <td> <button type='submit' class='btn btn-default' style='box-shadow:0px 0px 1px 1px blue'> <a href='r_update.php?id=$id'>Edit</a></button>&nbsp;
  <button type='submit' class='btn btn-default' style='box-shadow:0px 0px 1px 1px red'>
  <a href='r_delete.php?id=$id' onclick='return checkdelete()'>Delete</a> </button></td>";
}
echo "</table>";

}

else{
  echo"NO customer";
}
 }
  
  elseif(!$cname==''){
  $sql="select * from resturant_owner where name='$cname'" ;
  $result=$conn->query($sql);
 
 if($result-> num_rows > 0)
 {

 while($row=$result->fetch_array()){
 $id= $row["id"];
 echo "<tr><td>".$row["id"]."</td>
<td>".$row["name"]."</td>
  <td>".$row["address"]."</td>
 <td>".$row["mobile"]."</td>
  <td>".$row["email"]."</td>
  <td>".$row["password"]."</td>
    <td> <button type='submit' class='btn btn-default' style='box-shadow:0px 0px 1px 1px blue'> <a href='r_update.php?id=$id'>Edit</a></button>&nbsp;
  <button type='submit' class='btn btn-default' style='box-shadow:0px 0px 1px 1px red'>
  <a href='r_delete.php?id=$id' onclick='return checkdelete()'>Delete</a> </button></td>";
}
echo "</table>";

}

else{
  echo"NO customer";
}
   
}  
  elseif(!$cmobile==''){
  $sql="select * from resturant_owner where mobile='$cmobile'" ;
  $result=$conn->query($sql);
  if($result-> num_rows > 0){
      while($row=$result->fetch_array()){
 $id= $row["id"];
  echo "<tr><td>".$row["id"]."</td>
  <td>".$row["name"]."</td>
  <td>".$row["address"]."</td>
 <td>".$row["mobile"]."</td>
  <td>".$row["email"]."</td>
  <td>".$row["password"]."</td>
  <td> <button type='submit' class='btn btn-default' style='box-shadow:0px 0px 1px 1px blue'> <a href='r_update.php?id=$id'>Edit</a></button> &nbsp;
  <button type='submit' class='btn btn-default' style='box-shadow:0px 0px 1px 1px red'>
  <a href='r_delete.php?id=$id' onclick='return checkdelete()'>Delete</a> </button></td>";
}
echo "</table>";
  }
  
else{
	echo"NO customer";


}
}
}
$conn->close();
?>
</table>
<script>
  function checkdelete()
  {
    return confirm('Are you sure you want to delete this data???');
  }

</script>

</form>
</div>
</body>
</html>
<?php

include "dbConn.php"; // Using database connection file here

$id = $_GET['id']; // get id through query string

$qry = mysqli_query($db,"select * from receivers where id='$id'"); // select query

$data = mysqli_fetch_array($qry); // fetch data

if(isset($_POST['update'])) // when click on Update button
{	
	$rname=$_POST['rname'];
	$remail=$_POST['remail'];
	$rpassword=$_POST['rpassword'];
	$rphone=$_POST['rphone'];
	$rcity=$_POST['rcity'];
	$rbg=$_POST['rbg'];
    
	
	$edit = mysqli_query($db,"update receivers set rname='$rname', remail='$remail',rpassword='$rpassword' ,rphone='$rphone',rcity='$rcity',rbg='$rbg' where id='$id'");
	
    if($edit)
    {
        mysqli_close($db); // Close connection
        header("location:all_records.php"); // redirects to all records page
        exit;
    }
    else
    {
        echo mysqli_error();
    }    	
}
?>

<h3>Update Data</h3>

<form method="POST">
  <input type="text" name="rname" value="<?php echo $data['rname'] ?>" placeholder="Enter Full Name" Required>
  <input type="text" name="remail" value="<?php echo $data['remail'] ?>" placeholder="Enter mail" Required>
   <input type="text" name="rpassword" value="<?php echo $data['rpassword'] ?>" placeholder="Enter password" Required>
   <input type="text" name="rphone" value="<?php echo $data['rphone'] ?>" placeholder="Enter phone no." Required>
  <input type="text" name="rcity" value="<?php echo $data['rcity'] ?>" placeholder="Enter rcity" Required>
   <input type="text" name="rbg" value="<?php echo $data['rbg'] ?>" placeholder="Enter rbg" Required>
   
  <input type="submit" name="update" value="Update">
</form>
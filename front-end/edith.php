<?php

include "dbConn.php"; // Using database connection file here

$id = $_GET['id']; // get id through query string

$qry = mysqli_query($db,"select * from  hospitals where id='$id'"); // select query

$data = mysqli_fetch_array($qry); // fetch data

if(isset($_POST['update'])) // when click on Update button
{	
	$hname=$_POST['hname'];
	$hemail=$_POST['hemail'];
	$hpassword=$_POST['hpassword'];
	$hphone=$_POST['hphone'];
	$hcity=$_POST['hcity'];
	
    
	
	$edith = mysqli_query($db,"update  hospitals set hname='$hname', hemail='$hemail',hpassword='$hpassword' ,hphone='$hphone',hcity='$hcity' where id='$id'");
	
    if($edith)
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
  <input type="text" name="hname" value="<?php echo $data['hname'] ?>" placeholder="Enter Full Name" Required>
  <input type="text" name="hemail" value="<?php echo $data['hemail'] ?>" placeholder="Enter mail" Required>
   <input type="text" name="hpassword" value="<?php echo $data['hpassword'] ?>" placeholder="Enter password" Required>
   <input type="text" name="hphone" value="<?php echo $data['hphone'] ?>" placeholder="Enter phone no." Required>
  <input type="text" name="hcity" value="<?php echo $data['hcity'] ?>" placeholder="Enter rcity" Required>
   
  <input type="submit" name="update" value="Update">
</form>
<!DOCTYPE html>
<html>
<head>
  <title>Display all records from Database</title>
 <style>
 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



  
	   #customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
.icon {
  width: 28px;
  margin-right: 0.7rem;
}
.button-5 {
  width: 130px;
  height: 30px;
  border-radius: 5px;
  background-color: #F4F200;
  background-image: #F4F200;
  background-image: -moz-linear-gradient(top, #fff 0%, #F4F200 100%); 
  background-image: -webkit-linear-gradient(top, #fff 0%,#F4F200 100%); 
  background-image: linear-gradient(to bottom, #fff 0%,#F4F200 100%); 
  background-size: 300px;
  background-repeat: no-repeat;
  background-position: 0%;
  -webkit-transition: background 300ms ease-in-out;
  transition: background 300ms ease-in-out;
}
.button-5:hover {
  background-position: -200%;
  transition: background 300ms ease-in-out;
}

   
  </style>
  
</head>

<body style="background-image: url('image/fel2.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;"  >
            
				<div class="button button-5"><a href="index.php">BACK TO HOME</a></div>
	        
			</i>
			<h2>receivers details</h2>

			<table border="2" id="customers">
			  <tr>
				<td>id</td>
				<td>rname</td>
				<td>remail</td>
				<td>rpassword</td>
				<td>rphone</td>
				<td>rbg</td>
				<td>rcity</td>
				<td>Edit</td>
				<td>Delete</td>
			  </tr>

			<?php

			include "dbConn.php"; // Using database connection file here

			$records = mysqli_query($db,"select * from  receivers"); // fetch data from database

			while($data = mysqli_fetch_array($records))
			{
			?>
			  <tr>
				<td><?php echo $data['id']; ?></td>
				<td><?php echo $data['rname']; ?></td>
				<td><?php echo $data['remail']; ?></td> 
				<td><?php echo $data['rpassword']; ?></td>   
                <td><?php echo $data['rphone']; ?></td>  
				<td><?php echo $data['rbg']; ?></td>  
				<td><?php echo $data['rcity']; ?></td> 
				<td><a href="edit.php?id=<?php echo $data['id']; ?>"><img src="img/edit.png" class="icon" alt="" /><b>EDIT</b></a></td>
				<td><a href="delete.php?id=<?php echo $data['id']; ?>"><img src="img/delete.png" class="icon" alt="" /><b>DELETE</b></a></td>
			  </tr>	
			<?php
			}
			?>
			</table>
			</i>
			
			<h2>hospitals details</h2>

			<table border="2" id="customers">
			  <tr>
				<td>id</td>
				<td>hname</td>
				<td>hemail</td>
				<td>hpassword</td>
				<td>hphone</td>
				
				<td>hcity</td>
				<td>Edit</td>
				<td>Delete</td>
			  </tr>

			<?php

			include "dbConn.php"; // Using database connection file here

			$records = mysqli_query($db,"select * from  hospitals"); // fetch data from database

			while($data = mysqli_fetch_array($records))
			{
			?>
			  <tr>
				<td><?php echo $data['id']; ?></td>
				<td><?php echo $data['hname']; ?></td>
				<td><?php echo $data['hemail']; ?></td> 
				<td><?php echo $data['hpassword']; ?></td>   
                <td><?php echo $data['hphone']; ?></td>  				
				<td><?php echo $data['hcity']; ?></td> 
				
				<td><a href="edith.php?id=<?php echo $data['id']; ?>"><img src="img/edit.png" class="icon" alt="" /><b>EDIT</b></a></td>
				<td><a href="deleteh.php?id=<?php echo $data['id']; ?>"><img src="img/delete.png" class="icon" alt="" /><b>DELETE</b></a></td>
			  </tr>	
			<?php
			}
			?>
			</table>

			
</body>
</html>
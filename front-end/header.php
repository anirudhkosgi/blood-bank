<nav class="navbar navbar-expand-sm navbar-light bg-light sticky-top">
	<div class="container">
		<a class="navbar-brand" href="index.php"><img src="image/favicon.jpg" width="30" height="30" class="rounded-circle">LIFE SAVER</a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar"><i class="fas fa-align-left"></i></span>
          </button>

          <div class="collapse navbar-collapse" id="collapsibleNavbar">

        <?php if (isset($_SESSION['hid'])) { ?>

		<ul class="navbar-nav ml-auto">
			<li class="nav-item">
				<a class="nav-link btn btn-light" href="bloodinfo.php"><strong><b>Add blood info</strong></b></a>
            </li>
            <li class="nav-item">
                <a class="nav-link btn btn-light" href="bloodrequest.php"><strong><b>Blood Request</strong></b></a>
            </li>
			<li class="nav-item">
                <a class="nav-link btn btn-light" href="abs.php"><i style='font-size:18px;color:red' class='fas'>&#xf0fe;</i>&nbsp; <strong><b>Available blood</b></strong></a>
            </li>
            <li class="nav-item">
                <a href="hprofile.php?id=<?php echo $_SESSION['hid']; ?>" class="nav-link btn font-weight-bold"><img src="image/hospital.png" width="15" height="15" class="rounded-circle"><mark><?php echo $_SESSION['hname']; ?></mark></a>
            </li>
            <li class="nav-item">
                <a class="nav-link btn btn-danger btn-sm font-weight-bold" href="logout.php"><strong><b>Logout</strong></b></a>
            </li>
        </ul>

        <?php } elseif (isset($_SESSION['rid'])) { ?>

        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link btn btn-light" href="sentrequest.php"><strong><b>Sent Blood Request</strong></b></a>
            </li>
            <li class="nav-item">
                <a class="nav-link btn btn-light" href="abs.php"><i style='font-size:18px;color:red' class='fas'>&#xf0fe;</i>&nbsp; <strong><b>Available blood</b></strong></a>
            </li>
            <li class="nav-item">
                <a href="rprofile.php?id=<?php echo $_SESSION['rid']; ?>" class="nav-link btn font-weight-bold" href="#"><img src="image/user.png" width="15" height="15" class="rounded-circle"> <mark><?php echo ' '.$_SESSION['rname']; ?></mark></a>
            </li>
            <li class="nav-item">
                <a class="nav-link btn btn-danger btn-sm font-weight-bold" href="logout.php"><strong><b>Logout</strong></b></a>
            </li>
        </ul>

        <?php }  else { ?>

        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link btn btn-light" href="admin.php"> <i class='fas fa-user-cog' style='font-size:18px;color:red'></i>&nbsp; <strong><b>Admin</b></strong></a>
            </li>
			<li class="nav-item">
                <a class="nav-link btn btn-light" href="abs.php">  <i style='font-size:18px;color:red' class='fas'>&#xf0fe;</i>&nbsp; <strong><b>Available blood</b></strong></a>
            </li>
            <li class="nav-item">
                <a class="nav-link btn btn-light" href="register.php"><i class="fa fa-users" style="font-size:18px;color:red"></i>&nbsp; <strong><b>Register</b></strong></a>
            </li>
			 <li class="nav-item">
                <a class="nav-link btn btn-light" href="contact.php"><i class="fa fa-address-book-o" style="font-size:18px;color:red"></i>&nbsp;<strong> <b>Contact us</b></strong></a>
            </li>
			 <li class="nav-item">
                <a class="nav-link btn btn-light" href="login.php"><b><i class="fa fa-sign-in" style="font-size:18px;color:red"></i>&nbsp; <strong><b>Login</b></strong></a>
            </li>
        </ul>

        <?php } ?>
       </div>
    </div>
</nav>
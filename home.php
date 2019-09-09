<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en-us">
<head>
	<title>Home</title>
	<meta charset="utf-8">
	<meta name="author" content="Henok G">
	<link rel="stylesheet" type="text/css" href="CSS/css/bootstrap.css">
	<style type="text/css">
	body{
		color: white;
		background: gray;
	}
	div p{
		padding-left: 5%;
	}
	img{
		padding-left: 5%;
		padding-top: 5%;
	}
	.container-fluid:first-child{
		background: black;
	}
	.container-fluid li a{
		color: white;
	}
	.span4{
		background: blue;
		height: 800px;
	}
	.span6{
		background: red;
		height: 800px;
	}
	.span4{
		background: gray;
		height: 800px;
	}
	</style>
</head>
<body>
	<div class="container-fluid">
		<ul class="nav nav-tabs">
			<li><a href="home.php">Home</a></li>
			<li><a href="#">HTML</a></li>
			<li><a href="#">CSS</a></li>
			<li><a href="#">JS</a></li>
			<li><a href="#">PHP</a></li>
			<li><a href="#">Sql</a></li>
			<li><a href="#">JSP</a></li>
			<li><a href="#">C#</a></li>
		</ul>
	</div>
	<div class="row">
		<div class="span4">
			<img src="<?php echo $_SESSION['profile_picture'];?>" class="img-rounded">
			<p> Username - <?php echo $_SESSION['username']?></p>
			<p> Name - <?php echo $_SESSION['first_name']?> <?php echo $_SESSION['last_name']?></p>
			<p> Sex - <?php echo $_SESSION['sex']?></p>
			<p> Birth Date - <?php echo $_SESSION['birth_date']?></p>
			<p> Email - <?php echo $_SESSION['email']?></p>
			<p> Phone Number - <?php echo $_SESSION['phone_number']?></p>
			<p> Home Town - <?php echo $_SESSION['home_town']?></p>
			<p> Joined Like Habesha In - <?php echo $_SESSION['signup_date']?></p>
		</div>
		<div class="span6">
			
		</div>
		<div class="span4">
			
		</div>
	</div>
	<script type="text/javascript" src="CSS/js/bootstrap.js"></script>
	<script type="text/javascript" src="JS/jQuery.js"></script>
</body>
</html>
<?php 
session_start();
if (isset($_SESSION['login'])) {
	header('location:diary.php');
}


require 'mainfungsi.php';

if (isset($_POST["login"])) {
	$username= $_POST ["username"];
	$password= $_POST ["password"];

$result = mysqli_query($conn, "SELECT * FROM login WHERE username='$username' ");

if (mysqli_num_rows($result)===1) {
	$row= mysqli_fetch_assoc($result);

	if (password_verify($password, $row['$password'])); {
		$_SESSION["login"]=true;

		header('location:diary.php');
		exit;
	}
}
$error=false;
}

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>
LOGIN DIARY..		
	</title>

<link type="text/css" rel="stylesheet" href="../../materialize/css/materialize.min.css"  media="screen,projection"/>
            <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../../materialize/css/materialize.css"  media="screen,projection"/>

	<link rel="stylesheet" href="../../bootstrap-4.4.1-dist/font/style.css">
	<link rel="stylesheet" href="maincss.css">
</head>
<body>

<div class="container login">

<?php include 'logoBIG.php'; ?>



<div class="loginform">
	<div class="row">






	<div class="col m12 s10">
<form action="" method="POST">

	<div class="input-field">
	<input type="text" name="username" id="username" class="validate" autofocus="" required="" autocomplete="none">
	<label class="" for="name">User Name</label>
	</div>

	<div class="input-field">		
	<input type="password" name="password" id="password" class="validate" required="" autocomplete="none">
	<label class="" for="password">Password</label>
	</div>

	<div class="newmember">
	<a href="register.php">
	 <i class="icon-user-plus"> SIGN IN</i>
	</a>
	</div>	


	<button type="submit" class="tombol" name="login"> <i class="icon-rocket"></i> </button>
</form>
<!-- col -->
</div>

<!-- row -->
</div>
<!-- loginform -->
</div>
<!-- container -->
</div>

<?php include 'footer.php'; ?>

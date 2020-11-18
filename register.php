<?php 

require 'mainfungsi.php';

if (isset($_POST["save"])) {

	if (daftar($_POST)>0) {
		echo " <script>
		alert('data berhasil masuk');
		</script>
		";
		header('location:login.php');
	} else {
		echo " <script>
		alert('data gagal dimasukan');
		</script>
		";
		echo mysqli_error($conn);
	}
}


 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>
 		
 	</title>
<link type="text/css" rel="stylesheet" href="../../materialize/css/materialize.min.css"  media="screen,projection"/>
            <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../../materialize/css/materialize.css"  media="screen,projection"/>

	<link rel="stylesheet" href="../../bootstrap-4.4.1-dist/font/style.css">
	<link rel="stylesheet" href="maincss.css">

 </head>
 <body>
 	

	<div class="container register">

<?php include 'logoBIG.php'; ?>





<div class="formregister">
	


<div class="row ">
    

    <form class="col m10 s12" method="POST">
      <div class="row">

        <div class="input-field col m6 s11">
          <input required="" autofocus="" id="name" type="text" class="validate" name="nama">
          <label for="name">Full Name</label>
        </div>

        <div class="input-field col m6 s11">
          <input id="username" type="text" class="validate" required="" name="username">
          <label for="username">User Name</label>
        </div>
<!-- row 1 -->
      </div>



      <div class="row">

        <div class="input-field col m6 s11">
          <input required=""  id="password" type="password" class="validate" name="password">
          <label for="password">Password</label>
        </div>

        <div class="input-field col m6 s11">
          <input required=""  id="password" type="password" class="validate" name="password2">
          <label for="password">Confirm Password</label>
        </div>

<!-- row 2 -->
      </div>


	<div class="newmember">
	<a href="login.php">
	 <i class="icon-user-circle"> LOG IN</i>
	</a>
	</div>	


		<button type="submit" name="save" class="btn">REGISTER</button>


</form>
<!-- row utama -->
</div>

      




<!-- formregister -->
</div>







<!-- container -->
</div>


      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="../../materialize/js/materialize.min.js"></script>

 </body>
 </html>
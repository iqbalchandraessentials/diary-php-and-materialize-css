<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>


<style>

.navbar {
	display: none;
}


@media (min-width: 992px) { 


.navbar {
	
	/*position: fixed;*/
	top: 30rem;
	left: 40px;
	/*transform: translate(40px,30rem);*/
	position: absolute;
	height: 100px;
	width: 30px;
	display: block;
	/*background-color: black;*/
}

.fixed {
	position: fixed;
	top: 10;
}

.navbar .btn {
	margin-bottom: 20px;
	/*position: fixed;*/
	/*top: 0;*/
	/*position: absolute;*/
	/*z-index: 9999;*/
}

.navbar .btn:hover {
	background-color: #12E1D4;
}


}

</style>

<script src="bootstrap-4.4.1-dist/js/jquery-3.4.1.min.js"></script>


<link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css"  media="screen,projection"/>
            <!-- Import materialize.css -->
<link type="text/css" rel="stylesheet" href="materialize/css/materialize.css"  media="screen,projection"/>



<link rel="stylesheet" href="bootstrap-4.4.1-dist/font/style.css">

<link rel="stylesheet" href="maincss.css">


</head>
<body>






<div class="navbar">

<a href="home.php">
	<div class="btn btn-floating fixed">
	<i class="icon-home"></i>
	</div>
</a>




<a href="diary.php">
<div class="btn btn-floating fixed "><i class="icon-note_add"></i></div>
</a>

<a href="personal.php">
<div class="btn btn-floating fixed "><i class="icon-person"></i></div>
</a>


<a href="logout.php">
<div class="btn btn-floating fixed  "><i class="icon-sign-out"></i></div>
</a>



</div>


<script>

	// $(window).scroll(function() {


		// var wScroll=$(this).scrollTop();
	
	// if(wScroll>$('.navbar').offset().top-300) {
	// $('.navbar').css({
	// 'transform': 'translateY(30rem)',
	// 'top': 90+wScroll/9000+'%',
	// 'background-color': 'yellow'
	// });
	// }	


	// });

</script>
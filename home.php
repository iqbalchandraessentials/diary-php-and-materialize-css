<?php 
session_start();
if (!isset($_SESSION['login'])) {
	header('location:login.php');
}

require 'mainfungsi.php';


 ?>






 	<title>
Remember today must BETTER.. 		
 	</title>
<?php include 'navbarmobile.php'; ?>



<?php include 'navbar.php'; ?>




<div class="container">

</div>



<section class="home" style="position: relative;">
	<div class="container">

<div class="overlay" style="">
<div class="absolute m12 s12" 
style="
  position: absolute;
  /*width: 400px;*/
  z-index: 9999;
  top: 20; left: 30%;
  
  ">
<?php include 'absolute.php'; ?>
</div>
</div>

	<div class="row">














<?php 
$diary = query("SELECT * FROM diary_tb ORDER BY id DESC")
 ?>



<?php $i=1; ?>
<?php foreach ($diary as $row) {
  ?>






    <div class="col s12 m6 l4">

      <div class="card">
        <div class="card-image">



		<img width="100" src="img/<?= $row["foto"] ; ?>"  alt="" class="materialboxed gambar">
		
 



        </div>



        <div class="card-content">


<a href="home.php?cek=<?= $row["id"]; ?>">

          <span class="card-title blue-text text-darken-2">
          	<?= $row["judul"] ; ?>
          </span>

</a>






          <p class="content" >
          	<?= $row["rangkuman"] ; ?>
          </p>






<div class="row">	

<div class="col m4"></div>

<div class="col m8 ">	
	<p class="tanggal red-text text-darken-2" style="font-size: 13px; font-weight: bold; margin-top: 20px;">
	          	<?= $row["pilihtanggal"] ; ?>
	</p>
</div>
</div>


        </div>




        <div class="card-action">

<a class="btn-floating btn-small red darken-2" href="delete.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin ?')">
<i class="icon-trash-o" style="font-size: 17px;"></i>
</a>

<a class="btn-floating btn-small blue darken-2" href="ubah.php?id=<?= $row["id"]; ?>">
<i class="icon-edit" style="font-size: 17px;"></i>
</a>

        </div>
      	</div>
    </div>


<?php $i++; ?>
<?php } ?>




<!-- <div class="col s12 m6">
      <div class="card">
        <div class="card-image">
          <img src="images/sample-1.jpg">
          <span class="card-title">Card Title</span>
        </div>
        <div class="card-content">
          <p>I am a very simple card. I am good at containing small bits of information.
          I am convenient because I require little markup to use effectively.</p>
        </div>
        <div class="card-action">
          <a href="#">This is a link</a>
        </div>
      </div>
    </div>






    <div class="col s12 m3">
      <div class="card">
        <div class="card-image">
          <img src="images/sample-1.jpg">
          <span class="card-title">Card Title</span>
        </div>
        <div class="card-content">
          <p>I am a very simple card. I am good at containing small bits of information.
          I am convenient because I require little markup to use effectively.</p>
        </div>
        <div class="card-action">
          <a href="#">This is a link</a>
        </div>
      </div>
    </div> -->
    <!-- row -->
  </div>
   <!-- container  -->
</div>


</section>

<?php include 'footer.php'; ?>
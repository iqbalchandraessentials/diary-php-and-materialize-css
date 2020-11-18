<?php 
session_start();
if (!isset($_SESSION['login'])) {
	header('location:login.php');
}

require 'mainfungsi.php';

// cek apakah tombol sudah di tekan atau belum
if (isset($_POST["submit"])) {


	if (add($_POST)>0) {
	echo "
		<script> alert('data berhasil ditambahakan');
		document.location.href= 'home.php'; </script>  
		";
} else { echo "
		<script>
		alert('data gagal di input');
		</script>
";}

}
?>
 




<?php include 'navbar.php'; ?>

<div class="container">
<?php include 'logoBIG.php'; ?>
</div>










	
<section class="container mydiary center">



<div class="row">


<div class="col m7 s12 inputdiary ">
<div class="row">
        
<form action="" method="POST" enctype="multipart/form-data">


    <div class="input-field col m8 ">
	<i class="icon-pencil prefix"></i>
	<input type="text" id="judul" name="judul" autofocus="">
          <label for="judul">TITLE OF THE DAY</label>
	</div>

<img id="preview" width="350px"/> 



        <div class="input-field calendar col s6">
          <i class="icon-calendar prefix"></i>
  <input type="text" class="datepicker" name="pilihtanggal" id="calendar" >
          <label for="calendar">Date</label>
        </div>


         <div class="input-field col s12">
          <textarea id="cerita" class="materialize-textarea" data-length="920"  name="cerita"></textarea>
          <label for="cerita">Textarea</label>
        </div>


         <div class="input-field col s6">
            <input id="rangkuman" name="rangkuman" type="text" data-length="200">
            <label for="rangkuman">Point of the Day</label>
          </div>



		
<!--  <button class="btn-floating halfway-fab tombol  red">	 -->
<!-- <input  type="file"  name="foto" id="foto" 
onchange="return fileValidation()"/>
	<i class="icon-plus"></i> -->

<div class="upload-btn-wrapper">
  <button class="btn btn-floating halfway-fab tombol red">
<input type="file" required="" name="foto" id="foto" onchange="tampilkanPreview(this,'preview')"/>

<i class="icon-plus"></i>    


  </button>
</div>
<!-- </button> -->




<!-- row 1 -->
	</div>
	
<button type="submit" class="btn tombol" name="submit">SAVE</button>

</form>
<!-- row utama  -->
</div>
</section>


<?php include 'footer.php'; ?>
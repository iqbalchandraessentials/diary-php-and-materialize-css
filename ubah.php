<?php 
session_start();
if (!isset($_SESSION['login'])) {
  header('location:login.php');
}



require 'mainfungsi.php';

// ambil data yang dikirim
$id = $_GET["id"];
// query data mahasiswa berdasarkan ID
$rows = query("SELECT * FROM diary_tb WHERE id=$id")[0];


// cek apakah data berhasil di ubah
if (isset($_POST["submit"])) {

if (ubah($_POST)>0) {
  echo "
    <script> alert('data berhasil diubah');
    document.location.href= 'home.php'; </script>  
    ";
} else { echo "
    <script>
    alert('data gagal diubah');   
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


<input type="hidden" name="id" value="<?= $rows["id"] ?>">

<input type="hidden" name="gambarlama" value="<?= $rows["foto"] ?>">



    <div class="input-field col m8 ">
	<i class="icon-pencil prefix"></i>
	<input type="text" id="judul" name="judul" autofocus="" value="<?= $rows["judul"] ?>">
          <label for="judul">TITLE OF THE DAY</label>
	</div>

<img id="preview" width="350px"/ src="img/<?= $rows["foto"]; ?>"> 



        <div class="input-field calendar col s6">
          <i class="icon-calendar prefix"></i>
  <input type="text" class="datepicker" name="pilihtanggal" id="calendar" value="<?= $rows["pilihtanggal"] ?>">
          <label for="calendar">Date</label>
        </div>


         <div class="input-field col s12">
          <textarea id="cerita" class="materialize-textarea"  data-length="900"  name="cerita" >
            <?= $rows["cerita"] ?>
                      </textarea>
          <label for="cerita">Textarea</label>
        </div>


         <div class="input-field col s6">
            <input id="rangkuman" name="rangkuman" type="text" data-length="200" value="<?= $rows["rangkuman"] ?>">
            <label for="rangkuman">Point of the Day</label>
          </div>


		

<div class="upload-btn-wrapper">
  <button class="btn btn-floating halfway-fab tombol red">
<input type="file"  name="foto" id="foto" onchange="tampilkanPreview(this,'preview')"/ value="<?= $rows["foto"] ?>">

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
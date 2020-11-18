
<?php 

// ambil data yang dikirim
if (isset($_GET["cek"])) :
$cek = $_GET["cek"];
// query data mahasiswa berdasarkan cek
$rows = query("SELECT * FROM diary_tb WHERE id=$cek")[0];


 ?>

<style>
  .overlay {
    /*position: fixed;*/
    background-color: rgba(0,0,0,.8);
    
    width: 450px;
    
}

</style>


    <div class="overlay">

      <div class="card teal lighten-2" style="opacity: .8">
        <div class="card-image">



    <img width="100" src="img/<?= $rows["foto"] ; ?>"  alt="" class="materialboxed gambar">
    
 



          </div>



        <div class="card-content">



          <span class="card-title blue-text text-darken-2">
            <?= $rows["judul"] ; ?>
          </span>







          <p class="content" >
            <?= $rows["cerita"] ; ?>
            <?= $rows["rangkuman"] ; ?>
          </p>






<div class="row"> 

<div class="col m4"></div>

<div class="col m8 "> 
  <p class="tanggal red-text text-darken-2" style="font-size: 13px; font-weight: bold; margin-top: 20px;">
              <?= $rows["pilihtanggal"] ; ?>
  </p>
</div>
</div>


        </div>




        <div class="card-action">

<a href="home.php">close</a>

        </div>
        </div>
    </div>



<?php endif; ?>

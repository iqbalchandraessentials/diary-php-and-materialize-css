<?php 
session_start();
if (!isset($_SESSION['login'])) {
	header('location:login.php');
}

include 'mainfungsi.php';
$datamasuk=$_GET["id"];
echo $datamasuk;

if (hapus($datamasuk)>0) {
	echo "
		<script> alert('data berhasil dihapus');
		document.location.href= 'home.php'; </script>  
		";
} else { echo "
		<script>
		data gagal dihapus
		document.location.href= 'home.php';
		</script>
";}



 ?>
<?php 

// koneksi data base 
$conn = mysqli_connect("localhost","root","","diary");

function query($query) {
	global $conn;
	
	$result= mysqli_query($conn,$query);

	$rows = [];

	while ($row=mysqli_fetch_assoc($result) ) {
		$rows[] = $row;

	}
	return $rows;
}














// registrasi form


function daftar($data) 
{
	global $conn;

	$nama = htmlspecialchars($data["nama"]);

// str lower untuk mengubah huruf menjadi huruf kecil atau bukan kapital
// stripcslashes di gunakan untuk menghilangkan tanda strip
	$username= strtolower(stripcslashes($data["username"]));
// mysqli_real_escape_string untuk memberikan kutip pada database
	$password= mysqli_real_escape_string($conn,$data["password"]);

	$password2= mysqli_real_escape_string($conn,$data["password2"]);

// cek username sudah atau belum
	$result=mysqli_query($conn,"SELECT username FROM login WHERE username = '$username'");

	if (mysqli_fetch_assoc($result) ){
		echo " <script> alert('username sudah ada'); </script>"; 
		return false;
	}












// cek konfirmasi passord
	if ($password !== $password2) {
		echo " <script>
		alert('password tidak sesuai');
		</script>
		";
		return false;
	}
// encripsi password
	$password = password_hash($password, PASSWORD_DEFAULT);

// jika password sesuai maka tambahkan ke database
mysqli_query($conn, "INSERT INTO login VALUES('','$nama', '$username','$password') ");

return mysqli_affected_rows($conn);
}






















function add($data) {
	global $conn;
	// htmlspecialchars untuk di olah agar tidak menampilkan elemen HTML
	$judul = htmlspecialchars($data["judul"]);
	$cerita = htmlspecialchars($data["cerita"]);
	$rangkuman = htmlspecialchars($data["rangkuman"]);
	$pilihtanggal=$data["pilihtanggal"];


	date_default_timezone_set('Asia/Jakarta');
	$tanggal=date('Y-m-d H:i:s');

	// fungsi upload foto
	$foto= upload();
	if ($foto===false) {
		return false;
	}

$query = "INSERT INTO diary_tb
		VALUES  
		('','$tanggal','$pilihtanggal','$foto','$judul','$cerita','$rangkuman')";

		// query inserd data pertama kita panggil koneksinya dan , yang kedua adalah query insert data nya
	mysqli_query($conn,$query);

	return mysqli_affected_rows($conn);
}






















function upload() {
	$namafile= $_FILES['foto']['name'];
	$ukuran= $_FILES['foto']['size'];
	$error= $_FILES['foto']['error'];
	$tmpsementara= $_FILES['foto']['tmp_name'];

	// cek apakah tidak ada foto yang di upload

	if ($error===4) {
		echo "<script>
		alert('belum upload foto');
		</script>
		";
		return false;
	} 

	// cek apakah file yand di upload adalah foto
	$yangdiizinkan=['jpg','jpeg','png'];

	// explode untuk memecah data menjadi array
	$ekstensifoto= explode('.', $namafile);
	
	// str lower untuk merubah hurf kecil
	$ekstensifoto= strtolower(end($ekstensifoto));

	// in_array untuk mengecek adakah string di dalam array
	if ( !in_array($ekstensifoto, $yangdiizinkan)) {
				echo "<script>
		alert('file upload bukan foto');
		</script>";
		return false;
	}

	// cek jika ukuran terlalu besar
	// 1jt byte = 1 MB
	if ($ukuran>1000000) {
	echo "<script>
		alert('file upload terlalu besar 1MB max');
		</script>";
		return false;	
	}
	// jika lolos pengecekan, maka upload

// genarate nama foto baru
// $namabaru= time();
// $namabaru .= '.';
// $namabaru .= $namafile;

	move_uploaded_file($tmpsementara,'img /'.$namafile);


}






























function hapus($data) {
	global $conn;
	mysqli_query($conn, "DELETE FROM diary_tb WHERE id=$data");
	return mysqli_affected_rows($conn);
}




















// function ubah($data) {
// 	global $conn;
// 		// htmlspecialchars untuk di olah agar tidak menampilkan elemen HTML
// 	$id= $data["id"];
// 	$tipe = htmlspecialchars($data["tipe"]);
// 	$merek = htmlspecialchars($data["merek"]);
// 	$from = htmlspecialchars($data["from"]);
// 	$gambar = $data["gambar"];
// 	$gmabarlama= ($data["gmabarlama"]);
// 	// cek apakah user memilih gambar baru
// 	if ($_FILES['gambar']['error']===4) {
// 		$gambar=$gmabarlama;
// 	} else {
// 		$gambar=upload();
// 	}

// $query= "UPDATE mobil SET 
// 		tipe= '$tipe',
// 		merek= '$merek',
// 		-- from= '$from',
// 		gambar= '$gambar'
// 		WHERE id=$id";
// 		mysqli_query($conn, $query);
// 		return mysqli_affected_rows($conn);
// }








 ?>
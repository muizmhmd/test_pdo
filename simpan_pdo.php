<?php 

include "koneksi.php";
// $connect = mysqli_connect('localhost', 'root', '', 'web2');

$nama = $_POST['nama'];
$nim = $_POST['nim'];
$ttl = $_POST['ttl'];
$alamat = $_POST['alamat'];
$semester = $_POST['semester'];
$prodi = $_POST['prodi'];
$foto = $_FILES['foto']['name'];
$tmp = $_FILES['foto']['tmp_name'];

// $newPhoto = date('dmYHis').$foto;
$newPhoto = $foto;

$path = "images/".$newPhoto;

try {

  if (move_uploaded_file($tmp, $path)) {
    # code...
    $sql = "INSERT INTO mahasiswa VALUES(null, '".$nama."', '".$nim."', '".$ttl."', '".$alamat."', '".$semester."', '".$prodi."', '".$foto."')";
    $koneksi->exec($sql);
    if ($koneksi) {
      # code...
      header("location: index.php"); // Redirect ke halaman index.php
    } else{
      echo $koneksi->errno;
      echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
      echo "<br><a href='index.php'>Kembali Ke Form</a>";
    }
  }
  else{
    echo "Maaf, Gambar gagal untuk diupload.";
    echo "<br><a href='index.php'>Kembali Ke Form</a>";
  }
  
} catch (PDOException $e) {
  //throw $th;
  echo $sql . "<br>" . $e->getMessage();
}

$koneksi = null;

?>
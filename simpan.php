<?php 

// include "koneksi.php";
$connect = mysqli_connect('localhost', 'root', '', 'web2');

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

if(move_uploaded_file($tmp, $path)){ // Cek apakah gambar berhasil diupload atau tidak
    // Proses simpan ke Database
    $query = "INSERT INTO mahasiswa VALUES(null, '".$nama."', '".$nim."', '".$ttl."', '".$alamat."', '".$semester."', '".$prodi."', '".$foto."')";
    $sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query
    if($sql){ // Cek jika proses simpan ke database sukses atau tidak
      // Jika Sukses, Lakukan :
      header("location: index.php"); // Redirect ke halaman index.php
    }else{
      // Jika Gagal, Lakukan :

      echo $connect->errno;
      echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
      echo "<br><a href='index.php'>Kembali Ke Form</a>";
    }
  }else{
    // Jika gambar gagal diupload, Lakukan :
    echo "Maaf, Gambar gagal untuk diupload.";
    echo "<br><a href='index.php'>Kembali Ke Form</a>";
  }

?>
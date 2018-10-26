<?php
// Load file koneksi.php
include "koneksi.php";
// Ambil Data yang Dikirim dari Form
// $id = $_POST['id'];
$namavideo = $_POST['namavideo'];
$kategori = $_POST['kategori'];
$video = $_FILES['video']['name'];
$temp = $_FILES['video']['tmp_name'];
// Rename nama fotonya dengan menambahkan tanggal dan jam upload
//$fotobaru = date('dmYHis').$gambar;
// Set path folder tempat menyimpan fotonya
$path = "Video/".$video;
// Proses upload
if(move_uploaded_file($temp, $path)){ // Cek apakah gambar berhasil diupload atau tidak
  // Proses simpan ke Database
  $query = "INSERT INTO video VALUES('".$id."', '".$kategori."', '".$video."', '".$namavideo."')";
  $sql = mysqli_query($con, $query); // Eksekusi/ Jalankan query dari variabel $query
  if($sql){ // Cek jika proses simpan ke database sukses atau tidak
    // Jika Sukses, Lakukan :
    header("location: index.php"); // Redirect ke halaman index.php
  }else{
    // Jika Gagal, Lakukan :
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='tambahdata.php'>Kembali Ke Form</a>";
  }
}else{
  // Jika gambar gagal diupload, Lakukan :
  echo "Maaf, Video gagal untuk diupload.";
  echo "<br><a href='tambahdata.php'>Kembali Ke Form</a>";
}
?>
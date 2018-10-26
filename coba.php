<?php

mysql_connect("127.0.0.1","root","");
mysql_select_db("trepple");

if(isset($_POST['submit']))
{
	$namavideo = $_POST['namavideo'];
	$kategori = $_POST['kategori'];
	$video = $_FILES['video']['name'];
	$temp = $_FILES['video']['tmp_name'];
	
	move_uploaded_file($temp,"Video/".$name);
	// $url = "http://127.0.0.1/PHP/video%20upload%20and%20playback/Video/$name";
	mysql_query("INSERT INTO `video` VALUE ('','$kategori',$video','$namavideo',)");
 }else{
    // Jika Gagal, Lakukan :
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='tambahdata.php'>Kembali Ke Form</a>";
  }

?>
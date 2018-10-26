<?php
   require_once("koneksi.php");
   $namadepan = $_POST['namadepan'];
   $namabelakang = $_POST['namabelakang'];
   $email = $_POST['email'];
   $password = $_POST['password'];
   $sql = "SELECT * FROM tb_user WHERE email = '$email'";
   $query = $con->query($sql);
   // if($query->num_rows != 0) {
   //   echo "<script>alert('Username Sudah Terdaftar!');history.go(-1);</script>";
   // } else {
   //   if(!$namadepan) {
   //      echo "<script>alert('Username tidak boleh kosong!');history.go(-1);</script>";
   //   } else {
   //    if (!$namabelakang){
   //      echo "<script>alert('Nomor HP tidak boleh kosong!');history.go(-1);</script>";
   //    } else {
   //      if (!$email){
   //          echo "<script>alert('Email Tidak boleh kosong!');history.go(-1);</script>";
   //    } else {
   //      if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
   //          echo "<script>alert('Masukkan email yang valid!');history.go(-1);</script>";
   //    } else {
   //        if (!$password){
   //          echo "<script>alert( 'Password tidak boleh kosong!');history.go(-1);</script>";
   //    } else
       $data = "INSERT INTO tb_user VALUES ('".$email."','".$namadepan."','".$namabelakang."','".$password."')";
       $simpan = $con->query($data);
       if($simpan) {
         echo "<script>alert('Anda Berhasil Daftar Silahkan Login');window.location='login.php';</script>";
       } else {
         echo "<script>alert('Gagal Daftar!');history.go(-1);</script>";
       }
     
?>
 
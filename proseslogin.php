<?php
   session_start();
   require_once("koneksi.php");


   $namadepan = $_POST['Emaillogin'];
   $password = $_POST['Passwordlogin'];
      $email = $_POST['email'];
  
   $sql = "SELECT * FROM tb_user WHERE email = '$namadepan'";
   $query = $con->query($sql);
   $hasil = $query->fetch_assoc();
   if($query->num_rows == 0) {
    echo "<script>alert('Username Belum Terdaftar!');history.go(-1);</script>";
   } else {
     if($password <> $hasil['password']) {
    echo "<script>alert('Password Salah!');history.go(-1);</script>";
     } else {
      $_SESSION['email'] = $hasil['email'];
       $_SESSION['username'] = $hasil['username'];
       header('location:index.php');
     }
   }
?>
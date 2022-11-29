<?php

// Menghidupkan session php
session_start();

//Menghubungkan koneksi
include 'cek_koneksi.php';

//Menangkap data yang dikirim dari form
$username =$_POST["username"];
$password =$_POST["password"];

//menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($koneksi, "select * from imperiuminfo where username ='$username' and password='$password'");


//Menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);

if($cek >0){
    $_SESSION["username"] = $username;
    $_SESSION["status"] = "login";
    header("location:./Login/webku.php");
}
else{
    header("location:index.php?notif=gagal");
}

?>
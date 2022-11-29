<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
//Menghidupkan session PHP
session_start();
//Memberikan sebuah kondisi dimana apabila status session tidak = login maka balikkan lagi pada file index.php
//di luar file login

if($_SESSION['status'] !="login"){
    header("location:../index.php?notif=belum login");
}
?>

<h1>WELCOME HOME, <?php echo $_SESSION['username']; ?> Anda Kweren</h1>

<br>

<a href="logout.php">Logout</a>



</body>
</html>
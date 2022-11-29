<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="apa.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <title>WEBKU</title>
</head>


<?php
//Menghidupkan session PHP
session_start();
//Memberikan sebuah kondisi dimana apabila status session tidak = login maka balikkan lagi pada file index.php
//di luar file login

if($_SESSION['status'] !="login"){
    header("location:../index.php?notif=belum login");
}
?>


<body>
    <!-- SECTION NAVIGASI -->
 <section>
    <div class="container">
        <div class="gambar"/>
       
       <div class="navigasiwrap">
        <h1 class="brand">Minus Impirium</h1>
      
        <ul class="navigasi">
          <li class="nav"><a href="#home">Home</a></li>

          <li class="nav"><a href="#myfile">My Files</a></li>

          <li class="navi"><a href="logout.php">Logout</a></li>

        </ul>

       </div>
        <!-- Disini Untuk Menampilkan Nama user Pada Login Mysql -->
       <div class="userphp animate__animated animate__backInDown">
        <h1 style="color: white;font-size:42px;  font-family: 'Playfair Display', serif;">Selamat Datang Kembali,<p><?php echo $_SESSION['username']; ?></p></h1>
    </div>

    </div>

 </section>




 <!-- SECTION MENU HOME -->
 <section >
    <div class="container purple">
        <div class="menuwrap">
            <h2 id="myfile">~Let's Chill Out With Music~</h2>
            <!-- <img src="Borneo.jpg" alt="" width="500" height="450"> -->
            <iframe width="1000" height="500"src="https://www.youtube.com/embed/watch?v=VyPwEZTIpVc&list=RDVyPwEZTIpVc&start_radio=1&rv=VyPwEZTIpVc&t=26"/>

        </div> 
        
    </div>
 </section>
 
 <!-- Masih Pr Lanjutan dibawah ini -->
 
 <!-- SECTION MY FILE -->
 <!-- <section >
    <div class="container purple">
        <div class="menuwrap">
            <h2 id="myfile">HAI DISANA</h2>
        </div>
    </div>
 </section> -->

 <!-- SECTION FOOTER -->

 <!-- <section >
    <div class="container red">
        <div class="menuwrap">
            <h2 id="footer" >HAI DISANA</h2>
        </div>
    </div>
 </section> -->
    
</body>
</html>
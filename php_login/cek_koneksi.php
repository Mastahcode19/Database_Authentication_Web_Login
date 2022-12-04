
    <?php
    //Melakukan koneksi  
     $koneksi = mysqli_connect("localhost","root","","impirium");


   //Memeriksa Koneksi database
   if(mysqli_connect_errno()){
    echo "Gagal Koneksi Ke Database :" . mysqli_connect_errno();    
   }else{
    echo"Koneksi @Berhasil";
   }
    ?>

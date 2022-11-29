<?php

session_start();

//Menghapus semua sesi
session_destroy();


//mengalihkan halaman sambil mengirim pesan logout 

header("location:../index.php?notif=logout");


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM LOGIN</title>
</head>

<style>
    *{
        margin: 0;
        padding: 0;
    }
    .kotak{
       /* background-color: rgba(255, 255, 255, .15); */
       background-color: rgba(255, 255, 255, 0.815);
       border-radius: 10px;
       box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
       height: 450px;
       width: 700px;
       justify-content: center;
       position: absolute;
       top: 50%;
       left: 50%;
       transform: translate(-50%,-50%);
    }

    .kotak h2{
        text-align: center;
        font-size:20px;
        padding: 18px;
        background-color: yellow;
        border-radius: 10px;
    }

    .baground{
       background-image: url(./Login/pohon.png);
       background-repeat: no-repeat;
       background-size: cover;
       background-position: center   ;
       height: 100vh;
       margin: 0;
       padding: 0;
    }

    .kotak table{
    align-items: center;
    display: flex;
    flex-direction: column;
    font-size: 20px;
    margin-top: 20PX;
    }

.kotak table input{
    
    padding: 8px 10px;
    margin-bottom: 15px;
    margin-top: 20px;
    border: none;
    background-color: transparent;
    border-bottom: 2px solid rgb(250, 121, 35);
    color: black;
    font-size: 20px;

    
    
}

.container button{
    width: 100%;
    margin-top: 70PX;
    padding: 15px 0;
    border-radius: 10px;
    border: none;
    background-color:rgb(250, 121, 35);
    font-size: 18px;
    color: #fafafa;
    cursor: pointer;
    transform: translateX(100%);
}

.info{
    text-align: center;
    color:rgb(71, 41, 182);
    font-size: 20px;
    font-style: italic;
}
</style>
<body>

     <div class="container">
     <div class="baground"></div>
     <div class="kotak">
     <form   method="post" action="cek_login.php">
     <H2 style="color:red;">VALIDASI FORM LOGIN QUERY DATABASE</H2><br>

    <!-- Notif Info Login Berhasil Atau Tidak -->
    <div class="info">
    <?php
    if(isset($_GET["notif"])){

        if($_GET["notif"]== "gagal"){
            echo "Kamu Kurang Beruntung😂! Username/Passwordnya Salah Kali,Coba Lagi ya...";
        }


        else if($_GET["notif"]== "belum login"){
            echo "Kok Kamu Gitu Sih, Isi Dulu Dong Username Dan Passwordnya 🧐";
        }
       
        else if($_GET["notif"] == "logout"){
            echo"Yah Kamu Barusan Logout, Login Lagi Dong Biar Asik 😎";
                    
        }
    }
    ?>
    </div>
     <table>
        <tr>
            <td>Username/Email</td>
            <td>:</td>
            <td><input type="text" name="username" placeholder="Masukkan username kamu"></td>
        </tr>

        <tr>
            <td>Password</td>
            <td>:</td>
            <td><input type="password" name="password" placeholder="Masukkan PW kamu"></td>
        </tr>

        <td></td>
        <td></td>

        <tr>
           <td><button>Login</button></td> 
        </tr>
     </table>
     </form>

     </div>

     </div>

    
</body>
</html>
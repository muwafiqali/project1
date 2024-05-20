<?php
session_start();

if(isset($_SESSION['userid'])){
    if($_SESSION['role_id']==2){
        header('location:gudang.php');
    }
}else{
    $_SESSION['error'] = 'anda harus login terlebih dahulu';
    header('location:login.php');
}
?>

<!DOCTYPE html>
<html>
    <head>
    <title>home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap/3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body>
    <div class="container">
        <h1> selamat datang </h1>
        <a href="/barang.php">barang</a> | <a href="/role.php">role</a> | <a href="/user.php"></a> | <a href="logout.php">logout</a>

    </div>
    </body>


</html>

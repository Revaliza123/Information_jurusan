<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">a
    <title>Login</title>
<style>
body{
    background-image: url("https://media.istockphoto.com/id/1422419217/photo/the-high-quality-shoot-of-medievathe-l-window-with-old-architecture-stone-carving-high.jpg?b=1&s=170667a&w=0&k=20&c=WjJQgSizgfDoP3ArCx5Umvg7BY3rDRCuNgf-dWGMm7g=");
    background-size:cover;
}
</style>
</head>
<?php
session_start();
include "koneksi.php";
?>
<section class="vh-100">
<div class="container py-5 h-100">
<div class="row d-flex justify-content-center align-items-center h-100">
<div class="col-12 col-md-8 col-lg-6 col-xl-5">
<div class="card shadow-2-strong" style="border-radius: 1rem;">
<div class="card-body p-5 text-center ">
<form action="" method ="POST">
<table align="center">
<div class="form-outline mb-4" >
    <tr>
        <th colspan="2" height="40">LOGIN</th>
    </tr>
    <tr>
        <td> <input type="username" name="username" placeholder="username" class="form-control" style="margin-bottom:20px;"></td>
    </tr>
    <tr>
        <td> <input type="password" name="password" placeholder="password" class="form-control" style="margin-bottom:20px;"></td>
    </tr>
    <tr>
        <td> <input type="submit" value="login" name="masuk" class="btn btn-primary btn-block mb-4"></td>
    </tr>
    </div>
</table>
</form>
</div>
</div>  
</div>
</div>
</div>
</section> 

<?php
if(isset($_POST['masuk'])){
    $sql = mysqli_query($koneksi, "select * from admin where username = '$_POST[username]'
    and password = '$_POST[password]'");

    $cek = mysqli_num_rows($sql);
    if($cek >0){
        $_SESSION['username'] = $_POST['username'];

        echo "<meta http-equiv='refresh' content=0;URL='admin/home.php'>";
    }else{
        echo "<p align=center><b> username dan password salah ! </b><p>";
        echo "<meta http-equiv='refresh' content=0;URL='login.php'>";
    }
}
?>

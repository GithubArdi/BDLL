<?php 
  include 'koneksi.php';

  if(isset($_POST["submit"])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $nama_mitra=$_POST['nama_mitra'];
    $no_telp=$_POST['notlp'];
    $status=$_POST['status'];

    mysqli_query($connect,"INSERT INTO tb_mitraresto VALUES ('','".$username."','".$password."','".$nama_mitra."','".$no_telp."','".$status."')");

    echo mysqli_error($connect);
    if($_POST > 0){
      echo "<script>
              alert('Registrasi berhasil'); 
            </script>";
            header("Location: login.php");
    } else{
      echo mysqli_error($connect);
      } 
   }

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" href="css/register.css" type="text/css">
</head>
<body>
<h3>Register</h3>

<form action="" method="POST">
  <div class="container">
    
    <label for="username" ><b>Username</b></label>
    <input type="text" placeholder="masukan username" id="username" name="username" required>
    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="masukan Password" id="password" name="password" required>
    <label for="nama_mitra"><b>Nama Lengkap</b></label>
    <input type="text" placeholder="masukan nama lengkap" id="nama_mitra" name="nama_mitra" required>
    <label for="notlp"><b>No Telepon</b></label>
    <input type="text" placeholder="masukan notlp " id="notlp" name="notlp" required>
   
    <label for="status"><b>Status</b></label>
    <input type="text" placeholder="masukan status" id="status" name="status" required>

    <button type="submit" name="submit">register</button>
  </div>
  <div class="container">
    <span class="masuk">Punya akun? <a href="login.php">Masuk</a></span>
  </div>
</form>

</body>
</html>
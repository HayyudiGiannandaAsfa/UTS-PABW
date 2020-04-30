<?php
session_start();
if(!isset($_SESSION['name'])) {
   header('location:login.php'); 
} else { 
   $name = $_SESSION['name']; 
}
?>

<title>Halaman Sukses Login</title>
<div align='center'>
   Selamat Datang, <b><?php echo $name;?></b> <a href="logout.php"><b>Logout</b></a>
</div>
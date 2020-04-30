<?php
   session_start();
   require_once("koneksi.php");
   $name = $_POST['name'];
   $password = $_POST['password'];
   $query = $db->prepare("SELECT * FROM contacts WHERE name = ?");
   $query->execute(array($name));
   $hasil = $query->fetch();
   if($query->rowCount() == 0) {
     echo "<div align='center'>Username Belum Terdaftar! <a href='login2.php'>Back</a></div>";
   } else {
     if($password <> $hasil['password']) {
       echo "<div align='center'>Password salah! <a href='login2.php'>Back</a></div>";
     } else {
       $_SESSION['name'] = $hasil['name'];
       header('location:index2.php');
     }
   }
?>
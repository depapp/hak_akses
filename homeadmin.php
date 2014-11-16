<?php
session_start();

//cek apakah user sudah login
if(!isset($_SESSION['userid'])){
die("Anda belum login");//jika belum login jangan lanjut..
}

//cek level user
if($_SESSION['level']!="admin"){
die("Anda bukan admin");//jika bukan admin jangan lanjut
}
?>

<html>
<head><title>Halaman Admin</title></head>
<body>
<?php echo "<h3>Welcome ".$_SESSION['userid']."</h3>";?>
Menu :
<a href=halaman1.php>Halaman 1</a> |
<a href=halaman2.php>Halaman 2</a> |
<a href=log.php?op=out>Log Out</a>

</body>
</html>
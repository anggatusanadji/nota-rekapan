<?php
include 'koneksi.php';
$id = $_GET['id'];
mysqli_query($conn, "DELETE FROM nota_rekapan WHERE id='$id'")or die(mysql_error());
 
header("location:tables.php?pesan=hapus");
?>
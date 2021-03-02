<?php 
include 'koneksi.php';
$sp = $_POST['sp'];
$colli = $_POST['colli'];
$berat = $_POST['berat'];
$franko = $_POST['franko'];
$confrankert = $_POST['confrankert'];
$penerima = $_POST['penerima'];
$keterangan = $_POST['keterangan'];

mysqli_query($conn, "INSERT INTO nota_rekapan VALUES('','$sp','$colli','$berat','$franko','$confrankert','$penerima','$keterangan')");

header("location:tables.php?pesan=input");
?>
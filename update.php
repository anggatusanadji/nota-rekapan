<?php

include 'koneksi.php';
$id = $_POST['id'];
$sp = $_POST['sp'];
$colli = $_POST['colli'];
$berat = $_POST['berat'];
$franko = $_POST['franko'];
$confrankert = $_POST['confrankert'];
$penerima = $_POST['penerima'];
$keterangan = $_POST['keterangan'];
    
$query = mysqli_query($conn, "UPDATE nota_rekapan SET sp='$sp', colli='$colli', berat='$berat', franko='$franko', confrankert='$confrankert', penerima='$penerima', keterangan='$keterangan' WHERE id='$id'");
header("location:tables.php");
?>
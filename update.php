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
    
$updatedata = mysqli_query($conn, "UPDATE nota_rekapan SET sp='$sp', colli='$colli', berat='$berat', franko='$franko', confrankert='$confrankert', penerima='$penerima', keterangan='$keterangan' WHERE id='$id'");
if(!$updatedata){
    echo "
        <script>
            alert('Data Gagal Diupdate');
            document.location.href = 'tables.php';
        </script>
        ";
} else{
    echo "
        <script>
            alert('Data Berhasil Diupdate');
            document.location.href = 'tables.php';
        </script>
    ";
}
?>
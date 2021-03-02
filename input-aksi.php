<?php 
include 'koneksi.php';
$sp = $_POST['sp'];
$colli = $_POST['colli'];
$berat = $_POST['berat'];
$franko = $_POST['franko'];
$confrankert = $_POST['confrankert'];
$penerima = $_POST['penerima'];
$keterangan = $_POST['keterangan'];

$tambahdata = mysqli_query($conn, "INSERT INTO nota_rekapan VALUES('','$sp','$colli','$berat','$franko','$confrankert','$penerima','$keterangan')");

if(!$tambahdata){
    echo "
        <script>
            alert('Data Gagal Ditambahkan');
            document.location.href = 'tables.php';
        </script>
        ";
} else{
    echo "
        <script>
            alert('Data Berhasil Ditambahkan');
            document.location.href = 'tables.php';
        </script>
    ";
}
?>
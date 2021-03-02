<?php
include 'koneksi.php';
$id = $_GET['id'];

$hapusdata = mysqli_query($conn, "DELETE FROM nota_rekapan WHERE id='$id'")or die(mysql_error());
 
if(!$hapusdata){
    echo "
        <script>
            alert('Data Gagal Dihapus');
            document.location.href = 'tables.php';
        </script>
        ";
} else{
    echo "
        <script>
            alert('Data Berhasil Dihapus');
            document.location.href = 'tables.php';
        </script>
    ";
}
?>
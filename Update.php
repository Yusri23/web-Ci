<?php

include("koneksi.php");

if(isset($_POST['btnsimpan'])){

    $Id_009 = $_POST['txtid'];
    $NIM_009 = $_POST['txtnim'];
    $Nama_009 = $_POST['txtnama'];
    $Alamat_009 = $_POST['txtalamat'];
    
    $source = "UPDATE tabel_ganjil SET NIM_009='$NIM_009', Nama_009='$Nama_009', Alamat_009='$Alamat_009'  WHERE Id_009=$Id_009";
    $query = mysqli_query($link, $source);

    if( $query ) {
        header('Location: index.php');
    } else {
        die("Query Error : " . mysqli_error($link));
    }
    
} else {
    die("Akses anda ditolak...");
}

?>
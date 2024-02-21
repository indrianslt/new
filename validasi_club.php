<?php 
include "database.php";

$nama_club = $_POST['nama_club'];
$kota_asal = $_POST['kota_asal'];

if ($nama_club == "" || $kota_asal == "") {
    echo "Nama Club / Kota Asal tidak boleh kosong!";
 } else{
        if(!preg_match("/^[a-zA-Z]*$/", $kota_asal)){
            echo "Kota Asal tidak boleh berisikan angka dan simbol!";
        } elseif(preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $nama_club)){
            echo "Nama Club tidak boleh mengandung simbol!";
        }else{
            $query = mysqli_query($conn, "SELECT nama_club FROM club WHERE nama_club = '$nama_club'");

            if ($club = mysqli_fetch_array($query)) {
                echo "Data Nama Club sudah ada";
            } else{
                $klasemen = mysqli_query($conn, "INSERT INTO `klasemen`(`id`, `nama_klub`, `main`, `menang`, `seri`, `kalah`, `gol_menang`, `gol_kalah`, `point`) VALUES ('','$nama_club',null,null,null,null,null,null,null)");
                $query = mysqli_query($conn, "INSERT INTO club VALUES ('', '$nama_club', '$kota_asal')");
                header("location:main.php");
    }
        }
 } 
    
?>
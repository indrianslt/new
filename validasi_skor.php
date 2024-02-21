<?php
include "database.php";

if(isset($_POST["submit"])){
    $input1 = $_POST['nama_club1'];
    $input2 = $_POST['nama_club2'];
    $pecah1 = explode("/",$input1);
    $id_club1 = $pecah1[0];
    $nama_club1 = $pecah1[1];
    $pecah2 = explode("/",$input2);
    $id_club2 = $pecah2[0];
    $nama_club2 = $pecah2[1];
    $skor_club1 = $_POST['skor_club1'];
    $skor_club2 = $_POST['skor_club2'];
    $code = $id_club1."-".$id_club2;
    $code_temp = explode("-", $code);
    $code_reverse = $code_temp[1]."-".$code_temp[0];

    $same_match = mysqli_query($conn, "SELECT code FROM pertandingan WHERE code = '$code' or code = '$code_reverse'");

    $win = "";
    $lose = "";
    $draw = false;

    if($skor_club1>$skor_club2){
        $win = $nama_club1;
        $lose = $nama_club2;
    } elseif ($skor_club2>$skor_club1) {
        $win = $nama_club2;
        $lose = $nama_club1;
    } else{
        $draw = true;
    }


    if ($nama_club1 == $nama_club2){
        echo "Club yang sama tidak bisa bertanding!";
    } elseif(mysqli_fetch_array($same_match)){
        echo "Pertandingan sudah pernah dilakukan!";
    }else{
        $query = mysqli_query($conn, "INSERT INTO pertandingan VALUES ('', '$id_club1', '$nama_club1', '$id_club2', '$nama_club2', '$skor_club1', '$skor_club2', '$win', '$lose', '$draw', '$code')");
        header("location:skor.php");

        $data_pertandingan = mysqli_query($conn, "SELECT * FROM pertandingan");
        $pertandingan = mysqli_fetch_array($data_pertandingan);
        $banyak_data = mysqli_query($conn, "SELECT COUNT(*) FROM pertandingan");
        $data_banyak = mysqli_fetch_row($banyak_data);
        // var_dump($data_banyak);
        
        //  for ($i=1; $i <= $data_banyak[0]; $i++) { 
        //     $data_main_away = mysqli_query($conn, "SELECT COUNT(*) as total FROM pertandingan WHERE id_club1 = $i");
        //     $data_main_home = mysqli_query($conn, "SELECT COUNT(*) as total FROM pertandingan WHERE id_club2 = $i");

        //     $data_main_a = mysqli_fetch_assoc($data_main_away);
        //     $away = $data_main_a['total'];

        //     $data_main_b = mysqli_fetch_assoc($data_main_home);
        //     $home = $data_main_b['total'];

        //     echo $away;
        //     echo $home;


        //     // $data_main_a = mysqli_fetch_row($data_main_away);
        //     // $data_main_b = mysqli_fetch_row($data_main_home);

        //     // $data_main_temp = $data_main_a;
        //     // $data_main_temp_a = explode("0",$data_main_temp);
           
        //     // echo $data_main_temp_a[0]
        }

    }

}
?>
<?php

$npm = $_GET["npm"];

$conn = mysqli_connect("localhost", "root", "");
    if( $conn ){
        $db = mysqli_select_db($conn, "junior_web_developer");
        $query = "DELETE FROM lumi_novry_m WHERE npm=$npm";
        mysqli_query($conn, $query) or die("ERROR");
        echo "Data Berhasil Dihapus<br>";
        echo "<a href='lihat.php'>Lihat Peserta</a>";
    }else{
        echo "ERROR";
    }
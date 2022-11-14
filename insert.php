<?php

if( isset($_POST["submit"]) ){
    $npm = $_POST["var_npm"];
    $nama = $_POST["var_nama"];
    $pass = $_POST["var_password"];
    $jk = $_POST["var_jk"];
    $agama = $_POST["var_agama"];
    $hobi = "";
    if(isset($_POST["var_baca"])) $hobi = $_POST["var_baca"];
    if(isset($_POST["var_musik"])) $hobi = $_POST["var_musik"];
    if(isset($_POST["var_komputer"])) $hobi = $_POST["var_komputer"];
    $saran = $_POST["var_saran"];

    // Koneksi
    $conn = mysqli_connect("localhost", "root", "");
    if( $conn ){
        $db = mysqli_select_db($conn, "junior_web_developer");

        // String Query
        $query = "INSERT INTO lumi_novry_m(nama, npm, passwd, jenis_kelamin, agama, hobby, kritik) VALUES('$nama', '$npm', '$pass', '$jk', '$agama', '$hobi', '$saran')";

        mysqli_query($conn, $query) or die("ERROR");
        echo "<center>Data Berhasil Dimasukkan, <br></center>";
        echo "<center>Silahkan lihat <a href='lihat.php'>Melihat Pendaftar</a></center>";
    }else{
        echo "Error";
    }
}

<?php

$conn = mysqli_connect("localhost", "root", "");
    if( $conn ){
        $db = mysqli_select_db($conn, "junior_web_developer");
        $query = "SELECT * FROM lumi_novry_m";
        $result = mysqli_query($conn, $query) or die("ERROR");

    echo "<center><h1 style='font-family: Verdana, Geneva, Tahoma, sans-serif; color: green;'>Data Peserta Pelatihan Pemrograman Web</h1>";

    echo "<table border='5' cellpadding='5' cellspacing='0'>";

    echo "<tr>";
    echo "<th>Nama</th>";
    echo "<th>NPM</th>";
    echo "<th>Password</th>";
    echo "<th>Jenis Kelamin</th>";
    echo "<th>Agama</th>";
    echo "<th>Kritik</th>";
    echo "<th>Saran</th>";
    echo "<th>Edit</th>";
    echo "<th>Hapus</th>";
    echo "</tr>";

    // Iterasi
    while( $data = mysqli_fetch_row($result) ){
        echo "<tr>";

        echo "<td>$data[0]</td>";
        echo "<td>$data[1]</td>";
        echo "<td>$data[2]</td>";
        echo "<td>$data[3]</td>";
        echo "<td>$data[4]</td>";
        echo "<td>$data[5]</td>";
        echo "<td>$data[6]</td>";
        echo "<td><a href='edit.php?nama=$data[0]&npm=$data[1]&pass=$data[2]&saran=$data[6]'>Edit</></td>";
        echo "<td><a href='hapus.php?npm=$data[1]'>Hapus</></td>";

        echo "</tr>";
    }
    echo "</table></center>";
    
}else{
    echo "ERROR";
}

echo "<center><a href='index.php'>Halaman Utama</></center>";
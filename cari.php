<?php

$var_kata = $_POST["var_kata"];

$conn = mysqli_connect("localhost", "root", "");

if( isset($_POST["var_submit"]) ){
    if( $conn ){
        $conn = mysqli_connect("localhost", "root", "");
        $db = mysqli_select_db($conn, "junior_web_developer");

        $query = "SELECT * FROM lumi_novry_m WHERE nama LIKE '%$var_kata%'";
        $result = mysqli_query($conn, $query) or die("Error");
        
        // Tampilan
        echo "<center><table border='5' cellpadding='5' cellspacing='0'>";

        echo "<tr>";
        echo "<th>Nama</th>
            <th>NPM</th>
            <th>Passwrod</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
            <th>Hobi</th>
            <th>Kritik</th>";
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
            echo "</tr>";
        }

        echo "</table></center>";
        
    }else{
        echo "Error<br>";


        echo "<br><br><br>";
        echo "<a href='index.php'>Halaman Utama</a></center>";
    }
}


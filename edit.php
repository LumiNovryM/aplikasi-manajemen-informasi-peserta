<?php

$npm = $_GET["npm"];
$nama = $_GET["nama"];
$pass = $_GET["pass"];
$saran = $_GET["saran"];

    // Execute
    if( isset($_POST["edit"]) ){
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
        $db = mysqli_select_db($conn, "junior_web_developer");

        // String
        $query = "UPDATE lumi_novry_m SET nama='$nama', passwd='$pass', jenis_kelamin='$jk', agama='$agama', hobby='$hobi', kritik='$saran' WHERE npm='$npm'";
        mysqli_query($conn, $query) or die("<center>ERROR</center>");
        
        // Message
        echo "<center>Data Berhasil Di Update</center>";
    }else{
        echo "ERROR";
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Form Kompleks</title>
    <style>
        .title{
            font-size: 12px;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            text-align: center;
        }
    </style>
</head>
<body>
    
    <b class="title">Edit Form Pendaftaran Pelatihan Pemrograman Web</b>

    <!-- Form Start -->
        <form action="" method="post">
            <!-- Table Start -->
                    <table border="0" width="75%">
                        <tr>
                            <td>NPM</td>
                            <td><input type="text" name="var_npm" type="hidden" size="22" value="<?= $npm ?>"></td>
                        </tr>
                        <tr>
                            <td>Nama</td>
                            <td><input type="text" name="var_nama" size="22" value="<?= $nama ?>"></td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td><input type="text" name="var_password" size="22" value="<?= $pass ?>"></td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td>
                                <input type="radio" name="var_jk" value="Laki-Laki" checked>Laki-Laki
                                <input type="radio" name="var_jk" value="Perempuan" checked>Perempuan
                            </td>
                        </tr>
                        <tr>
                            <td>Agama</td>
                            <td>
                                <select name="var_agama">
                                    <option value="">PILIH</option>
                                    <option value="Islam">Islam</option>
                                    <option value="Katholik">Katholik</option>
                                    <option value="Protestan">Protestan</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Budha">Budha</option>
                                    <option value="Lainnya">Lainnya</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Hobi</td>
                            <td>
                                <input type="checkbox" name="var_baca" value="Membaca">Membaca
                                <input type="checkbox" name="var_musik" value="Musik">Musik
                                <input type="checkbox" name="var_komputer" value="Komputer">Komputer
                            </td>
                        </tr>
                        <tr>
                            <td align="top">Kritik & Saran</td>
                            <td><textarea name="var_saran" wrap="OFF" cols="20" rows="5"><?= $saran ?></textarea></td>
                        </tr>
                        <tr>
                            <td align="center">
                                <input type="submit" name="edit" value="Edit"> 
                                <input type="reset" name="reset" value="Reset">
                            </td>
                        </tr>
                    </table>
            <!-- Table End -->
        </form>
    <!-- Form End -->
    <a href="lihat.php">Lihat Peserta</a>

</body>
</html>

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
            color: blue;
            text-align: center;
        }
    </style>
</head>
<body>
    
    <b class="title">Form Pendaftaran Pelatihan Web Programming</b>
    <!-- Form Start -->
        <form action="insert.php" method="post">
            <!-- Table Start -->
                    <table border="0" width="75%">
                        <tr>
                            <td>NPM</td>
                            <td><input type="text" name="var_npm" size="22"></td>
                        </tr>
                        <tr>
                            <td>Nama</td>
                            <td><input type="text" name="var_nama" size="22"></td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td><input type="text" name="var_password" size="22"></td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td>
                                <input type="radio" name="var_jk" value="Laki-Laki" checked>Laki-Laki
                                <input type="radio" name="var_jk" value="Perempuan" checked>Perempuan
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <select name="var_agama">
                                    <option selected hidden disabled value="">PILIH</option>
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
                            <td><textarea name="var_saran" wrap="OFF" cols="20" rows="5"></textarea></td>
                        </tr>
                        <tr>
                            <td align="center">
                                <input type="submit" name="submit" value="Submit"> 
                                <input type="reset" name="reset" value="Reset">
                            </td>
                        </tr>
                    </table>
            <!-- Table End -->
        </form>
    <!-- Form End -->

</body>
</html>
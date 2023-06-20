<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pertemuan 3 II</title>
</head>

<body>
    <h1>Form Input Mahasiswa</h1>
    <form action="" method="post">
    <table>
        <tr>
            <td>NPM</td>
            <td>:</td>
            <td>
                <input type="number" name = "npm">
            </td>
        </tr>

        <tr>
            <td>Nama Mahasiswa</td>
            <td>:</td>
            <td>
                <input type="text" name = "nama_mahasiswa">
            </td>
        </tr>

        <tr>
            <td>Tanggal Lahir</td>
            <td>:</td>
            <td>
                <input type="date" name = "tgl_lahir">
            </td>
        </tr>

        <tr>
            <td>Jurusan</td>
            <td>:</td>
            <td>
                <select name = "jurusan" id="">
                    <option value="" selected>Pilih Jurusan</option>
                    <option>Sistem Informasi</option>
                    <option>Teknik Informasi</option>
                    <option>Sains Data</option>
                </select>
            </td>
        </tr>

        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td>
                <textarea name = "alamat" id="" cols="30" rows="10"></textarea>
            </td>
        </tr>

        <tr>
            <td colspan="3" style="text-align: right;">
                <button style="background-color: brown; color: aliceblue;" name = "batal">Batal</button>
                <button type = "submit" style = "background-color: green; color: aliceblue;" name = "simpan">Simpan</button>
            </td>
        </tr>
    </table> 
    </form>  
    
    <?php
        var_dump($_POST);
        echo $_POST["npm"];
        echo $_POST["nama_mahasiswa"]
    ?>
</body>
</html>
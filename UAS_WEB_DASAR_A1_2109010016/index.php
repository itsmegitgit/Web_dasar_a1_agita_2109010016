<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
        <table>
            <tr>
                <th>NPM</th>
                <td>:</td>
                <td>
                    <input type="text" name="npm" value="<?= @$_POST["npm"]; ?>">
                </td>
            </tr>
            <tr>
                <th>Nama Mahasiswa</th>
                <td>:</td>
                <td>
                    <input type="text" name="nama_mahasiswa" value="<?= @$_POST["nama_mahasiswa"]; ?>">
                </td>
            </tr>
            <tr>
                <th>ID Prodi</th>
                <td>:</td>
                <td>
                    <input type="text" name="id_prodi" value="<?= @$_POST["id_prodi"]; ?>">
                </td>
            </tr>
            <tr>
                <th>Tanggal Lahir</th>
                <td>:</td>
                <td>
                    <input type="date" name="tgl_lahir" id="" value="<?= @$_POST["tgl_lahir"]; ?>">
                </td>
            </tr>
            <tr>
                <th>Alamat</th>
                <td>:</td>
                <td>
                    <input type="text" name="alamat" value="<?= @$_POST["alamat"]; ?>">
                </td>
            </tr>
            <tr>
                <td>
                <button name="created" type="submit">Created</button>
                </td>
            </tr>
            <tr>
                <td>
                    <button name="updated" type="submit">Updated</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
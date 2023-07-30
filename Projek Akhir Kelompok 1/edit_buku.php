<?php
require "controllers/functions.php";
$id_buku = $_GET["id"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Saya</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <h1 style="text-align: center;">Edit Book Page</h1>
    <hr>
    <nav class="navbar navbar-expand-lg navbar-light nav sticky-top bg-warning" id="myHeader">
		<div class="container">
		  <img src="logo-umsu.png" width="17%">
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>

	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav ml-auto">
	        <ul class="navbar-nav mr-auto">
                <ul>
                    <li class="nav-item active">
                        <a class="nav-link" href="index1.php">Home</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="buku.php">Booklist</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="tambah_buku.php">Add a book</a>
                    </li>
        <!-- <li class="nav-item active">
			<a class="nav-link" href="buku.php">Booklist</a>
		</li> -->
        <!-- <a href="buku.php">
            <li>Data Buku</li>
        </a>
        <a href="pinjam.php">
            <li>Pinjam Buku</li>
        </a> -->
                </ul>
                </ul>
                </ul>
            </div>
        </div>
</nav>
    <hr>
    <section class="about" id="about">
	<div class="container sejarah">
		<div class="row">
			<div class="col">
            <form action="" method="POST">
        <table>
            <tr>
                <th>Judul Buku</th>
                <td>:</td>
                <td>
                    <input name="judul_buku" type="text" placeholder="Input judul buku" value="<?= buku_satu($id_buku,"judul_buku") ?>">
                </td>
            </tr>
            <tr>
                <th>Tahun Terbit</th>
                <td>:</td>
                <td>
                    <input name="tahun_terbit" type="number" placeholder="Input tahun terbit" value="<?= buku_satu($id_buku,"tahun_terbit") ?>">
                </td>
            </tr>
            <tr>
                <th>Penulis</th>
                <td>:</td>
                <td>
                    <input type="text" name="penulis" placeholder="Input penulis" value="<?= buku_satu($id_buku,"penulis") ?>">
                </td>
            </tr>
            <tr>
                <th>Penerbit</th>
                <td>:</td>
                <td>
                    <input type="text" name="penerbit" placeholder="Input penerbit" value="<?= buku_satu($id_buku,"penerbit") ?>">
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                    <button name="edit_buku" type="submit" style="background: darkgreen; color: white; width: 100px;">Edit</button>
                </td>
            </tr>
        </table>
    </form>
		</div>
	</div>
</section>
    

    <?php
    if (isset($_POST["edit_buku"])) {
        $judul_buku = $_POST["judul_buku"];
        $tahun = $_POST["tahun_terbit"];
        $penulis = $_POST["penulis"];
        $penerbit = $_POST["penerbit"];

        $tanggal = date("Y-m-d H:i:s");

        $edit = q("UPDATE buku SET
        judul_buku = '$judul_buku',
        tahun_terbit = '$tahun',
        penulis = '$penulis',
        penerbit = '$penerbit',
        edit = '$tanggal'
        WHERE
        id = '$id_buku'");

        if ($edit) {
            echo "<script>
            alert('Edit buku berhasil');
            location='buku.php';
            </script>";
        }else {
            echo "<i>Edit gagal dilakukan</i>";
        }
    }
    ?>

</body>

</html>
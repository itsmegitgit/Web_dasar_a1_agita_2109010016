<?php require "controllers/functions.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Saya</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1 style="text-align: center">RIANI's Library</h1>
    <hr>
    <nav class="navbar navbar-expand-lg navbar-light nav sticky-top bg-warning" id="myHeader">
		<div class="container">
		  <img src="logo-umsu.png" width="20%">
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>

	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav ml-auto">
	        <ul class="navbar-nav mr-auto">
                <ul>
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="buku.php">Booklist</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="tambah_buku.php">Add a book</a>
                    </li>
                </ul>
                <hr>
                </ul>
                </ul>
            </div>
        </div>
</nav>
<section class="about" id="about">
	<div class="container sejarah">
		<div class="row">
			<div class="col">
                <hr>
    <form action="" method="post">
        <table>
            <tr>
                <th>Book Title</th>
                <td>:</td>
                <td>
                    <input type="text" name="judul_buku" placeholder="Input Book Title" value="<?= @$_POST["judul_buku"]; ?>">
                </td>
            </tr>
            <tr>
                <th>Release Year</th>
                <td>:</td>
                <td>
                    <select name="tahun_terbit">
                        <?php
                        $tahun = date("Y");
                        for ($i = 2000; $i <= $tahun; $tahun--) { ?>
                            <option><?php echo $tahun; ?></option>
                        <?php } ?>
                    </select>
                </td>
            </tr>
            <tr>
                <th>Author</th>
                <td>:</td>
                <td>
                    <input type="text" name="penulis" placeholder="Input Author's Name" value="<?= @$_POST["penulis"]; ?>">
                </td>
            </tr>
            <tr>
                <th>Publisher</th>
                <td>:</td>
                <td>
                    <input type="text" name="penerbit" placeholder="Input Publisher" value="<?= @$_POST["penerbit"]; ?>">
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                    <button name="simpan_buku" type="submit">Save</button>
                </td>
            </tr>
        </table>
    </form>

                <hr>
			</div>
			<!-- <div class="col text-center">
				<p class="paragraph2">Perpustakaan Universitas Ahmad Dahlan  dirintis bersamaan dengan berdirinya Kursus B1 Muhammadiyah Yogyakarta  pada tahun 1957. Pada tahun 1972 terintegrasikan dengan IKIP  Muhammadiyah Cabang Yogyakarta yang selanjutnya menjadi IKIP  Muhammadiyah Yogykarta. Berdasarkan Surat Keputusan Menteri Pendidikan  dan Kebudayaan nomor: 102/D/1994 IKIP Muhammadiyah&nbsp;Yogyakarta&nbsp;beralih  fungsi menjadi Universitas Ahmad Dahlan.</p>
			</div> -->
		</div>
	</div>
</section>
    <?php
    if (isset($_POST["simpan_buku"])) {
        $judul_buku = $_POST["judul_buku"];
        $tahun_terbit = $_POST["tahun_terbit"];
        $penulis = $_POST["penulis"];
        $penerbit = $_POST["penerbit"];

        $tanggal = date("Y-m-d H:i:s");

        if ($judul_buku == "") {
            echo "<i>Judul buku masih kosong!</i>";
        } elseif ($tahun_terbit == "") {
            echo "<i>Tahun terbit masih kosong!</i>";
        } elseif ($penulis == "") {
            echo "<i>Penulis masih kosong!</i>";
        } elseif ($penerbit == "") {
            echo "<i>Penerbit masih kosong!</i>";
        } else {
            $simpan = q("INSERT INTO buku VALUES(null,'$judul_buku','$tahun_terbit','$penulis','$penerbit','$tanggal','$tanggal')");
            if ($simpan) {
                echo "
                <script>
                alert('Buku berhasil ditambahkan');
                location='buku.php';
                </script>
                ";
            } else {
                echo "<i>Data Gagal ditambahkan!</i>";
            }
        }
    }
    ?>

</body>

</html>
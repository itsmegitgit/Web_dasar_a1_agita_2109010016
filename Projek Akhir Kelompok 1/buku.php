<?php
require "controllers/functions.php";
?>

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
    <h1 style="text-align: center">Welcome to Book Page</h1>
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
                        <a class="nav-link" href="index1.php">Home</a>
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
				<table class="table table-striped table-hover table-sm table-bordered">
			<thead class="thead-danger">
		<tr class="table-primary" style="text-align:center">
            <th>ID</th>
            <th>Judul Buku</th>
            <th>Tahun Terbit</th>
            <th>Penulis</th>
            <th>Penerbit</th>
            <th>Update</th>
            <th>Opsi</th>
        </tr>
        <?php
        foreach (buku() as $b) : ?>
            <tr style="text-align:center">
                <td><?= $b["id"]; ?></td>
                <td><?= $b["judul_buku"]; ?></td>
                <td><?= $b["tahun_terbit"] ?></td>
                <td><?= $b["penulis"] ?></td>
                <td><?= $b["penerbit"] ?></td>
                <td><?= $b["edit"] ?></td>
                <td>
                    <a href="edit_buku.php?id=<?= $b["id"] ?>">Edit</a>
                    <a href="javascript:hapus('controllers/hapus_buku.php?id=<?= $b["id"] ?>')">Hapus</a>
                </td>
            </tr>
        <?php endforeach;
        ?>
    </table>

    <!-- <script src="controllers/javascript.js"></script> -->
    <script>
        function hapus(url) 
        {
            if (confirm("Apakah data berikut akan dihapus?")) {
                document.location = url
            }    
        }
    </script>

                <hr>
			</div>
			<!-- <div class="col text-center">
				<p class="paragraph2">Perpustakaan Universitas Ahmad Dahlan  dirintis bersamaan dengan berdirinya Kursus B1 Muhammadiyah Yogyakarta  pada tahun 1957. Pada tahun 1972 terintegrasikan dengan IKIP  Muhammadiyah Cabang Yogyakarta yang selanjutnya menjadi IKIP  Muhammadiyah Yogykarta. Berdasarkan Surat Keputusan Menteri Pendidikan  dan Kebudayaan nomor: 102/D/1994 IKIP Muhammadiyah&nbsp;Yogyakarta&nbsp;beralih  fungsi menjadi Universitas Ahmad Dahlan.</p>
			</div> -->
		</div>
	</div>
</section>
</body>

</html>
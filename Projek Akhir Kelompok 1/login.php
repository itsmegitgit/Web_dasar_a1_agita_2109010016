<?php 
require "controllers/functions.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light nav sticky-top bg-warning" id="myHeader">
	<div class="container">
	<a class="link" href="https://umsu.ac.id/"><img src="logo-umsu.png" width="25%"></a>
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
                </ul>
                </ul>
            </div>
        </div>
</nav>
<section class="about" id="about">
	<div class="container sejarah">
		<div class="row">
			<div class="col">
<form style="padding:10px" action="" method="post">    
    <h1>Halaman Login</h1>
    <hr>
    <table>
        <tr>
            <th>Username</th>
            <td>:</td>
            <td>
                <input type="text" placeholder="Input username" name="username">
            </td>
        </tr>
        <tr>
            <th>Password</th>
            <td>:</td>
            <td>
                <input type="password" name="pw">
            </td>
        </tr>
        <th colspan="3">
            <button style="width: 100%" name="login">Login</button>
        </th>
    </table>
    <p>Tidak punya akun? Silahkan Registrasi <a href="registrasi.php">Disini</a></p>
</form>
			</div>
			<!-- <div class="col text-center">
				<p class="paragraph2">Perpustakaan Universitas Ahmad Dahlan  dirintis bersamaan dengan berdirinya Kursus B1 Muhammadiyah Yogyakarta  pada tahun 1957. Pada tahun 1972 terintegrasikan dengan IKIP  Muhammadiyah Cabang Yogyakarta yang selanjutnya menjadi IKIP  Muhammadiyah Yogykarta. Berdasarkan Surat Keputusan Menteri Pendidikan  dan Kebudayaan nomor: 102/D/1994 IKIP Muhammadiyah&nbsp;Yogyakarta&nbsp;beralih  fungsi menjadi Universitas Ahmad Dahlan.</p>
			</div> -->
		</div>
	</div>
</section>

    <?php 
    if (isset($_POST["login"])) {
        $username = $_POST["username"];
        $pw = $_POST["pw"];
        if (user_satu_jumlah($username) > 0) {
            if (password_verify($pw, user_satu($username, "password"))) {
                echo "<script>
                alert('Login Succeeded! Welcome')
                location='index1.php'
                </script>";
                session_start();
                $_SESSION["username"] = $username;
            } else {
                echo "<script>
                alert('Password not matched!')
                </script>";
            }
        } else {
            echo "<script>
            alert('Username not found!')
            </script>";
        }
    }
    ?>

</body>
</form>
</html>
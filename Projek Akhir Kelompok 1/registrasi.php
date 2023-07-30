<?php 
include "controllers/functions.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
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
        <h1>Sign-Up Page</h1>
    <form style="padding: 10px" action="" method="post">
    <table>
        <tr>
            <th>Username</th>
            <td>:</td>
            <td>
                <input type="text" placeholder="Input username" name="username" value="<?= @$_POST["username"] ?>">
            </td>
        </tr>
        <tr>
            <th>E-mail</th>
            <td>:</td>
            <td>
                <input type="email" placeholder="Input email" name="email" value="<?= @$_POST["email"] ?>">
            </td>
        </tr>
        <tr>
            <th>Password</th>
            <td>:</td>
            <td>
                <input type="password" name="pw1" value="<?= @$_POST["pw1"] ?>">
            </td>
        </tr>
        <tr>
            <th>Confirm Password</th>
            <td>:</td>
            <td>
                <input type="password" name="pw2" value="<?= @$_POST["pw2"] ?>">
            </td>
        </tr>
        <tr>
            <td colspan="3">
                <button type="submit" name="registrasi" style="width: 100%;">Sign Up</button>
            </td>
        </tr>
    </table>
    </form>
			</div>
			<!-- <div class="col text-center">
				<p class="paragraph2">Perpustakaan Universitas Ahmad Dahlan  dirintis bersamaan dengan berdirinya Kursus B1 Muhammadiyah Yogyakarta  pada tahun 1957. Pada tahun 1972 terintegrasikan dengan IKIP  Muhammadiyah Cabang Yogyakarta yang selanjutnya menjadi IKIP  Muhammadiyah Yogykarta. Berdasarkan Surat Keputusan Menteri Pendidikan  dan Kebudayaan nomor: 102/D/1994 IKIP Muhammadiyah&nbsp;Yogyakarta&nbsp;beralih  fungsi menjadi Universitas Ahmad Dahlan.</p>
			</div> -->
		</div>
	</div>
</section>

    <?php
    if (isset($_POST["registrasi"])) { 
        // var_dump($_POST);
        $username = $_POST["username"];
        $email = $_POST["email"];
        $pw1 = $_POST["pw1"];
        $pw2 = $_POST["pw2"];
        if ($username == "") {
            echo "<script>
            alert('Please input Username!')
            </script>";
        }elseif ($email == "") {
            echo "<script>
            alert('Please input Email!')
            </script>";
        }elseif ($pw2 != $pw1) {
            echo "<script>
            alert('Password doesn't match!')
            </script>";
        }else {
            $encrypt_pw = password_hash($pw1, PASSWORD_DEFAULT);
             $tanggaledit = date("Y-m-d H:i:s");
            $registrasi = q("INSERT INTO user VALUES(null, '$username', '$email', '$encrypt_pw', '$tanggaledit','$tanggaledit', '')");
            if ($registrasi) {
                echo "<script>
                alert('Sign-Up Completed!, Please Login')
                location='login.php'
                </script>";
            }else {
                echo "<script>
                alert('Username sudah ada sebelumnya!'
                </script>";
            }
        }
    }
    ?>

</body>
</html>
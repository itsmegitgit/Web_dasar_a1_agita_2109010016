<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
    <?php
    $angka = "10";
    $bilangan = "2";
    ?>

    <p>
        Penjumlahan: <?= $angka. "+" . $bilangan ?> = <?= $angka + $bilangan ?>
        Perkalian: <?= $angka. "x" . $bilangan ?> = <?= $angka * $bilangan ?>
        Pengurangan: <?= $angka. "-" . $bilangan ?> = <?= $angka - $bilangan ?>
        Pembagian: <?= $angka. "/" . $bilangan ?> = <?= $angka / $bilangan ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Produk</title>
</head>
<body>
    <ul>
        <li>
            <a href="Index.php">Kembali</a>
        </li>
    </ul>
    <h1>Menu Produk</h1>
    <?php
    $produk = array(
        array("Kursi", "Furniture", "Rp. 65000"),
        array("Gelas", "Dapur", "Rp. 30000"),
        array("Lampu", "Elektronik", "Rp. 40000")
    );
    //var_dump ($produk);
    $jumlah_produk = count($produk);
    //echo $jumlah_produk;
    ?>
    <table border = "1" style = "border-collapse : collapse">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Jenis</th>
            <th>Harga</th>
        </tr>
        <?php
        for ($i=0; $i < $jumlah_produk; $i++) { 
            $jumlah_isi_produk = count($produk[$i]); ?>
        <tr>
            <td> <?= $i+1; ?></td>
            <?php for ($x=0; $x < $jumlah_isi_produk; $x++) { ?>
            <td><?php echo $produk[$i][$x]; ?></td>
           <?php }?>
        </tr>
        <?php }?>
    </table>
</body>
</html>
<?php 
    $title = "Latihan 3 (operator)";
    //variable
    $a = 7;
    $b = 3;

    //operator
    $penjumlahan = $a + $b;
    $pengurangan = $a - $b;
    $perkalihan = $a * $b;
    $pembagian = $a / $b;
    $sisabagi = $a % $b;
    $pangkat = $a ** $b;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
</head>
<body>
    <h3></h3>
    <p>Penjumlahan <?= "Hasil $a + $b = $penjumlahan" ?></p>
    <p>Pengurangan <?= "Hasil $a - $b = $pengurangan" ?></p>
    <p>Perkalian <?= "Hasil $a * $b = $perkalihan" ?></p>
    <p>Pembagian <?= "Hasil $a / $b = $pembagian" ?></p>
    <p>Sisa bagi <?= "Hasil $a % $b = $sisabagi" ?></p>
    <p>Pangkat <?= "Hasil $a ** $b = $pangkat" ?></p>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2 (variabel)</title>
</head>
<body>

<?php
// <!-- membuat variabel -->
    $nama_lengkap ="Kholid Saifunnaser";//dtring
    $nim = 2030803151;//integer
    $nilai =9.99;//doubel
    $lulus =false;//boolean(true or false)
    $lulus2 ="true";
    //gettype($variabelnya) => adalah fungsi dari PHP untuk mengecek tipe data
?>

<h1>Selamat Datang, <?php echo $nama_lengkap;?></h1>
<p>Tipe data dari variabel $nama_lengkap adalah <?php echo gettype($nama_lengkap) ?></p>
<p>NIM : <?php echo $nim ?></p>
<p>Tipe data dari variabel $nim adalah <?php echo gettype($nim) ?></p>
<p>Nilai : <?php echo $nilai ?></p>
<p>Tipe data dari variabel $nilai adalah <?php echo gettype($nilai) ?></p>
<p>Lulus : <?php echo $lulus ?></p>
<p>Tipe data dari variabel $lulus adalah <?php echo gettype($lulus) ?></p>
<p>Lulus : <?php echo $lulus2 ?></p>
<p>Tipe data dari variabel $lulus2 adalah <?php echo gettype($lulus2) ?></p>
</body>
</html>


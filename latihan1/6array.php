<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 6(Array)</title>
</head>
<body>
    <?php
    $buah = ['Anggur', 'Apel', 'Jambu','Mangga','Kelingking'];
    echo $buah[0];

    echo "<br>";

    echo "Ambil nilai buah yang : " . $buah[0] . "<br>";
    echo "Ambil nilai buah yang : " . $buah[1] . "<br>";
    echo "Ambil nilai buah yang : " . $buah[2] . "<br>";
    
    echo "<hr>";

    foreach($buah as $b){
        echo"Ambil nilai buah yang : " . $b . "<br>";
    }

    echo "<hr>";

    $nilai = array(
        'IPA' => 90,
        'IPS' => 87,
        'MTK' => 85
    );

    echo"Ambil nilai IPA : " . $nilai['IPA'] . "<br>";
    echo"Ambil nilai IPS : " . $nilai['IPS'] . "<br>";
    echo"Ambil nilai MTK : " . $nilai['MTK'] . "<br>";
    ?>

    <?php
    foreach ($nilai as $key => $n) :
    ?>

    <ul>
        <li> <?php echo "Key : $key, value ; $n" ?></li>
    </ul>

    <?php
    endforeach;
    ?>
</body>
</html>
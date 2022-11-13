<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 5(Perulangan)</title>
</head>
<body>
    <?php
    for($i = 1; $i<= 10; $i++){
        echo "Hello -$i <br>";
    }
    
    echo "<hr>";
    
    for($a = 10; $a >= 1; $a--){
        echo "Hello -$a <br>";
    }

    echo "<br>";

    $nilaiawal = 1;
    while($nilaiawal <= 10){
        echo "Hello While -$nilaiawal <br>";

        $nilaiawal++;
    }
    echo "<br>";
    $nilaiakhir =10;
    while($nilaiakhir >= 1){
        echo "Hello While -$nilaiakhir <br>";

        $nilaiakhir--;
    }

    echo "<hr>";

    $data1 =[
        'BA0001',
        'BA0002',
        'BA0003'
    ];

    $data2 = array(
        'CA0001',
        'CA0002',
        'CA0003'
    );

    foreach($data1 as $dt1){
        echo "$dt1 <br>";
    }
    

    ?>
</body>
</html>
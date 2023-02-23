<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1b.php</title>
</head>
<body>
    <?php 
    //2 digit npm terakhir 07=7

    $a ="7";
    $b ="5";
    $c ="2";
    $d ="75";
    $e ="20";

    print"Aku adalah angka <b> $a </b><br>";

    //jika dikali 5
    $w=$a*$b;
    print"Jika aku dikali $b, maka aku sekarang menjadi <b> $w </b><br>";

    //jika dibagi 2
    $x=$w/$c;
    print"Jika aku dibagi $c, maka aku sekarang menjadi <b> $x </b><br>";

    //jika ditambah 75
    $y=$x+$d;
    print"Jika aku ditambah $d, maka aku sekarang menjadi <b> $y </b><br>";

    //jika dikurang 20
    $z=$y-$e;
    print"Jika aku dikurang $e, maka aku sekarang menjadi <b> $z </b><br>";
  
    ?>
</body>
</html>

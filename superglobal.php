<?php
$panjang = 10;
$lebar = 5;
$luas = $panjang * $lebar;

function persegi()
{
    global $luas;
    echo "Luas persegi adalah $luas";
}

function Kubus1($s)
{
    $v = $s * $s * $s;
    echo "Volume kubus adalah $v";
}
function Kubus2($s)
{
    $v = $s * $s * $s;
    echo "Volume kubus adalah $v";
}

$s = 4;
function Kubus3($s)
{
    $v = $s * $s * $s;
    echo "Volume kubus adalah $v";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Super Global Variable</title>
</head>

<body>
    <h3>Super Global Variable</h3>
    <?php
    persegi()
    ?>

    <br>

    <h3>Overload Function's Parameter</h3>
    <p>Kubus 1 <?= Kubus1(2) ?></p>
    <p>Kubus 3 <?= Kubus3($s) ?></p>
    <p>Kubus 2 <?= Kubus2($s = 3) ?></p>

    <h4>Catatan: Kubus 3 kok ada di nomor 2? karena klo melempar variable yg kita isi sendiri (inisiasi parameter sendiri) nanti variable global nya ke set semua</h4>
</body>

</html>
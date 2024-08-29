<?php
$mahasiswa = ["Aldi", "Budi", "Doni", "Heru"];
$j = count($mahasiswa) ;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Array 2d</title>
</head>
<body>
    <h2>Belajar Cetak Array Numeric 2D </h2>
    <h3>Cetak array menggunakan foreach loop</h3>
    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>
                Nama: <?= $mhs ?>
            </li>
        </ul>
    <?php endforeach; ?>

    <br>

    <h3>Cetak array menggunakan for loop</h3>
    <?php for ($i = 0; $i < $j; $i++) : ?> 
        <ul>
            <li>
                Nama: <?= $mahasiswa[$i]; ?>
            </li>
        </ul>
    <?php endfor; ?>
</body>
</html>
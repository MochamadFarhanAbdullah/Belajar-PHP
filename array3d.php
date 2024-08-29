<?php
$mahasiswa = [
    ["nama" => "Aldi", "nim" => "A11.2023.12345"],
    ["nama" => "Budi", "nim" => "A11.2023.12346"],
    ["nama" => "Hana", "nim" => "A11.2023.12347"],
];
$jml = count($mahasiswa);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Array 3d</title>
</head>

<body>
    <h2>Belajar Cetak Array Asosiatif 3D</h2>
    <h3>Cetak array menggunakan foreach loop</h3>
    <h4> Array Asosiatif memakai nama buatan sebagai index.</h4>
    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>
                Nama: <?= $mhs["nama"] ?>
            </li>
            <li>
                NIM: <?= $mhs["nim"] ?>
            </li>
        </ul>
    <?php endforeach; ?>

    <br>

    <h3>Cetak array menggunakan for loop</h3>
    <h4> 3D perlu mengakses [baris][kolom].</h4>
    <?php for ($i = 0; $i < $jml; $i++) : ?>
        <ul>
            <li>
                Nama: <?= $mahasiswa[$i]["nama"]; ?>
            </li>
            <li>
                NIM: <?= $mahasiswa[$i]["nim"]; ?>
            </li>
        </ul>
    <?php endfor; ?>
</body>

</html>
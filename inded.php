<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Request Method Get Post</title>
</head>

<body>

    <!-- Klo $_POST['submit'] ada isinya maka akan menampilkan selamat datang (klo dah mencet submit) -->
    <?php if (isset($_POST['submit'])) : ?>
        <h1>Selamat Datang <?= $_POST['nama'] ?></h1>
    <?php endif; ?>

    <!-- action tinggal ganti detail.php klo mau redirect ke detail.php -->
    <form action="" method="POST">
        Masukkan nama:
        <input type="text" name="nama">
        <button name="submit">Kirim</button>
    </form>
</body>

</html>
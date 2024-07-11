<?php

    $mahasiswa = [
        ["Iven Lagowan", "21421011", "Sistem Informasi",
     "cuaocuq@gmail.com"],
     ["Naris", "21421031", "Sistem Informasi",
     "bidana@gmail.com"],
     ["Wim Lagowan", "21521031", "Geologi",
     "wimagorek@gmail.com"],
    ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    

    <h1>Daftar Mahasiswa</h1>
    <?php foreach ($mahasiswa as $mhs) : ?>
    <ul>
       <li>Nama: <?= $mhs[0]; ?></li>
       <li>NPM:<?= $mhs[1]; ?></li>
       <li>Jurusan:<?= $mhs[2]; ?></li>
       <li>Email:<?= $mhs[3]; ?></li>

    </ul>
    <?php endforeach; ?>




</body>
</html>
<?php
 function salam($wkt = "Datang", $waktu = "Admin"){
    return "Selamat datang $wkt , $waktu";
 }
?>
<html>
    <head>
        <title>Latian Funtion 2</title>
    </head>
    <body>
        <h1><?= salam("Mr", "Chua"); ?></h1>
    </body>
</html>
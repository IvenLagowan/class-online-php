<?php

// Pengulangan pada array
// for / foreach

$angkah = [3,2,15,20,11,77,89,8,22,33,23];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Var_Dum</title>
    <style>
        .kotak{
            width: 50px;
            height: 50px;
            background-color :salmon;
            text-align:center;
            line-height:50px;
            margin:3px;
            float:left;
        }
        .clear{
            clear:both;
        }
    </style>
</head>
<body>
<!-- 
Dibawah ini di buat menggunakan for -->
<?php for($i = 0; $i < count($angkah); $i++) { ?>
<div class="kotak"><?php echo $angkah[$i]; ?></div>
<?php }?>

<!-- 
Dibawah ini di buat menggunakan for oreach -->
<div class="clear"></div>

<?php foreach($angkah as $a)  { ?>

    <div class="kotak"><?php echo $a; ?></div>

<?php } ?>

<div class="clear"></div>
<?php foreach($angkah as $a ) : ?>
    <div class="kotak"><?= $a; ?></div>
<?php endforeach; ?>



</body>
</html>


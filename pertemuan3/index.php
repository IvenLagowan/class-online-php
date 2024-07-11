<?php

// Pengulangan
// for
// while 
// do.. while 
// foreach : pengulangan khusus array 

// 1. for
// for($i = 0; $i < 5; $i++ ){
//     echo "Hello Word <br> ";
// }

// $i = 0;
//  while( $i < 5) {
//     echo "Hello Word <br>";
//     $i++;
//  }

// 2. do.. while 
// $i = 10;
// do {
//     echo "Hello Word! <br>";
// $i++;
// }while( $i < 5);

    // for($i = 1; $i <= 3; $i++ ){
        //     echo "<tr>";
        //     for($d = 1; $d <= 5; $d++){
        //         echo "<td>$i,$d</td>";
        //     }
        //     echo "</tr>";
        // }



 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1</title>
    <style>
        .warna-baris{
            background-color: silver;
        }
    </style>
</head>
<body>
    
    <table border="1" cellpadding="10" cellspacing="0">
   <?php for($i = 1; $i <= 5; $i++) : ?>
    <?php if($i % 2 == 0 ) : ?>
    <tr class="warna-baris">
    <?php else :  ?>
        <tr>
    <?php endif; ?>
        <?php for($d = 1; $d <= 5; $d++) : ?> 
            <td><?=  "$i,$d" ?></td>
            <?php endfor; ?>
    </tr>

   <?php endfor; ?>



    </table>
</body>
</html>

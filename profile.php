<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- style star -->
    <style>
        .body{
            Background-V
        }
    </style>

</head>
<body>
    
   <!-- Heading dengan Tag HTNK -->
   <h1>Profile page</h1>
   <!-- paragraph dengan syntex php -->

   <?php

   echo "<p> Hello PHP </p>";

   /*Sintac php hanya bisa dijalankan hanya di dalam dokumen*/

   #membuat variabel php

    $angka1  = 3;
        $angka2 = 5;
        
    #penjumlahan 

    $penjumlahan = $angka1 + $angka2;
    echo $penjumlahan;

    #pengurangan 
    $pengurangan = $angka1 - $angka2;
    echo $pengurangan;
    ?>

    <h3>hasil penjumlahan</h3>
    <?php
    echo $penjumlahan;
    ?>

    <h3>hasil pengurangan</h3>
    <?php
    echo $pengurangan;
    ?>
    

       


</body>
</html>
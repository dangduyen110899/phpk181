<?php 
    $sum =0;
    for ($i=2; $i <= 9; $i++) { 
        for ($j=1; $j <= 10; $j++) { 
            $sum = $i*$j;
            echo $i."x".$j."=".$sum.'.';
        }
        echo "<br>";
    }
?>
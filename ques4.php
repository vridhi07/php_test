<?php 

function printPairs($arr, $n, $sum) 
{ 
    
    $count = 0;  
   for ($i = 0; $i < $n; $i++) 
        for ( $j = $i + 1; $j < $n; $j++) 
            if ($arr[$i] + $arr[$j] == $sum) 
                echo "(", $arr[$i], ", ", 
                           $arr[$j], ")", "\n"; 
} 
  

$arr = array (1, 5, 7, -1, 5); 
$n = sizeof($arr); 
$sum = 6; 
printPairs($arr, $n, $sum); 
  
?>
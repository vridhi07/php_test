<!DOCTYPE html>  
<html>  
<body>  
    <p>
    	An array is a data structure that stores one or more similar type of values in a single value. For example if you want to store 100 numbers then instead of defining 100 variables its easy to define an array of 100 length.<br>

    	There are three different kind of arrays and each array value is accessed using an ID c which is called array index.<br>

    	1. Numeric array − An array with a numeric index. Values are stored and accessed in linear fashion.<br>

    	2. Associative array − An array with strings as index. This stores element values in association with key values rather than in a strict linear index order.<br>

    	3. Multidimensional array − An array containing one or more arrays and values are accessed using multiple indices<br>
    </p>

<!--    sum of the array of numbers -->
<?php  
 
$arr = array(18, 25, 35, 44, 50);   
$sum = 0;  
   
for ($i = 0; $i < count($arr); $i++) {   
   $sum = $sum + $arr[$i];  
} 
echo "<br>";   
print("Sum of all the elements of an array: " . $sum);  
?>  
</body>  
</html> 


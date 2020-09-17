<?php
$a=array(1,3,4,1,1,6,6,8,4,2,3,4,8,0,9,5,4,1,0);
echo "Original Array : <br> Array ";
foreach($a as $in){
    echo $in . " ";
    }
echo "<br>";
$z=array_unique($a);
echo "Update Array : <br> Array ";
foreach($z as $in){
echo $in . " ";
}
//print_r($z);
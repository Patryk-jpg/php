<?php 
$sum = 0;
for($i = 0; $i <=20;$i++){
    if ($i%2 ==0){
        
        continue;}
    $sum = $sum + $i;
}

echo $sum;

?>
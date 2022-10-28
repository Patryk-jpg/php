<?php
$number = $_GET['numb'];
$sum = 1;
for ($i = 1; $i <= $number; $i++){
    $sum = $sum * $i;

}
echo $sum;

?>
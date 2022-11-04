<?php 
$a = array()
for($i=1;$i<11;$i++){
    for($j = 1;$j < 11; $j++){

        echo $j*$i.' ';
        if ($j * $i > 9){echo ' ';}
    }
    echo '<br>';
}
?>
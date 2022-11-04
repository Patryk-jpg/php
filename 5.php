<?php 

$liczby = [10,
15, 9, 61, 78, 2, 44, 21, 30];
$score = 0;
foreach($liczby as $l){
    if ($score < $l){
        $score = $l;
    }

}
echo $score;



?>
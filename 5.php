

<?php
$strr ='';
for($i= 1;$i <= 9; $i++)
{if($i <9){$strr = $strr.strval($i).'-';}else{$strr = $strr.strval($i);};
}
echo $strr;
?>
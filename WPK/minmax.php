<?php
$m=array(15, 10, 45.78, 5, 25);
$min=$m[0];

for($i=1; $i<5; $i++){
    if($min>$m[$i]){
        $min=$m[$i];
    }
}
echo "Minimum element is ".$min;
?>
<?php
$arr=array(20, 10, 5, 30, 60);
for($i=0; $i<=4; $i++){
    for($j=$i+1; $j<5; $j++){
        if($arr[$i]>$arr[$j]){
            $temp=$arr[$i];
            $arr[$i]=$arr[$j];
            $arr[$j]=$temp;
        }
    }
}

for($i=0;$i<5;$i++){
    echo $arr[$i]." ";
}
?>
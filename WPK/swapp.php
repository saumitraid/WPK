<?php
$n1=10;
$n2=25;
echo 'Before swapping first='.$n1.' second='.$n2.'<br>';
$n1=$n1+$n2;  //35
$n2=$n1-$n2;  //10;
$n1=$n1-$n2;  //25;
echo 'After swapping first='.$n1.' second='.$n2;
?>
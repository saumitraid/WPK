<?php
$n=123;
$rev=0;
while($n>=1){
    $rem=$n%10;
    $rev=$rev*10+$rem;
    $n=$n/10;
}
echo "Reverse is ",$rev;
?>
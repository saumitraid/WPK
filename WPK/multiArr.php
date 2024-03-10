<?php
$marks=array(array(1,2,3,10),array(4,5,6),array(7,8,9));

// for($r=0; $r<3; $r++){
//     for($c=0; $c<4; $c++){
//         echo $marks[$r][$c]." ";
//     }
//     echo "<br>";
// }

foreach($marks as $row=>$arrv){
    foreach($arrv as $k=>$v){
        echo '['.$row.']['.$k.']'.$v." ";
    }
    echo "<br>";
}

?>
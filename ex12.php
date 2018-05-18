<?php

for($a=1; $a<=$_POST[valA]; $a++) {
    for($b=1; $b<=$_POST[valB]; $b++){
    $c=$a*$b ;
    echo $a.'*'.$b.'='.$c ."<br> \n" ;
    }
   
}
 

    
?>
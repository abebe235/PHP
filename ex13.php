<?php

for($a=1; $a<=$_POST[valA]; $a++) {
    for($b=1; $b<=$_POST[valB]; $b++) {
        for($c=1; $c<=$_POST[valC]; $c++) {
    $i=$a*$b*$c ;
            
    if($i % 3 == 0) {
        echo '<p style="color:red">'.$a.'*'.$b.'*'.$c.'='.$i."</p> \n" ; 
            }
    elseif($i % 4 == 0 ){
            echo '<p style="color:blue">'.$a.'*'.$b.'*'.$c.'='.$i."</p> \n" ;
            }
         else {
             echo '<p>'.$a.'*'.$b.'*'.$c.'='.$i."</p> \n" ;
            }
        }
    }
}
 

    
?>
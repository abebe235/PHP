<?php
for($i=0;$i<100;$i++){
    if($i % 2 == 0){
        echo $i.' ' ;
    }elseif($i % 3 ==0){
        echo '@' ;
    }else{
        echo '*' ;
    }
}

for($i=0;$i<100;$i++){
    if($i % 3 == 0){
        echo $i.' @' ;
    }elseif($i % 2 ==0){
        echo ' ' ;
    }else{
        echo '*' ;
    }
}

?>
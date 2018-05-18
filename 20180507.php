<?php
/* 1 */
for($a=1; $a<=100; $a++)
    echo $a.' ';
    echo "<br> \n" ;
    echo "<br> \n" ;

/* 2 */
for($a=1; $a<=100; $a++)
    echo $a/3 ; 
    echo "<br> \n" ;
    echo "<br> \n" ;

/* 3 */
for($a=1; $a<=100; $a++)
    echo $a%3 ;
    echo "<br> \n" ;
    echo "<br> \n" ;

/* 4 */
for($a=1; $a<=100; $a++){
    if($a % 3==0)
    echo $a.' ' ;
}
    echo "<br> \n" ;
    echo "<br> \n" ;
/*個数*/
$cnt=0 ;
for($a=1; $a<=100; $a++){
    if($a % 3==0){
    $cnt++ ;
    }
}
    echo $cnt ;
    echo "<br> \n" ;
    echo "<br> \n" ;

/*和*/
for($a=1; $a<=100; $a++){
    if($a % 3==0){
        $total=$total + $a ;
    }
}
    echo $total ;
?>
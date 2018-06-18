<?php
//csvデータに出力
$csvdate = '' ;
foreach($_POST as $key => $value) {
    //echo $key.':'.$value."<br>\n" ;
    $csvdate .=$key.':'.$value.',' ;
} 
$csvdate .="\n" ;
//echo $csvdate ;

$fp = fopen('date0618.csv' , "a") ;
flock($fp , LOCK_EX) ;
fputs($fp , $csvdate) ;
fclose($fp) ;



?>
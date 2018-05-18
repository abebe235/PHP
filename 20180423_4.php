<?php
//$a=10 ;
$b =$_GET[cnt1] ;
$c =$_GET[cnt2] ;
$a = $b * $c ;

    if($a < 20){
    echo  'a(='.$a.')は20より小さい <br>'."\n" ;   
    }elseif ($a >= 20 && $a <= 60) {
    echo 'a(='.$a.')は20以上60以下です <br>'."\n" ;
    }else {
    echo 'a(='.$a.')は60より大きい <br>'."\n" ;
    }
?>





<?php
/*$a=10 ;*/
$_GET[cnt] ;
for($a=0 ; $a<70 ; $a++) {
    if($a < 20){
    echo  'a(='.$a.')は20より小さい <br>'."\n" ;   
    }elseif ($a >= 20 && $a <= 60) {
    echo 'a(='.$a.')は20以上60以下です <br>'."\n" ;
    }else {
    echo 'a(='.$a.')は60より大きい <br>'."\n" ;
    }
}
?>

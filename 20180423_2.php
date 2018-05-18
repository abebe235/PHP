
<?php

$color = ["red","blue","yellow"] ;
$color_h = ["red"=>"赤",
         "blue"=>"青",
         "yellow"=>"黄色",
           ] ;
/*
echo $color  [0]."<br>\n" ;
echo $color  [1]."<br>\n" ;
echo $color_h  ['red']."<br>\n" ;

var_dump($color) ;
*/

foreach($color as $value) {
    echo $value. "<br>\n";
}

foreach($color as $key => $value) {
    echo $key . ':' .$value. "<br>\n";
}

foreach($color_h as $key => $value) {
    echo $key . ':' .$value. "<br>\n";
}

?>
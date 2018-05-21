<?php
//echo $_POST{'usrdate'}

$outfile='./usrdate.dat' ;
$fp = fopen($outfile, "a") ; //fp=file pointer
//a=add:追記　w=write:上書き（この２つはファイルが無ければ作る） r=read:読み込み

/*排他処理
 flock($fp, LOCK_EX) ;
 (書き込み、読み込み)
 flock($fp, LOCK_UN) ;（fcloseの中にLOCK_UNが入ってるので、flockのLOCK_UNは書かなくても良い）
 fclose($fp) ;
*/


fwrite($fp, $_POST{'usrdate'}. "\n") ;
fclose($fp) ;
echo '書き出し完了！' ;


?>
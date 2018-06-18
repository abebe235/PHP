<?php

    //ファイルポインタ
    $fp=fopen('date2.csv',"r") ;

    //もしファイルポインターがあれば 
    if($fp) { 
        while (($line = fgets($fp)) !== false) { //1行読み込みができれば繰り返す
            echo $line.'<br>' ; //1行のデータを書き出す
            $date = explode(',' , $line) ;
            foreach ($date as $key =>$value) {
                echo $key.':'.$value.'<br>' ;
            }
        }
    //もしファイルポインターがファイルの最後でなければ
    if (!feof($fp)) { 
        echo "Error: fail\n" ; //読み込みが失敗したかもしれません
    }
    fclose($fp) ; //ファイルを閉じる
}
    
    
    
?>
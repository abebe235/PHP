<!DOCTYPE html>
<html>
<head>
    <title>7/23 PHPの授業</title>
    <meta charset="UTF-8">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
</head>

<body>
<h1>イメージ一覧</h1>

<?php
    
//config
    $dir= './img/'; //ディレクトリーのパス
//open Directory
    if(is_dir($dir)) { //ディレクトリーがあるか
    if($dh = opendir($dir)) { //ディレクトリーを開く
        //ディレクトリーの全てのファイル名1つずつを取得する
        while(($file = readdir($dh)) !== false) {
            if($file != "." && $file != ".." && $file != '.DS_Store') {
                //echo "filename: $file <br>\n " ;
                echo '<img src="'.$dir.$file.'">'."\n" ; //サイズを指定したい時：widthなどで指定
            }
        }
    }
}
?>    
    
    
</body>
</html>

<?php

$hash =[
    name_f =>'姓' ,
    name_s =>'名' ,
    fname_f =>'ふりがな（姓）' ,
    fname_s =>'ふりがな(名)' ,
    zip =>'郵便番号',
    address =>'住所',
    phone =>'電話',
    mailbody =>'コメント',
    email =>'メールアドレス'
];

$usr_date='' ;
foreach ($_POST as $key => $value) {
    $usr_date .= $value.'.' ;
    echo $hash{$key}.'='.$value."<br> \n" ;
} ;

echo '
<form action="ex0611_2.php" $method="post">
<input type="hidden" name="usrdate" value="'.$usr_date.'">
<input type="submit" value="送信する">
</form>
' ;
?>
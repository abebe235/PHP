<?php

//$mailbody = $_POST[mailbody] ;
//$email_address = $_POST[email] ;

//echo $mailbody .'<br>' ;
//echo $email_address.'<br>' ;

$from_email = 'musami633@gmail.com' ; //自分が受け取る用のアドレス

mb_language("Japanese") ;
mb_internal_encoding("UTF-8") ; //このフォーマットに従って記号化され送信

$to = 'musami633@gmail.com' ;
$title = '受付致しました。' ;
$content = htmlspecialchars($_POST[email]) ;
$header = "From: $from_email\nReplay-To: $from_email\n" ;

if(mb_send_mail($to, $title, $content, $header)){
    echo 'メールを送信しました。ご利用ありがとうございます。' ;
} else {
    echo 'メールの送信に失敗しました。' ;
} ;

/*
$_POST[userdate] = '姓名,ふりがな,〒,郵便番号,住所,電話,コメント,メールアドレス'
$sepdate = explode(',',$_POST[userdate]) ;
$explode = 
*/

?>
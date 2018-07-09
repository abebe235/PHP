<?php


$hash =[
    family-name =>'姓',
    given-name =>'名',
    radiobtn1 =>'性別',
    select-year =>'年',
    select-month =>'月',
    select-day =>'日',
    post-code =>'郵便番号',
    address-level1 =>'都道府県市区町村',
    address-line1 =>'番地・号',
    address-line2 =>'部屋番号',
    tel1-1 =>'連絡先電話番号',
    tel1-2 =>'連絡先電話番号',
    tel1-3 =>'連絡先電話番号',
    tel2-1 =>'連絡先電話番号2',
    tel2-2 =>'連絡先電話番号2',
    tel2-3 =>'連絡先電話番号2',
    email1 =>'メールアドレス',
    email2 =>'メールアドレス2',
    profession =>'職業',
    pwd1 =>'パスワード',
    pwd2 =>'パスワード2',
    radiobtn2 =>'本人'
]　;

$usr-date ' ' ;
    foreach ($POST as $key => $value) {
        $usr-date .= $value.'.'"<br> \n" ;
}

echo
    '
    <form action="0625_2.php" $method="post">
    <input type="hidden" name="usrdate" value="' .usr_date'">
    <input type="submit" value="送信する">
    </form>
    '

?>
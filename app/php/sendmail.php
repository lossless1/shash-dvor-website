<?php
include ("config.php");

//header('Content-Type: application/json');
$_POST = json_decode(file_get_contents('php://input'),true);
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$to = "Ovanes Saakyan&lt;<ovik-74@mail.ru>,";
$to .= "Vladimir Saakyan#lt;<vovsaa9@mail.ru>";

$messageAll = "
    Пришло сообщение от .$email.\n
    С письмом:\n.
    $message\n
";

$headers = "Content-type: text/html; charset=windows-1251 \r\n";
$headers .= "From: shash-dvor.xyz <".$email.">\r\n";

//$mail = mail("vovsaa9@mail.ru", $subject, $message, $header); //E-mail получателя, Заголовок письма, Текст письма
$mail = mail("vovsaa9@mail.ru", "My Subject", "Line 1\nLine 2\nLine 3",$headers); //E-mail получателя, Заголовок письма, Текст письма

if($mail){
    echo "Сообщение отправлено! c ". $email;
}else{
    echo "Ошибка!!!!!";
}

?>
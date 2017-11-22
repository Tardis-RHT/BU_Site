// удалим фильтры, которые могут изменять заголовок $headers
// remove_all_filters( 'wp_mail_from' );
// remove_all_filters( 'wp_mail_from_name' );
// $to = 'coolahhy@gmail.com';
// $subject = 'test';
// $message = 'testing';
// $headers = array(
// 	'From: Me Myself <coolahhy@gmail.com>',
// 	'content-type: text/html',
// 	'Cc: John Q Codex <coolahhy@gmail.com>',
// 	'Cc: coolahhy@gmail.com', // тут можно использовать только простой email адрес
// );

// wp_mail( $to, $subject, $message, $headers );
// wp_mail('coolahhy@gmail.com', 'Какая-то тема', 'Какое-то сообщение');


<meta http-equiv='refresh' content='5; url=http://localhost:8888/wordpress/'>
<meta charset="UTF-8" />

<?php
if (isset($_POST['name'])) {$name = $_POST['name']; if ($name == '') {unset($name);}}
if (isset($_POST['email'])) {$email = $_POST['email']; if ($email == '') {unset($email);}}
if (isset($_POST['subject'])) {$subject = $_POST['subject']; if ($subject == '') {unset($subject);}}
if (isset($_POST['body'])) {$body = $_POST['body']; if ($body == '') {unset($body);}}
if (isset($name) && isset($email) && isset($subject) && isset($body)){
$address = "developer.budevstudio@gmail.com";
$message = "Имя: $name \nE-mail: $email \nТема: $subject \nТекст: $body";
$send = mail ($address,$subject,$message,"Content-type:text/plain; charset = UTF-8\r\nFrom:$email");
if ($send == 'true')
{echo "Спасибо, ваше сообщение успешно отправлено!";}
else {echo "Ошибка, сообщение не отправлено!";}
}
else
{
echo "Вы заполнили не все поля, необходимо вернуться назад!";
}
?>
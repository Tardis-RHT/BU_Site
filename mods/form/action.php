<?php
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
?>
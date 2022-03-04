<?php
// Define some constants
// Read the form values
$success = false;
$senderName = isset( $_POST['senderName'] ) ? $_POST['senderName'] : "";
$phoneNumber = isset( $_POST['phoneNumber'] ) ? $_POST['phoneNumber'] : "";
$senderEmail = isset( $_POST['senderEmail'] ) ? preg_replace( "/[^\.\-\_\@a-zA-Z0-9]/", "", $_POST['senderEmail'] ) : "";
$message = isset( $_POST['message'] ) ? preg_replace( "/(From:|To:|BCC:|CC:|Subject:|Content-Type:)/", "", $_POST['message'] ) : "";

$messagecontent = "\r\n Имя:" . $senderName . "\r\n Телефон:" . $phoneNumber . "\r\n Email:" . $senderEmail . "\r\n Сообщение:" . $message;

  $success = mail( "k.chernykh@webprofy.ru", "Обратная связь", $messagecontent);
if($success)
  echo "ok";
else
  echo "error";
?>


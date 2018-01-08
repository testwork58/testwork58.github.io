<?php

$recepient = "rudi.scorp@yandex.ru";
$siteName = "Форма отправки";

$name = trim($_POST["name"]);
$phone = trim($_POST["phone"]);
$email = trim($_POST["email"]);
$message = "Имя: $name \nТелефон: $phone \nE-mail: $email"";

$pagetitle = "Заявка с сайта \"$siteName\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");

?>

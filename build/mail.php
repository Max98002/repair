<?php
// Файлы phpmailer
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';
require 'phpmailer/Exception.php';
// Переменные, которые отправляет пользователь
$username = $_POST['username'];
$phone = $_POST['phone'];
$email = $_POST['email'];

$mail = new PHPMailer\PHPMailer\PHPMailer();
try {
  $msg = "Форма успешно отправлена";
  $mail->isSMTP();
  $mail->CharSet = "UTF-8";
  $mail->SMTPAuth   = true;
  // Настройки вашей почты
  $mail->Host       = 'smtp.gmail.com'; // SMTP сервера GMAIL
  $mail->Username   = 'maxtest98002@gmail.com'; // Логин на почте
  $mail->Password   = 'aSepErAp'; // Пароль на почте
  $mail->SMTPSecure = 'ssl';
  $mail->Port       = 465;
  $mail->setFrom('maxtest98002@gmail.com', 'Ремонт Квартир'); // Адрес самой почты и имя отправителя

  // Получатель письма
  $mail->addAddress('yotocati@vxmail.top');


  // -----------------------
  // Само письмо
  // -----------------------
  $mail->isHTML(true);

  $mail->Subject = 'Новая заявка';
  $mail->Body    = "<b>Имя:</b> $username <br>
        <b>Телефон:</b> $phone<br><br>
        <b>Email:</b> $email<br><br>";

  // Проверяем отравленность сообщения
  if ($mail->send()) {
    echo "Форма отправленна";
  } else {
    echo "Сообщение не было отправлено. Неверно указаны настройки вашей почты";
  }
} catch (Exception $e) {
  echo "Сообщение не было отправлено. Причина ошибки: {$mail->ErrorInfo}";
}

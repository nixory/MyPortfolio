<?php
// Файлы phpmailer
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';
require 'phpmailer/Exception.php';

// Переменные, которые отправляет пользователь
$email = $_POST['email'];
$text = $_POST['text'];

// Формирование самого письма
$title = "Новое сообщение с портфолио сайта!";
$body = "
<h2>Новое сообщение с портфолио сайта:</h2>
<b>email:</b> $email<br><br>
<b>Сообщение:</b><br>$text
";

// Настройки PHPMailer
$mail = new PHPMailer\PHPMailer\PHPMailer();
try {
    $mail->isSMTP();   
    $mail->CharSet = "UTF-8";
    $mail->SMTPAuth   = true;
    //$mail->SMTPDebug = 2;
    $mail->Debugoutput = function($str, $level) {$GLOBALS['status'][] = $str;};

    // Настройки вашей почты
    $mail->Host       = 'smtp.gmail.com'; // SMTP сервера вашей почты
    $mail->Username   = 'knowex228@gmail.com'; // Логин на почте
    $mail->Password   = 'ptnbdxyykefpyjeg'; // Пароль на почте
    $mail->SMTPSecure = 'ssl';
    $mail->Port       = 587;
    $mail->setFrom('knowex228@gmail.com', 'MyPortfolio Site'); // Адрес самой почты и имя отправителя

    // Получатель письма
    $mail->addAddress('nikitastepanovs777@gmail.com');  

    // Прикрипление файлов к письму
// Отправка сообщения
$mail->isHTML(true);
$mail->Subject = $title;
$mail->Body = $body;    

// Проверяем отравленность сообщения
if ($mail->send()) {$result = "success";} 
else {$result = "error";}

} catch (Exception $e) {
    $result = "error";
    $status = "Сообщение не было отправлено. Причина ошибки: {$mail->ErrorInfo}";
}

// Отображение результата
echo json_encode(["result" => $result, "resultfile" => $rfile, "status" => $status]);
<?php
// Файлы phpmailer
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';
require 'phpmailer/Exception.php';
// Переменные, которые отправляет пользователь
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
// Переменные, которые нужно заполнить
$admin_name = 'Pulse'; //Имя отправителя которое будет указано при отправке письма
$admin_mail = 'front-les@yandex.ru'; //Почта с которой будет отправлено письмо
$user_mail = 'front-les@yandex.ru'; //Почта на которую будет отправлено письмо
$mail_subj = 'Заявка с сайта: http://frontend.lesson/';
$mail_body =  "<b>На сайте была оставлена заявка на обратный звонок <br> 
        <b>Имя:</b> <span style='color:orange'>$name</span><br> 
        <b>Телефон:</b> <span style='color:orange'>$phone</span><br>
        <b>Email:</b> <span style='color:orange'>$email</span><br><br>";
        


$mail = new PHPMailer\PHPMailer\PHPMailer();
try {
    $msg = "<span style='text-align:center; display:block'>
    Ваша заявка на обратный звонок принята. <br>
    Мы с вами свяжемся в ближайшее время!
    </span>";
    $mail->isSMTP();   
    $mail->CharSet = "UTF-8";                                          
    $mail->SMTPAuth   = true;
    // Настройки вашей почты
    $mail->Host       = 'smtp.yandex.com'; // SMTP сервера GMAIL
    $mail->Username   = 'front-les'; // Логин на почте
    $mail->Password   = '794FSZQb8@'; // Пароль на почте
    $mail->SMTPSecure = 'ssl';
    $mail->Port       = 465;
    $mail->setFrom($admin_mail, $admin_name); // Адрес самой почты и имя отправителя
    // Получатель письма
    $mail->addAddress($user_mail);  
    //$mail->addAddress('youremail@gmail.com'); // Ещё один, если нужен
    // Прикрипление файлов к письму
if (!empty($_FILES['myfile']['name'][0])) {
    for ($ct = 0; $ct < count($_FILES['myfile']['tmp_name']); $ct++) {
        $uploadfile = tempnam(sys_get_temp_dir(), sha1($_FILES['myfile']['name'][$ct]));
        $filename = $_FILES['myfile']['name'][$ct];
        if (move_uploaded_file($_FILES['myfile']['tmp_name'][$ct], $uploadfile)) {
            $mail->addAttachment($uploadfile, $filename);
        } else {
            $msg .= 'Неудалось прикрепить файл ' . $uploadfile;
        }
    }   
}
        // -----------------------
        // Само письмо
        // -----------------------
        $mail->isHTML(true);
    
        $mail->Subject = $mail_subj;
        $mail->Body    = $mail_body;
// Проверяем отравленность сообщения
if ($mail->send()) {
    echo "$msg";
    //Если нужно подключить html страницу: header('location: thankyou.html');
} else {
echo "Сообщение не было отправлено. Неверно указаны настройки вашей почты";
}
} catch (Exception $e) {
    echo "Сообщение не было отправлено. Причина ошибки: {$mail->ErrorInfo}";
}
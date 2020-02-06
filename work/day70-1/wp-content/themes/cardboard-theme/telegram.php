<?PHP  header("Content-Type: text/html; charset=utf-8");?>
<?php
/* 
https://api.telegram.org/botXXXXXXXXXXXXXXXXXXXXXXX/getUpdates	
XXXXXXXXXXXXXXXXXXXXXXX — токен вашего бота
*/

$user_phone = $_POST['user_phone2'];
$token  = '1000921265:AAEXq42XDOl8HbCOn-jWrGMA-AOrV0qec94';
$chat_id = '-237520370';


$arr = array(
  'Заявка с сайта. Телефон: ' => $user_phone,
);

foreach ($arr as $key => $value) {
  $txt .= '<b>'.$key.'</b>'.$value.'%0A';
};

$sendToTelegram =fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  
  echo '<h1 class="success">Спасибо за отправку вашего сообщения!</h1>';
    return true;
}  
else {
  echo '<p class="fail"><b>Ошибка. Сообщение не отправлено!</b></p>';
}
/*else {
  header ("Location: /");
}
*/
?>
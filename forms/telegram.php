<?php

/* https://api.telegram.org/bot1333870243:AAFYyfUA5JARyH_FGDregd-b1Q0b_ICFQys/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$name = $_POST['user_name'];
$email = $_POST['user_email'];
$phone = $_POST['user_phone'];
$theme = $_POST['user_theme'];
$message = $_POST['user_message'];
$token = "1333870243:AAFYyfUA5JARyH_FGDregd-b1Q0b_ICFQys";
$chat_id = "-437671630";
$arr = array(
  'Имя пользователя: ' => $name,
  'Email' => $email,
  'Телефон: ' => $phone,
  'Тема: ' => $theme,
  'Сообщение: ' => $message 
  
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

// if ($sendToTelegram) {
//   header('Location: thank-you.html');
// } else {
//   echo "Error";
// }
?>
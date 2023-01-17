<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require_once $_SERVER['DOCUMENT_ROOT']. "/PHPMailer/src/PHPMailer.php";
require_once $_SERVER['DOCUMENT_ROOT']. "/PHPMailer/src/SMTP.php";

$mail = new PHPMailer();
$mail->CharSet = "UTF-8";
$mail->setLanguage('ru', 'phpmailer/language/');
$mail->IsSMTP();
$mail->Host   = 'smtp.mail.ru';  
$mail->SMTPAuth   = true;          
$mail->Username   = 'xeniaalexe';       
$mail->Password   = 'iBg1fz8eGNRLtNxkiskk';    
$mail->SMTPSecure = 'TLS';         
$mail->Port   = 587;               

$mail->setFrom('xeniaalexe@mail.ru');
$mail->addAddress("xeniaalexe@mail.ru");
$mail->Subject = "Заявка с сайта";


if(isset($_POST['send']))
{
    
$form['name'] = trim(htmlspecialchars($_POST['name']));
$form['phone'] = trim(htmlspecialchars($_POST['phone']));
$form['tema'] = trim(htmlspecialchars($_POST['tema']));
$form['date'] = trim(htmlspecialchars($_POST['date']));
$form['stometolog'] = trim(htmlspecialchars($_POST['stomatolog']));
$form['dateCall'] = trim(htmlspecialchars($_POST['dateCall']));
$form['timeCall'] = trim(htmlspecialchars($_POST['timeCall']));


    if ($form['tema'] == '2'){
        $tema = 'Запись на прием';
    }elseif ($form['tema'] == 1) {
        $tema = 'Консультация';
    }
    else{
        $tema = 'не указана';
    }

    

    if ($form['stometolog'] == 1) {
        $stomatolog = 'Текст1';
    }elseif ($form['stometolog'] == 2) {
        $stomatolog = 'Текст2';
    }elseif ($form['stometolog'] == 3) {
        $stomatolog = 'Текст3';
    }else {
        $stomatolog = 'не указан';
    }

    if ($form['timeCall'] == 1) {
        $timeCall = '9:00';
    }elseif ($form['timeCall'] == 2) {
        $timeCall = '12:00';
    }elseif ($form['timeCall'] == 3) {
        $timeCall = '15:00';
    }elseif ($form['timeCall'] == 4) {
        $timeCall = '18:00';
    }else {
        $timeCall = 'не указано';
    }
    
    if ($form['date']) {
        $date = $form['date'];
    } else {
        $date = "не указана";
    }
    
    if ($form['dateCall']) {
        $dateCall = $form['dateCall'];
    } else {
        $dateCall = "не указана";
    }
    
    


    $message  = 'Имя: ' . $form['name'] . "\r\n" .
    'Телефон: ' . $form['phone']  . "\r\n" .
    'Тема: ' . $tema  . "\r\n" .
    'Дата записи на прием: ' . $date  . "\r\n" .
    'Стоматолог: ' . $stomatolog  . "\r\n" .
    'Дата звонка: ' . $dateCall  . "\r\n" .
    'Время звонка: ' . $timeCall  . "\r\n" 
    ;

    // $to = "xeniaalexe@mail.ru";
    // $from = "xeniaalexe@mail.ru";

    // $headers = "From: $from" . "\r\n" . 
    //            "Reply-To: $from" . "\r\n" . 
    //            "X-Mailer: PHP/" . phpversion();


//     if (mail($to, "Заявка сайта", $message , $headers))
//  {     echo "сообщение успешно отправлено";
// } else {
//     echo "при отправке сообщения возникли ошибки";
// }


$mail->Body = $message;
if(!$mail->send()){
    echo 'Ошибка';
}else{
    echo 'Гуд';
}


header('location: index.php');

}



?>
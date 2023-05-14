<?php
use PHPMailer\PHPMailer\PHPMailer;
require 'phpmailer/phpmailer/src/PHPMailer.php';
require 'phpmailer/phpmailer/src/SMTP.php';
require 'phpmailer/phpmailer/src/Exception.php';

$mail = new PHPMailer(true);
$mail->CharSet = "UTF-8";

$mail2 = new PHPMailer(true);
$mail2->CharSet = "UTF-8";

$name = $_POST['name'];
$email = $_POST['email'];
$age = $_POST['age'];
$program = $_POST['program'];
$message = $_POST['message'];

try {
    $mail->IsSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'sadek.elsegar@gmail.com';
    $mail->Password = 'ibwzdlgkssrefhyc';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    $mail->setFrom("sadek.elsegar@gmail.com", "sadek.elsegar@gmail.com",0);
    $mail->AddAddress($email);
    $mail->Subject = 'تأكيد الحجز';
    $mail->Body = "السلام عليكم ورحمة الله وبركاته 😊

أهلا ومرحبا بوصية رسول الله (صلى الله عليه وسلم )
💚سعداء بإنضمامك معنا في رحلة تعلم طفلك للقرآن وربطه بالحياة داخل حلقات قرآنية ماتعه وشيقه 

شعارنا: لنكن عونًا لهم 

فريق صديقة الصغار 

تواصل معنا:
sadek.elsegar@gmail.com

https://sadek-elsegar.app/

https://www.facebook.com/EsraaMoTrainer?mibextid=LQQJ4d

01098860679";

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Error: {$mail->ErrorInfo}";
}

try{
//    sanaa.info023@gmail.com
    $mail2->IsSMTP();
    $mail2->Host = 'smtp.gmail.com';
    $mail2->SMTPAuth = true;
    $mail2->Username = 'sadek.elsegar@gmail.com';
    $mail2->Password = 'ibwzdlgkssrefhyc';
    $mail2->SMTPSecure = 'ssl';
    $mail2->Port = 465;

    $mail2->setFrom("sadek.elsegar@gmail.com", "sadek.elsegar@gmail.com",0);
    $mail2->AddAddress('sanaa.info023@gmail.com');
    $mail2->Subject = 'تفاصيل الحجز';
    $mail2->Body = "Name: ".$name."\n".
                   "Email: ".$email."\n".
                   "Age: ".$age."\n".
                   "Program: ".$program."\n".
                   "Message: ".$message."\n";
$mail2->send();
echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Error: {$mail2->ErrorInfo}";
}

echo "<script> location.href='index.php'; </script>";
exit;




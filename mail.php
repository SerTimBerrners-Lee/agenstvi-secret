<?php 

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

$q1 = $_POST['1'];
$w2 = $_POST['2'];
$e3 = $_POST['3'];
$r4 = $_POST['4'];
$t5 = $_POST['5'];
$y6 = $_POST['6'];
$u7 = $_POST['7'];
$i8 = $_POST['8'];
$o9 = $_POST['9'];
$p10 = $_POST['10'];
$a11 = $_POST['11'];
$s12 = $_POST['12'];
//$d13 = $_POST['13'];
$f14 = $_POST['14'];
$g15 = $_POST['15'];
$h16 = $_POST['16'];
$j17 = $_POST['17'];


//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.mail.ru';  																							// Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'secret.zayavki@mail.ru'; // Ваш логин от почты с которой будут отправляться письма
$mail->Password = 'oaYAipPoI3*2'; // Ваш пароль от почты с которой будут отправляться письма
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465; // TCP port to connect to / этот порт может отличаться у других провайдеров

$mail->setFrom(''); // от кого будет уходить письмо?
$mail->addAddress('vikzanovuch@mail.ru');     // Кому будет уходить письмо 
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
$mail->addAttachment($_FILES['13']['tmp_name'], $_FILES['13']['name']);    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Заявка с тестового сайта';
$mail->Body    = 	'1' .$q1.
					'2' .$w2.
					'3' .$e3.
					'4' .$r4.
					'5' .$t5.
					'6' .$y6.
					'7' .$u7.
					'8' .$i8.
					'9' .$o9.
					'10' .$p10.
					'11' .$a11.
					'12' .$s12.
					//'13' .$d13.
					'14' .$f14.
					'15' .$g15.
					'16' .$h16.
					'17' .$j17;
$mail->AltBody = '';

if(!$mail->send()) {
    echo 'Error';
} else {
    header('location: thank-you.html');
}
?>
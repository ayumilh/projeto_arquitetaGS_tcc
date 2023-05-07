<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require '../vendor/autoload.php';

if(isset($_POST['send_mail'])){
  include('connect.php');
  // variaveis 
  $name_user    = $_POST['name_user'];
  $email_user   = $_POST['email_user'];
  $email_sentBy = $_POST['ayumi.cod06@gmail.com'];

  //Create an instance; passing `true` enables exceptions
  $mail = new PHPMailer(true);

  try {
      //Server settings
      // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
      $mail->isSMTP();                                            //Send using SMTP
      $mail->Host       = 'smtp.example.com';                     //Set the SMTP server to send through
      $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
      $mail->Username   = $email_sentBy;                     //SMTP username
      $mail->Password   = 'fofagqvpgqzuusnb';                               //SMTP password
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
      $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

      //Recipients
      $mail->setFrom($email_sentBy, 'Mailer');
      $mail->addAddress($email_user, 'Joe User');     //Add a recipient
      
      //Attachments
      // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
      // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

      //Content
      $mail->isHTML(true);                                  //Set email format to HTML
      $mail->Subject = 'Here is the subject';
      $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
      $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

      $mail->send();
      echo 'E-mail enviado com sucesso!!';
  } catch (Exception $e) {
      echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
  }
}else { echo "Erro ao enviar o e-mail, não foi enviado pelo formulario";}
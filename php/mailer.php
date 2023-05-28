<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
  //Import PHPMailer classes into the global namespace
  //These must be at the top of your script, not inside a function
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\SMTP;
  use PHPMailer\PHPMailer\Exception;

  //Load Composer's autoloader
  require '../vendor/autoload.php';

  include('connect.php');
  include('pin.php');

  if (isset($_POST['send'])) {
    $name_user    = $_POST['nome_user'];
    $email_user   = $_POST['email_user'];
    $email_sentBy = 'ayumi.cod06@gmail.com';

    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
      //Server settings
      $mail->isSMTP();
      $mail->Host       = 'smtp.gmail.com';
      $mail->SMTPAuth   = true;
      $mail->Username   = $email_sentBy;
      $mail->Password   = 'fofagqvpgqzuusnb';
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
      $mail->Port       = 465;

      //Recipients
      $mail->setFrom($email_sentBy, 'Lara');
      $mail->addAddress($email_user, $name_user);

      // random pin
      $random = strtoupper(substr(bin2hex(random_bytes(4)), 3));
      $random_fragments = str_split($random);

      //Content
      $mail->isHTML(true);
      $mail->Subject = 'Seja bem-vindo de volta!';
      $mail->Body    = '
                        <p> Uma tentativa de login requer verificação codificada para maior segurança. Para concluir o login, insira o código de verificação em seu dispositivo. </p>
                        <b>Seu codigo é: </b>' . $random_fragments[0] . $random_fragments[1] . $random_fragments[2] . $random_fragments[3] . $random_fragments[4] .
        '<br> <p>Caso não esteja tentando fazer login, contate-nos ou refaça seu login por aqui.</p>   <a href="" style="color: blue;"><p>link</p></a>';
      $mail->AltBody = 'Seu codigo é: ' . $random_fragments[0] . $random_fragments[1] . $random_fragments[2] . $random_fragments[3] . $random_fragments[4];

      $mail->send(); 
      header("location: ..\html\pag_pin.html");

    } catch (Exception $e) {
      echo "<p>Message could not be sent. Mailer Error: {$mail->ErrorInfo}</p>";
    }
  } else {
    echo "<p>Enviar o email pelo formulario!!</p>" . $random_fragments . " e ". $array_user;
  }
  ?>
</body>

</html>
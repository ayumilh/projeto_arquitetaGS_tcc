<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php

if(isset($_POST['verificar'])){
  include('connect.php');
  include('mailer.php');

  $query_pin = $sql->query("SELECT * FROM cadastro WHERE email = '$email_user'");
  $check_pin = mysqli_num_rows($query_pin);

  if (!$check_pin == 1) {
    echo "<p>Esse email não está cadastrado em nosso sistema</p>";
  } else {

    $insert_pin = $sql->query("INSERT INTO cadastro VALUES('$random_fragments', '$name_user', '$email_user')");
    echo "<p>Pin enviado para BD</p>";

    // input dos pin
    $array_user = [$_POST['pin-1'].$_POST['pin-2']. $_POST['pin-3']. $_POST['pin-4']. $_POST['pin-5']];

    if ($random_fragments == $array_user) {
      header("location: ../html/home_cliente.html");
    } else {
      echo "<p>Insira corretamente o pin</p>";
      header("location: ../html/pag_pin.html");
    }
  }
}

?>
</body>
</html>
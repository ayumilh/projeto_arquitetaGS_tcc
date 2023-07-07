<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Verificação do pin</title>
</head>
<body>
<?php
if(isset($_POST['verificar'])){
  include('connect.php');

  if(isset($_POST['verificar'])){
    $array_user = $_POST['pin-0'].$_POST['pin-1']. $_POST['pin-2']. $_POST['pin-3']. $_POST['pin-4'];

    $query_pin = $sql->query("SELECT * FROM projeto WHERE pin = '$array_user'");
    $check_pin = mysqli_num_rows($query_pin);

    if($check_pin =! 1){
      echo '<p>Houve um erro na verificação do pin, por favor insira novamente</p>';
    }else{
      echo '<p>aeeee deu certo!!!</p>';
    }
  }
}

?>
</body>
</html>
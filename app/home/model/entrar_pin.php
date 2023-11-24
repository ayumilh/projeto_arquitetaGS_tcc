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
include('../../../config/connect.php');
session_start();

if(isset($_POST['verificar'])){
  $pin_projeto = $_POST['pin-0'].$_POST['pin-1']. $_POST['pin-2']. $_POST['pin-3']. $_POST['pin-4'];

  $select_pin = "SELECT * FROM projeto WHERE pin_projeto = '$pin_projeto'";
  $query_pin = $sql->query($select_pin);

  if($query_pin->num_rows > 0){
    while($row_projeto = $query_pin->fetch_assoc()){
      $id_cliente  = $row_projeto['id_cliente'];
      $pin_projeto = $row_projeto['pin_projeto'];
    }

    $_SESSION['id_cliente'] = $id_cliente;
    $_SESSION['pin_projeto'] = $pin_projeto;
    header('location: ../../cliente/view/cliente_home.php');
  }else{
    unset($_SESSION['id_cliente']);
    unset($_SESSION['pin_projeto']);
    header('location: ../../home/view/home-entrar.html');
  }
}

?>
</body>
</html>
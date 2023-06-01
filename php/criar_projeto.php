<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Criação do projeto</title>
</head>
<body>
  <?php
  if(isset($_POST['criar_projeto'])){
    include('connect.php');
    $id_cliente = $_POST['id_cliente'];
    $nome_user = $_POST['nome_user'];
    $data_projeto = $_POST['data_projeto'];

    // criar o pin do projeto
    $pin = strtoupper(substr(bin2hex(random_bytes(4)), 3));
    if($id_cliente == "" or $nome_user == ""){
      echo '<p>Por favor insira os dados no campo!!</p>';
    }else{
      $sql->query("INSERT INTO projeto VALUES(11111, 2, 'Lara Ayumi', '20230529')");
    }
  }

  ?>
</body>
</html>
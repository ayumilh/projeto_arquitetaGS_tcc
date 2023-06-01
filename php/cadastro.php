<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastrar Usuario</title>
</head>

<body>
  <?php
  include('connect.php');
  
  if(isset($_POST['cadastrar'])){
    $nome_user = $_POST['nome_user'];
    $cpf_user  = $_POST['cpf_user'];

    if($nome_user == "" or $cpf_user == ""){
      echo '<p>Por favor inserir os dados nos campos!!</p>';
    }else{
      $query_cpf = $sql->query("SELECT * FROM cliente WHERE cpf = $cpf_user");
      $check_cpf = mysqli_num_rows($query_cpf);
  
      if($check_cpf < 1){
        $sql->query("INSERT INTO cliente VALUES(DEFAULT, '$nome_user', $cpf_user)");
        echo '<p>Deu tudo certo!!</p>';

      }else{
        echo '<p>Cliente > '. $nome_user . ' < já cadastrado!!</p>';
      }
    }
  }
  ?>
</body>

</html>
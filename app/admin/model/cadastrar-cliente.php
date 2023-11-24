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
  echo "Bem-vind@";

  include('../../../config/connect.php');
  // variaveis
  $cliente_nome           = $_POST['cliente_nome'];
  $cliente_cpf            = $_POST['cliente_cpf'];
  $cliente_rg             = $_POST['cliente_rg'];
  $cliente_telefone1      = $_POST['cliente_telefone1'];
  $cliente_telefone2      = $_POST['cliente_telefone2'];
  $cliente_endereco_atual = $_POST['cliente_endereco_atual'];
  $cliente_fatura         = $_POST['cliente_fatura'];

  // instrução SQL de inserção
  $query = "INSERT INTO cliente (id_cliente, nome, cpf, rg, telefone1, telefone2, endereco_atual, data_fatura)
    VALUES (default, '$cliente_nome', '$cliente_cpf', '$cliente_rg', '$cliente_telefone1', '$cliente_telefone2', '$cliente_endereco_atual', '$cliente_fatura')";

  // verificar se a inserção foi bem sucedida
  if ($sql->query($query) === TRUE) {
    echo "Consulta INSERT executada com sucesso!";
  } else {
    echo "Erro ao executar a consulta: " . $sql->error;
  }
?>
</body>

</html>
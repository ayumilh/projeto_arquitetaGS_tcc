<!doctype html>
<html lang="en">

<head>
  <title>Lançar Arquivos</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>

<body>
  <?php
  include("../connect.php");

    $uploadDir = '../../download/arquivos/';
    $caminho   = $_FILES['anexo_servico']['name'];
    $anexo     = $uploadDir . basename($caminho);
    $servico   = $_POST['selecao_servico'];
    $status    = $_POST['status'];
    
    $valor = $_POST['valor_servico'];
    $data  = $_POST['data_servico'];


    if(move_uploaded_file($_FILES["anexo_servico"]["tmp_name"], $anexo)){
      // mandar para o banco de dados
      $query = "INSERT INTO controlefinanceiro(status, servico, data, valor, anexo) VALUE('$status', '$servico', '$data', '$valor', '$anexo')";

      // verificar se a inserção foi bem sucedida
      if ($sql->query($query) === TRUE) {
        echo "Consulta INSERT executada com sucesso!";
      } else {
        echo "Erro ao executar a consulta: " . $sql->error;
      }
    }else{
      echo "Possível ataque de upload de arquivo!\n";
    }

  ?>
</body>

</html>
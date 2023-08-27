<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lançar orçamentos</title>
</head>
<body>
<?php
  include('../connect.php');
  session_start();
  $pin_projeto = $_POST['pin_projeto'];
  $nome      = $_POST['nome_empresa'];
  $servico   = $_POST['selecao_servico'];
  $uploadDir = '../../download/orcamentos/';
  $caminho   = $_FILES['anexo']['name'];
  $anexo     = $uploadDir . basename($caminho);
  $status = 'Selecionar';

  if(move_uploaded_file($_FILES['anexo']['tmp_name'], $anexo)){
    $query = "INSERT INTO orcamentos(pin_projeto, id_servico, nome_empresa, status, anexo) VALUES('$pin_projeto', '$servico', '$nome', '$status', '$anexo')";
    if($sql->query($query) === TRUE){
      $select = "SELECT * FROM orcamentos";
      $query_orcamento = $sql->query($select);

      if($query_orcamento->num_rows > 0){
        $_SESSION['pin_projeto'] = $pin_projeto;
        $_SESSION['nome'] = $nome;
        $_SESSION['anexo'] = $anexo;
      }
      echo "Consulta INSERT executada com sucesso!";
    } else {
      echo "Erro ao executar a consulta: " . $sql->error;
    }
  } else{
    echo "Possível ataque de upload de arquivo!\n";
  }
?>
</body>
</html>
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

    $uploadDir       = '../../download/arquivos/';
    $nome_arquivo    = $_POST['nome_arquivo'];
    $caminho         = $_FILES['caminho_arquivo']['name'];
    $caminho_arquivo = $uploadDir . basename($caminho);
    $obs_arquivo     = $_POST['obs_arquivo'];
    $data_arquivo    = $_POST['data_arquivo'];

    if(move_uploaded_file($_FILES["caminho_arquivo"]["tmp_name"], $caminho_arquivo)){
      
      // mandar para o banco de dados
      $query = "INSERT INTO arquivos(id_cliente, nome_arquivo, caminho_arquivo, observacao, data_publicacao) VALUE (1, '$nome_arquivo', '$caminho_arquivo', '$obs_arquivo', '$data_arquivo')";

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
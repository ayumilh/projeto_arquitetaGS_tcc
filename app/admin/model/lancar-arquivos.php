<!doctype html>
<html lang="en">

<head>
  <title>Lançar Arquivos</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>

<body>
  <?php
  include("../../../config/connect.php");
    $pin_projeto     = $_POST['pin_projeto'];
    $uploadDir       = '../../../src/download/arquivo/';
    $nome_arquivo    = $_POST['nome_arquivo'];
    $caminho         = $_FILES['caminho_arquivo']['name'];
    $caminho_arquivo = $uploadDir . basename($caminho);
    $obs_arquivo     = $_POST['obs_arquivo'];
    $data_arquivo    = $_POST['data_arquivo'];

    if(move_uploaded_file($_FILES["caminho_arquivo"]["tmp_name"], $caminho_arquivo)){
      
      // mandar para o banco de dados
      $query = "INSERT INTO arquivos(cod_arquivo, pin_projeto, nome_arquivo, caminho_arquivo, observacao, data_publicacao) VALUE (default, '$pin_projeto', '$nome_arquivo', '$caminho_arquivo', '$obs_arquivo', '$data_arquivo')";

      // verificar se a inserção foi bem sucedida
      if ($sql->query($query) === TRUE) {
        $select_arquivos = "SELECT * FROM arquivos";
        $query_arquivos  = $sql->query($select_arquivos);

        if($query_arquivos->num_rows > 0){
          $_SESSION['pin_projeto']     = $pin_projeto;
          $_SESSION['nome_arquivo']    = $nome_arquivo;
          $_SESSION['caminho_arquivo'] = $caminho_arquivo;
          $_SESSION['observacao']      = $obs_arquivo;
          $_SESSION['data_publicacao'] = $data_arquivo;
        }
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
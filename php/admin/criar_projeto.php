<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Criar projeto</title>
</head>
<body>
  <?php
    echo "Vamos criar um projeto!?";

    include('../connect.php');
    $id_cliente = $_POST['id_cliente'];
    $projeto_planta = $_FILES['projeto_planta'];
    $projeto_empreendimento = $_POST['projeto_empreendimento'];
    $endereco_projeto = $_POST['endereco_projeto'];
    $projeto_m2 = $_POST['projeto_m2'];
    $previsao_entrega = $_POST['previsao_entrega'];


    // criar o pin do projeto
    $pin = strtoupper(substr(bin2hex(random_bytes(4)), 3));


    // instrução SQL de inserção
    $query = "INSERT INTO projeto (id_cliente, pin_projeto, planta, empreendimento, endereco_projeto, m2, previsao_entrega) VALUES ($id_cliente, '$pin', '$projeto_planta', '$projeto_empreendimento', '$endereco_projeto', '$projeto_m2', '$previsao_entrega')";

     // verificar se a inserção foi bem sucedida
    if ($sql->query($query) === TRUE) {
      echo "Consulta INSERT executada com sucesso!";
    } else {
        echo "Erro ao executar a consulta: " . $sql->error;
    }
  ?>
</body>
</html>
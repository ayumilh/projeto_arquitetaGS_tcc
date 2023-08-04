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
  session_start();
    $pin_projeto = $_POST['pin_projeto'];
    $uploadDir   = '../../download/arquivos/';
    $caminho     = $_FILES['anexo_servico']['name'];
    $anexo       = $uploadDir . basename($caminho);
    $servico     = $_POST['selecao_servico'];
    $status      = $_POST['status'];
    $valor       = $_POST['valor_servico'];
    $data        = $_POST['data_servico'];


    if(move_uploaded_file($_FILES["anexo_servico"]["tmp_name"], $anexo)){
      // mandar para o banco de dados
      $query = "INSERT INTO controlefinanceiro(cod_financeiro, pin_projeto, id_servico, status, data, valor, anexo) VALUE(default, '$pin_projeto', '$servico', '$status', '$data', '$valor', '$anexo')";

      // verificar se a inserção foi bem sucedida
      if ($sql->query($query) === TRUE) {
        $select_controlefinanceiro = "SELECT * FROM controlefinanceiro";
        $query_controlefinanceiro  = $sql->query($select_controlefinanceiro);
        // if($query_controlefinanceiro->num_rows > 0){

        //   $_SESSION['id_cliente'] = $id_cliente;
        //   $_SESSION['status'] = $status;
        //   $_SESSION['servico'] = $servico;
        //   $_SESSION['data'] = $data;
        //   $_SESSION['valor'] = $valor;
        //   $_SESSION['anexo'] = $anexo;
        // }
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
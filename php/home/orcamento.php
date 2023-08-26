<!doctype html>
<html lang="en">

<head>
  <title>Orcamento</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
<?php
include('../connect.php');

$nome       = $_POST['nome_orc'];
$email      = $_POST['email_orc'];
$telefone   = $_POST['tel_orc'];
$tipoProj   = $_POST['tipo_orc'];
$m2         = $_POST['m2_orc'];
$condominio = $_POST['condominio_orc'];
$inicioProj = $_POST['iniProj_orc'];
$obs        = $_POST['obs_orc'];

$select_orc = "INSERT INTO formOrcamento (nome, email, telefone, tipoProj, M2, condominio, inicioProj, observacao) VALUES ('$nome', '$email', '$telefone', '$tipoProj', '$m2', '$condominio', '$inicioProj', '$obs')";
// $query_formOrc = $sql->query($select_orc);

if($sql->query($select_orc) === TRUE){
  echo "Consulta INSERT executada com sucesso!";
} else {
  echo "Erro ao executar a consulta: " . $sql->error;
}

?>
</body>

</html>
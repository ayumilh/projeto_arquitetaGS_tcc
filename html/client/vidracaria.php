<?php
session_start();
if(!isset($_SESSION['pin_projeto']) == true){
  header('location: ../../html/home/home-entrar.html');
}else{$pin_projeto = $_SESSION['pin_projeto'];}
?>
<!doctype html>
<html lang="en">

<head>
  <title>Orçamento</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="shortcut icon" href="../../img/home/logotipo.png" type="image/x-icon">
  
  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  
  <link rel="stylesheet" href="../../css/client/cliente-orcamento.css">
</head>

<body>
  <div class="container container-sm">
    <header class="mb-lg-5 text-center">
      <nav class="navbar">
        <a href="../../php/client/cliente_home.php"><img src="../../img/voltar.png" class="btn-voltar"></a>
        <div class="title">
          <h1>Orçamentos</h1>
        </div>
      </nav>
    </header>

    <main>
      <div class="container">
        <div class="row">
          <div class="col-xl-6">

            <div class="list-group w-auto h-auto">
              <h3>Vidraçaria</h3>

              <?php
                include('../../php/connect.php');
                $select_table = "SELECT * FROM orcamentos WHERE pin_projeto = '$pin_projeto' AND id_servico = 3";
                $query_row = $sql->query($select_table);

                if($query_row->num_rows > 0){
                  while($row = $query_row->fetch_assoc()){
                    $pin_projeto = $row['pin_projeto'];
                    $id_servico = $row['id_servico'];
                    $nome_empresa = $row['nome_empresa'];
                    $status = $row['status'];
                    $anexo = $row['anexo'];
                    echo '
                      <div class="list-group-item list-group-item-action d-flex gap-3 py-3 mt-2" aria-current="true">
                        <img src="../../img/client/orcamento.png" alt="twbs" width="36" height="36" class="flex-shrink-0 mt-2 img-orcamento">
                        <div class="d-flex gap-2 w-100 justify-content-between">
                          <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle btn-dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                              ' .$nome_empresa. '
                            </button>
                            <ul class="dropdown-menu">
                              <li><a href="' .$row['anexo']. '">Visualizar</a></li>
                            </ul>
                          </div>
                          <button type="button" class="btn-selecao indeterminado" id="btnOrcamento3">Selecionar</button>
                        </div>
                      </div>';
                  }
                }else{
                  $pin_projeto  = null;
                  $id_servico   = null;
                  $nome_empresa = null;
                  $status       = null;
                  $anexo        = null;
                  echo '
                    <div class="list-group-item list-group-item-action d-flex gap-3 py-3 mt-2" aria-current="true">
                      <img src="../../img/client/orcamento.png" alt="twbs" width="36" height="36" class="flex-shrink-0 mt-2 img-orcamento">
                      <div class="d-flex gap-2 w-100 justify-content-between">
                        <div class="dropdown">
                          <button class="btn btn-secondary dropdown-toggle btn-dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            ' .$id_servico. '
                          </button>
                          <ul class="dropdown-menu">
                            <li><a href="' .$row['anexo']. '">Visualizar</a></li>
                          </ul>
                        </div>
                        <button type="button" class="btn-selecao indeterminado" id="btnOrcamento3">Selecionar</button>
                      </div>
                    </div>';
                }

              ?>
            </div>
          </div>

          <!-- bloco de notas -->
          <div class="col-xl-6 mt-5">
            <div class="mb-3">
              <textarea class="form-control bloco-notas" id="exampleFormControlTextarea1" placeholder="Notas..."></textarea>
            </div>
          </div>

        </div>  <!-- row -->
      </div> <!-- container -->
    </main>
  </div>

  <script src="../../js/orcamento.js"></script>

  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>
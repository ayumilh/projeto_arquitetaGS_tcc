<?php
session_start();
if(!isset($_SESSION['pin_projeto']) == true){
  header('location: ../../../home/view/home-entrar.html');
}else{$pin_projeto = $_SESSION['pin_projeto'];}
?>
<!doctype html>
<html lang="en">

<head>
  <title>Orçamento</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="shortcut icon" href="../../../../public/img/home/logotipo.png" type="image/x-icon">
  
  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  
  <link rel="stylesheet" href="../../../../public/css/client/cliente-orcamento.css">
</head>

<body>
  <div class="container container-sm">
    <header class="mb-lg-5 text-center">
      <nav class="navbar">
        <a href="../cliente_home.php"><img src="../../../../public/img/home/voltar.png" class="btn-voltar"></a>
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
              <h3>Iluminação</h3>

              <?php
                include('../../../../config/connect.php');
                $select_table = "SELECT * FROM orcamentos WHERE pin_projeto = '$pin_projeto' AND id_servico = 2";
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
                        <img src="../../../../public/img/client/orcamento.png" alt="twbs" class="flex-shrink-0 mt-2 img-orcamento">
                        <div class="d-flex w-100 justify-content-between">
                          <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle btn-dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                              ' .$nome_empresa. '
                            </button>
                            <ul class="dropdown-menu">
                              <li><a href="' .$row['anexo']. '">Visualizar</a></li>
                            </ul>
                          </div>
                          <button type="button" class="btn-selecao indeterminado">Selecionar</button>
                        </div>
                      </div>';
                  }
                }else{
                  $pin_projeto  = '';
                  $id_servico   = '';
                  $nome_empresa = '';
                  $status       = '';
                  $anexo        = '';
                  // echo '
                  //   <div class="list-group-item list-group-item-action d-flex gap-3 py-3 mt-2" aria-current="true">
                  //     <img src="../../../../public/img/client/orcamento.png" alt="twbs" class="flex-shrink-0 mt-2 img-orcamento">
                  //     <div class="d-flex w-100 justify-content-between">
                  //       <div class="dropdown">
                  //         <button class="btn btn-secondary dropdown-toggle btn-dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false"></button>
                  //         <ul class="dropdown-menu">
                  //           <li><a href="#">Visualizar</a></li>
                  //         </ul>
                  //       </div>
                  //       <button type="button" class="btn-selecao indeterminado">Selecionar</button>
                  //     </div>
                  //   </div>';
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

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      var listaButton = document.querySelectorAll('.btn-selecao');
      var listaDeDiv = document.getElementsByClassName('item-lista')

      listaButton.forEach(function(div) {
        div.addEventListener('click', function(event) {
          // Verifica se já foi selecionado nesta sessão
          var foiSelecionado = <?php echo isset($_SESSION['selecionado']) ? 'true' : 'false'; ?>;

          // if (!foiSelecionado) {
            // Adiciona um evento de clique a cada div da lista
            listaButton.forEach(function(div) {
              div.addEventListener('click', function(event) {
                // Remove a classe 'selecionado' de todas as divs
                listaButton.forEach(function(div) {
                  div.classList.remove('indeterminado');
                  div.classList.add('desabilitado');
                  div.innerHTML = 'Selecionado';
                });
                
                // Adiciona a classe 'selecionado' à div clicada
                event.currentTarget.classList.remove('indeterminado');
                event.currentTarget.classList.add('selecionado');
                div.innerHTML = 'Selecionado';

              });
            });

            // Marca como selecionado na sessão
            <?php $_SESSION['selecionado'] = true; ?>;
          // } else {
            // alert('Você já fez uma escolha nesta sessão.');
          // }
        });
      });
    });
  </script>


  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>
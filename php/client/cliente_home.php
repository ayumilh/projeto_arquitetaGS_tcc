<?php
session_start();
if(!isset($_SESSION['pin_projeto']) == true){
  header('location: ../../html/home/home-entrar.html');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bem-vind@</title>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="shortcut icon" href="../../img/home/logotipo.png" type="image/x-icon">
  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous" />

  <link rel="stylesheet" href="../../css/client/cliente-home.css"/>
</head>

<body>
  <div class="container-fluid">
    <div class="row">
      <nav class="col-2">
        <div class="d-flex flex-column sidebar align-items-center">
          <a href="../../index.html" class="d-block align-items-center sidebar-logo">
            <img src="../../img/home/logotipo.png" alt="logotipo" width="62" height="62"/>
          </a>
          <hr/>

          <ul class="nav nav-pills flex-column mb-auto text-center list-icon">
            <li class="sidebar-icons">
              <a href="#" class="nav-link" data-bs-toggle="modal" data-bs-target="#modalNotaFiscal">
                <img src="../../img/client/nota-fiscal.png" alt="icone-nota-fiscal" class="bi" width="28" height="28" />
              </a>
            </li>

            <li class="sidebar-icons">
              <a href="#" class="nav-link" data-bs-toggle="modal" data-bs-target="#modalCtlFinanceiro">
                <img src="../../img/client/financia.png" alt="icone-financia" class="bi" width="28" height="28" />
              </a>
            </li>
            <li class="sidebar-icons">
              <a href="#" class="nav-link">
                <img src="../../img/client/cronograma.png" alt="icone-cronograma" class="bi" width="28" height="28" />
              </a>
            </li>
            <li class="sidebar-icons">
              <a href="#" class="nav-link" data-bs-toggle="modal" data-bs-target="#modalArquivos">
                <img src="../../img/client/file.png" alt="icone-file" class="bi" width="28" height="28" />
              </a>
            </li>
          </ul>
          <hr />
          <div class="exit">
            <a href="#" class="d-flex align-items-center">
              <img src="../../img/client/exit.png" alt="exit" width="32" height="32">
            </a>
          </div>
        </div>
      </nav>

      <div class="col-10">
        <div class="row">
          <div class="col-12">
            <header class="align-items-center p-4 mb-3">
              <a href="/" class="align-items-center text-decoration-none text-black">
                <img src="../../img/client/people.png" alt="icone-login" width="24" height="26" class="me-1">
                <span class="fw-bold">
                  <?php 
                    $id_cliente = $_SESSION['id_cliente'];
                    $pin_projeto = $_SESSION['pin_projeto'];
                    echo "Olá $id_cliente, projeto: $pin_projeto";
                  ?>
                </span>
              </a>
            </header>

            <!-- <div class="section justify-content-between align-content-between">
              <div class="group-btn justify-content-between align-content-between" role="group" aria-label="Basic checkbox toggle button group">
                          
                <button type="button" class="btn btn-primary btn-frame">Cronograma da obra</button>
                <button type="button" class="btn btn-primary btn-frame">Central de mensagem (13)</button>
                <button type="button" class="btn btn-primary btn-frame">Arquivos</button>
                
              </div>
            </div> -->
            <!-- orçamentos -->
            <div class="list-budgets">
              <div class="row">
                <div class="col-xl-4 col-sm-6">
                  <div class="card m-2 card-frame" onclick="window.location='../../html/client/empreiteira.html';">
                    <div class="card-header"><img src="../../img/client/emprenteira.png" alt="" width="34" height="34">
                    </div>
                    <div class="card-body text-primary">
                      <h5 class="card-title text-light">Emprenteira</h5>
                      <p class="card-text text-white">Escolha sua empreiteira de preferencia para o desenvolvimento do
                        seu projeto. </p>
                    </div>
                  </div>
                </div>

                <div class="col-xl-4 col-sm-6">
                  <div class="card m-2 card-frame" onclick="window.location='../../html/client/iluminacao.html';">
                    <div class="card-header"><img src="../../img/client/iluminacao.png" alt="" width="34" height="34">
                    </div>
                    <div class="card-body text-primary">
                      <h5 class="card-title text-light">Iluminação</h5>
                      <p class="card-text text-white">Escolha sua empreiteira de preferencia para o desenvolvimento do
                        seu projeto. </p>
                    </div>
                  </div> <!-- card -->
                </div> <!-- col -->

                <div class="col-xl-4 col-sm-6">
                  <div class="card m-2 card-frame" onclick="window.location='../../html/client/vidracaria.html';">
                    <div class="card-header"><img src="../../img/client/vidracaria.png" alt="" width="34" height="34">
                    </div>
                    <div class="card-body text-primary">
                      <h5 class="card-title text-light">Vidraçaria</h5>
                      <p class="card-text text-white">Escolha sua empreiteira de preferencia para o desenvolvimento do
                        seu projeto. </p>
                    </div>
                  </div>
                </div>

                <div class="col-xl-4 col-sm-6">
                  <div class="card m-2 card-frame" onclick="window.location='../../html/client/marcenaria.html';">
                    <div class="card-header"><img src="../../img/client/marcenaria.png" alt="" width="34" height="34">
                    </div>
                    <div class="card-body text-primary">
                      <h5 class="card-title text-light">Marcenaria</h5>
                      <p class="card-text text-white">Escolha sua empreiteira de preferencia para o desenvolvimento do
                        seu projeto. </p>
                    </div>
                  </div> <!-- card -->
                </div> <!-- col -->

                <div class="col-xl-4 col-sm-6">
                  <div class="card m-2 card-frame" onclick="window.location='../../html/client/ar_cond.html';">
                    <div class="card-header"><img src="../../img/client/ar.png" alt="" width="34" height="34"></div>
                    <div class="card-body text-primary">
                      <h5 class="card-title text-light">Ar-condicionado</h5>
                      <p class="card-text text-white">Escolha sua empreiteira de preferencia para o desenvolvimento do
                        seu projeto. </p>
                    </div>
                  </div>
                </div>

                <div class="col-xl-4 col-sm-6">
                  <div class="card m-2 card-frame" onclick="window.location='../../html/client/marmoraria.html';">
                    <div class="card-header"><img src="../../img/client/marmoraria.png" alt="" width="34" height="34">
                    </div>
                    <div class="card-body text-primary">
                      <h5 class="card-title text-light">Marmoraria</h5>
                      <p class="card-text text-white">Escolha sua empreiteira de preferencia para o desenvolvimento do
                        seu projeto. </p>
                    </div>
                  </div> <!-- card -->
                </div> <!-- col -->

                <div class="col-xl-4 col-sm-6">
                  <div class="card m-2 card-frame" onclick="window.location='../../html/client/revestimento.html';">
                    <div class="card-header"><img src="../../img/client/revestimento.png" alt="" width="34" height="34">
                    </div>
                    <div class="card-body text-primary">
                      <h5 class="card-title text-light">Revestimento</h5>
                      <p class="card-text text-white">Escolha sua empreiteira de preferencia para o desenvolvimento do
                        seu projeto. </p>
                    </div>
                  </div>
                </div>

                <!-- modal: nota fiscal-->
                <div class="modal fade modal-lg" id="modalNotaFiscal" tabindex="-1" aria-hidden="true">
                  <?php
                    include("../connect.php");
                    $query_dados = "SELECT * FROM notaFiscal WHERE pin_projeto = '$pin_projeto'";

                    $query_row = $sql->query($query_dados);
                    if($query_row->num_rows > 0){
                      while($row = $query_row->fetch_assoc()){
                        $cod_notaFiscal  = $row['cod_notaFiscal'];
                        $pin_projeto     = $row['pin_projeto']; 
                        $nome_arquivo    = $row['nome_arquivo'];
                        $caminho_arquivo = $row['caminho_arquivo'];
                        $obs_arquivo     = $row['observacao'];
                        $data_publicacao = $row['data_publicacao'];
                      }
                    } else{
                      echo "Os dados nao foram encontrados";
                    }
                  ?>
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-title text-white" id="exampleModalLabel">Nota fiscal</h1>
                        <button type="button" class="btn-close bg-light" data-bs-dismiss="modal"
                          aria-label="Close"></button>
                      </div>
                      <div class="modal-body m-3">
                        <div class="list-group w-auto h-auto">
                          <div href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3 mt-2"
                            aria-current="true">
                            <img src="../../img/client/pdf.png" alt="twbs" width="30" height="30"
                              class="flex-shrink-0 ms-2 mt-2">
                            <div class="d-flex gap-2 w-100 justify-content-between">
                              <div class="modal-notas--info">
                                <h6 class="mb-0"><span><?=$nome_arquivo?></span></h6>
                                <p class="mb-0 opacity-75"><span><?=$obs_arquivo?></span></p>
                                <p><a href="<?=$caminho_arquivo?>" download class="">Download do PDF</a></p>
                              </div>
                              <small class="opacity-50 text-nowrap"><label for="">Data da publicação:</label>
                                <span><?=$data_publicacao?></span></small>
                            </div>
                          </div>

                          <div href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3 mt-2"
                            aria-current="true">
                            <img src="../../img/client/pdf.png" alt="twbs" width="30" height="30"
                              class="flex-shrink-0 ms-2 mt-2">
                            <div class="d-flex gap-2 w-100 justify-content-between">
                              <div class="modal-notas--info">
                                <h6 class="mb-0"><?=$nome_arquivo?></h6>
                                <p class="mb-0 opacity-75"><span><?=$obs_arquivo?></span></p>
                                <p><a href="<?=$caminho_arquivo?>" download class="">Download do PDF</a></p>
                              </div>
                              <small class="opacity-50 text-nowrap"><label for="">Data da publicação:</label>
                                <span><?=$data_publicacao?></span></small>
                            </div>
                          </div>

                          <div href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3 mt-2"
                            aria-current="true">
                            <img src="../../img/client/pdf.png" alt="twbs" width="30" height="30"
                              class="flex-shrink-0 ms-2 mt-2">
                            <div class="d-flex gap-2 w-100 justify-content-between">
                              <div class="modal-notas--info">
                                <h6 class="mb-0"><?=$nome_arquivo?></h6>
                                <p class="mb-0 opacity-75"><span><?=$obs_arquivo?></span>.</p>
                                <p><a href="<?=$caminho_arquivo?>" download class="">Download do PDF</a></p>
                              </div>
                              <small class="opacity-50 text-nowrap"><label for="">Data da publicação:</label>
                                <span><?=$data_publicacao?></span></small>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="modal-footer">

                      </div>
                    </div>
                  </div>
                </div>


                <!-- modal: controle financeiro -->
                <div class="modal fade modal-lg" id="modalCtlFinanceiro" data-bs-backdrop="static"
                  data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalArquivos" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-title text-white" id="modalCtlFinanceiroLabel">Controle financeiro</h1>
                        <button type="button" class="btn-close bg-white" data-bs-dismiss="modal"
                          aria-label="Close"></button>
                      </div>

                      <div class="modal-body mt-3 me-5">
                        <form action="" method="post">
                          <div class="row g-3">
                            <div class="form-floating col-lg-6">
                              <select class="form-select" id="selecao_servico">
                                <option selected></option>
                                <?php
                                include('../connect.php');
                                $query = "SELECT * FROM servicos";
                                $result = $sql->query($query);

                                // Gera as opções dinamicamente
                                if($result->num_rows > 0){
                                  while($row = $result->fetch_assoc()){
                                    $id_servico = $row["id_servico"];
                                    $servico = $row["servico"];
                                    echo "<option value='$id_servico'>$servico</option>";
                                  }
                                }else{
                                  echo "deu errado";
                                }
                                ?>
                              </select>
                              <label for="selecao_servico">Escolha o serviço</label>
                            </div>

                            <div class="form-floating col-lg-6">
                              <input type="date" class="form-control" name="data_servico">
                              <label for="data_servico">Data</label>
                            </div>

                            <div class="form-floating col-lg-6">
                              <input type="text" class="form-control" name="valor_servico" placeholder="00.00">
                              <label for="valor_servico">Valor</label>
                            </div>

                            <div class="form-floating col-lg-6">
                              <input type="file" class="form-control" name="anexo_servico">
                              <label for="anexo_servico">Anexo</label>
                            </div>
                          </div>
                        </form>

                        <!-- receita x despesas -->
                        <div class="container">
                          <div class="row mt-5">
                            <button type="submit" name="receita_servico" class="col info p-1 receita">Receita</button>

                            <button type="submit" name="despesa_servico" class="col info despesa">Despesa</button>
                          </div>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary btn-enviar"
                          data-bs-dismiss="modal">Enviar</button>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- modal: arquivos -->
                <div class="modal fade modal-lg" id="modalArquivos" tabindex="-1" aria-hidden="true">
                <?php
                  include("../connect.php");
                  $query_dados = "SELECT * FROM arquivos WHERE pin_projeto = '$pin_projeto'";

                  $query_row = $sql->query($query_dados);
                  if($query_row->num_rows > 0){
                    while($row = $query_row->fetch_assoc()){
                      $cod_arquivo     = $row['cod_arquivo'];
                      $pin_projeto     = $row['pin_projeto']; 
                      $nome_arquivo    = $row['nome_arquivo'];
                      $caminho_arquivo = $row['caminho_arquivo'];
                      $obs_arquivo     = $row['observacao'];
                      $data_publicacao = $row['data_publicacao'];
                    }
                  } else{
                    echo "Os dados nao foram encontrados";
                  }
                  ?>
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-title text-white" id="exampleModalLabel">Arquivos</h1>
                        <button type="button" class="btn-close bg-light" data-bs-dismiss="modal"
                          aria-label="Close"></button>
                      </div>
                      <div class="modal-body m-3">
                        <div class="list-group w-auto h-auto">
                          <div href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3 mt-2"
                            aria-current="true">
                            <img src="../../img/client/png.png" alt="twbs" width="30" height="30"
                              class="flex-shrink-0 ms-2 mt-2">
                            <div class="d-flex gap-2 w-100 justify-content-between">
                              <div class="modal-notas--info">
                                <h6 class="mb-0"><span><?=$nome_arquivo?></span></h6>
                                <p class="mb-0 opacity-75"><span><?=$obs_arquivo?></span></p>
                                <p><a href="<?=$caminho_arquivo?>" download class="">Download</a></p>
                              </div>
                              <small class="opacity-50 text-nowrap"><label for="">Data da publicação:</label>
                                <span><?=$data_publicacao?></span></small>
                            </div>
                          </div>

                          <div href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3 mt-2"
                            aria-current="true">
                            <img src="../../img/client/png.png" alt="twbs" width="30" height="30"
                              class="flex-shrink-0 ms-2 mt-2">
                            <div class="d-flex gap-2 w-100 justify-content-between">
                              <div class="modal-notas--info">
                                <h6 class="mb-0"><?=$nome_arquivo?></h6>
                                <p class="mb-0 opacity-75"><span><?=$obs_arquivo?></span></p>
                                <p><a href="<?=$caminho_arquivo?>" download class="">Download</a></p>
                              </div>
                              <small class="opacity-50 text-nowrap"><label for="">Data da publicação:</label>
                                <span><?=$data_publicacao?></span></small>
                            </div>
                          </div>

                          <div href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3 mt-2"
                            aria-current="true">
                            <img src="../../img/client/png.png" alt="twbs" width="30" height="30"
                              class="flex-shrink-0 ms-2 mt-2">
                            <div class="d-flex gap-2 w-100 justify-content-between">
                              <div class="modal-notas--info">
                                <h6 class="mb-0"><?=$nome_arquivo?></h6>
                                <p class="mb-0 opacity-75"><span><?=$obs_arquivo?></span>.</p>
                                <p><a href="<?=$caminho_arquivo?>" download class="">Download</a></p>
                              </div>
                              <small class="opacity-50 text-nowrap"><label for="">Data da publicação:</label>
                                <span><?=$data_publicacao?></span></small>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div> <!-- main -->
          </div>

        </div> <!-- row -->
      </div>
    </div>
  </div>

  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>
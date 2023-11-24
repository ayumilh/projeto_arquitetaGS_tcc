<!doctype html>
<html lang="en">

<head>
  <title>Lançar controle financeiro</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  <div class="container">
    <main class="row g-5">
      <h4>Lançar orçamentos</h4>
      <form enctype="multipart/form-data" action="../model/lancar-orcamento.php" method="post" class="col">
        <div class="row g-3">
          <div class="form-floating col-lg-6">
            <input type="text" class="form-control" name="pin_projeto" placeholder="Pin do projeto">
            <label for="pin_projeto">Pin do projeto</label>
          </div>
          
          <div class="form-floating col-lg-6">
            <select class="form-select" name="selecao_servico">
              <option selected></option>
              <?php
                include('../../../config/connect.php');
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
            <input type="text" class="form-control" name="nome_empresa">
            <label for="valor_servico">Nome da empresa:</label>
          </div>
        
          <div class="form-floating col-lg-6">
            <input type="file" class="form-control" name="anexo">
            <label for="anexo_servico">Anexo</label>
          </div>
        </div>

        <hr class="my-4">
          <button class="w-100 btn btn-primary btn-lg" type="submit" name="enviar">Enviar</button>
      </form>
    </main>
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
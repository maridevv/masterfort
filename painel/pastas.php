<?php
include "verifica.php";
$infoSistema->editar();
$editaConfig = $infoSistema->rsDados(1);
?>
<!DOCTYPE html>
<html dir="ltr" lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Adriano Monteiro">
  <link rel="icon" type="image/png" sizes="16x16" href="assets/images/hoogli_logo.svg">
  <title>Painel Hoogli - Configurações Gerais</title>
  <link href="dist/css/style.min.css" rel="stylesheet">
  <style>
    table {
      width: 100%;
      border-collapse: collapse;
      margin: 20px 0;
    }

    th,
    td {
      padding: 10px;
      text-align: left;
    }

    th {
      background-color: #8ecf82;
      color: white;
    }

    tr:nth-child(even) {
      background-color: #fdf7f7;
    }

    tr:nth-child(odd) {
      background-color: #ffffff;
    }

    tr:hover {
      background-color: #c5e9bf;
    }

    select {
      width: 100px;
      padding: 5px;
    }

    input[type="checkbox"] {
      width: 20px;
      height: 20px;
    }

    input[type="submit"] {
      background-color: #4CAF50;
      /* Cor de fundo */
      color: white;
      /* Cor do texto */
      border: 2px solid #4CAF50;
      /* Borda */
      padding: 5px 20px;
      /* Preenchimento interno */
      border-radius: 5px;
      /* Borda arredondada */
      cursor: pointer;
      /* Cursor do mouse */
    }

    /* Estilo quando o mouse passa por cima do botão */
    input[type="submit"]:hover {
      background-color: #45a049;
    }
  </style>
</head>

<body>
  <div class="preloader">
    <div class="lds-ripple">
      <div class="lds-pos"></div>
      <div class="lds-pos"></div>
    </div>
  </div>
  <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
    <?php include "header.php"; ?>
    <?php include "inc-menu-lateral.php"; ?>
    <div class="page-wrapper">
      <div class="page-breadcrumb">
        <div class="row">
          <div class="col-7 align-self-center">
            <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Linkagem</h4>
            <div class="d-flex align-items-center">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb m-0 p-0">
                  <li class="breadcrumb-item"><a href="." class="text-muted">Home</a></li>
                  <li class="breadcrumb-item text-muted active" aria-current="page"><a href="configuracoes.php"
                      class="text-muted">Linkagem</a></li>
                </ol>
              </nav>
            </div>
          </div>
          <div class="col-5 align-self-center">
          </div>
        </div>
      </div>
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-body">
                <?php
                if (isset($_GET['dados'])) {
                  $dados_recebidos = $_GET['dados'];
                  echo $dados_recebidos;
                }
                ?>
                <?php
                $dir = '../linkagem';
                echo '<table>';
                echo '<tr>';
                echo '<th>Selecionar</th>';
                echo '<th>Arquivo</th>';
                echo '<th>Dropdown</th>';
                echo '</tr>';
                if (is_dir($dir)) {
                  $files = scandir($dir);

                  echo '<form method="post" action="../teste.php">';
                  foreach ($files as $file) {
                    if ($file != '.' && $file != '..' && pathinfo($file, PATHINFO_EXTENSION) == 'html') {
                      echo '<tr>';
                      echo '<td><input type="checkbox" name="arquivos_selecionados[' . $file . ']" value="' . $file . '"></td>';
                      echo '<td>' . $file . '</td>';
                      echo '<td><select name="arquivos_dropdown[' . $file . ']">';
                      echo '<option value="sim">Sim</option>';
                      echo '<option value="nao">Não</option>';
                      echo '</select></td>';
                      echo '</tr>';
                    }
                  }
                  echo '</table>';
                  echo '<input type="submit" value="Enviar">';
                  echo '</form>';

                } else {
                  echo "O diretório não existe.";
                }
                ?>
                </table>
              </div>
            </div>
          </div>
        </div>

      </div>
      <?php include "footer.php"; ?>
    </div>
  </div>
  <script src="assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="assets/libs/popper.js/dist/umd/popper.min.js"></script>
  <script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="dist/js/app-style-switcher.js"></script>
  <script src="dist/js/feather.min.js"></script>
  <script src="assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
  <script src="assets/extra-libs/sparkline/sparkline.js"></script>
  <script src="dist/js/sidebarmenu.js"></script>
  <script src="dist/js/custom.min.js"></script>
  <script src="vendor/ckeditor/ckeditor.js"></script>
</body>

</html>
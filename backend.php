<?php
function gerarAddDinamico($campos, $nome, $dados_bd)
{
  $html = '<?php include "verifica.php";' . PHP_EOL;
  $html .= '$' . $nome . '->add();' . PHP_EOL;
  $html .= '?>' . PHP_EOL;
  $html .= '<!DOCTYPE html>' . PHP_EOL;
  $html .= '<html dir="ltr" lang="pt-br">' . PHP_EOL;
  $html .= '<head>' . PHP_EOL;
  $html .= '<meta charset="utf-8">' . PHP_EOL;
  $html .= '<meta http-equiv="X-UA-Compatible" content="IE=edge">' . PHP_EOL;
  $html .= '<meta name="viewport" content="width=device-width, initial-scale=1">' . PHP_EOL;
  $html .= '<meta name="description" content="">' . PHP_EOL;
  $html .= '<meta name="author" content="Alexandre Pereira">' . PHP_EOL;
  $html .= '<link rel="icon" type="image/png" sizes="16x16" href="assets/images/hoogli_logo.svg">' . PHP_EOL;
  $html .= '<title>Painel Hoogli - Adicionar ' . $nome . '</title>' . PHP_EOL;
  $html .= '<link href="dist/css/style.min.css" rel="stylesheet">' . PHP_EOL;
  $html .= '</head>' . PHP_EOL;
  $html .= '<body>' . PHP_EOL;
  $html .= '<div class="preloader">' . PHP_EOL;
  $html .= '<div class="lds-ripple">' . PHP_EOL;
  $html .= '<div class="lds-pos"></div>' . PHP_EOL;
  $html .= '<div class="lds-pos"></div>' . PHP_EOL;
  $html .= '</div>' . PHP_EOL;
  $html .= '</div>' . PHP_EOL;
  $html .= '<div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"' . PHP_EOL;
  $html .= 'data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">' . PHP_EOL;
  $html .= '<?php include "header.php"; ?>' . PHP_EOL;
  $html .= '<?php include "inc-menu-lateral.php"; ?>' . PHP_EOL;
  $html .= '<div class="page-wrapper">' . PHP_EOL;
  $html .= '<div class="page-breadcrumb">' . PHP_EOL;
  $html .= '<div class="row">' . PHP_EOL;
  $html .= '<div class="col-7 align-self-center">' . PHP_EOL;
  $html .= '<h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Adicionar ' . $nome . '</h4>' . PHP_EOL;
  $html .= '<div class="d-flex align-items-center">' . PHP_EOL;
  $html .= '<nav aria-label="breadcrumb">' . PHP_EOL;
  $html .= '<ol class="breadcrumb m-0 p-0">' . PHP_EOL;
  $html .= '<li class="breadcrumb-item"><a href="." class="text-muted">Home</a></li>' . PHP_EOL;
  $html .= '<li class="breadcrumb-item text-muted active" aria-current="page"><a href="' . $nome . '.php" class="text-muted">' . $nome . '</a></li>' . PHP_EOL;
  $html .= '</ol>' . PHP_EOL;
  $html .= '</nav>' . PHP_EOL;
  $html .= '</div>' . PHP_EOL;
  $html .= '</div>' . PHP_EOL;
  $html .= '<div class="col-5 align-self-center">' . PHP_EOL;
  $html .= '</div>' . PHP_EOL;
  $html .= '</div>' . PHP_EOL;
  $html .= '</div>' . PHP_EOL;
  $html .= '<div class="container-fluid">' . PHP_EOL;
  $html .= '<div class="row">' . PHP_EOL;
  $html .= '<div class="col-12">' . PHP_EOL;
  $html .= '<div class="card">' . PHP_EOL;
  $html .= '<div class="card-body">' . PHP_EOL;
  $html .= '<form method="POST" enctype="multipart/form-data">' . PHP_EOL;
  $html .= '<div class="form-body">' . PHP_EOL;

  $grupoCampos = array(); // Array multidimensional

  foreach ($campos as $campo) {
    if (preg_match('/section_(\d+)_(.*?)_(\d+)/', $campo, $matches)) {
      $inicio = $matches[1];
      $nomeCampo = $matches[2];
      $chaveGrupo = "section_{$inicio}";

      if (!isset($grupoCampos[$chaveGrupo])) {
        $grupoCampos[$chaveGrupo] = array(); // Inicializa um subarray se a chave ainda não existir
      }

      $grupoCampos[$chaveGrupo][] = $campo; // Adiciona o campo ao subarray correspondente
    }
  }


  foreach ($grupoCampos as $chaveGrupo => $camposGrupo) {
    $text = $chaveGrupo;
    $text = str_replace('_', ' ', $text);
    $text = ucwords($text);
    $html .= '<br>' . PHP_EOL;
    $html .= '<hr>' . PHP_EOL;
    $html .= '<h4 class="card-title">' . $text . '</h4>' . PHP_EOL;
    $html .= '<hr>' . PHP_EOL;
    $html .= '<br>' . PHP_EOL;
    $html .= '<div class="form-group row">' . PHP_EOL;
    foreach ($camposGrupo as $campo) {
      $pesquisa = $campo;
      $campoName = substr($campo, 1);
      $nomeCampo = str_replace('_', ' ', $campoName);
      $primeiroCampo = reset($campos);
      if ($campo !== $primeiroCampo && preg_match('/^(.+)_\d+$/', $campo, $matches)) {
        $campo = $matches[1];
        $parts = explode('_', $campo);

        if (count($parts) >= 3) {
          $partsAfterSecondUnderscore = array_slice($parts, 2);
          $campo = implode('_', $partsAfterSecondUnderscore);
        }
      }
      if ($campo == 'link') {
        $html .= '<div class="col-md-4 col-sm-12">' . PHP_EOL;
        $html .= ' <label class="col-form-label">' . $nomeCampo . '</label>' . PHP_EOL;
        $html .= '  <input class="form-control" type="text" name="' . $campoName . '"/>' . PHP_EOL;
        $html .= '    </div>' . PHP_EOL;
      } elseif ($campo == 'link_alt') {
        $html .= '<div class="col-md-4 col-sm-12">' . PHP_EOL;
        $html .= ' <label class="col-form-label">' . $nomeCampo . '</label>' . PHP_EOL;
        $html .= '<input class="form-control" type="text" name="' . $campoName . '" />' . PHP_EOL;
        $html .= '</div>' . PHP_EOL;
      } elseif ($campo == 'textarea') {
        $html .= '<div class="col-md-12 col-sm-12">' . PHP_EOL;
        $html .= ' <label class="col-form-label">' . $nomeCampo . '</label>' . PHP_EOL;
        $html .= ' <textarea name="' . $campoName . '"class="ckeditor" id="ckeditor" cols="30"
        rows="10"></textarea>' . PHP_EOL;
        $html .= '</div>' . PHP_EOL;
      } elseif ($campo == 'link_conteudo') {
        $html .= '<div class="col-md-4 col-sm-12">' . PHP_EOL;
        $html .= '   <label class="col-form-label">' . $nomeCampo . '</label>' . PHP_EOL;
        $html .= '<input class="form-control" type="text" name="' . $campoName . '" />' . PHP_EOL;
        $html .= '  </div>' . PHP_EOL;
      } elseif ($campo == 'img') {
        if (array_key_exists($pesquisa, $dados_bd)) {
          $valorEncontrado = $dados_bd[$pesquisa];
          $informacoesImagem = getimagesize('./img/' . $valorEncontrado);
          if ($informacoesImagem !== false) {
            $largura = $informacoesImagem[0];
            $altura = $informacoesImagem[1];
          }
        }
        $html .= ' <div class="col-md-6 col-sm-12">' . PHP_EOL;
        $html .= '<label class="col-form-label">' . $nomeCampo . ' (' . $largura . 'x' . $altura . 'px) </label>' . PHP_EOL;
        $html .= ' <input class="form-control" type="file" name="' . $campoName . '" />' . PHP_EOL;
        $html .= ' </div>' . PHP_EOL;
      } elseif ($campo == 'image_alt') {
        $html .= '<div class="col-md-6 col-sm-12">' . PHP_EOL;
        $html .= '<label class="col-form-label">' . $nomeCampo . '</label>' . PHP_EOL;
        $html .= '<input class="form-control" type="text" name="' . $campoName . '" />' . PHP_EOL;
        $html .= '</div>' . PHP_EOL;
      } else {
        $html .= ' <div class="col-md-12 col-sm-12">' . PHP_EOL;
        $html .= '<label class="col-form-label">' . $nomeCampo . '</label>' . PHP_EOL;
        $html .= ' <input class="form-control" type="text" name="' . $campoName . '" />' . PHP_EOL;
        $html .= '  </div>' . PHP_EOL;
      }
    }
    $html .= '</div>' . PHP_EOL;
  }

  $html .= '<div class="clearfix"></div>' . PHP_EOL;
  $html .= ' <div class="form-group row">' . PHP_EOL;
  $html .= '<div class="col-md-12">' . PHP_EOL;
  $html .= ' <h5>Informaçåo SEO</h5>' . PHP_EOL;
  $html .= ' </div>' . PHP_EOL;
  $html .= ' </div>' . PHP_EOL;
  foreach ($campos as $campo) {
    $campoName = substr($campo, 1);
    if ($campo == '$meta_description') {
      $html .= '<div class="form-group row">' . PHP_EOL;
      $html .= '<div class="col-md-12">' . PHP_EOL;
      $html .= '<label class="col-form-label">' . ucfirst($campo) . '</label>' . PHP_EOL;
      $html .= '<textarea name="' . $campoName . '" class="form-control" id="" cols="30" rows="10"></textarea>' . PHP_EOL;
      $html .= '</div>' . PHP_EOL;
      $html .= '</div>' . PHP_EOL;
    } elseif ($campo == '$meta_keywords') {
      $html .= '<div class="form-group row">' . PHP_EOL;
      $html .= '<div class="col-md-12">' . PHP_EOL;
      $html .= '<label class="col-form-label">' . ucfirst($campo) . '</label>' . PHP_EOL;
      $html .= '<input class="form-control" type="text" name="' . $campoName . '" />' . PHP_EOL;
      $html .= '</div>' . PHP_EOL;
      $html .= '</div>' . PHP_EOL;
    } elseif ($campo == '$meta_title') {
      $html .= '<div class="form-group row">' . PHP_EOL;
      $html .= '<div class="col-md-12">' . PHP_EOL;
      $html .= '<label class="col-form-label">' . ucfirst($campo) . '</label>' . PHP_EOL;
      $html .= '<input class="form-control" type="text" name="' . $campoName . '" />' . PHP_EOL;
      $html .= '</div>' . PHP_EOL;
      $html .= '</div>' . PHP_EOL;
    }
  }

  $html .= '</div>' . PHP_EOL;
  $html .= '</div>' . PHP_EOL;
  $html .= '<div class="form-actions">' . PHP_EOL;
  $html .= '<div class="text-right">' . PHP_EOL;
  $html .= '<button type="submit" class="btn btn-info">Salvar</button>' . PHP_EOL;
  $html .= '<button type="reset" class="btn btn-dark">Resetar</button>' . PHP_EOL;
  $html .= '</div>' . PHP_EOL;
  $html .= '</div>' . PHP_EOL;
  $className = ucfirst($nome);
  $html .= '<input type="hidden" name="acao" value="add' . $className . '">' . PHP_EOL;
  $html .= '</form>' . PHP_EOL;
  $html .= '</div>' . PHP_EOL;
  $html .= '</div>' . PHP_EOL;
  $html .= '</div>' . PHP_EOL;
  $html .= '</div>' . PHP_EOL;
  $html .= '<?php include "footer.php"; ?>' . PHP_EOL;
  $html .= '</div>' . PHP_EOL;
  $html .= '</div>' . PHP_EOL;
  $html .= '<script src="assets/libs/jquery/dist/jquery.min.js"></script>' . PHP_EOL;
  $html .= '<script src="assets/libs/popper.js/dist/umd/popper.min.js"></script>' . PHP_EOL;
  $html .= '<script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>' . PHP_EOL;
  $html .= '<script src="dist/js/app-style-switcher.js"></script>' . PHP_EOL;
  $html .= '<script src="dist/js/feather.min.js"></script>' . PHP_EOL;
  $html .= '<script src="assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>' . PHP_EOL;
  $html .= '<script src="assets/extra-libs/sparkline/sparkline.js"></script>' . PHP_EOL;
  $html .= '<script src="dist/js/sidebarmenu.js"></script>' . PHP_EOL;
  $html .= '<script src="dist/js/custom.min.js"></script>' . PHP_EOL;
  $html .= '<script src="vendor/ckeditor/ckeditor.js"></script>' . PHP_EOL;
  $html .= '</body>' . PHP_EOL;
  $html .= '</html>' . PHP_EOL;

  return $html;
}
function gerarEditDinamico($campos, $nome, $dados_bd)
{

  $className = ucfirst($nome);
  $dit = '$edita' . $className;
  $html = '<?php include "verifica.php";' . PHP_EOL;
  $html .= '$id = "";' . PHP_EOL;
  $html .= 'if(isset($_GET[\'id\'])){' . PHP_EOL;
  $html .= 'if(empty($_GET[\'id\'])){' . PHP_EOL;
  $html .= 'header("Location: ' . $nome . '.php");' . PHP_EOL;
  $html .= '}else{' . PHP_EOL;
  $html .= '$id = $_GET[\'id\'];' . PHP_EOL;
  $html .= '    }' . PHP_EOL;
  $html .= '}' . PHP_EOL;
  $html .= '$' . $nome . '->editar();' . PHP_EOL;
  $html .= '$edita' . $className . ' = $' . $nome . '->rsDados($id);' . PHP_EOL;
  //$html .= '$' . $nome . '->add();' . PHP_EOL;
  $html .= '?>' . PHP_EOL;
  $html .= '<!DOCTYPE html>' . PHP_EOL;
  $html .= '<html dir="ltr" lang="pt-br">' . PHP_EOL;
  $html .= '<head>' . PHP_EOL;

  $html .= '<meta charset="utf-8">' . PHP_EOL;
  $html .= '<meta http-equiv="X-UA-Compatible" content="IE=edge">' . PHP_EOL;
  $html .= '<meta name="viewport" content="width=device-width, initial-scale=1">' . PHP_EOL;
  $html .= '<meta name="description" content="">' . PHP_EOL;
  $html .= '<meta name="author" content="Alexandre Pereira">' . PHP_EOL;
  $html .= '<link rel="icon" type="image/png" sizes="16x16" href="assets/images/hoogli_logo.svg">' . PHP_EOL;
  $html .= '<title>Painel Hoogli - Adicionar ' . $nome . '</title>' . PHP_EOL;
  $html .= '<link href="dist/css/style.min.css" rel="stylesheet">' . PHP_EOL;
  $html .= '</head>' . PHP_EOL;
  $html .= '<body>' . PHP_EOL;
  $html .= '<div class="preloader">' . PHP_EOL;
  $html .= '<div class="lds-ripple">' . PHP_EOL;
  $html .= '<div class="lds-pos"></div>' . PHP_EOL;
  $html .= '<div class="lds-pos"></div>' . PHP_EOL;
  $html .= '</div>' . PHP_EOL;
  $html .= '</div>' . PHP_EOL;
  $html .= '<div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"' . PHP_EOL;
  $html .= 'data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">' . PHP_EOL;
  $html .= '<?php include "header.php"; ?>' . PHP_EOL;
  $html .= '<?php include "inc-menu-lateral.php"; ?>' . PHP_EOL;
  $html .= '<div class="page-wrapper">' . PHP_EOL;
  $html .= '<div class="page-breadcrumb">' . PHP_EOL;
  $html .= '<div class="row">' . PHP_EOL;
  $html .= '<div class="col-7 align-self-center">' . PHP_EOL;
  $html .= '<h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Adicionar ' . $nome . '</h4>' . PHP_EOL;
  $html .= '<div class="d-flex align-items-center">' . PHP_EOL;
  $html .= '<nav aria-label="breadcrumb">' . PHP_EOL;
  $html .= '<ol class="breadcrumb m-0 p-0">' . PHP_EOL;
  $html .= '<li class="breadcrumb-item"><a href="." class="text-muted">Home</a></li>' . PHP_EOL;
  $html .= '<li class="breadcrumb-item text-muted active" aria-current="page"><a href="' . $nome . '.php" class="text-muted">' . $nome . '</a></li>' . PHP_EOL;
  $html .= '</ol>' . PHP_EOL;
  $html .= '</nav>' . PHP_EOL;
  $html .= '</div>' . PHP_EOL;
  $html .= '</div>' . PHP_EOL;
  $html .= '<div class="col-5 align-self-center">' . PHP_EOL;
  $html .= '</div>' . PHP_EOL;
  $html .= '</div>' . PHP_EOL;
  $html .= '</div>' . PHP_EOL;
  $html .= '<div class="container-fluid">' . PHP_EOL;
  $html .= '<div class="row">' . PHP_EOL;
  $html .= '<div class="col-12">' . PHP_EOL;
  $html .= '<div class="card">' . PHP_EOL;
  $html .= '<div class="card-body">' . PHP_EOL;
  $html .= '<form method="POST" enctype="multipart/form-data">' . PHP_EOL;
  $html .= '<div class="form-body">' . PHP_EOL;
  $grupoCampos = array(); // Array multidimensional
  foreach ($campos as $campo) {
    if (preg_match('/section_(\d+)_(.*?)_(\d+)/', $campo, $matches)) {
      $inicio = $matches[1];
      $nomeCampo = $matches[2];
      $chaveGrupo = "section_{$inicio}";

      if (!isset($grupoCampos[$chaveGrupo])) {
        $grupoCampos[$chaveGrupo] = array(); // Inicializa um subarray se a chave ainda não existir
      }

      $grupoCampos[$chaveGrupo][] = $campo; // Adiciona o campo ao subarray correspondente
    }
  }

  foreach ($grupoCampos as $chaveGrupo => $camposGrupo) {
    $text = $chaveGrupo;
    $text = str_replace('_', ' ', $text);
    $text = ucwords($text);
    $html .= '<br>' . PHP_EOL;
    $html .= '<hr>' . PHP_EOL;
    $html .= '<h4 class="card-title">' . $text . '</h4>' . PHP_EOL;
    $html .= '<hr>' . PHP_EOL;
    $html .= '<br>' . PHP_EOL;
    $html .= '<div class="form-group row">' . PHP_EOL;
    foreach ($camposGrupo as $campo) {
      $pesquisa = $campo;
      $campoName = substr($campo, 1);
      $nomeCampo = str_replace('_', ' ', $campoName);
      $primeiroCampo = reset($campos);
      if ($campo !== $primeiroCampo && preg_match('/^(.+)_\d+$/', $campo, $matches)) {
        $campo = $matches[1];
        $parts = explode('_', $campo);

        if (count($parts) >= 3) {
          $partsAfterSecondUnderscore = array_slice($parts, 2);
          $campo = implode('_', $partsAfterSecondUnderscore);
        }



        if ($campo == 'link') {
          $html .= '<div class="col-md-4">' . PHP_EOL;
          $html .= '<div class="form-group">' . PHP_EOL;
          $html .= ' <label class="mr-sm-2" for="">' . $nomeCampo . '</label>' . PHP_EOL;
          $html .= '<input type="text" class="form-control" name="' . $campoName . '" value="<?php if(isset(' . $dit . '->' . $campoName . ') && !empty(' . $dit . '->' . $campoName . ')){ echo ' . $dit . '->' . $campoName . ';}?>" >' . PHP_EOL;
          $html .= '</div>' . PHP_EOL;
          $html .= '</div>' . PHP_EOL;
        } elseif ($campo == 'textarea') {
          $html .= ' <div class="col-md-12">' . PHP_EOL;
          $html .= ' <div class="form-group">' . PHP_EOL;
          $html .= ' <label class="col-form-label" for="">' . $nomeCampo . '</label>' . PHP_EOL;
          $html .= '<textarea name="' . $campoName . '" class="ckeditor" id="ckeditor" cols="30"
          rows="10"><?php if(isset(' . $dit . '->' . $campoName . ') && !empty(' . $dit . '->' . $campoName . ')){ echo ' . $dit . '->' . $campoName . ';}?></textarea>' . PHP_EOL;
          $html .= '</div>' . PHP_EOL;
          $html .= ' </div>' . PHP_EOL;
        } elseif ($campo == 'link_alt') {
          $html .= ' <div class="col-md-4">' . PHP_EOL;
          $html .= ' <div class="form-group">' . PHP_EOL;
          $html .= ' <label class="mr-sm-2" for="">' . $nomeCampo . '</label>' . PHP_EOL;
          $html .= '<input type="text" class="form-control" name="' . $campoName . '" value="<?php if(isset(' . $dit . '->' . $campoName . ') && !empty(' . $dit . '->' . $campoName . ')){ echo ' . $dit . '->' . $campoName . ';}?>" >' . PHP_EOL;
          $html .= '</div>' . PHP_EOL;
          $html .= ' </div>' . PHP_EOL;
        } elseif ($campo == 'link_conteudo') {
          $html .= '<div class="col-md-4">' . PHP_EOL;
          $html .= '<div class="form-group">' . PHP_EOL;
          $html .= '<label class="mr-sm-2" for="">' . $nomeCampo . '</label>' . PHP_EOL;
          $html .= ' <input type="text" class="form-control" name="' . $campoName . '" value="<?php if(isset(' . $dit . '->' . $campoName . ') && !empty(' . $dit . '->' . $campoName . ')){ echo ' . $dit . '->' . $campoName . ';}?>" >' . PHP_EOL;
          $html .= ' </div>' . PHP_EOL;
          $html .= ' </div>' . PHP_EOL;
        } elseif ($campo == 'img') {
          if (array_key_exists($pesquisa, $dados_bd)) {
            $valorEncontrado = $dados_bd[$pesquisa];
            $informacoesImagem = getimagesize('./img/' . $valorEncontrado);
            if ($informacoesImagem !== false) {
              $largura = $informacoesImagem[0];
              $altura = $informacoesImagem[1];
            }
          }
          $html .= ' <div class="col-md-4">' . PHP_EOL;
          $html .= '<div class="form-group">' . PHP_EOL;
          $html .= '<label class="mr-sm-2" for="">' . $nomeCampo . ' (' . $largura . 'x' . $altura . 'px)</label>' . PHP_EOL;
          $html .= '   <input type="file" class="form-control" name="' . $campoName . '" >' . PHP_EOL;
          $html .= '</div>' . PHP_EOL;
          $html .= ' </div>' . PHP_EOL;
          $html .= ' <?php if(isset(' . $dit . '->' . $campoName . ') && !empty(' . $dit . '->' . $campoName . ')){ ?>' . PHP_EOL;
          $html .= '<div class="col-md-2">' . PHP_EOL;
          $html .= ' <div class="form-group">' . PHP_EOL;
          $html .= ' <img src="../img/<?php echo ' . $dit . '->' . $campoName . ';?>" width="100" alt="">' . PHP_EOL;
          $html .= '</div>' . PHP_EOL;
          $html .= '</div>' . PHP_EOL;
          $html .= '<?php }?> ' . PHP_EOL;
        } elseif ($campo == 'image_alt') {
          $html .= '   <div class="col-md-6">' . PHP_EOL;
          $html .= '  <div class="form-group">' . PHP_EOL;
          $html .= '  <label class="mr-sm-2" for="">' . $nomeCampo . '</label>' . PHP_EOL;
          $html .= ' <input type="text" class="form-control" name="' . $campoName . '" value="<?php if(isset(' . $dit . '->' . $campoName . ') && !empty(' . $dit . '->' . $campoName . ')){ echo ' . $dit . '->' . $campoName . ';}?>" >' . PHP_EOL;
          $html .= '</div>' . PHP_EOL;
          $html .= ' </div>' . PHP_EOL;
        } else {
          $html .= '  <div class="col-md-12">' . PHP_EOL;
          $html .= '  <div class="form-group">' . PHP_EOL;
          $html .= ' <label class="mr-sm-2" for="">' . $nomeCampo . '</label>' . PHP_EOL;
          $html .= '  <input type="text" class="form-control" name="' . $campoName . '" value="<?php if(isset(' . $dit . '->' . $campoName . ') && !empty(' . $dit . '->' . $campoName . ')){ echo ' . $dit . '->' . $campoName . ';}?>" >' . PHP_EOL;
          $html .= '   </div>' . PHP_EOL;
          $html .= '  </div>' . PHP_EOL;
        }
      }
    }
    $html .= '</div>' . PHP_EOL;
  }
  $html .= '<div class="clearfix"></div>' . PHP_EOL;
  $html .= ' <div class="form-group row">' . PHP_EOL;
  $html .= '<div class="col-md-12">' . PHP_EOL;
  $html .= ' <h5>Informaçåo SEO</h5>' . PHP_EOL;
  $html .= ' </div>' . PHP_EOL;
  $html .= ' </div>' . PHP_EOL;
  foreach ($campos as $campo) {
    $campoName = substr($campo, 1);
    if ($campo == '$meta_description') {
      $html .= '<div class="form-group row">' . PHP_EOL;
      $html .= '<div class="col-md-12">' . PHP_EOL;
      $html .= '<div class="form-group">' . PHP_EOL;
      $html .= ' <label class="mr-sm-2" for="">Meta Description</label>' . PHP_EOL;
      $html .= ' <textarea name="' . $campoName . '" class="form-control" id="ckeditor" cols="30" rows="4"><?php if(isset(' . $dit . '->' . $campoName . ') && !empty(' . $dit . '->' . $campoName . ')){ echo ' . $dit . '->' . $campoName . ';}?></textarea>' . PHP_EOL;
      $html .= '</div>' . PHP_EOL;
      $html .= '</div> ' . PHP_EOL;
      $html .= '</div>' . PHP_EOL;
    } elseif ($campo == '$meta_keywords') {
      $html .= '<div class="form-group row">' . PHP_EOL;
      $html .= '<div class="col-md-12">' . PHP_EOL;
      $html .= '<div class="form-group">' . PHP_EOL;
      $html .= '<label class="mr-sm-2" for="">Meta Keywords</label>' . PHP_EOL;
      $html .= ' <textarea name="' . $campoName . '" class="form-control" id="ckeditor" cols="30" rows="4"><?php if(isset(' . $dit . '->' . $campoName . ') && !empty(' . $dit . '->' . $campoName . ')){ echo ' . $dit . '->' . $campoName . ';}?></textarea>' . PHP_EOL;
      $html .= '</div>' . PHP_EOL;
      $html .= '  </div>' . PHP_EOL;
      $html .= '</div>' . PHP_EOL;
    } elseif ($campo == '$meta_title') {
      $html .= '<div class="form-group row">' . PHP_EOL;
      $html .= ' <div class="col-md-12">' . PHP_EOL;
      $html .= '<div class="form-group">' . PHP_EOL;
      $html .= '<label class="mr-sm-2" for="">Meta Title</label>' . PHP_EOL;
      $html .= '<textarea name="' . $campoName . '" class="form-control" id="ckeditor" cols="30" rows="4"><?php if(isset(' . $dit . '->' . $campoName . ') && !empty(' . $dit . '->' . $campoName . ')){ echo ' . $dit . '->' . $campoName . ';}?></textarea>' . PHP_EOL;
      $html .= '</div>' . PHP_EOL;
      $html .= '</div>' . PHP_EOL;
      $html .= '</div>' . PHP_EOL;
    }
  }

  $html .= '</div>' . PHP_EOL;
  $html .= '<div class="form-actions">' . PHP_EOL;
  $html .= '<div class="text-right">' . PHP_EOL;
  $html .= '<button type="submit" class="btn btn-info">Salvar</button>' . PHP_EOL;
  $html .= '<button type="reset" class="btn btn-dark">Resetar</button>' . PHP_EOL;
  $html .= '</div>' . PHP_EOL;
  $html .= '</div>' . PHP_EOL;


  $html .= '<input type="hidden" name="acao" value="edita' . $className . '">' . PHP_EOL;
  $html .= '<input type="hidden" name="id" value="<?php if(isset(' . $dit . '->id) && !empty(' . $dit . '->id)){ echo ' . $dit . '->id;}?>">' . PHP_EOL;
  foreach ($campos as $campo) {
    if (strpos($campo, 'img') !== false) {
      $campoName = substr($campo, 1);
      $html .= '<input type="hidden" name="' . $campoName . '_Atual" value="<?php if(isset(' . $dit . '->' . $campoName . ') && !empty(' . $dit . '->' . $campoName . ')){ echo ' . $dit . '->' . $campoName . ';}?>">' . PHP_EOL;
    }
  }
  $html .= '</form>' . PHP_EOL;
  $html .= '</div>' . PHP_EOL;
  $html .= '</div>' . PHP_EOL;
  $html .= '</div>' . PHP_EOL;
  $html .= '</div>' . PHP_EOL;
  $html .= '</div>' . PHP_EOL;
  $html .= '</div>' . PHP_EOL;
  $html .= '<?php include "footer.php"; ?>' . PHP_EOL;
  $html .= '</div>' . PHP_EOL;
  $html .= '</div>' . PHP_EOL;
  $html .= '<script src="assets/libs/jquery/dist/jquery.min.js"></script>' . PHP_EOL;
  $html .= '<script src="assets/libs/popper.js/dist/umd/popper.min.js"></script>' . PHP_EOL;
  $html .= '<script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>' . PHP_EOL;
  $html .= '<script src="dist/js/app-style-switcher.js"></script>' . PHP_EOL;
  $html .= '<script src="dist/js/feather.min.js"></script>' . PHP_EOL;
  $html .= '<script src="assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>' . PHP_EOL;
  $html .= '<script src="assets/extra-libs/sparkline/sparkline.js"></script>' . PHP_EOL;
  $html .= '<script src="dist/js/sidebarmenu.js"></script>' . PHP_EOL;
  $html .= '<script src="dist/js/custom.min.js"></script>' . PHP_EOL;
  $html .= '<script src="vendor/ckeditor/ckeditor.js"></script>' . PHP_EOL;
  $html .= '</body>' . PHP_EOL;
  $html .= '</html>' . PHP_EOL;

  return $html;
}


function principal($nome, $nomes_aleatorios)
{
  $className = ucfirst($nome);
  $html = '<?php include "verifica.php";' . PHP_EOL;
  $html .= '$puxa' . $className . ' = $' . $nome . '->rsDados();' . PHP_EOL;
  $html .= '$' . $nome . '->excluir();' . PHP_EOL;
  $html .= '?>' . PHP_EOL;
  $html .= '<!DOCTYPE html>' . PHP_EOL;
  $html .= '<html dir="ltr" lang="pt-br">' . PHP_EOL;
  $html .= '<head>' . PHP_EOL;
  $html .= '    <meta charset="utf-8">' . PHP_EOL;
  $html .= '    <meta http-equiv="X-UA-Compatible" content="IE=edge">' . PHP_EOL;
  $html .= '    <meta name="viewport" content="width=device-width, initial-scale=1">' . PHP_EOL;
  $html .= '    <meta name="description" content="">' . PHP_EOL;
  $html .= '    <meta name="author" content="Adriano Monteiro">' . PHP_EOL;
  $html .= '    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/hoogli_logo.svg">' . PHP_EOL;
  $html .= '    <title>Painel Hoogli - ' . ucfirst($nome) . '</title>' . PHP_EOL;
  $html .= '    <link href="dist/css/style.min.css" rel="stylesheet">' . PHP_EOL;
  $html .= '</head>' . PHP_EOL;
  $html .= '<body>' . PHP_EOL;
  $html .= '    <div class="preloader">' . PHP_EOL;
  $html .= '        <div class="lds-ripple">' . PHP_EOL;
  $html .= '            <div class="lds-pos"></div>' . PHP_EOL;
  $html .= '            <div class="lds-pos"></div>' . PHP_EOL;
  $html .= '        </div>' . PHP_EOL;
  $html .= '    </div>' . PHP_EOL;
  $html .= '    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"' . PHP_EOL;
  $html .= '        data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">' . PHP_EOL;
  $html .= '        <?php include "header.php"; ?>' . PHP_EOL;
  $html .= '        <?php include "inc-menu-lateral.php"; ?>' . PHP_EOL;
  $html .= '        <div class="page-wrapper">' . PHP_EOL;
  $html .= '            <div class="page-breadcrumb">' . PHP_EOL;
  $html .= '                <div class="row">' . PHP_EOL;
  $html .= '                    <div class="col-7 align-self-center">' . PHP_EOL;
  $html .= '                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">' . ucfirst($nome) . '</h4>' . PHP_EOL;
  $html .= '                        <div class="d-flex align-items-center">' . PHP_EOL;
  $html .= '                            <nav aria-label="breadcrumb">' . PHP_EOL;
  $html .= '                                <ol class="breadcrumb m-0 p-0">' . PHP_EOL;
  $html .= '                                    <li class="breadcrumb-item"><a href="." class="text-muted">Home</a></li>' . PHP_EOL;
  $html .= '                                </ol>' . PHP_EOL;
  $html .= '                            </nav>' . PHP_EOL;
  $html .= '                        </div>' . PHP_EOL;
  $html .= '                    </div>' . PHP_EOL;
  $html .= '                    <div class="col-5 align-self-center">' . PHP_EOL;
  $html .= '                    </div>' . PHP_EOL;
  $html .= '                </div>' . PHP_EOL;
  $html .= '            </div>' . PHP_EOL;
  $html .= '            <div class="container-fluid">' . PHP_EOL;
  $html .= '                <div class="row">' . PHP_EOL;
  $html .= '                    <div class="col-12">' . PHP_EOL;
  $html .= '                        <div class="card">' . PHP_EOL;
  $html .= '                            <div class="card-body">' . PHP_EOL;
  $html .= '                                <div class="table-responsive">' . PHP_EOL;
  $html .= '                                    <table id="zero_config" class="table table-striped table-bordered ">' . PHP_EOL;
  $html .= '                                        <thead>' . PHP_EOL;
  $html .= '                                            <tr>' . PHP_EOL;
  $html .= '                                            <th>Imagem</th>' . PHP_EOL;
  $html .= '                                            <th>Título</th>' . PHP_EOL;
  $html .= '                                            <th>Breve</th>' . PHP_EOL;
  $html .= '                                            <th>Opções</th>' . PHP_EOL;
  $html .= '                                            </tr>' . PHP_EOL;
  $html .= '                                        </thead>' . PHP_EOL;
  $html .= '                                        <tbody>' . PHP_EOL;
  $html .= '                                            <?php ' . PHP_EOL;
  $html .= '                                            if(count($puxa' . $className . ') > 0){' . PHP_EOL;
  $html .= '                                            foreach($puxa' . $className . ' as $' . $nome . '){?>' . PHP_EOL;
  $html .= '                                            <tr>' . PHP_EOL;
  $imagemEncontrada = '';
  foreach ($nomes_aleatorios as $valor) {
    if (strpos($valor, 'img') !== false) {
      $imagemEncontrada = $valor;
      break;
    }
  }
  $html .= '                                            <td><img src="../img/<?php echo $' . $nome . '->' . substr($imagemEncontrada, 1) . '; ?>"width="50"></td>' . PHP_EOL;

  $primeirosConteudos = array();

  $count = 0;
  foreach ($nomes_aleatorios as $conteudo) {
    if (strpos($conteudo, 'conteudo') !== false) {
      $primeirosConteudos[] = $conteudo;
      $count++;

      if ($count >= 2) {
        break;
      }
    }
  }

  $html .= '                                            <td><?php echo $' . $nome . '->' . substr($primeirosConteudos[0], 1) . '; ?></td>' . PHP_EOL;
  $html .= '                                            <td><?php echo  $' . $nome . '->' . substr($primeirosConteudos[1], 1) . '; ?></td>' . PHP_EOL;

  $html .= '                                              <td>' . PHP_EOL;
  $html .= '                                            <a href="editar-' . $nome . '.php?id=<?php echo $' . $nome . '->id; ?>" class="btn btn-success btn-circle">' . PHP_EOL;
  $html .= '                                             <i class="fas fa-pencil-alt"></i></a>' . PHP_EOL;
  $html .= '                                            <a href="javascript:;" class="btn btn-warning btn-circle" onclick="excluir(\'' . $nome . '.php\', <?php echo $' . $nome . '->id; ?>, \'excluir' . $className . '\')">' . PHP_EOL;
  $html .= '                                            <i class="fa fa-times"></i></a>' . PHP_EOL;
  $html .= '                                            </td>' . PHP_EOL;
  $html .= '                                            </td>' . PHP_EOL;
  $html .= '                                            <?php } }?>' . PHP_EOL;
  $html .= '                                        </tbody>' . PHP_EOL;
  $html .= '                                        <tfoot>' . PHP_EOL;
  $html .= '                                            <tr>' . PHP_EOL;
  $html .= '                                            <th>Imagem</th>' . PHP_EOL;
  $html .= '                                            <th>Título</th>' . PHP_EOL;
  $html .= '                                            <th>Breve</th>' . PHP_EOL;
  $html .= '                                             <th>Opções</th>' . PHP_EOL;
  $html .= '                                            <tr>' . PHP_EOL;
  $html .= '                                            </tr>' . PHP_EOL;
  $html .= '                                        </tfoot>' . PHP_EOL;
  $html .= '                                    </table>' . PHP_EOL;
  $html .= '                                </div>' . PHP_EOL;
  $html .= '                            </div>' . PHP_EOL;
  $html .= '                        </div>' . PHP_EOL;
  $html .= '                    </div>' . PHP_EOL;
  $html .= '                </div>' . PHP_EOL;
  $html .= '            </div>' . PHP_EOL;
  $html .= '        <?php include "footer.php"; ?>' . PHP_EOL;
  $html .= '        </div>' . PHP_EOL;
  $html .= '    </div>' . PHP_EOL;
  $html .= '    <script src="assets/libs/jquery/dist/jquery.min.js"></script>' . PHP_EOL;
  $html .= '    <script src="assets/libs/popper.js/dist/umd/popper.min.js"></script>' . PHP_EOL;
  $html .= '    <script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>' . PHP_EOL;
  $html .= '    <script src="dist/js/app-style-switcher.js"></script>' . PHP_EOL;
  $html .= '    <script src="dist/js/feather.min.js"></script>' . PHP_EOL;
  $html .= '    <script src="assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>' . PHP_EOL;
  $html .= '    <script src="assets/extra-libs/sparkline/sparkline.js"></script>' . PHP_EOL;
  $html .= '    <script src="dist/js/sidebarmenu.js"></script>' . PHP_EOL;
  $html .= '    <script src="dist/js/custom.min.js"></script>' . PHP_EOL;
  $html .= '    <script src="assets/extra-libs/datatables.net/js/jquery.dataTables.min.js"></script>' . PHP_EOL;
  $html .= '    <script src="dist/js/pages/datatable/datatable-basic.init.js"></script>' . PHP_EOL;
  $html .= '    <script src="dist/js/scripts.js"></script>' . PHP_EOL;
  $html .= '</body>' . PHP_EOL;
  $html .= '</html>' . PHP_EOL;

  return $html;
}

function includ($nome, $desc)
{
  if ($desc == 'sim') {
    $className = ucfirst($nome);
    $html = '<?php include "includes.php";' . PHP_EOL;
    $html .= '$id = \'\';' . PHP_EOL;
    $html .= 'if (isset($_GET[\'id\'])) {' . PHP_EOL;
    $html .= 'if (empty($_GET[\'id\'])) {' . PHP_EOL;
    $html .= 'header(\'Location: /\');' . PHP_EOL;
    $html .= ' } else {' . PHP_EOL;
    $html .= ' $id = $_GET[\'id\'];' . PHP_EOL;
    $html .= '}' . PHP_EOL;
    $html .= ' } else {' . PHP_EOL;
    $html .= ' header(\'Location: /\');' . PHP_EOL;
    $html .= '   }' . PHP_EOL;
    $html .= 'include "Class/' . $className . '.class.php";' . PHP_EOL;
    $html .= '$puxa' . $className . ' = ' . $className . '::getInstance(Conexao::getInstance());' . PHP_EOL;
    $html .= '$' . $nome . ' = $puxa' . $className . '->rsDados(\'\', \'\', \'\', $id, \'\');' . PHP_EOL;
    $html .= '?>' . PHP_EOL;
  } else {
    $className = ucfirst($nome);
    $html = '<?php include "includes.php";' . PHP_EOL;
    $html .= 'include "Class/' . $nome . '.class.php";' . PHP_EOL;
    $html .= '$puxa' . $className . ' = ' . $className . '::getInstance(Conexao::getInstance());' . PHP_EOL;
    $html .= '$' . $nome . ' = $puxa' . $className . '->rsDados(1);' . PHP_EOL;
    $html .= '?>' . PHP_EOL;
  }
  return $html;
}

function head($nome)
{
  $html = '<head>' . PHP_EOL;
  $html .= ' <?php include \'head.php\'; ?>' . PHP_EOL;
  $html .= '  <meta name="theme-color" content="#91d8f7">
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1"> ' . PHP_EOL;
  $html .= '<title>' . PHP_EOL;
  $html .= '<?php if (isset($' . $nome . '->meta_title) && !empty($' . $nome . '->meta_title)) {' . PHP_EOL;
  $html .= 'echo $' . $nome . '->meta_title;' . PHP_EOL;
  $html .= '} ?>' . PHP_EOL;
  $html .= '</title>' . PHP_EOL;
  $html .= '<meta name="description" content="<?php if (isset($' . $nome . '->meta_description) && !empty($' . $nome . '->meta_description)) {
    echo $' . $nome . '->meta_description;
} ?>" />' . PHP_EOL;
  $html .= '<meta name="keywords" content="<?php if (isset($' . $nome . '->meta_keywords) && !empty($' . $nome . '->meta_keywords)) {
    echo $' . $nome . '->meta_keywords;
} ?>">' . PHP_EOL;
  $html .= '<meta name="twitter:card" content="<?php if (isset($' . $nome . '->meta_title) && !empty($' . $nome . '->meta_title)) {
    echo $' . $nome . '->meta_title;
} ?>" />' . PHP_EOL;
  $html .= '<meta name="twitter:site" content="<?php echo SITE_URL; ?>" />
  <meta name="twitter:creator" content="Hoogli" />
  <meta property="og:title" content="<?php if (isset($' . $nome . '->meta_title) && !empty($' . $nome . '->meta_title)) {
      echo $' . $nome . '->meta_title;
  } ?>" />' . PHP_EOL;
  $html .= '<meta property="og:type" content="website" />
  <meta property="og:url" content="<?php echo SITE_URL; ?>" />
  <meta property="og:image:type" content="image/png" />
  <meta property="og:image" content="<?php echo SITE_URL; ?>/img/<?php echo $infoSistema->favicon; ?>" />' . PHP_EOL;
  $html .= '<meta property="og:image:width" content="400" />
  <meta property="og:image:height" content="300" />
  <meta property="og:description" content="<?php if (isset($' . $nome . '->meta_description) && !empty($' . $nome . '->meta_description)) {
      echo $' . $nome . '->meta_description;
  } ?>" />' . PHP_EOL;
  $html .= '<meta property="og:determiner" content="A" />
  <meta property="og:locale" content="pt_BR" />
  <meta property="og:site_name" content="<?php echo $infoSistema->nome_empresa ?>" />' . PHP_EOL;
  $html .= '<meta name="author" content="Hoogli">
  <link rel="shortcut icon" href="<?php echo SITE_URL;?>/img/<?php echo $infoSistema->favicon;?>">
  <link rel="icon" href="<?php echo SITE_URL;?>/img/<?php echo $infoSistema->favicon;?>">' . PHP_EOL;
  $html .= '</head>' . PHP_EOL;
  return $html;
}
function body($nome)
{
  $html = '<?php include \'header.php\'; ?>' . PHP_EOL;
  $html .= '    <style>
  .image_single_home {
      background-image: url(<?php echo SITE_URL . \'/img/\' . $' . $nome . '->section_1_img_3 ?>);
      background-position-y: center;
      background-size: cover;
  }

  @media (max-width:600px) {
      .image_single_home {
          background-image: url(<?php echo SITE_URL . \'/img/\' . $' . $nome . '->section_1_img_4 ?>);
          background-position-y: center;
          background-size: cover;
      }
  }
</style>' . PHP_EOL;
  $html .= ' <?php include "footer.php" ?>' . PHP_EOL;
  $html .= '<?php include "scripts.php" ?>' . PHP_EOL;
  return $html;
}

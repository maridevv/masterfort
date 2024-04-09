<?php include "verifica.php";
$id = "";
if (isset($_GET['id'])) {
  if (empty($_GET['id'])) {
    header("Location: home.php");
  } else {
    $id = $_GET['id'];
  }
}
$home->editar();
$editaHome = $home->rsDados($id);
?>
<!DOCTYPE html>
<html dir="ltr" lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Alexandre Pereira">
  <link rel="icon" type="image/png" sizes="16x16" href="assets/images/hoogli_logo.svg">
  <title>Painel Hoogli - Adicionar home</title>
  <link href="dist/css/style.min.css" rel="stylesheet">
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
            <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Adicionar home</h4>
            <div class="d-flex align-items-center">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb m-0 p-0">
                  <li class="breadcrumb-item"><a href="." class="text-muted">Home</a></li>
                  <li class="breadcrumb-item text-muted active" aria-current="page"><a href="home.php"
                      class="text-muted">home</a></li>
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
                <form method="POST" enctype="multipart/form-data">
                  <div class="form-body">
                    <br>
                    <hr>
                    <h4 class="card-title">Seção Banner</h4>
                    <hr>
                    <br>
                    <div class="form-group row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="mr-sm-2" for="">subtítulo</label>
                          <input type="text" class="form-control" name="section_1_conteudo_1" value="<?php if (isset($editaHome->section_1_conteudo_1) && !empty($editaHome->section_1_conteudo_1)) {
                            echo $editaHome->section_1_conteudo_1;
                          } ?>">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="mr-sm-2" for="">título</label>
                          <input type="text" class="form-control" name="section_1_conteudo_2" value="<?php if (isset($editaHome->section_1_conteudo_2) && !empty($editaHome->section_1_conteudo_2)) {
                            echo $editaHome->section_1_conteudo_2;
                          } ?>">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="mr-sm-2" for="">breve</label>
                          <input type="text" class="form-control" name="section_1_conteudo_3" value="<?php if (isset($editaHome->section_1_conteudo_3) && !empty($editaHome->section_1_conteudo_3)) {
                            echo $editaHome->section_1_conteudo_3;
                          } ?>">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="mr-sm-2" for="">Nome botão</label>
                          <input type="text" class="form-control" name="section_1_link_6" value="<?php if (isset($editaHome->section_1_link_6) && !empty($editaHome->section_1_link_6)) {
                            echo $editaHome->section_1_link_6;
                          } ?>">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="mr-sm-2" for="">Link Botão</label>
                          <input type="text" class="form-control" name="section_1_link_conteudo_6" value="<?php if (isset($editaHome->section_1_link_conteudo_6) && !empty($editaHome->section_1_link_conteudo_6)) {
                            echo $editaHome->section_1_link_conteudo_6;
                          } ?>">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="mr-sm-2" for="">Âncora</label>
                          <input type="text" class="form-control" name="section_1_link_alt_6" value="<?php if (isset($editaHome->section_1_link_alt_6) && !empty($editaHome->section_1_link_alt_6)) {
                            echo $editaHome->section_1_link_alt_6;
                          } ?>">
                        </div>
                      </div>

                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="mr-sm-2" for="">Imagem(698x350px)</label>
                          <input type="file" class="form-control" name="section_1_img_7">
                        </div>
                      </div>
                      <?php if (isset($editaHome->section_1_img_7) && !empty($editaHome->section_1_img_7)) { ?>
                        <div class="col-md-2">
                          <div class="form-group">
                            <img src="../img/<?php echo $editaHome->section_1_img_7; ?>" width="100" alt="">
                          </div>
                        </div>
                      <?php } ?>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="mr-sm-2" for="">Legenda</label>
                          <input type="text" class="form-control" name="section_1_image_alt_7" value="<?php if (isset($editaHome->section_1_image_alt_7) && !empty($editaHome->section_1_image_alt_7)) {
                            echo $editaHome->section_1_image_alt_7;
                          } ?>">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="mr-sm-2" for="">Imagem(1245x685 px)</label>
                          <input type="file" class="form-control" name="section_10_conteudo_70">
                        </div>
                      </div>
                      <?php if (isset($editaHome->section_10_conteudo_70) && !empty($editaHome->section_10_conteudo_70)) { ?>
                        <div class="col-md-2">
                          <div class="form-group">
                            <img src="../img/<?php echo $editaHome->section_10_conteudo_70; ?>" width="100" alt="">
                          </div>
                        </div>
                      <?php } ?>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="mr-sm-2" for="">Legenda</label>
                          <input type="text" class="form-control" name="section_10_conteudo_72" value="<?php if (isset($editaHome->section_10_conteudo_72) && !empty($editaHome->section_10_conteudo_72)) {
                            echo $editaHome->section_10_conteudo_72;
                          } ?>">
                        </div>
                      </div>
                    </div>
                    <br>
                    <hr>
                    <h4 class="card-title">Seção de apresentação dos produtos <small>(Para adicionar uma telhas dirija-se ao menu lateral)</small></h4>
                    <hr>
                    <br>
                    <div class="form-group row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="mr-sm-2" for="">título</label>
                          <input type="text" class="form-control" name="section_2_conteudo_8" value="<?php if (isset($editaHome->section_2_conteudo_8) && !empty($editaHome->section_2_conteudo_8)) {
                            echo $editaHome->section_2_conteudo_8;
                          } ?>">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="mr-sm-2" for="">Nome botão</label>
                          <input type="text" class="form-control" name="section_2_link_9" value="<?php if (isset($editaHome->section_2_link_9) && !empty($editaHome->section_2_link_9)) {
                            echo $editaHome->section_2_link_9;
                          } ?>">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="mr-sm-2" for="">Link Botão</label>
                          <input type="text" class="form-control" name="section_2_link_conteudo_9" value="<?php if (isset($editaHome->section_2_link_conteudo_9) && !empty($editaHome->section_2_link_conteudo_9)) {
                            echo $editaHome->section_2_link_conteudo_9;
                          } ?>">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="mr-sm-2" for="">Âncora</label>
                          <input type="text" class="form-control" name="section_2_link_alt_9" value="<?php if (isset($editaHome->section_2_link_alt_9) && !empty($editaHome->section_2_link_alt_9)) {
                            echo $editaHome->section_2_link_alt_9;
                          } ?>">
                        </div>
                      </div>
                    </div>
                    <br>
                    <hr>
                    <h4 class="card-title">Seção de detalhamento de produtos</h4>
                    <hr>
                    <br>
                    <div class="form-group row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="mr-sm-2" for="">título</label>
                          <input type="text" class="form-control" name="section_3_conteudo_10" value="<?php if (isset($editaHome->section_3_conteudo_10) && !empty($editaHome->section_3_conteudo_10)) {
                            echo $editaHome->section_3_conteudo_10;
                          } ?>">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="mr-sm-2" for="">breve</label>
                          <input type="text" class="form-control" name="section_3_conteudo_11" value="<?php if (isset($editaHome->section_3_conteudo_11) && !empty($editaHome->section_3_conteudo_11)) {
                            echo $editaHome->section_3_conteudo_11;
                          } ?>">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="mr-sm-2" for="">breve</label>
                          <input type="text" class="form-control" name="section_3_conteudo_12" value="<?php if (isset($editaHome->section_3_conteudo_12) && !empty($editaHome->section_3_conteudo_12)) {
                            echo $editaHome->section_3_conteudo_12;
                          } ?>">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="mr-sm-2" for="">Imagem (1500x639px)</label>
                          <input type="file" class="form-control" name="section_3_img_13">
                        </div>
                      </div>
                      <?php if (isset($editaHome->section_3_img_13) && !empty($editaHome->section_3_img_13)) { ?>
                        <div class="col-md-2">
                          <div class="form-group">
                            <img src="../img/<?php echo $editaHome->section_3_img_13; ?>" width="100" alt="">
                          </div>
                        </div>
                      <?php } ?>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="mr-sm-2" for="">Legenda</label>
                          <input type="text" class="form-control" name="section_3_image_alt_13" value="<?php if (isset($editaHome->section_3_image_alt_13) && !empty($editaHome->section_3_image_alt_13)) {
                            echo $editaHome->section_3_image_alt_13;
                          } ?>">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="mr-sm-2" for="">Descrição do produto 1</label>
                          <input type="text" class="form-control" name="section_3_conteudo_14" value="<?php if (isset($editaHome->section_3_conteudo_14) && !empty($editaHome->section_3_conteudo_14)) {
                            echo $editaHome->section_3_conteudo_14;
                          } ?>">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="mr-sm-2" for="">Descrição do produto 2</label>
                          <input type="text" class="form-control" name="section_3_conteudo_15" value="<?php if (isset($editaHome->section_3_conteudo_15) && !empty($editaHome->section_3_conteudo_15)) {
                            echo $editaHome->section_3_conteudo_15;
                          } ?>">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="mr-sm-2" for="">Descrição do produto 3</label>
                          <input type="text" class="form-control" name="section_3_conteudo_16" value="<?php if (isset($editaHome->section_3_conteudo_16) && !empty($editaHome->section_3_conteudo_16)) {
                            echo $editaHome->section_3_conteudo_16;
                          } ?>">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="mr-sm-2" for="">Descrição do produto 4</label>
                          <input type="text" class="form-control" name="section_3_conteudo_17" value="<?php if (isset($editaHome->section_3_conteudo_17) && !empty($editaHome->section_3_conteudo_17)) {
                            echo $editaHome->section_3_conteudo_17;
                          } ?>">
                        </div>
                      </div>
                    </div>
                    <br>
                    <hr>
                    <h4 class="card-title">Seção do ícones</h4>
                    <hr>
                    <br>
                    <div class="form-group row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="mr-sm-2" for="">Imagem (108x59px)</label>
                          <input type="file" class="form-control" name="section_4_img_18">
                        </div>
                      </div>
                      <?php if (isset($editaHome->section_4_img_18) && !empty($editaHome->section_4_img_18)) { ?>
                        <div class="col-md-2">
                          <div class="form-group">
                            <img src="../img/<?php echo $editaHome->section_4_img_18; ?>" width="100" alt="">
                          </div>
                        </div>
                      <?php } ?>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="mr-sm-2" for="">Legenda</label>
                          <input type="text" class="form-control" name="section_4_image_alt_18" value="<?php if (isset($editaHome->section_4_image_alt_18) && !empty($editaHome->section_4_image_alt_18)) {
                            echo $editaHome->section_4_image_alt_18;
                          } ?>">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="mr-sm-2" for="">título</label>
                          <input type="text" class="form-control" name="section_4_conteudo_19" value="<?php if (isset($editaHome->section_4_conteudo_19) && !empty($editaHome->section_4_conteudo_19)) {
                            echo $editaHome->section_4_conteudo_19;
                          } ?>">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="mr-sm-2" for="">Imagem (108x59px)</label>
                          <input type="file" class="form-control" name="section_4_img_20">
                        </div>
                      </div>
                      <?php if (isset($editaHome->section_4_img_20) && !empty($editaHome->section_4_img_20)) { ?>
                        <div class="col-md-2">
                          <div class="form-group">
                            <img src="../img/<?php echo $editaHome->section_4_img_20; ?>" width="100" alt="">
                          </div>
                        </div>
                      <?php } ?>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="mr-sm-2" for="">Legenda</label>
                          <input type="text" class="form-control" name="section_4_image_alt_20" value="<?php if (isset($editaHome->section_4_image_alt_20) && !empty($editaHome->section_4_image_alt_20)) {
                            echo $editaHome->section_4_image_alt_20;
                          } ?>">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="mr-sm-2" for="">título</label>
                          <input type="text" class="form-control" name="section_4_conteudo_21" value="<?php if (isset($editaHome->section_4_conteudo_21) && !empty($editaHome->section_4_conteudo_21)) {
                            echo $editaHome->section_4_conteudo_21;
                          } ?>">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="mr-sm-2" for="">Imagem (108x59px)</label>
                          <input type="file" class="form-control" name="section_4_img_22">
                        </div>
                      </div>
                      <?php if (isset($editaHome->section_4_img_22) && !empty($editaHome->section_4_img_22)) { ?>
                        <div class="col-md-2">
                          <div class="form-group">
                            <img src="../img/<?php echo $editaHome->section_4_img_22; ?>" width="100" alt="">
                          </div>
                        </div>
                      <?php } ?>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="mr-sm-2" for="">Legenda</label>
                          <input type="text" class="form-control" name="section_4_image_alt_22" value="<?php if (isset($editaHome->section_4_image_alt_22) && !empty($editaHome->section_4_image_alt_22)) {
                            echo $editaHome->section_4_image_alt_22;
                          } ?>">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="mr-sm-2" for="">título</label>
                          <input type="text" class="form-control" name="section_4_conteudo_23" value="<?php if (isset($editaHome->section_4_conteudo_23) && !empty($editaHome->section_4_conteudo_23)) {
                            echo $editaHome->section_4_conteudo_23;
                          } ?>">
                        </div>
                      </div>
                    </div>
                    <br>
                    <hr>
                    <h4 class="card-title">Seção sobre-nós</h4>
                    <hr>
                    <br>
                    <div class="form-group row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="mr-sm-2" for="">Imagem (633x591px)</label>
                          <input type="file" class="form-control" name="section_5_img_24">
                        </div>
                      </div>
                      <?php if (isset($editaHome->section_5_img_24) && !empty($editaHome->section_5_img_24)) { ?>
                        <div class="col-md-2">
                          <div class="form-group">
                            <img src="../img/<?php echo $editaHome->section_5_img_24; ?>" width="100" alt="">
                          </div>
                        </div>
                      <?php } ?>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="mr-sm-2" for="">Legenda</label>
                          <input type="text" class="form-control" name="section_5_image_alt_24" value="<?php if (isset($editaHome->section_5_image_alt_24) && !empty($editaHome->section_5_image_alt_24)) {
                            echo $editaHome->section_5_image_alt_24;
                          } ?>">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="mr-sm-2" for="">título</label>
                          <input type="text" class="form-control" name="section_5_conteudo_25" value="<?php if (isset($editaHome->section_5_conteudo_25) && !empty($editaHome->section_5_conteudo_25)) {
                            echo $editaHome->section_5_conteudo_25;
                          } ?>">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="mr-sm-2" for="">Breve</label>
                          <input type="text" class="form-control" name="section_5_conteudo_26" value="<?php if (isset($editaHome->section_5_conteudo_26) && !empty($editaHome->section_5_conteudo_26)) {
                            echo $editaHome->section_5_conteudo_26;
                          } ?>">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="mr-sm-2" for="">Breve</label>
                          <input type="text" class="form-control" name="section_5_conteudo_27" value="<?php if (isset($editaHome->section_5_conteudo_27) && !empty($editaHome->section_5_conteudo_27)) {
                            echo $editaHome->section_5_conteudo_27;
                          } ?>">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="mr-sm-2" for="">Nome botão</label>
                          <input type="text" class="form-control" name="section_5_link_28" value="<?php if (isset($editaHome->section_5_link_28) && !empty($editaHome->section_5_link_28)) {
                            echo $editaHome->section_5_link_28;
                          } ?>">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="mr-sm-2" for="">Link Botão</label>
                          <input type="text" class="form-control" name="section_5_link_conteudo_28" value="<?php if (isset($editaHome->section_5_link_conteudo_28) && !empty($editaHome->section_5_link_conteudo_28)) {
                            echo $editaHome->section_5_link_conteudo_28;
                          } ?>">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="mr-sm-2" for="">Âncora</label>
                          <input type="text" class="form-control" name="section_5_link_alt_28" value="<?php if (isset($editaHome->section_5_link_alt_28) && !empty($editaHome->section_5_link_alt_28)) {
                            echo $editaHome->section_5_link_alt_28;
                          } ?>">
                        </div>
                      </div>
                      
                    </div>
                    <br>
                    <hr>
                    <h4 class="card-title">Seção CTA</h4>
                    <hr>
                    <br>
                    <div class="form-group row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="mr-sm-2" for="">título</label>
                          <input type="text" class="form-control" name="section_6_conteudo_29" value="<?php if (isset($editaHome->section_6_conteudo_29) && !empty($editaHome->section_6_conteudo_29)) {
                            echo $editaHome->section_6_conteudo_29;
                          } ?>">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="mr-sm-2" for="">Nome botão</label>
                          <input type="text" class="form-control" name="section_6_link_30" value="<?php if (isset($editaHome->section_6_link_30) && !empty($editaHome->section_6_link_30)) {
                            echo $editaHome->section_6_link_30;
                          } ?>">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="mr-sm-2" for="">Link Botão</label>
                          <input type="text" class="form-control" name="section_6_link_conteudo_30" value="<?php if (isset($editaHome->section_6_link_conteudo_30) && !empty($editaHome->section_6_link_conteudo_30)) {
                            echo $editaHome->section_6_link_conteudo_30;
                          } ?>">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="mr-sm-2" for="">Âncora</label>
                          <input type="text" class="form-control" name="section_6_link_alt_30" value="<?php if (isset($editaHome->section_6_link_alt_30) && !empty($editaHome->section_6_link_alt_30)) {
                            echo $editaHome->section_6_link_alt_30;
                          } ?>">
                        </div>
                      </div>
                      
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="mr-sm-2" for="">Imagem (603x326px)</label>
                          <input type="file" class="form-control" name="section_6_img_31">
                        </div>
                      </div>
                      <?php if (isset($editaHome->section_6_img_31) && !empty($editaHome->section_6_img_31)) { ?>
                        <div class="col-md-2">
                          <div class="form-group">
                            <img src="../img/<?php echo $editaHome->section_6_img_31; ?>" width="100" alt="">
                          </div>
                        </div>
                      <?php } ?>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="mr-sm-2" for="">legenda</label>
                          <input type="text" class="form-control" name="section_6_image_alt_31" value="<?php if (isset($editaHome->section_6_image_alt_31) && !empty($editaHome->section_6_image_alt_31)) {
                            echo $editaHome->section_6_image_alt_31;
                          } ?>">
                        </div>
                      </div>
                    </div>
                    <br>
                    <hr>
                    <h4 class="card-title">Seção Depoimentos <small>(Para adicionar um depoimento dirija-se ao menu lateral)</small></h4>
                    <hr>
                    <br>
                    <div class="form-group row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="mr-sm-2" for="">título</label>
                          <input type="text" class="form-control" name="section_7_conteudo_32" value="<?php if (isset($editaHome->section_7_conteudo_32) && !empty($editaHome->section_7_conteudo_32)) {
                            echo $editaHome->section_7_conteudo_32;
                          } ?>">
                        </div>
                      </div>
                    </div>
                    <br>
                    <hr>
                    <h4 class="card-title">Seção FAQ's</h4>
                    <hr>
                    <br>
                    <div class="form-group row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="mr-sm-2" for="">Imagem (2560x1050px)</label>
                          <input type="file" class="form-control" name="section_8_img_33">
                        </div>
                      </div>

                      <?php if (isset($editaHome->section_8_img_33) && !empty($editaHome->section_8_img_33)) { ?>
                        <div class="col-md-2">
                          <div class="form-group">
                            <img src="../img/<?php echo $editaHome->section_8_img_33; ?>" width="100" alt="">
                          </div>
                        </div>
                      <?php } ?>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="mr-sm-2" for="">Legenda</label>
                          <input type="text" class="form-control" name="section_8_image_alt_33" value="<?php if (isset($editaHome->section_8_image_alt_33) && !empty($editaHome->section_8_image_alt_33)) {
                            echo $editaHome->section_8_image_alt_33;
                          } ?>">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="mr-sm-2" for="">título</label>
                          <input type="text" class="form-control" name="section_8_conteudo_34" value="<?php if (isset($editaHome->section_8_conteudo_34) && !empty($editaHome->section_8_conteudo_34)) {
                            echo $editaHome->section_8_conteudo_34;
                          } ?>">
                        </div>
                      </div>

                      <div class="col-md-4">
                        <div class="col-md-12">
                          <div class="form-group">
                            <label class="mr-sm-2" for="">Pergunta</label>
                            <input type="text" class="form-control" name="section_8_conteudo_35" value="<?php if (isset($editaHome->section_8_conteudo_35) && !empty($editaHome->section_8_conteudo_35)) {
                              echo $editaHome->section_8_conteudo_35;
                            } ?>">
                          </div>
                        </div>

                        <div class="col-md-12">
                          <div class="form-group">
                            <label class="mr-sm-2" for="">Resposta</label>
                            <textarea name="section_8_conteudo_37" class="ckeditor" id="ckeditor" cols="30" rows="10"><?php if (isset($editaHome->section_8_conteudo_37) && !empty($editaHome->section_8_conteudo_37)) {
                              echo $editaHome->section_8_conteudo_37;
                            } ?></textarea>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="col-md-12">
                          <div class="form-group">
                            <label class="mr-sm-2" for="">Pergunta</label>
                            <input type="text" class="form-control" name="section_8_conteudo_39" value="<?php if (isset($editaHome->section_8_conteudo_39) && !empty($editaHome->section_8_conteudo_39)) {
                              echo $editaHome->section_8_conteudo_39;
                            } ?>">
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group">
                            <label class="mr-sm-2" for="">Resposta</label>
                            <textarea name="section_8_conteudo_41" class="ckeditor" id="ckeditor" cols="30" rows="10"><?php if (isset($editaHome->section_8_conteudo_41) && !empty($editaHome->section_8_conteudo_41)) {
                              echo $editaHome->section_8_conteudo_41;
                            } ?></textarea>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="col-md-12">
                          <div class="form-group">
                            <label class="mr-sm-2" for="">Pergunta</label>
                            <input type="text" class="form-control" name="section_8_conteudo_43" value="<?php if (isset($editaHome->section_8_conteudo_43) && !empty($editaHome->section_8_conteudo_43)) {
                              echo $editaHome->section_8_conteudo_43;
                            } ?>">
                          </div>
                        </div>

                        <div class="col-md-12">
                          <div class="form-group">
                            <label class="mr-sm-2" for="">Resposta</label>
                            <textarea name="section_8_conteudo_45" class="ckeditor" id="ckeditor" cols="30" rows="10"><?php if (isset($editaHome->section_8_conteudo_45) && !empty($editaHome->section_8_conteudo_45)) {
                              echo $editaHome->section_8_conteudo_45;
                            } ?></textarea>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="col-md-12">
                          <div class="form-group">
                            <label class="mr-sm-2" for="">Pergunta</label>
                            <input type="text" class="form-control" name="section_8_conteudo_47" value="<?php if (isset($editaHome->section_8_conteudo_47) && !empty($editaHome->section_8_conteudo_47)) {
                              echo $editaHome->section_8_conteudo_47;
                            } ?>">

                          </div>
                        </div>

                        <div class="col-md-12">
                          <div class="form-group">
                            <label class="mr-sm-2" for="">Resposta</label>
                            <textarea name="section_8_conteudo_49" class="ckeditor" id="ckeditor" cols="30" rows="10"><?php if (isset($editaHome->section_8_conteudo_49) && !empty($editaHome->section_8_conteudo_49)) {
                              echo $editaHome->section_8_conteudo_49;
                            } ?></textarea>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="col-md-12">
                          <div class="form-group">
                            <label class="mr-sm-2" for="">Pergunta</label>
                            <input type="text" class="form-control" name="section_8_conteudo_51" value="<?php if (isset($editaHome->section_8_conteudo_51) && !empty($editaHome->section_8_conteudo_51)) {
                              echo $editaHome->section_8_conteudo_51;
                            } ?>">
                          </div>
                        </div>

                        <div class="col-md-12">
                          <div class="form-group">
                            <label class="mr-sm-2" for="">Resposta</label>
                            <textarea name="section_8_conteudo_53" class="ckeditor" id="ckeditor" cols="30" rows="10"><?php if (isset($editaHome->section_8_conteudo_53) && !empty($editaHome->section_8_conteudo_53)) {
                              echo $editaHome->section_8_conteudo_53;
                            } ?></textarea>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="col-md-12">
                          <div class="form-group">
                            <label class="mr-sm-2" for="">Pergunta</label>
                            <input type="text" class="form-control" name="section_8_conteudo_55" value="<?php if (isset($editaHome->section_8_conteudo_55) && !empty($editaHome->section_8_conteudo_55)) {
                              echo $editaHome->section_8_conteudo_55;
                            } ?>">
                          </div>
                        </div>

                        <div class="col-md-12">
                          <div class="form-group">
                            <label class="mr-sm-2" for="">Resposta</label>
                            <textarea name="section_8_conteudo_57" class="ckeditor" id="ckeditor" cols="30" rows="10"><?php if (isset($editaHome->section_8_conteudo_57) && !empty($editaHome->section_8_conteudo_57)) {
                              echo $editaHome->section_8_conteudo_57;
                            } ?></textarea>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="mr-sm-2" for="">título</label>
                          <input type="text" class="form-control" name="section_8_conteudo_59" value="<?php if (isset($editaHome->section_8_conteudo_59) && !empty($editaHome->section_8_conteudo_59)) {
                            echo $editaHome->section_8_conteudo_59;
                          } ?>">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="mr-sm-2" for="">Nome botão</label>
                          <input type="text" class="form-control" name="section_8_link_60" value="<?php if (isset($editaHome->section_8_link_60) && !empty($editaHome->section_8_link_60)) {
                            echo $editaHome->section_8_link_60;
                          } ?>">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="mr-sm-2" for="">Link Botão</label>
                          <input type="text" class="form-control" name="section_8_link_conteudo_60" value="<?php if (isset($editaHome->section_8_link_conteudo_60) && !empty($editaHome->section_8_link_conteudo_60)) {
                            echo $editaHome->section_8_link_conteudo_60;
                          } ?>">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="mr-sm-2" for="">Âncora</label>
                          <input type="text" class="form-control" name="section_8_link_alt_60" value="<?php if (isset($editaHome->section_8_link_alt_60) && !empty($editaHome->section_8_link_alt_60)) {
                            echo $editaHome->section_8_link_alt_60;
                          } ?>">
                        </div>
                      </div>
                      
                    </div>
                    <br>
                    <hr>
                    <h4 class="card-title">Seção Blog <small>(Para adicionar um blog dirija-se ao menu lateral)</small></h4>
                    <hr>
                    <br>
                    <div class="form-group row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="mr-sm-2" for="">subtítulo</label>
                          <input type="text" class="form-control" name="section_9_conteudo_61" value="<?php if (isset($editaHome->section_9_conteudo_61) && !empty($editaHome->section_9_conteudo_61)) {
                            echo $editaHome->section_9_conteudo_61;
                          } ?>">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="mr-sm-2" for="">título</label>
                          <input type="text" class="form-control" name="section_9_conteudo_62" value="<?php if (isset($editaHome->section_9_conteudo_62) && !empty($editaHome->section_9_conteudo_62)) {
                            echo $editaHome->section_9_conteudo_62;
                          } ?>">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="mr-sm-2" for="">breve</label>
                          <input type="text" class="form-control" name="section_9_conteudo_63" value="<?php if (isset($editaHome->section_9_conteudo_63) && !empty($editaHome->section_9_conteudo_63)) {
                            echo $editaHome->section_9_conteudo_63;
                          } ?>">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="mr-sm-2" for="">Nome botão</label>
                          <input type="text" class="form-control" name="section_9_link_64" value="<?php if (isset($editaHome->section_9_link_64) && !empty($editaHome->section_9_link_64)) {
                            echo $editaHome->section_9_link_64;
                          } ?>">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="mr-sm-2" for="">Link Botão</label>
                          <input type="text" class="form-control" name="section_9_link_conteudo_64" value="<?php if (isset($editaHome->section_9_link_conteudo_64) && !empty($editaHome->section_9_link_conteudo_64)) {
                            echo $editaHome->section_9_link_conteudo_64;
                          } ?>">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="mr-sm-2" for="">Âncora</label>
                          <input type="text" class="form-control" name="section_9_link_alt_64" value="<?php if (isset($editaHome->section_9_link_alt_64) && !empty($editaHome->section_9_link_alt_64)) {
                            echo $editaHome->section_9_link_alt_64;
                          } ?>">
                        </div>
                      </div>
                      
                    </div>
                    <br>
                    <hr>
                    <h4 class="card-title">Seção das localizações</h4>
                    <hr>
                    <br>
                    <div class="form-group row">
                      <div class="col-md-7">
                        <div class="form-group">
                          <label class="mr-sm-2" for="">Imagem (2560x1134px)</label>
                          <input type="file" class="form-control" name="section_10_img_65">
                        </div>
                      </div>
                      <?php if (isset($editaHome->section_10_img_65) && !empty($editaHome->section_10_img_65)) { ?>
                        <div class="col-md-2">
                          <div class="form-group">
                            <img src="../img/<?php echo $editaHome->section_10_img_65; ?>" width="100" alt="">
                          </div>
                        </div>
                      <?php } ?>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="mr-sm-2" for="">Imagem (29x35px)</label>
                          <input type="file" class="form-control" name="section_10_img_67">
                        </div>
                      </div>
                      <?php if (isset($editaHome->section_10_img_67) && !empty($editaHome->section_10_img_67)) { ?>
                        <div class="col-md-2">
                          <div class="form-group">
                            <img src="../img/<?php echo $editaHome->section_10_img_67; ?>" width="100" alt="">
                          </div>
                        </div>
                      <?php } ?>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="mr-sm-2" for="">Legenda</label>
                          <input type="text" class="form-control" name="section_10_image_alt_67" value="<?php if (isset($editaHome->section_10_image_alt_67) && !empty($editaHome->section_10_image_alt_67)) {
                            echo $editaHome->section_10_image_alt_67;
                          } ?>">
                        </div>
                      </div>

                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="mr-sm-2" for="">Imagem (31x32px)</label>
                          <input type="file" class="form-control" name="section_10_img_69">
                        </div>
                      </div>
                      <?php if (isset($editaHome->section_10_img_69) && !empty($editaHome->section_10_img_69)) { ?>
                        <div class="col-md-2">
                          <div class="form-group">
                            <img src="../img/<?php echo $editaHome->section_10_img_69; ?>" width="100" alt="">
                          </div>
                        </div>
                      <?php } ?>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="mr-sm-2" for="">Legenda</label>
                          <input type="text" class="form-control" name="section_10_image_alt_69" value="<?php if (isset($editaHome->section_10_image_alt_69) && !empty($editaHome->section_10_image_alt_69)) {
                            echo $editaHome->section_10_image_alt_69;
                          } ?>">
                        </div>
                      </div>

                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="mr-sm-2" for="">Imagem (33x27px)</label>
                          <input type="file" class="form-control" name="section_10_img_71">
                        </div>
                      </div>
                      <?php if (isset($editaHome->section_10_img_71) && !empty($editaHome->section_10_img_71)) { ?>
                        <div class="col-md-2">
                          <div class="form-group">
                            <img src="../img/<?php echo $editaHome->section_10_img_71; ?>" width="100" alt="">
                          </div>
                        </div>
                      <?php } ?>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="mr-sm-2" for="">Legenda</label>
                          <input type="text" class="form-control" name="section_10_image_alt_71" value="<?php if (isset($editaHome->section_10_image_alt_71) && !empty($editaHome->section_10_image_alt_71)) {
                            echo $editaHome->section_10_image_alt_71;
                          } ?>">
                        </div>
                      </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="form-group row">
                      <div class="col-md-12">
                        <h5>Informaçåo SEO</h5>
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="mr-sm-2" for="">Meta Title</label>
                          <textarea name="meta_title" class="form-control" id="ckeditor" cols="30" rows="4"><?php if (isset($editaHome->meta_title) && !empty($editaHome->meta_title)) {
                            echo $editaHome->meta_title;
                          } ?></textarea>
                        </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="mr-sm-2" for="">Meta Keywords</label>
                          <textarea name="meta_keywords" class="form-control" id="ckeditor" cols="30" rows="4"><?php if (isset($editaHome->meta_keywords) && !empty($editaHome->meta_keywords)) {
                            echo $editaHome->meta_keywords;
                          } ?></textarea>
                        </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="mr-sm-2" for="">Meta Description</label>
                          <textarea name="meta_description" class="form-control" id="ckeditor" cols="30" rows="4"><?php if (isset($editaHome->meta_description) && !empty($editaHome->meta_description)) {
                            echo $editaHome->meta_description;
                          } ?></textarea>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-actions">
                    <div class="text-right">
                      <button type="submit" class="btn btn-info">Salvar</button>
                      <button type="reset" class="btn btn-dark">Resetar</button>
                    </div>
                  </div>
                  <input type="hidden" name="acao" value="editaHome">
                  <input type="hidden" name="id" value="<?php if (isset($editaHome->id) && !empty($editaHome->id)) {
                    echo $editaHome->id;
                  } ?>">
                  <input type="hidden" name="section_1_img_7_Atual" value="<?php if (isset($editaHome->section_1_img_7) && !empty($editaHome->section_1_img_7)) {
                    echo $editaHome->section_1_img_7;
                  } ?>">
                  <input type="hidden" name="section_3_img_13_Atual" value="<?php if (isset($editaHome->section_3_img_13) && !empty($editaHome->section_3_img_13)) {
                    echo $editaHome->section_3_img_13;
                  } ?>">
                  <input type="hidden" name="section_4_img_18_Atual" value="<?php if (isset($editaHome->section_4_img_18) && !empty($editaHome->section_4_img_18)) {
                    echo $editaHome->section_4_img_18;
                  } ?>">
                  <input type="hidden" name="section_4_img_20_Atual" value="<?php if (isset($editaHome->section_4_img_20) && !empty($editaHome->section_4_img_20)) {
                    echo $editaHome->section_4_img_20;
                  } ?>">
                  <input type="hidden" name="section_4_img_22_Atual" value="<?php if (isset($editaHome->section_4_img_22) && !empty($editaHome->section_4_img_22)) {
                    echo $editaHome->section_4_img_22;
                  } ?>">
                  <input type="hidden" name="section_5_img_24_Atual" value="<?php if (isset($editaHome->section_5_img_24) && !empty($editaHome->section_5_img_24)) {
                    echo $editaHome->section_5_img_24;
                  } ?>">
                  <input type="hidden" name="section_6_img_31_Atual" value="<?php if (isset($editaHome->section_6_img_31) && !empty($editaHome->section_6_img_31)) {
                    echo $editaHome->section_6_img_31;
                  } ?>">
                  <input type="hidden" name="section_8_img_33_Atual" value="<?php if (isset($editaHome->section_8_img_33) && !empty($editaHome->section_8_img_33)) {
                    echo $editaHome->section_8_img_33;
                  } ?>">
                  <input type="hidden" name="section_10_img_65_Atual" value="<?php if (isset($editaHome->section_10_img_65) && !empty($editaHome->section_10_img_65)) {
                    echo $editaHome->section_10_img_65;
                  } ?>">
                  <input type="hidden" name="section_10_img_67_Atual" value="<?php if (isset($editaHome->section_10_img_67) && !empty($editaHome->section_10_img_67)) {
                    echo $editaHome->section_10_img_67;
                  } ?>">
                  <input type="hidden" name="section_10_img_69_Atual" value="<?php if (isset($editaHome->section_10_img_69) && !empty($editaHome->section_10_img_69)) {
                    echo $editaHome->section_10_img_69;
                  } ?>">
                  <input type="hidden" name="section_10_img_71_Atual" value="<?php if (isset($editaHome->section_10_img_71) && !empty($editaHome->section_10_img_71)) {
                    echo $editaHome->section_10_img_71;
                  } ?>">
                  <input type="hidden" name="section_10_conteudo_70_Atual" value="<?php if (isset($editaHome->section_10_conteudo_70) && !empty($editaHome->section_10_conteudo_70)) {
                    echo $editaHome->section_10_conteudo_70;
                  } ?>">
                </form>
              </div>
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
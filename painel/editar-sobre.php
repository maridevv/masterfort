<?php include "verifica.php";
$id = "";
if (isset($_GET['id'])) {
    if (empty($_GET['id'])) {
        header("Location: sobre.php");
    } else {
        $id = $_GET['id'];
    }
}
$sobre->editar();
$editaSobre = $sobre->rsDados($id);
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
    <title>Painel Hoogli - Adicionar sobre</title>
    <link href="dist/css/style.min.css" rel="stylesheet">
</head>

<body>
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
        <?php include "header.php"; ?>
        <?php include "inc-menu-lateral.php"; ?>
        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Adicionar sobre</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="." class="text-muted">Home</a></li>
                                    <li class="breadcrumb-item text-muted active" aria-current="page"><a href="sobre.php" class="text-muted">sobre</a></li>
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
                                        <h4 class="card-title">Sessão Banner</h4>
                                        <hr>
                                        <br>
                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">título</label>
                                                    <input type="text" class="form-control" name="section_1_conteudo_1" value="<?php if (isset($editaSobre->section_1_conteudo_1) && !empty($editaSobre->section_1_conteudo_1)) {
                                                        echo $editaSobre->section_1_conteudo_1;
                                                    } ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <hr>
                                        <h4 class="card-title">Sessão apresentação</h4>
                                        <hr>
                                        <br>
                                        <div class="form-group row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Imagem (563x836px)</label>
                                                    <input type="file" class="form-control" name="section_2_img_2">
                                                </div>
                                            </div>
                                            <?php if (isset($editaSobre->section_2_img_2) && !empty($editaSobre->section_2_img_2)) { ?>
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <img src="../img/<?php echo $editaSobre->section_2_img_2; ?>" width="100" alt="">
                                                        </div>
                                                    </div>
                                            <?php } ?>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Legenda</label>
                                                    <input type="text" class="form-control" name="section_2_image_alt_2" value="<?php if (isset($editaSobre->section_2_image_alt_2) && !empty($editaSobre->section_2_image_alt_2)) {
                                                        echo $editaSobre->section_2_image_alt_2;
                                                    } ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Titulo</label>
                                                    <input type="text" class="form-control" name="section_2_conteudo_3" value="<?php if (isset($editaSobre->section_2_conteudo_3) && !empty($editaSobre->section_2_conteudo_3)) {
                                                        echo $editaSobre->section_2_conteudo_3;
                                                    } ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Breve</label>
                                                    <input type="text" class="form-control" name="section_2_conteudo_4" value="<?php if (isset($editaSobre->section_2_conteudo_4) && !empty($editaSobre->section_2_conteudo_4)) {
                                                        echo $editaSobre->section_2_conteudo_4;
                                                    } ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">ícone 1</label>
                                                    <input type="text" class="form-control" name="section_2_conteudo_6" value="<?php if (isset($editaSobre->section_2_conteudo_6) && !empty($editaSobre->section_2_conteudo_6)) {
                                                        echo $editaSobre->section_2_conteudo_6;
                                                    } ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">ícone 2</label>
                                                    <input type="text" class="form-control" name="section_2_conteudo_7" value="<?php if (isset($editaSobre->section_2_conteudo_7) && !empty($editaSobre->section_2_conteudo_7)) {
                                                        echo $editaSobre->section_2_conteudo_7;
                                                    } ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">ícone 3</label>
                                                    <input type="text" class="form-control" name="section_2_conteudo_8" value="<?php if (isset($editaSobre->section_2_conteudo_8) && !empty($editaSobre->section_2_conteudo_8)) {
                                                        echo $editaSobre->section_2_conteudo_8;
                                                    } ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">ícone 4</label>
                                                    <input type="text" class="form-control" name="section_2_conteudo_9" value="<?php if (isset($editaSobre->section_2_conteudo_9) && !empty($editaSobre->section_2_conteudo_9)) {
                                                        echo $editaSobre->section_2_conteudo_9;
                                                    } ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">ícone 5</label>
                                                    <input type="text" class="form-control" name="section_2_conteudo_10" value="<?php if (isset($editaSobre->section_2_conteudo_10) && !empty($editaSobre->section_2_conteudo_10)) {
                                                        echo $editaSobre->section_2_conteudo_10;
                                                    } ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">ícone 6</label>
                                                    <input type="text" class="form-control" name="section_2_conteudo_11" value="<?php if (isset($editaSobre->section_2_conteudo_11) && !empty($editaSobre->section_2_conteudo_11)) {
                                                        echo $editaSobre->section_2_conteudo_11;
                                                    } ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <hr>
                                        <h4 class="card-title">Sessão ícones</h4>
                                        <hr>
                                        <br>
                                        <div class="form-group row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Imagem (73x74px)</label>
                                                    <input type="file" class="form-control" name="section_3_img_12">
                                                </div>
                                            </div>
                                            <?php if (isset($editaSobre->section_3_img_12) && !empty($editaSobre->section_3_img_12)) { ?>
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <img src="../img/<?php echo $editaSobre->section_3_img_12; ?>" width="100" alt="">
                                                        </div>
                                                    </div>
                                            <?php } ?>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Legenda</label>
                                                    <input type="text" class="form-control" name="section_3_image_alt_12" value="<?php if (isset($editaSobre->section_3_image_alt_12) && !empty($editaSobre->section_3_image_alt_12)) {
                                                        echo $editaSobre->section_3_image_alt_12;
                                                    } ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">título</label>
                                                    <input type="text" class="form-control" name="section_3_conteudo_13" value="<?php if (isset($editaSobre->section_3_conteudo_13) && !empty($editaSobre->section_3_conteudo_13)) {
                                                        echo $editaSobre->section_3_conteudo_13;
                                                    } ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Breve</label>
                                                    <input type="text" class="form-control" name="section_3_conteudo_14" value="<?php if (isset($editaSobre->section_3_conteudo_14) && !empty($editaSobre->section_3_conteudo_14)) {
                                                        echo $editaSobre->section_3_conteudo_14;
                                                    } ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Imagem (73x74px)</label>
                                                    <input type="file" class="form-control" name="section_3_img_15">
                                                </div>
                                            </div>
                                            <?php if (isset($editaSobre->section_3_img_15) && !empty($editaSobre->section_3_img_15)) { ?>
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <img src="../img/<?php echo $editaSobre->section_3_img_15; ?>" width="100" alt="">
                                                        </div>
                                                    </div>
                                            <?php } ?>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Legenda</label>
                                                    <input type="text" class="form-control" name="section_3_image_alt_15" value="<?php if (isset($editaSobre->section_3_image_alt_15) && !empty($editaSobre->section_3_image_alt_15)) {
                                                        echo $editaSobre->section_3_image_alt_15;
                                                    } ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Título</label>
                                                    <input type="text" class="form-control" name="section_3_conteudo_16" value="<?php if (isset($editaSobre->section_3_conteudo_16) && !empty($editaSobre->section_3_conteudo_16)) {
                                                        echo $editaSobre->section_3_conteudo_16;
                                                    } ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Breve</label>
                                                    <input type="text" class="form-control" name="section_3_conteudo_17" value="<?php if (isset($editaSobre->section_3_conteudo_17) && !empty($editaSobre->section_3_conteudo_17)) {
                                                        echo $editaSobre->section_3_conteudo_17;
                                                    } ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Imagem (73x74px)</label>
                                                    <input type="file" class="form-control" name="section_3_img_18">
                                                </div>
                                            </div>
                                            <?php if (isset($editaSobre->section_3_img_18) && !empty($editaSobre->section_3_img_18)) { ?>
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <img src="../img/<?php echo $editaSobre->section_3_img_18; ?>" width="100" alt="">
                                                        </div>
                                                    </div>
                                            <?php } ?>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Legenda</label>
                                                    <input type="text" class="form-control" name="section_3_image_alt_18" value="<?php if (isset($editaSobre->section_3_image_alt_18) && !empty($editaSobre->section_3_image_alt_18)) {
                                                        echo $editaSobre->section_3_image_alt_18;
                                                    } ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Título</label>
                                                    <input type="text" class="form-control" name="section_3_conteudo_19" value="<?php if (isset($editaSobre->section_3_conteudo_19) && !empty($editaSobre->section_3_conteudo_19)) {
                                                        echo $editaSobre->section_3_conteudo_19;
                                                    } ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Breve</label>
                                                    <input type="text" class="form-control" name="section_3_conteudo_20" value="<?php if (isset($editaSobre->section_3_conteudo_20) && !empty($editaSobre->section_3_conteudo_20)) {
                                                        echo $editaSobre->section_3_conteudo_20;
                                                    } ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <hr>
                                        <h4 class="card-title">Sessão de apresentação das telhas <small>(Para adicionar uma telhas dirija-se ao menu lateral)</small></h4>
                                        <hr>
                                        <br>
                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Título</label>
                                                    <input type="text" class="form-control" name="section_4_conteudo_21" value="<?php if (isset($editaSobre->section_4_conteudo_21) && !empty($editaSobre->section_4_conteudo_21)) {
                                                        echo $editaSobre->section_4_conteudo_21;
                                                    } ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Breve</label>
                                                    <input type="text" class="form-control" name="section_4_conteudo_22" value="<?php if (isset($editaSobre->section_4_conteudo_22) && !empty($editaSobre->section_4_conteudo_22)) {
                                                        echo $editaSobre->section_4_conteudo_22;
                                                    } ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <hr>
                                        <h4 class="card-title">Sessão contato</h4>
                                        <hr>
                                        <br>
                                        <div class="form-group row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Imagem (2560x1134px)</label>
                                                    <input type="file" class="form-control" name="section_5_img_23">
                                                </div>
                                            </div>
                                            <?php if (isset($editaSobre->section_5_img_23) && !empty($editaSobre->section_5_img_23)) { ?>
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <img src="../img/<?php echo $editaSobre->section_5_img_23; ?>" width="100" alt="">
                                                        </div>
                                                    </div>
                                            <?php } ?>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Legenda</label>
                                                    <input type="text" class="form-control" name="section_5_image_alt_23" value="<?php if (isset($editaSobre->section_5_image_alt_23) && !empty($editaSobre->section_5_image_alt_23)) {
                                                        echo $editaSobre->section_5_image_alt_23;
                                                    } ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Imagem (29x35px)</label>
                                                    <input type="file" class="form-control" name="section_5_img_25">
                                                </div>
                                            </div>
                                            <?php if (isset($editaSobre->section_5_img_25) && !empty($editaSobre->section_5_img_25)) { ?>
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <img src="../img/<?php echo $editaSobre->section_5_img_25; ?>" width="100" alt="">
                                                        </div>
                                                    </div>
                                            <?php } ?>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Legenda</label>
                                                    <input type="text" class="form-control" name="section_5_image_alt_25" value="<?php if (isset($editaSobre->section_5_image_alt_25) && !empty($editaSobre->section_5_image_alt_25)) {
                                                        echo $editaSobre->section_5_image_alt_25;
                                                    } ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Imagem (31x32px)</label>
                                                    <input type="file" class="form-control" name="section_5_img_27">
                                                </div>
                                            </div>
                                            <?php if (isset($editaSobre->section_5_img_27) && !empty($editaSobre->section_5_img_27)) { ?>
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <img src="../img/<?php echo $editaSobre->section_5_img_27; ?>" width="100" alt="">
                                                        </div>
                                                    </div>
                                            <?php } ?>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Legenda</label>
                                                    <input type="text" class="form-control" name="section_5_image_alt_27" value="<?php if (isset($editaSobre->section_5_image_alt_27) && !empty($editaSobre->section_5_image_alt_27)) {
                                                        echo $editaSobre->section_5_image_alt_27;
                                                    } ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Imagem (33x27px)</label>
                                                    <input type="file" class="form-control" name="section_5_img_29">
                                                </div>
                                            </div>
                                            <?php if (isset($editaSobre->section_5_img_29) && !empty($editaSobre->section_5_img_29)) { ?>
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <img src="../img/<?php echo $editaSobre->section_5_img_29; ?>" width="100" alt="">
                                                        </div>
                                                    </div>
                                            <?php } ?>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Legenda</label>
                                                    <input type="text" class="form-control" name="section_5_image_alt_29" value="<?php if (isset($editaSobre->section_5_image_alt_29) && !empty($editaSobre->section_5_image_alt_29)) {
                                                        echo $editaSobre->section_5_image_alt_29;
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
                                                    <textarea name="meta_title" class="form-control" id="ckeditor" cols="30" rows="4"><?php if (isset($editaSobre->meta_title) && !empty($editaSobre->meta_title)) {
                                                        echo $editaSobre->meta_title;
                                                    } ?></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Meta Keywords</label>
                                                    <textarea name="meta_keywords" class="form-control" id="ckeditor" cols="30" rows="4"><?php if (isset($editaSobre->meta_keywords) && !empty($editaSobre->meta_keywords)) {
                                                        echo $editaSobre->meta_keywords;
                                                    } ?></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Meta Description</label>
                                                    <textarea name="meta_description" class="form-control" id="ckeditor" cols="30" rows="4"><?php if (isset($editaSobre->meta_description) && !empty($editaSobre->meta_description)) {
                                                        echo $editaSobre->meta_description;
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
                                    <input type="hidden" name="acao" value="editaSobre">
                                    <input type="hidden" name="id" value="<?php if (isset($editaSobre->id) && !empty($editaSobre->id)) {
                                        echo $editaSobre->id;
                                    } ?>">
                                    <input type="hidden" name="section_2_img_2_Atual" value="<?php if (isset($editaSobre->section_2_img_2) && !empty($editaSobre->section_2_img_2)) {
                                        echo $editaSobre->section_2_img_2;
                                    } ?>">
                                    <input type="hidden" name="section_3_img_12_Atual" value="<?php if (isset($editaSobre->section_3_img_12) && !empty($editaSobre->section_3_img_12)) {
                                        echo $editaSobre->section_3_img_12;
                                    } ?>">
                                    <input type="hidden" name="section_3_img_15_Atual" value="<?php if (isset($editaSobre->section_3_img_15) && !empty($editaSobre->section_3_img_15)) {
                                        echo $editaSobre->section_3_img_15;
                                    } ?>">
                                    <input type="hidden" name="section_3_img_18_Atual" value="<?php if (isset($editaSobre->section_3_img_18) && !empty($editaSobre->section_3_img_18)) {
                                        echo $editaSobre->section_3_img_18;
                                    } ?>">
                                    <input type="hidden" name="section_5_img_23_Atual" value="<?php if (isset($editaSobre->section_5_img_23) && !empty($editaSobre->section_5_img_23)) {
                                        echo $editaSobre->section_5_img_23;
                                    } ?>">
                                    <input type="hidden" name="section_5_img_25_Atual" value="<?php if (isset($editaSobre->section_5_img_25) && !empty($editaSobre->section_5_img_25)) {
                                        echo $editaSobre->section_5_img_25;
                                    } ?>">
                                    <input type="hidden" name="section_5_img_27_Atual" value="<?php if (isset($editaSobre->section_5_img_27) && !empty($editaSobre->section_5_img_27)) {
                                        echo $editaSobre->section_5_img_27;
                                    } ?>">
                                    <input type="hidden" name="section_5_img_29_Atual" value="<?php if (isset($editaSobre->section_5_img_29) && !empty($editaSobre->section_5_img_29)) {
                                        echo $editaSobre->section_5_img_29;
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
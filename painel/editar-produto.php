<?php include "verifica.php";
$id = "";
if (isset($_GET['id'])) {
    if (empty($_GET['id'])) {
        header("Location: produto.php");
    } else {
        $id = $_GET['id'];
    }
}
$produto->editar();
$editaProduto = $produto->rsDados($id);
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
    <title>Painel Hoogli - Adicionar produto</title>
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
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Adicionar produto</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="." class="text-muted">Home</a></li>
                                    <li class="breadcrumb-item text-muted active" aria-current="page"><a href="produto.php" class="text-muted">produto</a></li>
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
                                        <h4 class="card-title">Sessão</h4>
                                        <hr>
                                        <br>
                                        <div class="form-group row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Imagem (804x444px)</label>
                                                    <input type="file" class="form-control" name="section_1_img_1">
                                                </div>
                                            </div>
                                            <?php if (isset($editaProduto->section_1_img_1) && !empty($editaProduto->section_1_img_1)) { ?>
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <img src="../img/<?php echo $editaProduto->section_1_img_1; ?>" width="100" alt="">
                                                        </div>
                                                    </div>
                                            <?php } ?>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Legenda</label>
                                                    <input type="text" class="form-control" name="section_1_image_alt_1" value="<?php if (isset($editaProduto->section_1_image_alt_1) && !empty($editaProduto->section_1_image_alt_1)) {
                                                        echo $editaProduto->section_1_image_alt_1;
                                                    } ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Título</label>
                                                    <input type="text" class="form-control" name="section_1_conteudo_2" value="<?php if (isset($editaProduto->section_1_conteudo_2) && !empty($editaProduto->section_1_conteudo_2)) {
                                                        echo $editaProduto->section_1_conteudo_2;
                                                    } ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">subtítulo</label>
                                                    <input type="text" class="form-control" name="section_1_conteudo_3" value="<?php if (isset($editaProduto->section_1_conteudo_3) && !empty($editaProduto->section_1_conteudo_3)) {
                                                        echo $editaProduto->section_1_conteudo_3;
                                                    } ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <hr>
                                        <h4 class="card-title">Sessão Banner</h4>
                                        <hr>
                                        <br>
                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Título</label>
                                                    <input type="text" class="form-control" name="section_2_conteudo_4" value="<?php if (isset($editaProduto->section_2_conteudo_4) && !empty($editaProduto->section_2_conteudo_4)) {
                                                        echo $editaProduto->section_2_conteudo_4;
                                                    } ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">subtítulo</label>
                                                    <input type="text" class="form-control" name="section_2_conteudo_5" value="<?php if (isset($editaProduto->section_2_conteudo_5) && !empty($editaProduto->section_2_conteudo_5)) {
                                                        echo $editaProduto->section_2_conteudo_5;
                                                    } ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Nome Botão</label>
                                                    <input type="text" class="form-control" name="section_2_link_8" value="<?php if (isset($editaProduto->section_2_link_8) && !empty($editaProduto->section_2_link_8)) {
                                                        echo $editaProduto->section_2_link_8;
                                                    } ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Link Botão</label>
                                                    <input type="text" class="form-control" name="section_2_link_conteudo_8" value="<?php if (isset($editaProduto->section_2_link_conteudo_8) && !empty($editaProduto->section_2_link_conteudo_8)) {
                                                        echo $editaProduto->section_2_link_conteudo_8;
                                                    } ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Âncora</label>
                                                    <input type="text" class="form-control" name="section_2_link_alt_8" value="<?php if (isset($editaProduto->section_2_link_alt_8) && !empty($editaProduto->section_2_link_alt_8)) {
                                                        echo $editaProduto->section_2_link_alt_8;
                                                    } ?>">
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Imagem da telha (698x350px)</label>
                                                    <input type="file" class="form-control" name="section_2_img_9">
                                                </div>
                                            </div>
                                            <?php if (isset($editaProduto->section_2_img_9) && !empty($editaProduto->section_2_img_9)) { ?>
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <img src="../img/<?php echo $editaProduto->section_2_img_9; ?>" width="100" alt="">
                                                        </div>
                                                    </div>
                                            <?php } ?>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Legenda</label>
                                                    <input type="text" class="form-control" name="section_2_image_alt_9" value="<?php if (isset($editaProduto->section_2_image_alt_9) && !empty($editaProduto->section_2_image_alt_9)) {
                                                        echo $editaProduto->section_2_image_alt_9;
                                                    } ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Imagem de fundo (1262x665px)</label>
                                                    <input type="file" class="form-control" name="section_2_img_10">
                                                </div>
                                            </div>
                                            <?php if (isset($editaProduto->section_2_img_10) && !empty($editaProduto->section_2_img_10)) { ?>
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <img src="../img/<?php echo $editaProduto->section_2_img_10; ?>" width="100" alt="">
                                                        </div>
                                                    </div>
                                            <?php } ?>
                                        </div>
                                        <br>
                                        <hr>
                                        <h4 class="card-title">Sessão dos ícones</h4>
                                        <hr>
                                        <br>
                                        <div class="form-group row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Imagem (108x59px)</label>
                                                    <input type="file" class="form-control" name="section_3_img_11">
                                                </div>
                                            </div>
                                            <?php if (isset($editaProduto->section_3_img_11) && !empty($editaProduto->section_3_img_11)) { ?>
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <img src="../img/<?php echo $editaProduto->section_3_img_11; ?>" width="100" alt="">
                                                        </div>
                                                    </div>
                                            <?php } ?>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Legenda</label>
                                                    <input type="text" class="form-control" name="section_3_image_alt_11" value="<?php if (isset($editaProduto->section_3_image_alt_11) && !empty($editaProduto->section_3_image_alt_11)) {
                                                        echo $editaProduto->section_3_image_alt_11;
                                                    } ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Título</label>
                                                    <input type="text" class="form-control" name="section_3_conteudo_12" value="<?php if (isset($editaProduto->section_3_conteudo_12) && !empty($editaProduto->section_3_conteudo_12)) {
                                                        echo $editaProduto->section_3_conteudo_12;
                                                    } ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Imagem (108x59px)</label>
                                                    <input type="file" class="form-control" name="section_3_img_13">
                                                </div>
                                            </div>
                                            <?php if (isset($editaProduto->section_3_img_13) && !empty($editaProduto->section_3_img_13)) { ?>
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <img src="../img/<?php echo $editaProduto->section_3_img_13; ?>" width="100" alt="">
                                                        </div>
                                                    </div>
                                            <?php } ?>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Legenda</label>
                                                    <input type="text" class="form-control" name="section_3_image_alt_13" value="<?php if (isset($editaProduto->section_3_image_alt_13) && !empty($editaProduto->section_3_image_alt_13)) {
                                                        echo $editaProduto->section_3_image_alt_13;
                                                    } ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Título</label>
                                                    <input type="text" class="form-control" name="section_3_conteudo_14" value="<?php if (isset($editaProduto->section_3_conteudo_14) && !empty($editaProduto->section_3_conteudo_14)) {
                                                        echo $editaProduto->section_3_conteudo_14;
                                                    } ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Imagem (108x59px)</label>
                                                    <input type="file" class="form-control" name="section_3_img_15">
                                                </div>
                                            </div>
                                            <?php if (isset($editaProduto->section_3_img_15) && !empty($editaProduto->section_3_img_15)) { ?>
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <img src="../img/<?php echo $editaProduto->section_3_img_15; ?>" width="100" alt="">
                                                        </div>
                                                    </div>
                                            <?php } ?>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Legenda</label>
                                                    <input type="text" class="form-control" name="section_3_image_alt_15" value="<?php if (isset($editaProduto->section_3_image_alt_15) && !empty($editaProduto->section_3_image_alt_15)) {
                                                        echo $editaProduto->section_3_image_alt_15;
                                                    } ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Título</label>
                                                    <input type="text" class="form-control" name="section_3_conteudo_16" value="<?php if (isset($editaProduto->section_3_conteudo_16) && !empty($editaProduto->section_3_conteudo_16)) {
                                                        echo $editaProduto->section_3_conteudo_16;
                                                    } ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <hr>
                                        <h4 class="card-title">Sessão dos vídeos</h4>
                                        <hr>
                                        <br>
                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Título</label>
                                                    <input type="text" class="form-control" name="section_4_conteudo_17" value="<?php if (isset($editaProduto->section_4_conteudo_17) && !empty($editaProduto->section_4_conteudo_17)) {
                                                        echo $editaProduto->section_4_conteudo_17;
                                                    } ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">subtítulo</label>
                                                    <input type="text" class="form-control" name="section_4_conteudo_18" value="<?php if (isset($editaProduto->section_4_conteudo_18) && !empty($editaProduto->section_4_conteudo_18)) {
                                                        echo $editaProduto->section_4_conteudo_18;
                                                    } ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Imagem (510x325px)</label>
                                                    <input type="file" class="form-control" name="section_4_img_19">
                                                </div>
                                            </div>
                                            <?php if (isset($editaProduto->section_4_img_19) && !empty($editaProduto->section_4_img_19)) { ?>
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <img src="../img/<?php echo $editaProduto->section_4_img_19; ?>" width="100" alt="">
                                                        </div>
                                                    </div>
                                            <?php } ?>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Legenda</label>
                                                    <input type="text" class="form-control" name="section_4_image_alt_19" value="<?php if (isset($editaProduto->section_4_image_alt_19) && !empty($editaProduto->section_4_image_alt_19)) {
                                                        echo $editaProduto->section_4_image_alt_19;
                                                    } ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Link Botão</label>
                                                    <input type="text" class="form-control" name="section_4_link_20" value="<?php if (isset($editaProduto->section_4_link_20) && !empty($editaProduto->section_4_link_20)) {
                                                        echo $editaProduto->section_4_link_20;
                                                    } ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Âncora</label>
                                                    <input type="text" class="form-control" name="section_4_link_alt_20" value="<?php if (isset($editaProduto->section_4_link_alt_20) && !empty($editaProduto->section_4_link_alt_20)) {
                                                        echo $editaProduto->section_4_link_alt_20;
                                                    } ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <hr>
                                        <h4 class="card-title">Sessão CTA</h4>
                                        <hr>
                                        <br>
                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Título</label>
                                                    <input type="text" class="form-control" name="section_5_conteudo_21" value="<?php if (isset($editaProduto->section_5_conteudo_21) && !empty($editaProduto->section_5_conteudo_21)) {
                                                        echo $editaProduto->section_5_conteudo_21;
                                                    } ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Nome Botão</label>
                                                    <input type="text" class="form-control" name="section_5_link_22" value="<?php if (isset($editaProduto->section_5_link_22) && !empty($editaProduto->section_5_link_22)) {
                                                        echo $editaProduto->section_5_link_22;
                                                    } ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Link Botão</label>
                                                    <input type="text" class="form-control" name="section_5_link_conteudo_22" value="<?php if (isset($editaProduto->section_5_link_conteudo_22) && !empty($editaProduto->section_5_link_conteudo_22)) {
                                                        echo $editaProduto->section_5_link_conteudo_22;
                                                    } ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Âncora</label>
                                                    <input type="text" class="form-control" name="section_5_link_alt_22" value="<?php if (isset($editaProduto->section_5_link_alt_22) && !empty($editaProduto->section_5_link_alt_22)) {
                                                        echo $editaProduto->section_5_link_alt_22;
                                                    } ?>">
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Imagem (510x325px)</label>
                                                    <input type="file" class="form-control" name="section_5_img_23">
                                                </div>
                                            </div>
                                            <?php if (isset($editaProduto->section_5_img_23) && !empty($editaProduto->section_5_img_23)) { ?>
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <img src="../img/<?php echo $editaProduto->section_5_img_23; ?>" width="100" alt="">
                                                        </div>
                                                    </div>
                                            <?php } ?>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Legenda</label>
                                                    <input type="text" class="form-control" name="section_5_image_alt_23" value="<?php if (isset($editaProduto->section_5_image_alt_23) && !empty($editaProduto->section_5_image_alt_23)) {
                                                        echo $editaProduto->section_5_image_alt_23;
                                                    } ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <hr>
                                        <h4 class="card-title">Texto corrido</h4>
                                        <hr>
                                        <br>
                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="col-form-label" for="">Breve</label>
                                                    <textarea name="section_6_textarea_24" class="ckeditor" id="ckeditor" cols="30" rows="10"><?php if (isset($editaProduto->section_6_textarea_24) && !empty($editaProduto->section_6_textarea_24)) {
                                                        echo $editaProduto->section_6_textarea_24;
                                                    } ?></textarea>
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
                                                    <textarea name="meta_title" class="form-control" id="ckeditor" cols="30" rows="4"><?php if (isset($editaProduto->meta_title) && !empty($editaProduto->meta_title)) {
                                                        echo $editaProduto->meta_title;
                                                    } ?></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Meta Keywords</label>
                                                    <textarea name="meta_keywords" class="form-control" id="ckeditor" cols="30" rows="4"><?php if (isset($editaProduto->meta_keywords) && !empty($editaProduto->meta_keywords)) {
                                                        echo $editaProduto->meta_keywords;
                                                    } ?></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Meta Description</label>
                                                    <textarea name="meta_description" class="form-control" id="ckeditor" cols="30" rows="4"><?php if (isset($editaProduto->meta_description) && !empty($editaProduto->meta_description)) {
                                                        echo $editaProduto->meta_description;
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
                                    <input type="hidden" name="acao" value="editaProduto">
                                    <input type="hidden" name="id" value="<?php if (isset($editaProduto->id) && !empty($editaProduto->id)) {
                                        echo $editaProduto->id;
                                    } ?>">
                                    <input type="hidden" name="section_1_img_1_Atual" value="<?php if (isset($editaProduto->section_1_img_1) && !empty($editaProduto->section_1_img_1)) {
                                        echo $editaProduto->section_1_img_1;
                                    } ?>">
                                    <input type="hidden" name="section_2_img_9_Atual" value="<?php if (isset($editaProduto->section_2_img_9) && !empty($editaProduto->section_2_img_9)) {
                                        echo $editaProduto->section_2_img_9;
                                    } ?>">
                                    <input type="hidden" name="section_2_img_10_Atual" value="<?php if (isset($editaProduto->section_2_img_10) && !empty($editaProduto->section_2_img_10)) {
                                        echo $editaProduto->section_2_img_10;
                                    } ?>">
                                    <input type="hidden" name="section_3_img_11_Atual" value="<?php if (isset($editaProduto->section_3_img_11) && !empty($editaProduto->section_3_img_11)) {
                                        echo $editaProduto->section_3_img_11;
                                    } ?>">
                                    <input type="hidden" name="section_3_img_13_Atual" value="<?php if (isset($editaProduto->section_3_img_13) && !empty($editaProduto->section_3_img_13)) {
                                        echo $editaProduto->section_3_img_13;
                                    } ?>">
                                    <input type="hidden" name="section_3_img_15_Atual" value="<?php if (isset($editaProduto->section_3_img_15) && !empty($editaProduto->section_3_img_15)) {
                                        echo $editaProduto->section_3_img_15;
                                    } ?>">
                                    <input type="hidden" name="section_4_img_19_Atual" value="<?php if (isset($editaProduto->section_4_img_19) && !empty($editaProduto->section_4_img_19)) {
                                        echo $editaProduto->section_4_img_19;
                                    } ?>">
                                    <input type="hidden" name="section_5_img_23_Atual" value="<?php if (isset($editaProduto->section_5_img_23) && !empty($editaProduto->section_5_img_23)) {
                                        echo $editaProduto->section_5_img_23;
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
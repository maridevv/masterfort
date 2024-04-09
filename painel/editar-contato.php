<?php include "verifica.php";
$id = "";
if (isset($_GET['id'])) {
    if (empty($_GET['id'])) {
        header("Location: contato.php");
    } else {
        $id = $_GET['id'];
    }
}
$contato->editar();
$editaContato = $contato->rsDados($id);
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
    <title>Painel Hoogli - Adicionar contato</title>
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
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Adicionar contato</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="." class="text-muted">Home</a></li>
                                    <li class="breadcrumb-item text-muted active" aria-current="page"><a
                                            href="contato.php" class="text-muted">contato</a></li>
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
                                                    <input type="text" class="form-control" name="section_1_conteudo_1"
                                                        value="<?php if (isset($editaContato->section_1_conteudo_1) && !empty($editaContato->section_1_conteudo_1)) {
                                                            echo $editaContato->section_1_conteudo_1;
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
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">título</label>
                                                    <input type="text" class="form-control" name="section_2_conteudo_2"
                                                        value="<?php if (isset($editaContato->section_2_conteudo_2) && !empty($editaContato->section_2_conteudo_2)) {
                                                            echo $editaContato->section_2_conteudo_2;
                                                        } ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Imagem (506x632px)</label>
                                                    <input type="file" class="form-control" name="section_2_img_3">
                                                </div>
                                            </div>
                                            <?php if (isset($editaContato->section_2_img_3) && !empty($editaContato->section_2_img_3)) { ?>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <img src="../img/<?php echo $editaContato->section_2_img_3; ?>"
                                                            width="100" alt="">
                                                    </div>
                                                </div>
                                            <?php } ?>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Legenda</label>
                                                    <input type="text" class="form-control" name="section_2_image_alt_3"
                                                        value="<?php if (isset($editaContato->section_2_image_alt_3) && !empty($editaContato->section_2_image_alt_3)) {
                                                            echo $editaContato->section_2_image_alt_3;
                                                        } ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">título</label>
                                                    <input type="text" class="form-control" name="section_2_conteudo_4"
                                                        value="<?php if (isset($editaContato->section_2_conteudo_4) && !empty($editaContato->section_2_conteudo_4)) {
                                                            echo $editaContato->section_2_conteudo_4;
                                                        } ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Imagem (41x41px)</label>
                                                    <input type="file" class="form-control" name="section_2_img_5">
                                                </div>
                                            </div>
                                            <?php if (isset($editaContato->section_2_img_5) && !empty($editaContato->section_2_img_5)) { ?>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <img src="../img/<?php echo $editaContato->section_2_img_5; ?>"
                                                            width="100" alt="">
                                                    </div>
                                                </div>
                                            <?php } ?>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Legenda</label>
                                                    <input type="text" class="form-control" name="section_2_image_alt_5"
                                                        value="<?php if (isset($editaContato->section_2_image_alt_5) && !empty($editaContato->section_2_image_alt_5)) {
                                                            echo $editaContato->section_2_image_alt_5;
                                                        } ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Imagem (41x41px)</label>
                                                    <input type="file" class="form-control" name="section_2_img_6">
                                                </div>
                                            </div>
                                            <?php if (isset($editaContato->section_2_img_6) && !empty($editaContato->section_2_img_6)) { ?>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <img src="../img/<?php echo $editaContato->section_2_img_6; ?>"
                                                            width="100" alt="">
                                                    </div>
                                                </div>
                                            <?php } ?>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Legenda</label>
                                                    <input type="text" class="form-control" name="section_2_image_alt_6"
                                                        value="<?php if (isset($editaContato->section_2_image_alt_6) && !empty($editaContato->section_2_image_alt_6)) {
                                                            echo $editaContato->section_2_image_alt_6;
                                                        } ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Imagem (41x41px)</label>
                                                    <input type="file" class="form-control" name="section_2_img_7">
                                                </div>
                                            </div>
                                            <?php if (isset($editaContato->section_2_img_7) && !empty($editaContato->section_2_img_7)) { ?>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <img src="../img/<?php echo $editaContato->section_2_img_7; ?>"
                                                            width="100" alt="">
                                                    </div>
                                                </div>
                                            <?php } ?>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Legenda</label>
                                                    <input type="text" class="form-control" name="section_2_image_alt_7"
                                                        value="<?php if (isset($editaContato->section_2_image_alt_7) && !empty($editaContato->section_2_image_alt_7)) {
                                                            echo $editaContato->section_2_image_alt_7;
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
                                                    <textarea name="meta_title" class="form-control" id="ckeditor"
                                                        cols="30" rows="4"><?php if (isset($editaContato->meta_title) && !empty($editaContato->meta_title)) {
                                                            echo $editaContato->meta_title;
                                                        } ?></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Meta Keywords</label>
                                                    <textarea name="meta_keywords" class="form-control" id="ckeditor"
                                                        cols="30" rows="4"><?php if (isset($editaContato->meta_keywords) && !empty($editaContato->meta_keywords)) {
                                                            echo $editaContato->meta_keywords;
                                                        } ?></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Meta Description</label>
                                                    <textarea name="meta_description" class="form-control" id="ckeditor"
                                                        cols="30" rows="4"><?php if (isset($editaContato->meta_description) && !empty($editaContato->meta_description)) {
                                                            echo $editaContato->meta_description;
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
                                    <input type="hidden" name="acao" value="editaContato">
                                    <input type="hidden" name="id" value="<?php if (isset($editaContato->id) && !empty($editaContato->id)) {
                                        echo $editaContato->id;
                                    } ?>">
                                    <input type="hidden" name="section_2_img_3_Atual" value="<?php if (isset($editaContato->section_2_img_3) && !empty($editaContato->section_2_img_3)) {
                                        echo $editaContato->section_2_img_3;
                                    } ?>">
                                    <input type="hidden" name="section_2_img_5_Atual" value="<?php if (isset($editaContato->section_2_img_5) && !empty($editaContato->section_2_img_5)) {
                                        echo $editaContato->section_2_img_5;
                                    } ?>">
                                    <input type="hidden" name="section_2_img_6_Atual" value="<?php if (isset($editaContato->section_2_img_6) && !empty($editaContato->section_2_img_6)) {
                                        echo $editaContato->section_2_img_6;
                                    } ?>">
                                    <input type="hidden" name="section_2_img_7_Atual" value="<?php if (isset($editaContato->section_2_img_7) && !empty($editaContato->section_2_img_7)) {
                                        echo $editaContato->section_2_img_7;
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
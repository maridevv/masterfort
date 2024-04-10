<?php include "verifica.php";
$id = '';
if(isset($_GET['id'])){
    if(empty($_GET['id'])){
        header('Location: faqs.php');
    }else{
        $id = $_GET['id'];
        
    }
}
$faqs->editar();
$descFaq = $faqs->rsDados($id);


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
    <title>Painel Hoogli - Editar Faq</title>
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
       <?php include "header.php";?>
       <?php include "inc-menu-lateral.php";?>
        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Editar Faq</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="." class="text-muted">Home</a></li>
                                    <li class="breadcrumb-item text-muted active" aria-current="page"><a href="faqs.php" class="text-muted">FAQ</a></li>
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
                                    <!--<div class="row">-->
                                    <!--        <div class="col-md-3">-->
                                    <!--            <div class="form-group">-->
                                    <!--            <label class="mr-sm-2" for="">Aonde esse FAQ vai aparecer ?</label>-->
                                    <!--               <select name="pag" class="form-control" id="">-->
                                    <!--                   <option value="PF" <?php if($descFaq->pag == 'PF'){?> selected <?php } ?> >Planos - Pessoa Física</option>-->
                                    <!--                   <option value="PJ" <?php if($descFaq->pag == 'PJ'){?> selected <?php } ?>>Planos - Empresas</option>-->
                                    <!--                   <option value="C" <?php if($descFaq->pag == 'C'){?> selected <?php } ?>>Coberturas</option>-->
                                    <!--                    <option value="I" <?php if($descFaq->pag == 'I'){?> selected <?php } ?>>Indique e Ganhe</option>-->
                                    <!--                    <option value="FAQ" <?php if($descFaq->pag == 'FAQ'){?> selected <?php } ?>>Perguntas Frequentes</option>-->
                                    <!--               </select>-->
                                    <!--            </div>-->
                                    <!--        </div>-->
                                    <!--    </div>-->
                                    <div class="form-group row">
                                        <div class="col-md-6 col-sm-12">
                                            <label  class="col-form-label">Título</label>
                                            <input class="form-control" type="text" name="titulo" value="<?php if(isset($descFaq->titulo) && !empty($descFaq->titulo)){ echo $descFaq->titulo;}?>"  />
                                        </div>
                                    </div>
                                   <div class="form-group row">
                                        <div class="col-md-12 col-sm-12">
                                            <label  class="col-form-label">Descrição</label>
                                            <textarea name="descricao" class="ckeditor" id="ckeditor" cols="30" rows="10"><?php if(isset($descFaq->descricao) && !empty($descFaq->descricao)){ echo $descFaq->descricao;}?></textarea>
                                        </div>
                                   </div>
                                </div>
                                    <div class="form-actions">
                                        <div class="text-right">
                                            <button type="submit" class="btn btn-info">Salvar</button>
                                           
                                        </div>
                                    </div>
                                    <input type="hidden" name="acao" value="editaFaq">
                                    <input type="hidden" name="id" value="<?php if(isset($descFaq->id) && !empty($descFaq->id)){ echo $descFaq->id;}?>">
                                    <input type="hidden" name="foto_Atual" value="<?php if(isset($descFaq->foto) && !empty($descFaq->foto)){ echo $descFaq->foto;}?>">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           <?php include "footer.php";?>
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
<?php include "verifica.php";
$id = "";
if (isset($_GET['id'])) {
   if (empty($_GET['id'])) {
      header("Location: faqs.php");
   } else {
      $id = $_GET['id'];
   }
}
$faqs->editar();
$editaFaqs = $faqs->rsDados($id);
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
   <title>Painel Hoogli - Adicionar faqs</title>
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
                  <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Adicionar faqs</h4>
                  <div class="d-flex align-items-center">
                     <nav aria-label="breadcrumb">
                        <ol class="breadcrumb m-0 p-0">
                           <li class="breadcrumb-item"><a href="." class="text-muted">Home</a></li>
                           <li class="breadcrumb-item text-muted active" aria-current="page"><a href="faqs.php"
                                 class="text-muted">faqs</a></li>
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
                              <h4 class="card-title">Section 1</h4>
                              <hr>
                              <br>
                              <div class="form-group row">
                                 <div class="col-md-4">
                                    <div class="form-group">
                                       <label class="mr-sm-2" for="">Imagem (49x40px)</label>
                                       <input type="file" class="form-control" name="section_1_img_1">
                                    </div>
                                 </div>
                                 <?php if (isset($editaFaqs->section_1_img_1) && !empty($editaFaqs->section_1_img_1)) { ?>
                                    <div class="col-md-2">
                                       <div class="form-group">
                                          <img src="../img/<?php echo $editaFaqs->section_1_img_1; ?>" width="100" alt="">
                                       </div>
                                    </div>
                                 <?php } ?>
                                 <div class="col-md-6">
                                    <div class="form-group">
                                       <label class="mr-sm-2" for="">legenda</label>
                                       <input type="text" class="form-control" name="section_1_image_alt_1" value="<?php if (isset($editaFaqs->section_1_image_alt_1) && !empty($editaFaqs->section_1_image_alt_1)) {
                                          echo $editaFaqs->section_1_image_alt_1;
                                       } ?>">
                                    </div>
                                 </div>
                                 <div class="col-md-12">
                                    <div class="form-group">
                                       <label class="mr-sm-2" for="">Título</label>
                                       <input type="text" class="form-control" name="section_1_conteudo_2" value="<?php if (isset($editaFaqs->section_1_conteudo_2) && !empty($editaFaqs->section_1_conteudo_2)) {
                                          echo $editaFaqs->section_1_conteudo_2;
                                       } ?>">
                                    </div>
                                 </div>
                                 <div class="col-md-4">
                                    <div class="form-group">
                                       <label class="mr-sm-2" for="">Imagem (118x21px)</label>
                                       <input type="file" class="form-control" name="section_1_img_3">
                                    </div>
                                 </div>
                                 <?php if (isset($editaFaqs->section_1_img_3) && !empty($editaFaqs->section_1_img_3)) { ?>
                                    <div class="col-md-2">
                                       <div class="form-group">
                                          <img src="../img/<?php echo $editaFaqs->section_1_img_3; ?>" width="100" alt="">
                                       </div>
                                    </div>
                                 <?php } ?>
                                 <div class="col-md-6">
                                    <div class="form-group">
                                       <label class="mr-sm-2" for="">Legenda</label>
                                       <input type="text" class="form-control" name="section_1_image_alt_3" value="<?php if (isset($editaFaqs->section_1_image_alt_3) && !empty($editaFaqs->section_1_image_alt_3)) {
                                          echo $editaFaqs->section_1_image_alt_3;
                                       } ?>">
                                    </div>
                                 </div>
                                 <div class="col-md-12">
                                    <div class="form-group">
                                       <label class="col-form-label" for="">Breve</label>
                                       <textarea name="section_1_textarea_4" class="ckeditor" id="ckeditor" cols="30"
                                          rows="10"><?php if (isset($editaFaqs->section_1_textarea_4) && !empty($editaFaqs->section_1_textarea_4)) {
                                             echo $editaFaqs->section_1_textarea_4;
                                          } ?></textarea>
                                    </div>
                                 </div>
                              </div>
                              <div class="clearfix"></div>
                           </div>
                           <div class="form-actions">
                              <div class="text-right">
                                 <button type="submit" class="btn btn-info">Salvar</button>
                                 <button type="reset" class="btn btn-dark">Resetar</button>
                              </div>
                           </div>
                           <input type="hidden" name="acao" value="editaFaqs">
                           <input type="hidden" name="id" value="<?php if (isset($editaFaqs->id) && !empty($editaFaqs->id)) {
                              echo $editaFaqs->id;
                           } ?>">
                           <input type="hidden" name="section_1_img_1_Atual" value="<?php if (isset($editaFaqs->section_1_img_1) && !empty($editaFaqs->section_1_img_1)) {
                              echo $editaFaqs->section_1_img_1;
                           } ?>">
                           <input type="hidden" name="section_1_img_3_Atual" value="<?php if (isset($editaFaqs->section_1_img_3) && !empty($editaFaqs->section_1_img_3)) {
                              echo $editaFaqs->section_1_img_3;
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
<?php include "verifica.php";
$id = "";
if (isset($_GET['id'])) {
   if (empty($_GET['id'])) {
      header("Location: desc_colunista.php");
   } else {
      $id = $_GET['id'];
   }
}
$desc_colunista->editar();
$editaDesc_colunista = $desc_colunista->rsDados($id);
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
   <title>Painel Hoogli - Adicionar desc_colunista</title>
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
                  <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Adicionar desc_colunista</h4>
                  <div class="d-flex align-items-center">
                     <nav aria-label="breadcrumb">
                        <ol class="breadcrumb m-0 p-0">
                           <li class="breadcrumb-item"><a href="." class="text-muted">Home</a></li>
                           <li class="breadcrumb-item text-muted active" aria-current="page"><a
                                 href="desc_colunista.php" class="text-muted">desc_colunista</a></li>
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
                                       <label class="mr-sm-2" for="">section 1 img 1 (370 × 391 px)</label>
                                       <input type="file" class="form-control" name="section_1_img_1">
                                    </div>
                                 </div>
                                 <?php if (isset($editaDesc_colunista->section_1_img_1) && !empty($editaDesc_colunista->section_1_img_1)) { ?>
                                    <div class="col-md-2">
                                       <div class="form-group">
                                          <img src="../img/<?php echo $editaDesc_colunista->section_1_img_1; ?>"
                                             width="100" alt="">
                                       </div>
                                    </div>
                                 <?php } ?>
                                 <div class="col-md-6">
                                    <div class="form-group">
                                       <label class="mr-sm-2" for="">section 1 image alt 1</label>
                                       <input type="text" class="form-control" name="section_1_image_alt_1" value="<?php if (isset($editaDesc_colunista->section_1_image_alt_1) && !empty($editaDesc_colunista->section_1_image_alt_1)) {
                                          echo $editaDesc_colunista->section_1_image_alt_1;
                                       } ?>">
                                    </div>
                                 </div>
                                 <div class="col-md-12">
                                    <div class="form-group">
                                       <label class="mr-sm-2" for="">section 1 conteudo 2</label>
                                       <input type="text" class="form-control" name="section_1_conteudo_2" value="<?php if (isset($editaDesc_colunista->section_1_conteudo_2) && !empty($editaDesc_colunista->section_1_conteudo_2)) {
                                          echo $editaDesc_colunista->section_1_conteudo_2;
                                       } ?>">
                                    </div>
                                 </div>
                                 <div class="col-md-12">
                                    <div class="form-group">
                                       <label class="mr-sm-2" for="">section 1 conteudo 3</label>
                                       <input type="text" class="form-control" name="section_1_conteudo_3" value="<?php if (isset($editaDesc_colunista->section_1_conteudo_3) && !empty($editaDesc_colunista->section_1_conteudo_3)) {
                                          echo $editaDesc_colunista->section_1_conteudo_3;
                                       } ?>">
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="form-group">
                                       <label class="mr-sm-2" for="">section 1 link 4</label>
                                       <input type="text" class="form-control" name="section_1_link_4" value="<?php if (isset($editaDesc_colunista->section_1_link_4) && !empty($editaDesc_colunista->section_1_link_4)) {
                                          echo $editaDesc_colunista->section_1_link_4;
                                       } ?>">
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="form-group">
                                       <label class="mr-sm-2" for="">section 1 link alt 4</label>
                                       <input type="text" class="form-control" name="section_1_link_alt_4" value="<?php if (isset($editaDesc_colunista->section_1_link_alt_4) && !empty($editaDesc_colunista->section_1_link_alt_4)) {
                                          echo $editaDesc_colunista->section_1_link_alt_4;
                                       } ?>">
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="form-group">
                                       <label class="mr-sm-2" for="">section 1 link 5</label>
                                       <input type="text" class="form-control" name="section_1_link_5" value="<?php if (isset($editaDesc_colunista->section_1_link_5) && !empty($editaDesc_colunista->section_1_link_5)) {
                                          echo $editaDesc_colunista->section_1_link_5;
                                       } ?>">
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="form-group">
                                       <label class="mr-sm-2" for="">section 1 link alt 5</label>
                                       <input type="text" class="form-control" name="section_1_link_alt_5" value="<?php if (isset($editaDesc_colunista->section_1_link_alt_5) && !empty($editaDesc_colunista->section_1_link_alt_5)) {
                                          echo $editaDesc_colunista->section_1_link_alt_5;
                                       } ?>">
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="form-group">
                                       <label class="mr-sm-2" for="">section 1 link 6</label>
                                       <input type="text" class="form-control" name="section_1_link_6" value="<?php if (isset($editaDesc_colunista->section_1_link_6) && !empty($editaDesc_colunista->section_1_link_6)) {
                                          echo $editaDesc_colunista->section_1_link_6;
                                       } ?>">
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="form-group">
                                       <label class="mr-sm-2" for="">section 1 link alt 6</label>
                                       <input type="text" class="form-control" name="section_1_link_alt_6" value="<?php if (isset($editaDesc_colunista->section_1_link_alt_6) && !empty($editaDesc_colunista->section_1_link_alt_6)) {
                                          echo $editaDesc_colunista->section_1_link_alt_6;
                                       } ?>">
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="form-group">
                                       <label class="mr-sm-2" for="">section 1 link 7</label>
                                       <input type="text" class="form-control" name="section_1_link_7" value="<?php if (isset($editaDesc_colunista->section_1_link_7) && !empty($editaDesc_colunista->section_1_link_7)) {
                                          echo $editaDesc_colunista->section_1_link_7;
                                       } ?>">
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="form-group">
                                       <label class="mr-sm-2" for="">section 1 link alt 7</label>
                                       <input type="text" class="form-control" name="section_1_link_alt_7" value="<?php if (isset($editaDesc_colunista->section_1_link_alt_7) && !empty($editaDesc_colunista->section_1_link_alt_7)) {
                                          echo $editaDesc_colunista->section_1_link_alt_7;
                                       } ?>">
                                    </div>
                                 </div>
                              </div>
                              <br>
                              <hr>
                              <h4 class="card-title">Section 2</h4>
                              <hr>
                              <br>
                              <div class="form-group row">
                                 <div class="col-md-4">
                                    <div class="form-group">
                                       <label class="mr-sm-2" for="">section 2 img 8 (1920 × 342 px)</label>
                                       <input type="file" class="form-control" name="section_2_img_8">
                                    </div>
                                 </div>
                                 <?php if (isset($editaDesc_colunista->section_2_img_8) && !empty($editaDesc_colunista->section_2_img_8)) { ?>
                                    <div class="col-md-2">
                                       <div class="form-group">
                                          <img src="../img/<?php echo $editaDesc_colunista->section_2_img_8; ?>"
                                             width="100" alt="">
                                       </div>
                                    </div>
                                 <?php } ?>
                                 <div class="col-md-6">
                                    <div class="form-group">
                                       <label class="mr-sm-2" for="">section 2 image alt 8</label>
                                       <input type="text" class="form-control" name="section_2_image_alt_8" value="<?php if (isset($editaDesc_colunista->section_2_image_alt_8) && !empty($editaDesc_colunista->section_2_image_alt_8)) {
                                          echo $editaDesc_colunista->section_2_image_alt_8;
                                       } ?>">
                                    </div>
                                 </div>
                                 <div class="col-md-4">
                                    <div class="form-group">
                                       <label class="mr-sm-2" for="">section 2 img 9 (500 x 800 px)</label>
                                       <input type="file" class="form-control" name="section_2_img_9">
                                    </div>
                                 </div>
                                 <?php if (isset($editaDesc_colunista->section_2_img_9) && !empty($editaDesc_colunista->section_2_img_9)) { ?>
                                    <div class="col-md-2">
                                       <div class="form-group">
                                          <img src="../img/<?php echo $editaDesc_colunista->section_2_img_9; ?>"
                                             width="100" alt="">
                                       </div>
                                    </div>
                                 <?php } ?>
                                 <div class="col-md-6">
                                    <div class="form-group">
                                       <label class="mr-sm-2" for="">section 2 image alt 9</label>
                                       <input type="text" class="form-control" name="section_2_image_alt_9" value="<?php if (isset($editaDesc_colunista->section_2_image_alt_9) && !empty($editaDesc_colunista->section_2_image_alt_9)) {
                                          echo $editaDesc_colunista->section_2_image_alt_9;
                                       } ?>">
                                    </div>
                                 </div>
                                 <div class="col-md-12">
                                    <div class="form-group">
                                       <label class="mr-sm-2" for="">section 2 conteudo 10</label>
                                       <input type="text" class="form-control" name="section_2_conteudo_10" value="<?php if (isset($editaDesc_colunista->section_2_conteudo_10) && !empty($editaDesc_colunista->section_2_conteudo_10)) {
                                          echo $editaDesc_colunista->section_2_conteudo_10;
                                       } ?>">
                                    </div>
                                 </div>
                              </div>
                              <br>
                              <hr>
                              <h4 class="card-title">Section 3</h4>
                              <hr>
                              <br>
                              <div class="form-group row">
                                 <div class="col-md-4">
                                    <div class="form-group">
                                       <label class="mr-sm-2" for="">section 3 img 11 (512 × 512 px)</label>
                                       <input type="file" class="form-control" name="section_3_img_11">
                                    </div>
                                 </div>
                                 <?php if (isset($editaDesc_colunista->section_3_img_11) && !empty($editaDesc_colunista->section_3_img_11)) { ?>
                                    <div class="col-md-2">
                                       <div class="form-group">
                                          <img src="../img/<?php echo $editaDesc_colunista->section_3_img_11; ?>"
                                             width="100" alt="">
                                       </div>
                                    </div>
                                 <?php } ?>
                                 <div class="col-md-6">
                                    <div class="form-group">
                                       <label class="mr-sm-2" for="">section 3 image alt 11</label>
                                       <input type="text" class="form-control" name="section_3_image_alt_11" value="<?php if (isset($editaDesc_colunista->section_3_image_alt_11) && !empty($editaDesc_colunista->section_3_image_alt_11)) {
                                          echo $editaDesc_colunista->section_3_image_alt_11;
                                       } ?>">
                                    </div>
                                 </div>
                                 <div class="col-md-4">
                                    <div class="form-group">
                                       <label class="mr-sm-2" for="">section 3 img 12 (140 × 139 px)</label>
                                       <input type="file" class="form-control" name="section_3_img_12">
                                    </div>
                                 </div>
                                 <?php if (isset($editaDesc_colunista->section_3_img_12) && !empty($editaDesc_colunista->section_3_img_12)) { ?>
                                    <div class="col-md-2">
                                       <div class="form-group">
                                          <img src="../img/<?php echo $editaDesc_colunista->section_3_img_12; ?>"
                                             width="100" alt="">
                                       </div>
                                    </div>
                                 <?php } ?>
                                 <div class="col-md-6">
                                    <div class="form-group">
                                       <label class="mr-sm-2" for="">section 3 image alt 12</label>
                                       <input type="text" class="form-control" name="section_3_image_alt_12" value="<?php if (isset($editaDesc_colunista->section_3_image_alt_12) && !empty($editaDesc_colunista->section_3_image_alt_12)) {
                                          echo $editaDesc_colunista->section_3_image_alt_12;
                                       } ?>">
                                    </div>
                                 </div>
                                 <div class="col-md-12">
                                    <div class="form-group">
                                       <label class="mr-sm-2" for="">section 3 conteudo 13</label>
                                       <input type="text" class="form-control" name="section_3_conteudo_13" value="<?php if (isset($editaDesc_colunista->section_3_conteudo_13) && !empty($editaDesc_colunista->section_3_conteudo_13)) {
                                          echo $editaDesc_colunista->section_3_conteudo_13;
                                       } ?>">
                                    </div>
                                 </div>
                                 <div class="col-md-12">
                                    <div class="form-group">
                                       <label class="mr-sm-2" for="">section 3 conteudo 14</label>
                                       <textarea name="section_3_conteudo_14" class="ckeditor" id="ckeditor" cols="30"
                                          rows="10"><?php if (isset($editaDesc_colunista->section_3_conteudo_14) && !empty($editaDesc_colunista->section_3_conteudo_14)) {
                                             echo $editaDesc_colunista->section_3_conteudo_14;
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
                                       <textarea name="meta_title" class="form-control" id="ckeditor" cols="30"
                                          rows="4"><?php if (isset($editaDesc_colunista->meta_title) && !empty($editaDesc_colunista->meta_title)) {
                                             echo $editaDesc_colunista->meta_title;
                                          } ?></textarea>
                                    </div>
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <div class="col-md-12">
                                    <div class="form-group">
                                       <label class="mr-sm-2" for="">Meta Keywords</label>
                                       <textarea name="meta_keywords" class="form-control" id="ckeditor" cols="30"
                                          rows="4"><?php if (isset($editaDesc_colunista->meta_keywords) && !empty($editaDesc_colunista->meta_keywords)) {
                                             echo $editaDesc_colunista->meta_keywords;
                                          } ?></textarea>
                                    </div>
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <div class="col-md-12">
                                    <div class="form-group">
                                       <label class="mr-sm-2" for="">Meta Description</label>
                                       <textarea name="meta_description" class="form-control" id="ckeditor" cols="30"
                                          rows="4"><?php if (isset($editaDesc_colunista->meta_description) && !empty($editaDesc_colunista->meta_description)) {
                                             echo $editaDesc_colunista->meta_description;
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
                           <input type="hidden" name="acao" value="editaDesc_colunista">
                           <input type="hidden" name="id" value="<?php if (isset($editaDesc_colunista->id) && !empty($editaDesc_colunista->id)) {
                              echo $editaDesc_colunista->id;
                           } ?>">
                           <input type="hidden" name="section_1_img_1_Atual" value="<?php if (isset($editaDesc_colunista->section_1_img_1) && !empty($editaDesc_colunista->section_1_img_1)) {
                              echo $editaDesc_colunista->section_1_img_1;
                           } ?>">
                           <input type="hidden" name="section_2_img_8_Atual" value="<?php if (isset($editaDesc_colunista->section_2_img_8) && !empty($editaDesc_colunista->section_2_img_8)) {
                              echo $editaDesc_colunista->section_2_img_8;
                           } ?>">
                           <input type="hidden" name="section_2_img_9_Atual" value="<?php if (isset($editaDesc_colunista->section_2_img_9) && !empty($editaDesc_colunista->section_2_img_9)) {
                              echo $editaDesc_colunista->section_2_img_9;
                           } ?>">
                           <input type="hidden" name="section_3_img_11_Atual" value="<?php if (isset($editaDesc_colunista->section_3_img_11) && !empty($editaDesc_colunista->section_3_img_11)) {
                              echo $editaDesc_colunista->section_3_img_11;
                           } ?>">
                           <input type="hidden" name="section_3_img_12_Atual" value="<?php if (isset($editaDesc_colunista->section_3_img_12) && !empty($editaDesc_colunista->section_3_img_12)) {
                              echo $editaDesc_colunista->section_3_img_12;
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
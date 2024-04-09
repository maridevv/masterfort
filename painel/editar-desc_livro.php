<?php include "verifica.php";
$id = "";
if (isset($_GET['id'])) {
   if (empty($_GET['id'])) {
      header("Location: desc_livro.php");
   } else {
      $id = $_GET['id'];
   }
}
$desc_livro->editar();
$editaDesc_livro = $desc_livro->rsDados($id);
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
   <title>Painel Hoogli - Adicionar desc_livro</title>
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
                  <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Adicionar desc_livro</h4>
                  <div class="d-flex align-items-center">
                     <nav aria-label="breadcrumb">
                        <ol class="breadcrumb m-0 p-0">
                           <li class="breadcrumb-item"><a href="." class="text-muted">Home</a></li>
                           <li class="breadcrumb-item text-muted active" aria-current="page"><a href="desc_livro.php"
                                 class="text-muted">desc_livro</a></li>
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
                                       <label class="mr-sm-2" for="">section 1 img 1 (370 × 489 px)</label>
                                       <input type="file" class="form-control" name="section_1_img_1">
                                    </div>
                                 </div>
                                 <?php if (isset($editaDesc_livro->section_1_img_1) && !empty($editaDesc_livro->section_1_img_1)) { ?>
                                    <div class="col-md-2">
                                       <div class="form-group">
                                          <img src="../img/<?php echo $editaDesc_livro->section_1_img_1; ?>" width="100"
                                             alt="">
                                       </div>
                                    </div>
                                 <?php } ?>
                                 <div class="col-md-6">
                                    <div class="form-group">
                                       <label class="mr-sm-2" for="">section 1 image alt 1</label>
                                       <input type="text" class="form-control" name="section_1_image_alt_1" value="<?php if (isset($editaDesc_livro->section_1_image_alt_1) && !empty($editaDesc_livro->section_1_image_alt_1)) {
                                          echo $editaDesc_livro->section_1_image_alt_1;
                                       } ?>">
                                    </div>
                                 </div>
                                 <div class="col-md-12">
                                    <div class="form-group">
                                       <label class="mr-sm-2" for="">section 1 conteudo 2</label>
                                       <input type="text" class="form-control" name="section_1_conteudo_2" value="<?php if (isset($editaDesc_livro->section_1_conteudo_2) && !empty($editaDesc_livro->section_1_conteudo_2)) {
                                          echo $editaDesc_livro->section_1_conteudo_2;
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
                                       <label class="mr-sm-2" for="">section 2 img 3 (1920 × 342 px)</label>
                                       <input type="file" class="form-control" name="section_2_img_3">
                                    </div>
                                 </div>
                                 <?php if (isset($editaDesc_livro->section_2_img_3) && !empty($editaDesc_livro->section_2_img_3)) { ?>
                                    <div class="col-md-2">
                                       <div class="form-group">
                                          <img src="../img/<?php echo $editaDesc_livro->section_2_img_3; ?>" width="100"
                                             alt="">
                                       </div>
                                    </div>
                                 <?php } ?>
                                 <div class="col-md-6">
                                    <div class="form-group">
                                       <label class="mr-sm-2" for="">section 2 image alt 3</label>
                                       <input type="text" class="form-control" name="section_2_image_alt_3" value="<?php if (isset($editaDesc_livro->section_2_image_alt_3) && !empty($editaDesc_livro->section_2_image_alt_3)) {
                                          echo $editaDesc_livro->section_2_image_alt_3;
                                       } ?>">
                                    </div>
                                 </div>
                                 <div class="col-md-4">
                                    <div class="form-group">
                                       <label class="mr-sm-2" for="">section 2 img 4 (500 x 800px)</label>
                                       <input type="file" class="form-control" name="section_2_img_4">
                                    </div>
                                 </div>
                                 <?php if (isset($editaDesc_livro->section_2_img_4) && !empty($editaDesc_livro->section_2_img_4)) { ?>
                                    <div class="col-md-2">
                                       <div class="form-group">
                                          <img src="../img/<?php echo $editaDesc_livro->section_2_img_4; ?>" width="100"
                                             alt="">
                                       </div>
                                    </div>
                                 <?php } ?>
                                 <div class="col-md-6">
                                    <div class="form-group">
                                       <label class="mr-sm-2" for="">section 2 image alt 4</label>
                                       <input type="text" class="form-control" name="section_2_image_alt_4" value="<?php if (isset($editaDesc_livro->section_2_image_alt_4) && !empty($editaDesc_livro->section_2_image_alt_4)) {
                                          echo $editaDesc_livro->section_2_image_alt_4;
                                       } ?>">
                                    </div>
                                 </div>
                                 <div class="col-md-12">
                                    <div class="form-group">
                                       <label class="mr-sm-2" for="">section 2 conteudo 5</label>
                                       <input type="text" class="form-control" name="section_2_conteudo_5" value="<?php if (isset($editaDesc_livro->section_2_conteudo_5) && !empty($editaDesc_livro->section_2_conteudo_5)) {
                                          echo $editaDesc_livro->section_2_conteudo_5;
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
                                       <label class="mr-sm-2" for="">section 3 img 6 (370 × 399 px)</label>
                                       <input type="file" class="form-control" name="section_3_img_6">
                                    </div>
                                 </div>
                                 <?php if (isset($editaDesc_livro->section_3_img_6) && !empty($editaDesc_livro->section_3_img_6)) { ?>
                                    <div class="col-md-2">
                                       <div class="form-group">
                                          <img src="../img/<?php echo $editaDesc_livro->section_3_img_6; ?>" width="100"
                                             alt="">
                                       </div>
                                    </div>
                                 <?php } ?>
                                 <div class="col-md-6">
                                    <div class="form-group">
                                       <label class="mr-sm-2" for="">section 3 image alt 6</label>
                                       <input type="text" class="form-control" name="section_3_image_alt_6" value="<?php if (isset($editaDesc_livro->section_3_image_alt_6) && !empty($editaDesc_livro->section_3_image_alt_6)) {
                                          echo $editaDesc_livro->section_3_image_alt_6;
                                       } ?>">
                                    </div>
                                 </div>
                                 <div class="col-md-12">
                                    <div class="form-group">
                                       <label class="mr-sm-2" for="">section 3 conteudo 7</label>
                                       <input type="text" class="form-control" name="section_3_conteudo_7" value="<?php if (isset($editaDesc_livro->section_3_conteudo_7) && !empty($editaDesc_livro->section_3_conteudo_7)) {
                                          echo $editaDesc_livro->section_3_conteudo_7;
                                       } ?>">
                                    </div>
                                 </div>
                                 <div class="col-md-12">
                                    <div class="form-group">
                                       <label class="mr-sm-2" for="">section 3 conteudo 8</label>
                                       <input type="text" class="form-control" name="section_3_conteudo_8" value="<?php if (isset($editaDesc_livro->section_3_conteudo_8) && !empty($editaDesc_livro->section_3_conteudo_8)) {
                                          echo $editaDesc_livro->section_3_conteudo_8;
                                       } ?>">
                                    </div>
                                 </div>
                                 <div class="col-md-4">
                                    <div class="form-group">
                                       <label class="mr-sm-2" for="">section 3 link 10</label>
                                       <input type="text" class="form-control" name="section_3_link_10" value="<?php if (isset($editaDesc_livro->section_3_link_10) && !empty($editaDesc_livro->section_3_link_10)) {
                                          echo $editaDesc_livro->section_3_link_10;
                                       } ?>">
                                    </div>
                                 </div>
                                 <div class="col-md-4">
                                    <div class="form-group">
                                       <label class="mr-sm-2" for="">section 3 link alt 10</label>
                                       <input type="text" class="form-control" name="section_3_link_alt_10" value="<?php if (isset($editaDesc_livro->section_3_link_alt_10) && !empty($editaDesc_livro->section_3_link_alt_10)) {
                                          echo $editaDesc_livro->section_3_link_alt_10;
                                       } ?>">
                                    </div>
                                 </div>
                                 <div class="col-md-4">
                                    <div class="form-group">
                                       <label class="mr-sm-2" for="">section 3 link conteudo 10</label>
                                       <input type="text" class="form-control" name="section_3_link_conteudo_10" value="<?php if (isset($editaDesc_livro->section_3_link_conteudo_10) && !empty($editaDesc_livro->section_3_link_conteudo_10)) {
                                          echo $editaDesc_livro->section_3_link_conteudo_10;
                                       } ?>">
                                    </div>
                                 </div>
                                 <div class="col-md-12">
                                    <div class="form-group">
                                       <label class="mr-sm-2" for="">section 3 conteudo 11</label>
                                       <input type="text" class="form-control" name="section_3_conteudo_11" value="<?php if (isset($editaDesc_livro->section_3_conteudo_11) && !empty($editaDesc_livro->section_3_conteudo_11)) {
                                          echo $editaDesc_livro->section_3_conteudo_11;
                                       } ?>">
                                    </div>
                                 </div>
                                 <div class="col-md-4">
                                    <div class="form-group">
                                       <label class="mr-sm-2" for="">section 3 link 12</label>
                                       <input type="text" class="form-control" name="section_3_link_12" value="<?php if (isset($editaDesc_livro->section_3_link_12) && !empty($editaDesc_livro->section_3_link_12)) {
                                          echo $editaDesc_livro->section_3_link_12;
                                       } ?>">
                                    </div>
                                 </div>
                                 <div class="col-md-4">
                                    <div class="form-group">
                                       <label class="mr-sm-2" for="">section 3 link alt 12</label>
                                       <input type="text" class="form-control" name="section_3_link_alt_12" value="<?php if (isset($editaDesc_livro->section_3_link_alt_12) && !empty($editaDesc_livro->section_3_link_alt_12)) {
                                          echo $editaDesc_livro->section_3_link_alt_12;
                                       } ?>">
                                    </div>
                                 </div>
                                 <div class="col-md-4">
                                    <div class="form-group">
                                       <label class="mr-sm-2" for="">section 3 link conteudo 12</label>
                                       <input type="text" class="form-control" name="section_3_link_conteudo_12" value="<?php if (isset($editaDesc_livro->section_3_link_conteudo_12) && !empty($editaDesc_livro->section_3_link_conteudo_12)) {
                                          echo $editaDesc_livro->section_3_link_conteudo_12;
                                       } ?>">
                                    </div>
                                 </div>
                                 <div class="col-md-4">
                                    <div class="form-group">
                                       <label class="mr-sm-2" for="">section 3 img 13 (770 × 441 px)</label>
                                       <input type="file" class="form-control" name="section_3_img_13">
                                    </div>
                                 </div>
                                 <?php if (isset($editaDesc_livro->section_3_img_13) && !empty($editaDesc_livro->section_3_img_13)) { ?>
                                    <div class="col-md-2">
                                       <div class="form-group">
                                          <img src="../img/<?php echo $editaDesc_livro->section_3_img_13; ?>" width="100"
                                             alt="">
                                       </div>
                                    </div>
                                 <?php } ?>
                                 <div class="col-md-6">
                                    <div class="form-group">
                                       <label class="mr-sm-2" for="">section 3 image alt 13</label>
                                       <input type="text" class="form-control" name="section_3_image_alt_13" value="<?php if (isset($editaDesc_livro->section_3_image_alt_13) && !empty($editaDesc_livro->section_3_image_alt_13)) {
                                          echo $editaDesc_livro->section_3_image_alt_13;
                                       } ?>">
                                    </div>
                                 </div>
                                 <div class="col-md-12">
                                    <div class="form-group">
                                       <label class="mr-sm-2" for="">section 3 conteudo 14</label>
                                       <input type="text" class="form-control" name="section_3_conteudo_14" value="<?php if (isset($editaDesc_livro->section_3_conteudo_14) && !empty($editaDesc_livro->section_3_conteudo_14)) {
                                          echo $editaDesc_livro->section_3_conteudo_14;
                                       } ?>">
                                    </div>
                                 </div>
                                 <div class="col-md-12">
                                    <div class="form-group">
                                       <label class="mr-sm-2" for="">section 3 conteudo 15</label>

                                        <textarea name="section_3_conteudo_15" class="ckeditor" id="ckeditor" cols="30"
                                          rows="10"><?php if (isset($editaDesc_livro->section_3_conteudo_15) && !empty($editaDesc_livro->section_3_conteudo_15)) {
                                             echo $editaDesc_livro->section_3_conteudo_15;
                                          } ?></textarea>
                                    </div>
                                 </div>
                                 <div class="col-md-4">
                                    <div class="form-group">
                                       <label class="mr-sm-2" for="">section 3 img 16 (270 × 151 px)</label>
                                       <input type="file" class="form-control" name="section_3_img_16">
                                    </div>
                                 </div>
                                 <?php if (isset($editaDesc_livro->section_3_img_16) && !empty($editaDesc_livro->section_3_img_16)) { ?>
                                    <div class="col-md-2">
                                       <div class="form-group">
                                          <img src="../img/<?php echo $editaDesc_livro->section_3_img_16; ?>" width="100"
                                             alt="">
                                       </div>
                                    </div>
                                 <?php } ?>
                                 <div class="col-md-6">
                                    <div class="form-group">
                                       <label class="mr-sm-2" for="">section 3 image alt 16</label>
                                       <input type="text" class="form-control" name="section_3_image_alt_16" value="<?php if (isset($editaDesc_livro->section_3_image_alt_16) && !empty($editaDesc_livro->section_3_image_alt_16)) {
                                          echo $editaDesc_livro->section_3_image_alt_16;
                                       } ?>">
                                    </div>
                                 </div>
                                 <div class="col-md-12">
                                    <div class="form-group">
                                       <label class="mr-sm-2" for="">section 3 conteudo 17</label>
                                       <input type="text" class="form-control" name="section_3_conteudo_17" value="<?php if (isset($editaDesc_livro->section_3_conteudo_17) && !empty($editaDesc_livro->section_3_conteudo_17)) {
                                          echo $editaDesc_livro->section_3_conteudo_17;
                                       } ?>">
                                    </div>
                                 </div>
                                 <div class="col-md-12">
                                    <div class="form-group">
                                       <label class="mr-sm-2" for="">section 3 conteudo 18</label>
                                       <input type="text" class="form-control" name="section_3_conteudo_18" value="<?php if (isset($editaDesc_livro->section_3_conteudo_18) && !empty($editaDesc_livro->section_3_conteudo_18)) {
                                          echo $editaDesc_livro->section_3_conteudo_18;
                                       } ?>">
                                    </div>
                                 </div>
                                 <div class="col-md-12">
                                    <div class="form-group">
                                       <label class="mr-sm-2" for="">section 3 conteudo 19</label>
                                       <input type="text" class="form-control" name="section_3_conteudo_19" value="<?php if (isset($editaDesc_livro->section_3_conteudo_19) && !empty($editaDesc_livro->section_3_conteudo_19)) {
                                          echo $editaDesc_livro->section_3_conteudo_19;
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
                                       <textarea name="meta_title" class="form-control" id="ckeditor" cols="30"
                                          rows="4"><?php if (isset($editaDesc_livro->meta_title) && !empty($editaDesc_livro->meta_title)) {
                                             echo $editaDesc_livro->meta_title;
                                          } ?></textarea>
                                    </div>
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <div class="col-md-12">
                                    <div class="form-group">
                                       <label class="mr-sm-2" for="">Meta Keywords</label>
                                       <textarea name="meta_keywords" class="form-control" id="ckeditor" cols="30"
                                          rows="4"><?php if (isset($editaDesc_livro->meta_keywords) && !empty($editaDesc_livro->meta_keywords)) {
                                             echo $editaDesc_livro->meta_keywords;
                                          } ?></textarea>
                                    </div>
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <div class="col-md-12">
                                    <div class="form-group">
                                       <label class="mr-sm-2" for="">Meta Description</label>
                                       <textarea name="meta_description" class="form-control" id="ckeditor" cols="30"
                                          rows="4"><?php if (isset($editaDesc_livro->meta_description) && !empty($editaDesc_livro->meta_description)) {
                                             echo $editaDesc_livro->meta_description;
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
                           <input type="hidden" name="acao" value="editaDesc_livro">
                           <input type="hidden" name="id" value="<?php if (isset($editaDesc_livro->id) && !empty($editaDesc_livro->id)) {
                              echo $editaDesc_livro->id;
                           } ?>">
                           <input type="hidden" name="section_1_img_1_Atual" value="<?php if (isset($editaDesc_livro->section_1_img_1) && !empty($editaDesc_livro->section_1_img_1)) {
                              echo $editaDesc_livro->section_1_img_1;
                           } ?>">
                           <input type="hidden" name="section_2_img_3_Atual" value="<?php if (isset($editaDesc_livro->section_2_img_3) && !empty($editaDesc_livro->section_2_img_3)) {
                              echo $editaDesc_livro->section_2_img_3;
                           } ?>">
                           <input type="hidden" name="section_2_img_4_Atual" value="<?php if (isset($editaDesc_livro->section_2_img_4) && !empty($editaDesc_livro->section_2_img_4)) {
                              echo $editaDesc_livro->section_2_img_4;
                           } ?>">
                           <input type="hidden" name="section_3_img_6_Atual" value="<?php if (isset($editaDesc_livro->section_3_img_6) && !empty($editaDesc_livro->section_3_img_6)) {
                              echo $editaDesc_livro->section_3_img_6;
                           } ?>">
                           <input type="hidden" name="section_3_img_13_Atual" value="<?php if (isset($editaDesc_livro->section_3_img_13) && !empty($editaDesc_livro->section_3_img_13)) {
                              echo $editaDesc_livro->section_3_img_13;
                           } ?>">
                           <input type="hidden" name="section_3_img_16_Atual" value="<?php if (isset($editaDesc_livro->section_3_img_16) && !empty($editaDesc_livro->section_3_img_16)) {
                              echo $editaDesc_livro->section_3_img_16;
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
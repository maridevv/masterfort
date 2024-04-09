<?php include "verifica.php";
$id = "";
if(isset($_GET['id'])){
if(empty($_GET['id'])){
header("Location: error.php");
}else{
$id = $_GET['id'];
    }
}
$error->editar();
$editaError = $error->rsDados($id);
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
<title>Painel Hoogli - Adicionar error</title>
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
<h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Adicionar error</h4>
<div class="d-flex align-items-center">
<nav aria-label="breadcrumb">
<ol class="breadcrumb m-0 p-0">
<li class="breadcrumb-item"><a href="." class="text-muted">Home</a></li>
<li class="breadcrumb-item text-muted active" aria-current="page"><a href="error.php" class="text-muted">error</a></li>
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
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 1 conteudo 1</label>
  <input type="text" class="form-control" name="section_1_conteudo_1" value="<?php if(isset($editaError->section_1_conteudo_1) && !empty($editaError->section_1_conteudo_1)){ echo $editaError->section_1_conteudo_1;}?>" >
   </div>
  </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 1 conteudo 2</label>
  <input type="text" class="form-control" name="section_1_conteudo_2" value="<?php if(isset($editaError->section_1_conteudo_2) && !empty($editaError->section_1_conteudo_2)){ echo $editaError->section_1_conteudo_2;}?>" >
   </div>
  </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 1 conteudo 3</label>
  <input type="text" class="form-control" name="section_1_conteudo_3" value="<?php if(isset($editaError->section_1_conteudo_3) && !empty($editaError->section_1_conteudo_3)){ echo $editaError->section_1_conteudo_3;}?>" >
   </div>
  </div>
<div class="col-md-4">
<div class="form-group">
 <label class="mr-sm-2" for="">section 1 link 4</label>
<input type="text" class="form-control" name="section_1_link_4" value="<?php if(isset($editaError->section_1_link_4) && !empty($editaError->section_1_link_4)){ echo $editaError->section_1_link_4;}?>" >
</div>
</div>
 <div class="col-md-4">
 <div class="form-group">
 <label class="mr-sm-2" for="">section 1 link alt 4</label>
<input type="text" class="form-control" name="section_1_link_alt_4" value="<?php if(isset($editaError->section_1_link_alt_4) && !empty($editaError->section_1_link_alt_4)){ echo $editaError->section_1_link_alt_4;}?>" >
</div>
 </div>
<div class="col-md-4">
<div class="form-group">
<label class="mr-sm-2" for="">section 1 link conteudo 4</label>
 <input type="text" class="form-control" name="section_1_link_conteudo_4" value="<?php if(isset($editaError->section_1_link_conteudo_4) && !empty($editaError->section_1_link_conteudo_4)){ echo $editaError->section_1_link_conteudo_4;}?>" >
 </div>
 </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 1 conteudo 5</label>
  <input type="text" class="form-control" name="section_1_conteudo_5" value="<?php if(isset($editaError->section_1_conteudo_5) && !empty($editaError->section_1_conteudo_5)){ echo $editaError->section_1_conteudo_5;}?>" >
   </div>
  </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 1 conteudo 6</label>
  <input type="text" class="form-control" name="section_1_conteudo_6" value="<?php if(isset($editaError->section_1_conteudo_6) && !empty($editaError->section_1_conteudo_6)){ echo $editaError->section_1_conteudo_6;}?>" >
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
<label class="mr-sm-2" for="">section 2 img 7 ()</label>
   <input type="file" class="form-control" name="section_2_img_7" >
</div>
 </div>
 <?php if(isset($editaError->section_2_img_7) && !empty($editaError->section_2_img_7)){ ?>
<div class="col-md-2">
 <div class="form-group">
 <img src="../img/<?php echo $editaError->section_2_img_7;?>" width="100" alt="">
</div>
</div>
<?php }?> 
   <div class="col-md-6">
  <div class="form-group">
  <label class="mr-sm-2" for="">section 2 image alt 7</label>
 <input type="text" class="form-control" name="section_2_image_alt_7" value="<?php if(isset($editaError->section_2_image_alt_7) && !empty($editaError->section_2_image_alt_7)){ echo $editaError->section_2_image_alt_7;}?>" >
</div>
 </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 2 conteudo 8</label>
  <input type="text" class="form-control" name="section_2_conteudo_8" value="<?php if(isset($editaError->section_2_conteudo_8) && !empty($editaError->section_2_conteudo_8)){ echo $editaError->section_2_conteudo_8;}?>" >
   </div>
  </div>
<div class="col-md-4">
<div class="form-group">
 <label class="mr-sm-2" for="">section 2 link 9</label>
<input type="text" class="form-control" name="section_2_link_9" value="<?php if(isset($editaError->section_2_link_9) && !empty($editaError->section_2_link_9)){ echo $editaError->section_2_link_9;}?>" >
</div>
</div>
 <div class="col-md-4">
 <div class="form-group">
 <label class="mr-sm-2" for="">section 2 link alt 9</label>
<input type="text" class="form-control" name="section_2_link_alt_9" value="<?php if(isset($editaError->section_2_link_alt_9) && !empty($editaError->section_2_link_alt_9)){ echo $editaError->section_2_link_alt_9;}?>" >
</div>
 </div>
<div class="col-md-4">
<div class="form-group">
<label class="mr-sm-2" for="">section 2 link conteudo 9</label>
 <input type="text" class="form-control" name="section_2_link_conteudo_9" value="<?php if(isset($editaError->section_2_link_conteudo_9) && !empty($editaError->section_2_link_conteudo_9)){ echo $editaError->section_2_link_conteudo_9;}?>" >
 </div>
 </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 2 conteudo 10</label>
  <input type="text" class="form-control" name="section_2_conteudo_10" value="<?php if(isset($editaError->section_2_conteudo_10) && !empty($editaError->section_2_conteudo_10)){ echo $editaError->section_2_conteudo_10;}?>" >
   </div>
  </div>
</div>
<div class="clearfix"></div>
 <div class="form-group row">
<div class="col-md-12">
 <h5>Informaçåo SEO</h5>
 </div>
 </div>
</div>
<div class="form-actions">
<div class="text-right">
<button type="submit" class="btn btn-info">Salvar</button>
<button type="reset" class="btn btn-dark">Resetar</button>
</div>
<input type="hidden" name="acao" value="editaError">
<input type="hidden" name="id" value="<?php if(isset($editaError->id) && !empty($editaError->id)){ echo $editaError->id;}?>">
<input type="hidden" name="section_2_img_7_Atual" value="<?php if(isset($editaError->section_2_img_7) && !empty($editaError->section_2_img_7)){ echo $editaError->section_2_img_7;}?>">
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

<?php include "includes.php";
$id = '';
if (isset($_GET['id'])) {
if (empty($_GET['id'])) {
header('Location: /');
 } else {
 $id = $_GET['id'];
}
 } else {
 header('Location: /');
   }
include "Class/Cta.class.php";
$puxaCta = Cta::getInstance(Conexao::getInstance());
$cta = $puxaCta->rsDados('', '', '', $id, '');
?>
<head>
 <?php include 'head.php'; ?>
  <meta name="theme-color" content="#91d8f7">
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1"> 
<title>
<?php if (isset($cta->meta_title) && !empty($cta->meta_title)) {
echo $cta->meta_title;
} ?>
</title>
<meta name="description" content="<?php if (isset($cta->meta_description) && !empty($cta->meta_description)) {
    echo $cta->meta_description;
} ?>" />
<meta name="keywords" content="<?php if (isset($cta->meta_keywords) && !empty($cta->meta_keywords)) {
    echo $cta->meta_keywords;
} ?>">
<meta name="twitter:card" content="<?php if (isset($cta->meta_title) && !empty($cta->meta_title)) {
    echo $cta->meta_title;
} ?>" />
<meta name="twitter:site" content="<?php echo SITE_URL; ?>" />
  <meta name="twitter:creator" content="Hoogli" />
  <meta property="og:title" content="<?php if (isset($cta->meta_title) && !empty($cta->meta_title)) {
      echo $cta->meta_title;
  } ?>" />
<meta property="og:type" content="website" />
  <meta property="og:url" content="<?php echo SITE_URL; ?>" />
  <meta property="og:image:type" content="image/png" />
  <meta property="og:image" content="<?php echo SITE_URL; ?>/img/<?php echo $infoSistema->favicon; ?>" />
<meta property="og:image:width" content="400" />
  <meta property="og:image:height" content="300" />
  <meta property="og:description" content="<?php if (isset($cta->meta_description) && !empty($cta->meta_description)) {
      echo $cta->meta_description;
  } ?>" />
<meta property="og:determiner" content="A" />
  <meta property="og:locale" content="pt_BR" />
  <meta property="og:site_name" content="<?php echo $infoSistema->nome_empresa ?>" />
<meta name="author" content="Hoogli">
  <link rel="shortcut icon" href="<?php echo SITE_URL;?>/img/<?php echo $infoSistema->favicon;?>">
  <link rel="icon" href="<?php echo SITE_URL;?>/img/<?php echo $infoSistema->favicon;?>">
</head>
<?php include 'header.php'; ?>
    <style>
  .image_single_home {
      background-image: url(<?php echo SITE_URL . '/img/' . $cta->section_1_img_3 ?>);
      background-position-y: center;
      background-size: cover;
  }

  @media (max-width:600px) {
      .image_single_home {
          background-image: url(<?php echo SITE_URL . '/img/' . $cta->section_1_img_4 ?>);
          background-position-y: center;
          background-size: cover;
      }
  }
</style>
 <?php include "footer.php" ?>
<?php include "scripts.php" ?>
<body>                                      <section>                      <div class="cta_content">                          <?php echo $cta->section_1_conteudo_1 ?>                          <div class="cta_link">                              <a href="<?php echo $cta->section_1_link_conteudo_2 ?>" aria-label="<?php echo $cta->section_1_link_alt_2 ?>" class=""><?php echo $cta->section_1_link_2 ?></a>                          </div>                      </div>                  </section>                  </body>
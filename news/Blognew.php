<?php include "includes.php";
include "Class/blog.class.php";
$puxaBlog = Blog::getInstance(Conexao::getInstance());
$blog = $puxaBlog->rsDados(1);
?>

<head>
  <?php include 'head.php'; ?>
  <meta name="theme-color" content="#91d8f7">
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>
    <?php if (isset($blog->meta_title) && !empty($blog->meta_title)) {
      echo $blog->meta_title;
    } ?>
  </title>
  <meta name="description" content="<?php if (isset($blog->meta_description) && !empty($blog->meta_description)) {
    echo $blog->meta_description;
  } ?>" />
  <meta name="keywords" content="<?php if (isset($blog->meta_keywords) && !empty($blog->meta_keywords)) {
    echo $blog->meta_keywords;
  } ?>">
  <meta name="twitter:card" content="<?php if (isset($blog->meta_title) && !empty($blog->meta_title)) {
    echo $blog->meta_title;
  } ?>" />
  <meta name="twitter:site" content="<?php echo SITE_URL; ?>" />
  <meta name="twitter:creator" content="Hoogli" />
  <meta property="og:title" content="<?php if (isset($blog->meta_title) && !empty($blog->meta_title)) {
    echo $blog->meta_title;
  } ?>" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="<?php echo SITE_URL; ?>" />
  <meta property="og:image:type" content="image/png" />
  <meta property="og:image" content="<?php echo SITE_URL; ?>/img/<?php echo $infoSistema->favicon; ?>" />
  <meta property="og:image:width" content="400" />
  <meta property="og:image:height" content="300" />
  <meta property="og:description" content="<?php if (isset($blog->meta_description) && !empty($blog->meta_description)) {
    echo $blog->meta_description;
  } ?>" />
  <meta property="og:determiner" content="A" />
  <meta property="og:locale" content="pt_BR" />
  <meta property="og:site_name" content="<?php echo $infoSistema->nome_empresa ?>" />
  <meta name="author" content="Hoogli">
  <link rel="shortcut icon" href="<?php echo SITE_URL; ?>/img/<?php echo $infoSistema->favicon; ?>">
  <link rel="icon" href="<?php echo SITE_URL; ?>/img/<?php echo $infoSistema->favicon; ?>">
</head>
<?php include 'header.php'; ?>
<style>
  .image_single_home {
    background-image: url(<?php echo SITE_URL . '/img/' . $blog->section_1_img_3 ?>);
    background-position-y: center;
    background-size: cover;
  }

  @media (max-width:600px) {
    .image_single_home {
      background-image: url(<?php echo SITE_URL . '/img/' . $blog->section_1_img_4 ?>);
      background-position-y: center;
      background-size: cover;
    }
  }
</style>
<?php include "footer.php" ?>
<?php include "scripts.php" ?>

<body>
  <div class="page-wrapper">
    <section class="page-header clearfix blogs_one">
      <div class="container">
        <div class="page-header__inner text-center clearfix">
          <?php echo $blog->section_1_conteudo_1 ?>
        </div>
      </div>
    </section>
  </div>
</body>
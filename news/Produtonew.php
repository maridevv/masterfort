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
include "Class/Produto.class.php";
$puxaProduto = Produto::getInstance(Conexao::getInstance());
$produto = $puxaProduto->rsDados('', '', '', $id, '');
?>

<head>
  <?php include 'head.php'; ?>
  <meta name="theme-color" content="#91d8f7">
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>
    <?php if (isset($produto->meta_title) && !empty($produto->meta_title)) {
      echo $produto->meta_title;
    } ?>
  </title>
  <meta name="description" content="<?php if (isset($produto->meta_description) && !empty($produto->meta_description)) {
    echo $produto->meta_description;
  } ?>" />
  <meta name="keywords" content="<?php if (isset($produto->meta_keywords) && !empty($produto->meta_keywords)) {
    echo $produto->meta_keywords;
  } ?>">
  <meta name="twitter:card" content="<?php if (isset($produto->meta_title) && !empty($produto->meta_title)) {
    echo $produto->meta_title;
  } ?>" />
  <meta name="twitter:site" content="<?php echo SITE_URL; ?>" />
  <meta name="twitter:creator" content="Hoogli" />
  <meta property="og:title" content="<?php if (isset($produto->meta_title) && !empty($produto->meta_title)) {
    echo $produto->meta_title;
  } ?>" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="<?php echo SITE_URL; ?>" />
  <meta property="og:image:type" content="image/png" />
  <meta property="og:image" content="<?php echo SITE_URL; ?>/img/<?php echo $infoSistema->favicon; ?>" />
  <meta property="og:image:width" content="400" />
  <meta property="og:image:height" content="300" />
  <meta property="og:description" content="<?php if (isset($produto->meta_description) && !empty($produto->meta_description)) {
    echo $produto->meta_description;
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
    background-image: url(<?php echo SITE_URL . '/img/' . $produto->section_1_img_3 ?>);
    background-position-y: center;
    background-size: cover;
  }

  @media (max-width:600px) {
    .image_single_home {
      background-image: url(<?php echo SITE_URL . '/img/' . $produto->section_1_img_4 ?>);
      background-position-y: center;
      background-size: cover;
    }
  }
</style>
<?php include "footer.php" ?>
<?php include "scripts.php" ?>

<body>
  <div class="page-wrapper">



    <section class="swiper-slide home_slide">
      <div class="slider-image">
        <img src="<?php echo SITE_URL; ?>/img/<?php echo $produto->section_1_img_1 ?>"
          alt="<?php echo $produto->section_1_image_alt_1 ?>" class="w-100">
      </div>
      <div class="slider_text">
        <?php echo $produto->section_1_conteudo_2 ?>
        <?php echo $produto->section_1_conteudo_3 ?>
      </div>
    </section>


    <section class="produto_single_one">
      <div class="container z-2">
        <div class="row">
          <div class="col-6 produto_single_col">
            <?php echo $produto->section_2_conteudo_4 ?>
            <?php echo $produto->section_2_conteudo_5 ?>
            <div class="produto_single_one_link"> <a href="<?php echo $produto->section_2_link_conteudo_8 ?>"
                aria-label="<?php echo $produto->section_2_link_alt_8 ?>" class="">
                <?php echo $produto->section_2_link_8 ?>
              </a> </div>
          </div>
          <div class="col-6"> <img src="<?php echo SITE_URL; ?>/img/<?php echo $produto->section_2_img_9 ?>"
              alt="<?php echo $produto->section_2_image_alt_9 ?>" class="w-100"> </div>
        </div>
      </div>
      <div class="shape_produto"> <img src="<?php echo SITE_URL; ?>/img/<?php echo $produto->section_2_img_10 ?>"
          alt="<?php echo $produto->section_2_image_alt_10 ?>" class=""> </div>
    </section>
    <section class="home_four">
      <div class="container">
        <div class="home_four_content_icons">
          <div class="row home_four_content_icons_section">
            <div class="col-4"> <img src="<?php echo SITE_URL; ?>/img/<?php echo $produto->section_3_img_11 ?>"
                alt="<?php echo $produto->section_3_image_alt_11 ?>" class="">
              <?php echo $produto->section_3_conteudo_12 ?>
            </div>
            <div class="col-4"> <img src="<?php echo SITE_URL; ?>/img/<?php echo $produto->section_3_img_13 ?>"
                alt="<?php echo $produto->section_3_image_alt_13 ?>" class="">
              <?php echo $produto->section_3_conteudo_14 ?>
            </div>
            <div class="col-4"> <img src="<?php echo SITE_URL; ?>/img/<?php echo $produto->section_3_img_15 ?>"
                alt="<?php echo $produto->section_3_image_alt_15 ?>" class="">
              <?php echo $produto->section_3_conteudo_16 ?>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="video-two">
      <div class="container">
        <div class="row">
          <div class="col-6 video-two_content">
            <?php echo $produto->section_4_conteudo_17 ?>
            <?php echo $produto->section_4_conteudo_18 ?>
          </div>
          <div class="col-6 position-relative">
            <img src="<?php echo SITE_URL; ?>/img/<?php echo $produto->section_4_img_19 ?>"
              alt="<?php echo $produto->section_4_image_alt_19 ?>" class="w-100">
            <div class="video_two_link"> <a href="                "
                aria-label="<?php echo $produto->section_4_link_alt_20 ?>" class="video-popup">
                <?php echo $produto->section_4_link_20 ?>
              </a> </div>
          </div>
        </div>
      </div>
    </section>
    <section class="home_six">
      <div class="container">
        <div class="row home_six_content">
          <div class="col-6 d-flex justify-content-center">
            <div class="home_six_text">
              <?php echo $produto->section_5_conteudo_21 ?>
              <div class="home_six_link"> <a href="<?php echo $produto->section_5_link_conteudo_22 ?>"
                  aria-label="<?php echo $produto->section_5_link_alt_22 ?>" class="">
                  <?php echo $produto->section_5_link_22 ?>
                </a> </div>
            </div>
          </div>
          <div class="col-6"> <img src="<?php echo SITE_URL; ?>/img/<?php echo $produto->section_5_img_23 ?>"
              alt="<?php echo $produto->section_5_image_alt_23 ?>" class="w-100 z-1"> </div>
        </div>
      </div>
    </section>
    <section class="position-relative pt-5 pb-5">
      <div class="container">
        <div class="texto_corrido">
          <?php echo $produto->section_6_textarea_24 ?>
        </div>
      </div>
    </section>
  </div>
</body>
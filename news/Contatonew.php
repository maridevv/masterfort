<?php include "includes.php";
include "Class/contato.class.php";
$puxaContato = Contato::getInstance(Conexao::getInstance());
$contato = $puxaContato->rsDados(1);
?>

<head>
  <?php include 'head.php'; ?>
  <meta name="theme-color" content="#91d8f7">
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>
    <?php if (isset($contato->meta_title) && !empty($contato->meta_title)) {
      echo $contato->meta_title;
    } ?>
  </title>
  <meta name="description" content="<?php if (isset($contato->meta_description) && !empty($contato->meta_description)) {
    echo $contato->meta_description;
  } ?>" />
  <meta name="keywords" content="<?php if (isset($contato->meta_keywords) && !empty($contato->meta_keywords)) {
    echo $contato->meta_keywords;
  } ?>">
  <meta name="twitter:card" content="<?php if (isset($contato->meta_title) && !empty($contato->meta_title)) {
    echo $contato->meta_title;
  } ?>" />
  <meta name="twitter:site" content="<?php echo SITE_URL; ?>" />
  <meta name="twitter:creator" content="Hoogli" />
  <meta property="og:title" content="<?php if (isset($contato->meta_title) && !empty($contato->meta_title)) {
    echo $contato->meta_title;
  } ?>" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="<?php echo SITE_URL; ?>" />
  <meta property="og:image:type" content="image/png" />
  <meta property="og:image" content="<?php echo SITE_URL; ?>/img/<?php echo $infoSistema->favicon; ?>" />
  <meta property="og:image:width" content="400" />
  <meta property="og:image:height" content="300" />
  <meta property="og:description" content="<?php if (isset($contato->meta_description) && !empty($contato->meta_description)) {
    echo $contato->meta_description;
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
    background-image: url(<?php echo SITE_URL . '/img/' . $contato->section_1_img_3 ?>);
    background-position-y: center;
    background-size: cover;
  }

  @media (max-width:600px) {
    .image_single_home {
      background-image: url(<?php echo SITE_URL . '/img/' . $contato->section_1_img_4 ?>);
      background-position-y: center;
      background-size: cover;
    }
  }
</style>
<?php include "footer.php" ?>
<?php include "scripts.php" ?>

<body>
  <div class="page-wrapper">
    <div class="stricky-header stricked-menu main-menu">
      <div class="sticky-header__content"> </div>
    </div>
    <section class="contact_one page-header clearfix image_contato">
      <div class="container">
        <div class="page-header__inner text-center clearfix">
          <?php echo $contato->section_1_conteudo_1 ?>
        </div>
      </div>
    </section>
    <section class="products_three">
      <div class="container">
        <div class="products_three_content">
          <div class="row">
            <div class="col-6 products_three_title">
              <?php echo $contato->section_2_conteudo_2 ?>
            </div>
            <div class="col-6">
              <div class="products_three_title_relative">
                <img src="<?php echo SITE_URL; ?>/img/<?php echo $contato->section_2_img_3 ?>"
                  alt="<?php echo $contato->section_2_image_alt_3 ?>" class="">
                <div class="products_three_title_relative_item">
                  <?php echo $contato->section_2_conteudo_4 ?>
                  <div class="d-flex align-items-center products_three_item">
                    <img src="<?php echo SITE_URL; ?>/img/<?php echo $contato->section_2_img_5 ?>"
                      alt="<?php echo $contato->section_2_image_alt_5 ?>" class="">
                  </div>
                  <div class="d-flex align-items-center products_three_item">
                    <img src="<?php echo SITE_URL; ?>/img/<?php echo $contato->section_2_img_6 ?>"
                      alt="<?php echo $contato->section_2_image_alt_6 ?>" class="">
                  </div>
                  <div class="d-flex align-items-center products_three_item">
                    <img src="<?php echo SITE_URL; ?>/img/<?php echo $contato->section_2_img_7 ?>"
                      alt="<?php echo $contato->section_2_image_alt_7 ?>" class="">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</body>
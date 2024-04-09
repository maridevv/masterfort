<?php include "includes.php";
include "Class/produtos.class.php";
$puxaProdutos = Produtos::getInstance(Conexao::getInstance());
$produtos = $puxaProdutos->rsDados(1);
?>

<head>
  <?php include 'head.php'; ?>
  <meta name="theme-color" content="#91d8f7">
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>
    <?php if (isset($produtos->meta_title) && !empty($produtos->meta_title)) {
      echo $produtos->meta_title;
    } ?>
  </title>
  <meta name="description" content="<?php if (isset($produtos->meta_description) && !empty($produtos->meta_description)) {
    echo $produtos->meta_description;
  } ?>" />
  <meta name="keywords" content="<?php if (isset($produtos->meta_keywords) && !empty($produtos->meta_keywords)) {
    echo $produtos->meta_keywords;
  } ?>">
  <meta name="twitter:card" content="<?php if (isset($produtos->meta_title) && !empty($produtos->meta_title)) {
    echo $produtos->meta_title;
  } ?>" />
  <meta name="twitter:site" content="<?php echo SITE_URL; ?>" />
  <meta name="twitter:creator" content="Hoogli" />
  <meta property="og:title" content="<?php if (isset($produtos->meta_title) && !empty($produtos->meta_title)) {
    echo $produtos->meta_title;
  } ?>" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="<?php echo SITE_URL; ?>" />
  <meta property="og:image:type" content="image/png" />
  <meta property="og:image" content="<?php echo SITE_URL; ?>/img/<?php echo $infoSistema->favicon; ?>" />
  <meta property="og:image:width" content="400" />
  <meta property="og:image:height" content="300" />
  <meta property="og:description" content="<?php if (isset($produtos->meta_description) && !empty($produtos->meta_description)) {
    echo $produtos->meta_description;
  } ?>" />
  <meta property="og:determiner" content="A" />
  <meta property="og:locale" content="pt_BR" />
  <meta property="og:site_name" content="<?php echo $infoSistema->nome_empresa ?>" />
  <meta name="author" content="Hoogli">
  <link rel="shortcut icon" href="<?php echo SITE_URL; ?>/img/<?php echo $infoSistema->favicon; ?>">
  <link rel="icon" href="<?php echo SITE_URL; ?>/img/<?php echo $infoSistema->favicon; ?>">
</head>

<body>
  <div class="page-wrapper">
    <section class="products_one">
      <div class="container h-100">
        <?php echo $produtos->section_1_conteudo_1 ?>
      </div>
    </section>
    <section class="products_three">
      <div class="container">
        <div class="products_three_content">
          <div class="row">
            <div class="col-6 products_three_title">
              <?php echo $produtos->section_2_conteudo_2 ?>
            </div>
            <div class="col-6">
              <div class="products_three_title_relative">
                <img src="<?php echo SITE_URL; ?>/img/<?php echo $produtos->section_2_img_3 ?>"
                  alt="<?php echo $produtos->section_2_image_alt_3 ?>">
                <div class="products_three_title_relative_item">
                  <?php echo $produtos->section_2_conteudo_4 ?>
                  <div class="d-flex align-items-center products_three_item">
                    <img src="<?php echo SITE_URL; ?>/img/<?php echo $produtos->section_2_img_5 ?>"
                      alt="<?php echo $produtos->section_2_image_alt_5 ?>">
                  </div>
                  <div class="d-flex align-items-center products_three_item">
                    <img src="<?php echo SITE_URL; ?>/img/<?php echo $produtos->section_2_img_6 ?>"
                      alt="<?php echo $produtos->section_2_image_alt_6 ?>">
                  </div>
                  <div class="d-flex align-items-center products_three_item">
                    <img src="<?php echo SITE_URL; ?>/img/<?php echo $produtos->section_2_img_7 ?>"
                      alt="<?php echo $produtos->section_2_image_alt_7 ?>">
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
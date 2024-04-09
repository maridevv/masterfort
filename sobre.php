<?php include "includes.php";
include "Class/sobre.class.php";
$puxaSobre = Sobre::getInstance(Conexao::getInstance());
$sobre = $puxaSobre->rsDados(1);

include "Class/produto.class.php";
$puxaProduto = Produto::getInstance(Conexao::getInstance());
$produto = $puxaProduto->rsDados();
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <?php include 'head.php'; ?>
  <meta name="theme-color" content="#91d8f7">
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>
    <?php if (isset($sobre->meta_title) && !empty($sobre->meta_title)) {
      echo $sobre->meta_title;
    } ?>
  </title>
  <meta name="description" content="<?php if (isset($sobre->meta_description) && !empty($sobre->meta_description)) {
    echo $sobre->meta_description;
  } ?>" />
  <meta name="keywords" content="<?php if (isset($sobre->meta_keywords) && !empty($sobre->meta_keywords)) {
    echo $sobre->meta_keywords;
  } ?>">
  <meta name="twitter:card" content="<?php if (isset($sobre->meta_title) && !empty($sobre->meta_title)) {
    echo $sobre->meta_title;
  } ?>" />
  <meta name="twitter:site" content="<?php echo SITE_URL; ?>" />
  <meta name="twitter:creator" content="Hoogli" />
  <meta property="og:title" content="<?php if (isset($sobre->meta_title) && !empty($sobre->meta_title)) {
    echo $sobre->meta_title;
  } ?>" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="<?php echo SITE_URL; ?>" />
  <meta property="og:image:type" content="image/png" />
  <meta property="og:image" content="<?php echo SITE_URL; ?>/img/<?php echo $infoSistema->favicon; ?>" />
  <meta property="og:image:width" content="400" />
  <meta property="og:image:height" content="300" />
  <meta property="og:description" content="<?php if (isset($sobre->meta_description) && !empty($sobre->meta_description)) {
    echo $sobre->meta_description;
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
    <?php include 'header.php'; ?>
    <section class="about_one">
      <div class="container h-100">
        <h1>
          <?php echo $sobre->section_1_conteudo_1 ?>
        </h1>
      </div>
    </section>

    <section class="about-two">
      <div class="container">
        <div class="row">
          <div class="col-xl-6 col-lg-6">
            <div class="about-two__img-box clearfix">
              <div class="about-two__img-box-img1">
                <div class="about-two__img-box-img1-inner z-3">
                  <img src="<?php echo SITE_URL; ?>/img/<?php echo $sobre->section_2_img_2 ?>"
                    alt="<?php echo $sobre->section_2_image_alt_2 ?>">
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-6 col-lg-6 d-flex align-items-center">
            <div class="about-two__content-box">
              <div class="sec-title">
                <h2 class="sec-title__title">
                  <?php echo $sobre->section_2_conteudo_3 ?>
                </h2>
              </div>
              <p class="about-two__content-box-text">
              </p>
              <p>
                <?php echo $sobre->section_2_conteudo_4 ?>
              </p>
              <div class="about-two__content-box-list">
                <div class="row">
                  <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="about-two__content-box-list-single">
                      <ul>
                        <li>
                          <div class="icon">
                            <i class="fa fa-check-circle" aria-hidden="true"></i>
                          </div>
                          <div class="text">
                            <p>
                              <?php echo $sobre->section_2_conteudo_6 ?>
                            </p>
                          </div>
                        </li>
                        <li>
                          <div class="icon">
                            <i class="fa fa-check-circle" aria-hidden="true"></i>
                          </div>
                          <div class="text">
                            <p>
                              <?php echo $sobre->section_2_conteudo_7 ?>
                            </p>
                          </div>
                        </li>
                        <li>
                          <div class="icon">
                            <i class="fa fa-check-circle" aria-hidden="true"></i>
                          </div>
                          <div class="text">
                            <p>
                              <?php echo $sobre->section_2_conteudo_8 ?>
                            </p>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="about-two__content-box-list-single">
                      <ul>
                        <li>
                          <div class="icon">
                            <i class="fa fa-check-circle" aria-hidden="true"></i>
                          </div>
                          <div class="text">
                            <p>
                              <?php echo $sobre->section_2_conteudo_9 ?>
                            </p>
                          </div>
                        </li>
                        <li>
                          <div class="icon">
                            <i class="fa fa-check-circle" aria-hidden="true"></i>
                          </div>
                          <div class="text">
                            <p>
                              <?php echo $sobre->section_2_conteudo_10 ?>
                            </p>
                          </div>
                        </li>
                        <li>
                          <div class="icon">
                            <i class="fa fa-check-circle" aria-hidden="true"></i>
                          </div>
                          <div class="text">
                            <p>
                              <?php echo $sobre->section_2_conteudo_11 ?>
                            </p>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="about_three">
      <div class="container">
        <div class="row">
          <div class="col-xl-4 col-lg-4 col-md-12 about_three_item">
            <div class="about_three_item__">
              <img src="<?php echo SITE_URL; ?>/img/<?php echo $sobre->section_3_img_12 ?>"
                alt="<?php echo $sobre->section_3_image_alt_12 ?>">
              <h3>
                <?php echo $sobre->section_3_conteudo_13 ?>
              </h3>
              <p>
                <?php echo $sobre->section_3_conteudo_14 ?>
              </p>
            </div>
          </div>
          <div class="col-xl-4 col-lg-4 col-md-12 about_three_item">
            <div class="about_three_item__">
              <img src="<?php echo SITE_URL; ?>/img/<?php echo $sobre->section_3_img_15 ?>"
                alt="<?php echo $sobre->section_3_image_alt_15 ?>">
              <h3>
                <?php echo $sobre->section_3_conteudo_16 ?>
              </h3>
              <p>
                <?php echo $sobre->section_3_conteudo_17 ?>
              </p>
            </div>
          </div>
          <div class="col-xl-4 col-lg-4 col-md-12 about_three_item">
            <div class="about_three_item__">
              <img src="<?php echo SITE_URL; ?>/img/<?php echo $sobre->section_3_img_18 ?>"
                alt="<?php echo $sobre->section_3_image_alt_18 ?>">
              <h3>
                <?php echo $sobre->section_3_conteudo_19 ?>
              </h3>
              <p>
                <?php echo $sobre->section_3_conteudo_20 ?>
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="about_four">
      <div class="container">
        <div class="row">
          <div class="col-6">
            <h3>
              <?php echo $sobre->section_4_conteudo_21 ?>
            </h3>
          </div>
          <div class="col-6">
            <p>
              <?php echo $sobre->section_4_conteudo_22 ?>
            </p>
          </div>
        </div>
        <div class="about_four_carousel swiper_about_four">
          <div class="swiper-wrapper">
            <?php foreach ($produto as $produto_single) { ?>
              <div class="swiper-slide">
                <div class="about_four_carousel_item">
                <h5>
                  <?php echo $produto_single->section_1_conteudo_2 ?>
                </h5>
                <a href="<?php echo SITE_URL; ?>/produto/<?php echo $produto_single->pagina_individual ?>">
                      <img src="<?php echo SITE_URL; ?>/img/<?php echo $produto_single->section_1_img_1 ?>"
                        alt="<?php echo $produto_single->section_1_image_alt_1 ?>" class="w-100">
                </a>
                 <a href="<?php echo SITE_URL; ?>/produto/<?php echo $produto_single->pagina_individual ?>">
                      <div class="plus_ultra">+</div>
                </a>
                </div>
              </div>
            <?php } ?>
          </div>
          <div class="swiper-pagination" id="main-slider-pagination"></div>
        </div>
      </div>
    </section>
    <section class="home_ten"
      style="background-image: url(<?php echo SITE_URL; ?>/img/<?php echo $sobre->section_5_img_23 ?>);">
      <div class="container h-100">
        <div class="home_ten_content">
          <div class="home_ten_content_itens">
            <h4>
              <?php echo $sobre->section_5_conteudo_24 ?>
            </h4>
            <img src="<?php echo SITE_URL; ?>/img/<?php echo $sobre->section_5_img_25 ?>"
              alt="<?php echo $sobre->section_5_image_alt_25 ?>">
            <p>
                <?php echo $infoSistema->endereco; ?>
            </p>
            <img src="<?php echo SITE_URL; ?>/img/<?php echo $sobre->section_5_img_27 ?>"
              alt="<?php echo $sobre->section_5_image_alt_27 ?>">
            <a href="tel:<?php echo $infoSistema->telefone1; ?>">
                                               <p> <?php echo $infoSistema->telefone1; ?></p>
                                            </a>
            <img src="<?php echo SITE_URL; ?>/img/<?php echo $sobre->section_5_img_29 ?>"
              alt="<?php echo $sobre->section_5_image_alt_29 ?>">
            <a href="mailto:<?php echo $infoSistema->email1 ?>"
                                                aria-label="Link de encaminhamento para o E-mail da <?php echo $infoSistema->nome_empresa ?>">
                                                <p><?php echo $infoSistema->email1 ?></p>
                                            </a>
          </div>
        </div>
      </div>
    </section>
  </div>
  <?php include "footer.php" ?>
  <?php include "scripts.php" ?>
</body>

</html>
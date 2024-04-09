<?php include "includes.php";
include "Class/home.class.php";
$puxaHome = Home::getInstance(Conexao::getInstance());
$home = $puxaHome->rsDados(1);
?>

<head>
  <?php include 'head.php'; ?>
  <meta name="theme-color" content="#91d8f7">
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>
    <?php if (isset($home->meta_title) && !empty($home->meta_title)) {
      echo $home->meta_title;
    } ?>
  </title>
  <meta name="description" content="<?php if (isset($home->meta_description) && !empty($home->meta_description)) {
    echo $home->meta_description;
  } ?>" />
  <meta name="keywords" content="<?php if (isset($home->meta_keywords) && !empty($home->meta_keywords)) {
    echo $home->meta_keywords;
  } ?>">
  <meta name="twitter:card" content="<?php if (isset($home->meta_title) && !empty($home->meta_title)) {
    echo $home->meta_title;
  } ?>" />
  <meta name="twitter:site" content="<?php echo SITE_URL; ?>" />
  <meta name="twitter:creator" content="Hoogli" />
  <meta property="og:title" content="<?php if (isset($home->meta_title) && !empty($home->meta_title)) {
    echo $home->meta_title;
  } ?>" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="<?php echo SITE_URL; ?>" />
  <meta property="og:image:type" content="image/png" />
  <meta property="og:image" content="<?php echo SITE_URL; ?>/img/<?php echo $infoSistema->favicon; ?>" />
  <meta property="og:image:width" content="400" />
  <meta property="og:image:height" content="300" />
  <meta property="og:description" content="<?php if (isset($home->meta_description) && !empty($home->meta_description)) {
    echo $home->meta_description;
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
    background-image: url(<?php echo SITE_URL . '/img/' . $home->section_1_img_3 ?>);
    background-position-y: center;
    background-size: cover;
  }

  @media (max-width:600px) {
    .image_single_home {
      background-image: url(<?php echo SITE_URL . '/img/' . $home->section_1_img_4 ?>);
      background-position-y: center;
      background-size: cover;
    }
  }
</style>
<?php include "footer.php" ?>
<?php include "scripts.php" ?>

<body>
  <div class="page-wrapper">
    <section class="home_one">
      <div class="container">
        <div class="row">
          <div class="col-6 home_col">
            <?php echo $home->section_1_conteudo_1 ?>
            <?php echo $home->section_1_conteudo_2 ?>
            <?php echo $home->section_1_conteudo_3 ?>
            <div class="home_one_link">
              <a href="<?php echo $home->section_1_link_conteudo_6 ?>"
                aria-label="<?php echo $home->section_1_link_alt_6 ?>">
                <?php echo $home->section_1_link_6 ?>
              </a>
            </div>
          </div>
          <div class="col-6">
            <img src="<?php echo SITE_URL; ?>/img/<?php echo $home->section_1_img_7 ?>"
              alt="<?php echo $home->section_1_image_alt_7 ?>" class="w-100">
          </div>
        </div>
      </div>
    </section>
    <section class="home_two">
      <div class="container  h-100">
        <div class="home_two_title">
          <?php echo $home->section_2_conteudo_8 ?>
          <a href="<?php echo $home->section_2_link_conteudo_9 ?>"
            aria-label="<?php echo $home->section_2_link_alt_9 ?>">
            <?php echo $home->section_2_link_9 ?>
          </a>
        </div>
      </div>
    </section>
    <section class="home_three">
      <div class="container">
        <div class="home_three_title">
          <?php echo $home->section_3_conteudo_10 ?>
          <?php echo $home->section_3_conteudo_11 ?>
          <?php echo $home->section_3_conteudo_12 ?>
        </div>
        <div class="home_three_content">
          <img src="<?php echo SITE_URL; ?>/img/<?php echo $home->section_3_img_13 ?>"
            alt="<?php echo $home->section_3_image_alt_13 ?>" class="w-100">
          <div class="shapes">
            <div class="feature-note right top wow fadeInRight show-cont"
              style="visibility: visible; animation-name: fadeInRight;">
              <div class="feature-name">
                <?php echo $home->section_3_conteudo_14 ?>
              </div>
            </div>
            <div class="feature-note left bottom wow fadeInLeft show-cont"
              style="visibility: visible; animation-name: fadeInLeft;">
              <div class="feature-name">
                <?php echo $home->section_3_conteudo_15 ?>
              </div>
            </div>
            <div class="feature-note left bottom wow featuretwo fadeInRight show-cont"
              style="visibility: visible; animation-name: fadeInRight;">
              <div class="feature-name">
                <?php echo $home->section_3_conteudo_16 ?>
              </div>
            </div>
            <div class="feature-note left bottom featureOne wow fadeInLeft show-cont"
              style="visibility: visible; animation-name: fadeInLeft;">
              <div class="feature-name">
                <?php echo $home->section_3_conteudo_17 ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="home_four">
      <div class="container">
        <div class="home_four_content_icons">
          <div class="row home_four_content_icons_section">
            <div class="col-4">
              <img src="<?php echo SITE_URL; ?>/img/<?php echo $home->section_4_img_18 ?>"
                alt="<?php echo $home->section_4_image_alt_18 ?>">
              <?php echo $home->section_4_conteudo_19 ?>
            </div>
            <div class="col-4">
              <img src="<?php echo SITE_URL; ?>/img/<?php echo $home->section_4_img_20 ?>"
                alt="<?php echo $home->section_4_image_alt_20 ?>">
              <?php echo $home->section_4_conteudo_21 ?>
            </div>
            <div class="col-4">
              <img src="<?php echo SITE_URL; ?>/img/<?php echo $home->section_4_img_22 ?>"
                alt="<?php echo $home->section_4_image_alt_22 ?>">
              <?php echo $home->section_4_conteudo_23 ?>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="home_five">
      <div class="container">
        <div class="row">
          <div class="col-6">
            <img src="<?php echo SITE_URL; ?>/img/<?php echo $home->section_5_img_24 ?>"
              alt="<?php echo $home->section_5_image_alt_24 ?>" class="w-100">
          </div>
          <div class="col-6 d-flex align-items-center">
            <div class="content">
              <div class="home_five_title">
                <?php echo $home->section_5_conteudo_25 ?>
                <?php echo $home->section_5_conteudo_26 ?>
                <?php echo $home->section_5_conteudo_27 ?>
                <div class="home_five_link">
                  <a href="<?php echo $home->section_5_link_conteudo_28 ?>"
                    aria-label="<?php echo $home->section_5_link_alt_28 ?>">
                    <?php echo $home->section_5_link_28 ?>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="home_six">
      <div class="container">
        <div class="row home_six_content">
          <div class="col-6 d-flex justify-content-center">
            <div class="home_six_text">
              <?php echo $home->section_6_conteudo_29 ?>
              <div class="home_six_link">
                <a href="<?php echo $home->section_6_link_conteudo_30 ?>"
                  aria-label="<?php echo $home->section_6_link_alt_30 ?>">
                  <?php echo $home->section_6_link_30 ?>
                </a>
              </div>
            </div>
          </div>
          <div class="col-6">
            <img src="<?php echo SITE_URL; ?>/img/<?php echo $home->section_6_img_31 ?>"
              alt="<?php echo $home->section_6_image_alt_31 ?>" class="w-100 z-1">
          </div>
        </div>
      </div>
    </section>
    <section class="home_seven">
      <div class="container overflow-hidden">
        <div class="home_seven_title">
          <?php echo $home->section_7_conteudo_32 ?>
        </div>
      </div>
    </section>
    <section class="faq-one home_eight" style="background-image: url(./img/background.png);"> <img
        src="<?php echo SITE_URL; ?>/img/<?php echo $home->section_8_img_33 ?>"
        alt="<?php echo $home->section_8_image_alt_33 ?>">
      <div class="faq-one__shape"></div>
      <div class="container">
        <div class="home_eight_title">
          <?php echo $home->section_8_conteudo_34 ?>
        </div>
        <div class="row">
          <div class="col-xl-6 col-lg-6">
            <div class="faq-one__accordions">
              <div class="accrodion-grp faq-one-accrodion" data-grp-name="faq-one-accrodion">
                <div class="accrodion wow fadeInUp animated active" data-wow-delay="0ms" data-wow-duration="1000ms"
                  style="visibility: visible; animation-duration: 1000ms; animation-delay: 0ms; animation-name: fadeInUp;">
                  <div class="accrodion-title">
                    <?php echo $home->section_8_conteudo_35 ?>
                  </div>
                  <div class="accrodion-content" style="">
                    <div class="inner">
                      <?php echo $home->section_8_conteudo_36 ?>
                      <?php echo $home->section_8_conteudo_37 ?>
                      <?php echo $home->section_8_conteudo_38 ?>
                    </div>
                  </div>
                </div>
                <div class="accrodion wow fadeInUp animated" data-wow-delay="100ms" data-wow-duration="1000ms"
                  style="visibility: visible; animation-duration: 1000ms; animation-delay: 100ms; animation-name: fadeInUp;">
                  <div class="accrodion-title">
                    <?php echo $home->section_8_conteudo_39 ?>
                  </div>
                  <div class="accrodion-content" style="display: none;">
                    <div class="inner">
                      <?php echo $home->section_8_conteudo_40 ?>
                      <?php echo $home->section_8_conteudo_41 ?>
                      <?php echo $home->section_8_conteudo_42 ?>
                    </div>
                  </div>
                </div>
                <div class="accrodion wow fadeInUp animated" data-wow-delay="100ms" data-wow-duration="1000ms"
                  style="visibility: visible; animation-duration: 1000ms; animation-delay: 100ms; animation-name: fadeInUp;">
                  <div class="accrodion-title">
                    <?php echo $home->section_8_conteudo_43 ?>
                  </div>
                  <div class="accrodion-content" style="display: none;">
                    <div class="inner">
                      <?php echo $home->section_8_conteudo_44 ?>
                      <?php echo $home->section_8_conteudo_45 ?>
                      <?php echo $home->section_8_conteudo_46 ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-6 col-lg-6">
            <div class="faq-one__accordions">
              <div class="accrodion-grp faq-one-accrodion" data-grp-name="faq-one-accrodion">
                <div class="accrodion wow fadeInUp animated" data-wow-delay="200ms" data-wow-duration="1000ms"
                  style="visibility: visible; animation-duration: 1000ms; animation-delay: 200ms; animation-name: fadeInUp;">
                  <div class="accrodion-title">
                    <?php echo $home->section_8_conteudo_47 ?>
                  </div>
                  <div class="accrodion-content" style="display: none;">
                    <div class="inner">
                      <?php echo $home->section_8_conteudo_48 ?>
                      <?php echo $home->section_8_conteudo_49 ?>
                      <?php echo $home->section_8_conteudo_50 ?>
                    </div>
                  </div>
                </div>
                <div class="accrodion wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1000ms"
                  style="visibility: visible; animation-duration: 1000ms; animation-delay: 300ms; animation-name: fadeInUp;">
                  <div class="accrodion-title">
                    <?php echo $home->section_8_conteudo_51 ?>
                  </div>
                  <div class="accrodion-content" style="display: none;">
                    <div class="inner">
                      <?php echo $home->section_8_conteudo_52 ?>
                      <?php echo $home->section_8_conteudo_53 ?>
                      <?php echo $home->section_8_conteudo_54 ?>
                    </div>
                  </div>
                </div>
                <div class="accrodion wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1000ms"
                  style="visibility: visible; animation-duration: 1000ms; animation-delay: 300ms; animation-name: fadeInUp;">
                  <div class="accrodion-title">
                    <?php echo $home->section_8_conteudo_55 ?>
                  </div>
                  <div class="accrodion-content" style="display: none;">
                    <div class="inner">
                      <?php echo $home->section_8_conteudo_56 ?>
                      <?php echo $home->section_8_conteudo_57 ?>
                      <?php echo $home->section_8_conteudo_58 ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="home_eight_cta">
            <?php echo $home->section_8_conteudo_59 ?>
            <div class="home_eight_cta_link">
              <a href="<?php echo $home->section_8_link_conteudo_60 ?>"
                aria-label="<?php echo $home->section_8_link_alt_60 ?>">
                <?php echo $home->section_8_link_60 ?>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="home_nine">
      <div class="container">
        <div class="row">
          <div class="col-6 home_nine_titles">
            <?php echo $home->section_9_conteudo_61 ?>
            <?php echo $home->section_9_conteudo_62 ?>
            <?php echo $home->section_9_conteudo_63 ?>
            <div class="home_nine_titles_link">
              <a href="<?php echo $home->section_9_link_conteudo_64 ?>"
                aria-label="<?php echo $home->section_9_link_alt_64 ?>">
                <?php echo $home->section_9_link_64 ?>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="home_ten">
      <img src="<?php echo SITE_URL; ?>/img/<?php echo $home->section_10_img_65 ?>"
        alt="<?php echo $home->section_10_image_alt_65 ?>">
      <div class="container h-100">
        <div class="home_ten_content">
          <div class="home_ten_content_itens">
            <?php echo $home->section_10_conteudo_66 ?>
            <img src="<?php echo SITE_URL; ?>/img/<?php echo $home->section_10_img_67 ?>"
              alt="<?php echo $home->section_10_image_alt_67 ?>">
            <?php echo $home->section_10_conteudo_68 ?>
            <img src="<?php echo SITE_URL; ?>/img/<?php echo $home->section_10_img_69 ?>"
              alt="<?php echo $home->section_10_image_alt_69 ?>">
            <?php echo $home->section_10_conteudo_70 ?>
            <img src="<?php echo SITE_URL; ?>/img/<?php echo $home->section_10_img_71 ?>"
              alt="<?php echo $home->section_10_image_alt_71 ?>">
            <?php echo $home->section_10_conteudo_72 ?>
          </div>
        </div>
      </div>
    </section>
  </div>
</body>
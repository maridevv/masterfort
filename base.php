<?php
include "includes.php";
include "Class/blogs.class.php";
$Blogs = Blogs::getInstance(Conexao::getInstance());
$puxaBlogs = $Blogs->rsDados('', 'id DESC');
?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <?php include 'head.php'; ?>
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
</head>

<body>

    <?php include 'header.php'; ?>
    <style>
        .image_single_home {
            background-image: url(<?php echo SITE_URL . '/img/' . $home->section_1_img_3 ?>);
            background-position-y: center;
            background-size: cover;
        }

        .image_single_home2 {
            background-image: url(<?php echo SITE_URL . '/img/' . $home->section_1_img_9 ?>);
            background-position-y: center;
            background-size: cover;
        }

        @media (max-width:600px) {
            .image_single_home {
                background-image: url(<?php echo SITE_URL . '/img/' . $home->section_1_img_4 ?>);
                background-position-y: center;
                background-size: cover;
            }

            .image_single_home2 {
                background-image: url(<?php echo SITE_URL . '/img/' . $home->section_1_img_10 ?>);
                background-position-y: center;
                background-size: cover;
            }
        }
    </style>

    <main>

        <!-- hero area start -->
        <section class="tp-slider-3-area  black-bg p-relative">

            <div class="tp-slider-3-wrapper fix p-relative">
                <div class="tp-slider-3-arrow-box">
                    <button class="slider-prev active">
                        <i class="fa-regular fa-arrow-left-long"></i>
                    </button>
                    <button class="slider-next">
                        <i class="fa-regular fa-arrow-right-long"></i>
                    </button>
                </div>
                <div class="tp-slider-dots dots-color"></div>
                <div class="swiper-container tp-slider-3-active">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="tp-slider-3-height p-relative">
                                <div class="tp-slider-3-bg image_single_home"></div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="tp-slider-3-content z-index-3">
                                                <div class="tp-slider-3-title-box">
                                                    <span class="tp-slider-2-subtitle pb-5">
                                                        <?php echo $home->section_1_conteudo_5 ?>
                                                    </span>
                                                    <h1 class="tp-slider-3-title mb-40">
                                                        <?php echo $home->section_1_conteudo_6 ?>
                                                    </h1>
                                                </div>
                                                <div class="tp-slider-3-button">
                                                    <a href="<?php echo $home->section_1_link_7 ?>"
                                                        aria-label="<?php echo $home->section_1_link_alt_7 ?>"
                                                        class="tp-btn hover-2">
                                                        <span>
                                                            <?php echo $home->section_1_link_conteudo_7 ?>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="tp-slider-3-height p-relative">
                                <div class="tp-slider-3-bg image_single_home2"></div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="tp-slider-3-content z-index-3">
                                                <div class="tp-slider-3-title-box">
                                                    <span class="tp-slider-2-subtitle pb-5">
                                                        <?php echo $home->section_1_conteudo_11 ?>
                                                    </span>
                                                    <h1 class="tp-slider-3-title mb-40">
                                                        <?php echo $home->section_1_conteudo_12 ?>
                                                    </h1>
                                                </div>
                                                <div class="tp-slider-3-button">
                                                    <a href="<?php echo $home->section_1_link_13 ?>"
                                                        aria-label="<?php echo $home->section_1_link_alt_13 ?>"
                                                        class="tp-btn hover-2">
                                                        <span>
                                                            <?php echo $home->section_1_link_conteudo_13 ?>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- feature area start -->
        <section id="feature-box" class="tp-feature-2-area  p-relative grey-bg">
            <div class="tp-feature-2-bg pt-120 pb-90"
                style="background-image: url(<?php echo SITE_URL . '/img/' . $home->section_2_img_15 ?>);">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3 col-lg-4 col-md-6 mb-30 wow tpfadeUp" data-wow-duration=".9s"
                            data-wow-delay=".3s">
                            <div class="tp-feature-2-item">
                                <div class="tp-feature-2-icon">
                                    <span><i class="flaticon-lowest-price"><img
                                                src="<?php echo SITE_URL; ?>/img/<?php echo $home->section_2_img_16 ?>"
                                                alt="<?php echo $home->section_2_image_alt_16 ?>" class=""></i></span>
                                </div>
                                <div class="tp-feature-2-text">
                                    <h5 class="tp-feature-2-title">
                                        <?php echo $home->section_2_conteudo_17 ?>
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 mb-30 wow tpfadeUp" data-wow-duration=".9s"
                            data-wow-delay=".5s">
                            <div class="tp-feature-2-item">
                                <div class="tp-feature-2-icon">
                                    <span><i class="flaticon-guaranteed"><img
                                                src="<?php echo SITE_URL; ?>/img/<?php echo $home->section_2_img_18 ?>"
                                                alt="<?php echo $home->section_2_image_alt_18 ?>" class=""></i></span>
                                </div>
                                <div class="tp-feature-2-text">
                                    <h5 class="tp-feature-2-title">
                                        <?php echo $home->section_2_conteudo_19 ?>
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 mb-30 wow tpfadeUp" data-wow-duration=".9s"
                            data-wow-delay=".7s">
                            <div class="tp-feature-2-item active">
                                <div class="tp-feature-2-icon">
                                    <span><i class="flaticon-repair"><img
                                                src="<?php echo SITE_URL; ?>/img/<?php echo $home->section_2_img_20 ?>"
                                                alt="<?php echo $home->section_2_image_alt_20 ?>" class="">
                                        </i></span>
                                </div>
                                <div class="tp-feature-2-text">
                                    <h5 class="tp-feature-2-title">
                                        <?php echo $home->section_2_conteudo_21 ?>
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 mb-30 wow tpfadeUp" data-wow-duration=".9s"
                            data-wow-delay=".9s">
                            <div class="tp-feature-2-item">
                                <div class="tp-feature-2-icon">
                                    <span><i class="flaticon-award"><img
                                                src="<?php echo SITE_URL; ?>/img/<?php echo $home->section_2_img_22 ?>"
                                                alt="<?php echo $home->section_2_image_alt_22 ?>" class=""></i></span>
                                </div>
                                <div class="tp-feature-2-text">
                                    <h5 class="tp-feature-2-title">
                                        <?php echo $home->section_2_conteudo_23 ?>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="tp-about-area p-relative pt-120 pb-120">
            <div class="tp-about-shape-5 d-none d-xl-block">
                <img src="assets/img/about/shape-3-1.png" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 wow tpfadeLeft" data-wow-duration=".9s" data-wow-delay=".5s">
                        <div class="tp-about-right-box text-end tp-about-right-wrap p-relative">
                            <div class="tp-about-2-thumb-text text-start d-none d-lg-block"
                                style="background-image: url(<?php echo SITE_URL . '/img/' . $home->section_3_img_24 ?>);">
                                <h6><i class="purecounter" data-purecounter-duration="1"
                                        data-purecounter-end="<?php echo $home->section_3_conteudo_25 ?>">0</i>+</h6>
                                <span>
                                    <?php echo $home->section_3_conteudo_26 ?>
                                </span>
                            </div>
                            <div class="tp-about-main-thumb">
                                <img src="<?php echo SITE_URL; ?>/img/<?php echo $home->section_3_img_27 ?>"
                                    alt="<?php echo $home->section_3_image_alt_27 ?>" class="">
                            </div>
                            <div class="tp-about-thumb-sm">
                                <img src="<?php echo SITE_URL; ?>/img/<?php echo $home->section_3_img_28 ?>"
                                    alt="<?php echo $home->section_3_image_alt_28 ?>" class="">
                            </div>
                            <div class="tp-about-shape-2  d-none d-lg-block">
                                <img src="<?php echo SITE_URL; ?>/img/<?php echo $home->section_3_img_29 ?>"
                                    alt="<?php echo $home->section_3_image_alt_29 ?>" class="">
                            </div>
                            <div class="tp-about-shape-6 d-none d-xl-block">
                                <img src="<?php echo SITE_URL; ?>/img/<?php echo $home->section_3_img_30 ?>"
                                    alt="<?php echo $home->section_3_image_alt_30 ?>" class="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 wow tpfadeRight" data-wow-duration=".9s" data-wow-delay=".7s">
                        <div class="tp-about-left-box tp-about-ml">
                            <div class="tp-about-section-box mb-15">
                                <span class="tp-section-subtitle">
                                    <?php echo $home->section_3_conteudo_31 ?>
                                </span>
                                <h4 class="tp-section-title">
                                    <?php echo $home->section_3_conteudo_32 ?>
                                </h4>
                            </div>
                            <div class="tp-about-text">
                                <p class="pb-15">
                                    <?php echo $home->section_3_conteudo_33 ?>
                                </p>
                                <div class="tp-about-icon-wrap p-relative d-flex justify-content-between mb-40">
                                    <div class="tp-about-icon-shape d-none d-xl-block">
                                        <img src="<?php echo SITE_URL; ?>/img/<?php echo $home->section_3_img_34 ?>"
                                            alt="<?php echo $home->section_3_image_alt_34 ?>" class="">
                                    </div>
                                    <div class="tp-about-icon-box d-flex align-items-center mb-20">
                                        <div class="tp-about-icon icon-color">
                                            <span><i class="flaticon-electrician"><img
                                                        src="<?php echo SITE_URL; ?>/img/<?php echo $home->section_3_img_35 ?>"
                                                        alt="<?php echo $home->section_3_image_alt_35 ?>"
                                                        class=""></i></span>
                                        </div>
                                        <div class="tp-about-icon-text">
                                            <h5>
                                                <?php echo $home->section_3_conteudo_36 ?>
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="tp-about-icon-box d-flex align-items-center mb-20">
                                        <div class="tp-about-icon">
                                            <span><i class="flaticon-plug"><img
                                                        src="<?php echo SITE_URL; ?>/img/<?php echo $home->section_3_img_37 ?>"
                                                        alt="<?php echo $home->section_3_image_alt_37 ?>"
                                                        class=""></i></span>
                                        </div>
                                        <div class="tp-about-icon-text">
                                            <h5>
                                                <?php echo $home->section_3_conteudo_38 ?>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="tp-about-list mb-45">
                                    <ul>
                                        <li><i class="fa-light fa-badge-check"></i>
                                            <?php echo $home->section_3_conteudo_39 ?>
                                        </li>
                                        <li><i class="fa-light fa-badge-check"></i>
                                            <?php echo $home->section_3_conteudo_40 ?>
                                        </li>
                                        <li><i class="fa-light fa-badge-check"></i>
                                            <?php echo $home->section_3_conteudo_41 ?>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tp-about-button-box d-flex align-items-center">
                                    <a href="<?php echo $home->section_3_link_42 ?>"
                                        aria-label="<?php echo $home->section_3_link_alt_42 ?>" class="tp-btn-black">
                                        <span>
                                            <?php echo $home->section_3_link_conteudo_42 ?>
                                        </span>
                                    </a>
                                    <img src="<?php echo SITE_URL; ?>/img/<?php echo $home->section_3_img_43 ?>"
                                        alt="<?php echo $home->section_3_image_alt_43 ?>" class="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="tp-service-3-area grey-bg p-relative fix pt-120 pb-90">
            <div class="tp-service-3-shape-2 d-none d-xl-block">
                <img src="<?php echo SITE_URL; ?>/img/<?php echo $home->section_4_img_44 ?>"
                    alt="<?php echo $home->section_4_image_alt_44 ?>" class="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="tp-service-3-section-title text-center mb-50">
                            <span class="tp-section-subtitle">
                                <?php echo $home->section_4_conteudo_45 ?>
                            </span>
                            <h4 class="tp-section-title">
                                <?php echo $home->section_4_conteudo_46 ?>
                            </h4>
                        </div>
                    </div>
                    <?php foreach ($servico_index as $serv) { ?>
                        <?php if ($serv->pagina_individual == 'tintas-acessorios' || $serv->pagina_individual == 'pisos-porcelanatos' || $serv->pagina_individual == 'iluminacao-eletrica') { ?>
                            <div class="col-xl-4 col-lg-4 col-md-6 mb-30  wow tpfadeUp" data-wow-duration=".9s"
                                data-wow-delay=".3s">
                                <div class="tp-service-3-item fix" data-background="assets/img/service/sv-3-1.jpg">
                                    <div class="tp-service-3-shape-3">
                                        <img src="<?php echo SITE_URL; ?>/img/<?php echo $serv->section_1_img_1 ?>"
                                            alt="<?php echo $serv->section_1_image_alt_1 ?>" class="">
                                    </div>
                                    <div class="tp-service-3-content z-index">
                                        <div class="tp-service-3-icon pb-40">
                                            <span><i class="flaticon-creative"><img
                                                        src="<?php echo SITE_URL; ?>/img/<?php echo $serv->section_1_img_8 ?>"
                                                        alt="<?php echo $serv->section_1_image_alt_8 ?>" class=""></i></span>
                                        </div>
                                        <div class="tp-service-3-text pb-30">
                                            <h4 class="tp-service-3-title pb-15"><a
                                                    href="<?php echo SITE_URL; ?>/produtos-descritivo/<?php echo $serv->pagina_individual ?>">
                                                    <?php echo $serv->section_1_conteudo_4 ?>
                                                </a></h4>
                                            <p>
                                                <?php echo $serv->section_1_conteudo_6 ?>
                                            </p>
                                        </div>
                                        <a
                                            href="<?php echo SITE_URL; ?>/produtos-descritivo/<?php echo $serv->pagina_individual ?>">
                                            <div class="tp-service-3-link d-flex justify-content-between">
                                                <span>Saiba mais</span>
                                                <i class="flaticon-right-arrow"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    <?php } ?>
                </div>
            </div>
        </section>
        <section class="tp-choose-3-area p-relative black-bg-2 pt-120 pb-70">
            <div class="tp-choose-3-bg" style="background-image: url(
        <?php echo SITE_URL . '/img/' . $home->section_5_img_47 ?>);">
                <div class="tp-choose-3-text d-none d-lg-block">
                    <span>
                        <?php echo $home->section_5_conteudo_48 ?>
                    </span>
                    <a href="<?php echo $home->section_5_link_49 ?>"
                        aria-label="<?php echo $home->section_5_link_alt_49 ?>" class="">
                        <?php echo $home->section_5_link_conteudo_49 ?>
                    </a>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 offset-lg-6 offset-xl-6  wow tpfadeRight" data-wow-duration=".9s"
                        data-wow-delay=".7s">
                        <div class="tp-choose-content tp-choose-item-wrap z-index">
                            <div class="tp-choose-section-box mb-30">
                                <span class="tp-section-subtitle text-color">
                                    <?php echo $home->section_5_conteudo_50 ?>
                                </span>
                                <h4 class="tp-section-title text-white">
                                    <?php echo $home->section_5_conteudo_51 ?>
                                </h4>
                            </div>
                            <div class="tp-choose-text mb-50">
                                <p>
                                    <?php echo $home->section_5_conteudo_52 ?>
                                </p>
                            </div>
                            <div class="tp-choose-wrap">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-6 mb-20">
                                        <div class="tp-choose-item d-flex align-items-center">
                                            <span><i class="flaticon-battery"><img
                                                        src="<?php echo SITE_URL; ?>/img/<?php echo $home->section_5_img_53 ?>"
                                                        alt="<?php echo $home->section_5_image_alt_53 ?>"
                                                        class=""></i></span>
                                            <h5 class="tp-choose-item-title">
                                                <?php echo $home->section_5_conteudo_54 ?>
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 mb-20">
                                        <div class="tp-choose-item d-flex align-items-center">
                                            <span><i class="flaticon-electrician-1"><img
                                                        src="<?php echo SITE_URL; ?>/img/<?php echo $home->section_5_img_55 ?>"
                                                        alt="<?php echo $home->section_5_image_alt_55 ?>"
                                                        class=""></i></span>
                                            <h5 class="tp-choose-item-title">
                                                <?php echo $home->section_5_conteudo_56 ?>
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 mb-20">
                                        <div class="tp-choose-item d-flex align-items-center">
                                            <span><i class="flaticon-price-tag"><img
                                                        src="<?php echo SITE_URL; ?>/img/<?php echo $home->section_5_img_57 ?>"
                                                        alt="<?php echo $home->section_5_image_alt_57 ?>"
                                                        class=""></i></span>
                                            <h5 class="tp-choose-item-title">
                                                <?php echo $home->section_5_conteudo_58 ?>
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 mb-20">
                                        <div class="tp-choose-item d-flex align-items-center">
                                            <span><i class="flaticon-service"><img
                                                        src="<?php echo SITE_URL; ?>/img/<?php echo $home->section_5_img_59 ?>"
                                                        alt="<?php echo $home->section_5_image_alt_59 ?>"
                                                        class=""></i></span>
                                            <h5 class="tp-choose-item-title">
                                                <?php echo $home->section_5_conteudo_60 ?>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="tp-step-area pt-120 pb-90">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="tp-step-section-box text-center mb-50">
                            <span class="tp-section-subtitle">
                                <?php echo $home->section_6_conteudo_61 ?>
                            </span>
                            <h4 class="tp-section-title">
                                <?php echo $home->section_6_conteudo_62 ?>
                            </h4>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 mb-60  wow tpfadeUp" data-wow-duration=".9s"
                        data-wow-delay=".3s">
                        <div class="tp-step-item-box">
                            <div class="tp-step-item p-relative text-center">
                                <div class="tp-step-icon">
                                    <span><i class="flaticon-problem-solving"><img
                                                src="<?php echo SITE_URL; ?>/img/<?php echo $home->section_6_img_63 ?>"
                                                alt="<?php echo $home->section_6_image_alt_63 ?>" class=""></i></span>
                                </div>
                                <div class="tp-step-text">
                                    <h5 class="tp-step-title"><a href="<?php echo $home->section_6_link_64 ?>"
                                            aria-label="<?php echo $home->section_6_link_alt_64 ?>" class="">
                                            <?php echo $home->section_6_link_conteudo_64 ?>
                                        </a></h5>
                                    <p>
                                        <?php echo $home->section_6_conteudo_65 ?>
                                    </p>
                                </div>
                                <div class="tp-step-number">
                                    <span>
                                        <?php echo $home->section_6_conteudo_66 ?>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 mb-60  wow tpfadeUp" data-wow-duration=".9s"
                        data-wow-delay=".5s">
                        <div class="tp-step-item-box active tp-step-item-box-pl">
                            <div class="tp-step-item p-relative text-center">
                                <div class="tp-step-icon">
                                    <span><i class="flaticon-plug-1"><img
                                                src="<?php echo SITE_URL; ?>/img/<?php echo $home->section_6_img_67 ?>"
                                                alt="<?php echo $home->section_6_image_alt_67 ?>" class=""></i></span>
                                </div>
                                <div class="tp-step-text">
                                    <h5 class="tp-step-title"><a href="<?php echo $home->section_6_link_68 ?>"
                                            aria-label="<?php echo $home->section_6_link_alt_68 ?>" class="">
                                            <?php echo $home->section_6_link_conteudo_68 ?>
                                        </a></h5>
                                    <p>
                                        <?php echo $home->section_6_conteudo_69 ?>
                                    </p>
                                </div>
                                <div class="tp-step-number">
                                    <span>
                                        <?php echo $home->section_6_conteudo_70 ?>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 mb-60  wow tpfadeUp" data-wow-duration=".9s"
                        data-wow-delay=".7s">
                        <div class="tp-step-item-box">
                            <div class="tp-step-item p-relative text-center">
                                <div class="tp-step-icon">
                                    <span><i class="flaticon-service"><img
                                                src="<?php echo SITE_URL; ?>/img/<?php echo $home->section_6_img_71 ?>"
                                                alt="<?php echo $home->section_6_image_alt_71 ?>" class=""></i></span>
                                </div>
                                <div class="tp-step-text">
                                    <h5 class="tp-step-title"> <a href="<?php echo $home->section_6_link_72 ?>"
                                            aria-label="<?php echo $home->section_6_link_alt_72 ?>" class="">
                                            <?php echo $home->section_6_link_conteudo_72 ?>
                                        </a></h5>
                                    <p>
                                        <?php echo $home->section_6_conteudo_73 ?>
                                    </p>
                                </div>
                                <div class="tp-step-number">
                                    <span>
                                        <?php echo $home->section_6_conteudo_74 ?>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 mb-60  wow tpfadeUp" data-wow-duration=".9s"
                        data-wow-delay=".9s">
                        <div class="tp-step-item-box tp-step-item-box-pl">
                            <div class="tp-step-item p-relative text-center">
                                <div class="tp-step-icon">
                                    <span><i class="flaticon-creative"><img
                                                src="<?php echo SITE_URL; ?>/img/<?php echo $home->section_6_img_75 ?>"
                                                alt="<?php echo $home->section_6_image_alt_75 ?>" class=""></i></span>
                                </div>
                                <div class="tp-step-text">
                                    <h5 class="tp-step-title"><a href="<?php echo $home->section_6_link_76 ?>"
                                            aria-label="<?php echo $home->section_6_link_alt_76 ?>" class="">
                                            <?php echo $home->section_6_link_conteudo_76 ?>
                                        </a></h5>
                                    <p>
                                        <?php echo $home->section_6_conteudo_77 ?>
                                    </p>
                                </div>
                                <div class="tp-step-number">
                                    <span>
                                        <?php echo $home->section_6_conteudo_78 ?>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="tp-video-3-area tp-video-3-bg jarallax p-relative fix pt-140" style="background-image: url(
    <?php echo SITE_URL . '/img/' . $home->section_7_img_79 ?>);">
            <div class="tp-video-3-play-box d-none d-lg-block">
                <a href="<?php echo $home->section_7_link_80 ?>" aria-label="<?php echo $home->section_7_link_alt_80 ?>"
                    class="popup-video"><i class="fas fa-play"></i></a>
            </div>
            <div class="tp-video-3-shape-1 d-none d-xxl-block">
                <img src="<?php echo SITE_URL; ?>/img/<?php echo $home->section_7_img_81 ?>"
                    alt="<?php echo $home->section_7_image_alt_81 ?>" class="">
            </div>
            <div class="tp-video-3-shape-2 d-none d-xxl-block">
                <img src="<?php echo SITE_URL; ?>/img/<?php echo $home->section_7_img_82 ?>"
                    alt="<?php echo $home->section_7_image_alt_82 ?>" class="">
            </div>
            <div class="tp-video-3-shape-3 d-none d-xl-block">
                <img src="<?php echo SITE_URL; ?>/img/<?php echo $home->section_7_img_83 ?>"
                    alt="<?php echo $home->section_7_image_alt_83 ?>" class="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="tp-video-3-content z-index">
                            <div class="tp-video-3-section-box mb-25">
                                <span class="tp-section-subtitle text-white">
                                    <?php echo $home->section_7_conteudo_84 ?>
                                </span>
                                <h4 class="tp-section-title text-white">
                                    <?php echo $home->section_7_conteudo_85 ?>
                                </h4>
                            </div>
                            <p class="text-white pb-40">
                                <?php echo $home->section_7_conteudo_86 ?>
                            </p>
                            <div class="tp-video-3-btn-box">
                                <a href="<?php echo $home->section_7_link_87 ?>"
                                    aria-label="<?php echo $home->section_7_link_alt_87 ?>"
                                    class="tp-btn hover-2 mr-15">
                                    <span>
                                        <?php echo $home->section_7_link_conteudo_87 ?>
                                    </span>
                                </a>
                                <a href="<?php echo $home->section_7_link_88 ?>"
                                    aria-label="<?php echo $home->section_7_link_alt_88 ?>" class="tp-btn-border">
                                    <span>
                                        <?php echo $home->section_7_link_conteudo_88 ?>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="tp-faq-area p-relative pt-120 pb-120">
            <div class="tp-faq-thumb" data-background="assets/img/cta/faq-bg.jpg"></div>
            <div class="tp-faq-text d-none d-xxl-block">
                <h5>
                    <?php echo $home->section_8_conteudo_89 ?>
                </h5>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xxl-7 col-xl-6 col-lg-6 wow tpfadeLeft" data-wow-duration=".9s" data-wow-delay=".s">
                        <div class="tp-custom-accordion">
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-items tp-faq-active">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-buttons " type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">
                                            <?php echo $home->section_8_conteudo_90 ?>
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                        aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <?php echo $home->section_8_conteudo_92 ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-items">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-buttons collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                            aria-expanded="false" aria-controls="collapseTwo">
                                            <?php echo $home->section_8_conteudo_93 ?>
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse"
                                        aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <?php echo $home->section_8_conteudo_95 ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-items">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-buttons collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                            aria-expanded="false" aria-controls="collapseThree">
                                            <?php echo $home->section_8_conteudo_96 ?>
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse"
                                        aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <?php echo $home->section_8_conteudo_98 ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-items">
                                    <h2 class="accordion-header" id="headingFour">
                                        <button class="accordion-buttons collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                            aria-expanded="false" aria-controls="collapseFour">
                                            <?php echo $home->section_8_conteudo_99 ?>
                                        </button>
                                    </h2>
                                    <div id="collapseFour" class="accordion-collapse collapse"
                                        aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <?php echo $home->section_8_conteudo_101 ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-items mb-0">
                                    <h2 class="accordion-header" id="headingFour4">
                                        <button class="accordion-buttons collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseFour4"
                                            aria-expanded="false" aria-controls="collapseFour4">
                                            <?php echo $home->section_8_conteudo_102 ?>
                                        </button>
                                    </h2>
                                    <div id="collapseFour4" class="accordion-collapse collapse"
                                        aria-labelledby="headingFour4" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <?php echo $home->section_8_conteudo_104 ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="tp-testimonial-3-area tp-testimonial-3-space p-relative fix grey-bg">
            <div class="tp-testimonial-3-shape-2 d-none d-xl-block">
                <img src="<?php echo SITE_URL; ?>/img/<?php echo $home->section_9_img_105 ?>"
                    alt="<?php echo $home->section_9_image_alt_105 ?>" class="">
            </div>
            <div class="tp-testimonial-3-shape-3">
                <img src="<?php echo SITE_URL; ?>/img/<?php echo $home->section_9_img_106 ?>"
                    alt="<?php echo $home->section_9_image_alt_106 ?>" class="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="tp-testimonial-3-section-box z-index text-center mb-50">
                            <span class="tp-section-subtitle">
                                <?php echo $home->section_9_conteudo_107 ?>
                            </span>
                            <h4 class="tp-section-title">
                                <?php echo $home->section_9_conteudo_108 ?>
                            </h4>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="tp-testimonial-3-wrapper">
                            <div class="swiper-container tp-testimonial-3-active">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="tp-testimonial-3-item-wrap p-relative">
                                            <div class="tp-testimonial-3-item p-relative text-center">
                                                <div class="tp-testimonial-3-shape-1">
                                                    <img src="assets/img/testimonial/shape-3-1.png" alt="">
                                                </div>
                                                <div class="tp-testimonial-3-avata">
                                                    <img src="assets/img/testimonial/author-1-3.png" alt="">
                                                </div>
                                                <div class="tp-testimonial-3-content z-index-5">
                                                    <div class="tp-testimonial-3-author-info pb-20">
                                                        <h5 class="tp-testimonial-3-title">Jessica Robinson</h5>
                                                        <span>Electrician</span>
                                                    </div>
                                                    <div class="tp-testimonial-3-text pb-5">
                                                        <p>Our experienced electricians are highly trained aspects
                                                            electrical and many security to emergency </p>
                                                    </div>
                                                    <div class="tp-testimonial-3-star">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="tp-testimonial-3-item-wrap p-relative">
                                            <div class="tp-testimonial-3-item p-relative text-center">
                                                <div class="tp-testimonial-3-shape-1">
                                                    <img src="assets/img/testimonial/shape-3-1.png" alt="">
                                                </div>
                                                <div class="tp-testimonial-3-avata">
                                                    <img src="assets/img/testimonial/author-1-4.png" alt="">
                                                </div>
                                                <div class="tp-testimonial-3-content z-index-5">
                                                    <div class="tp-testimonial-3-author-info pb-20">
                                                        <h5 class="tp-testimonial-3-title">Alberta Infantio</h5>
                                                        <span>Engineer</span>
                                                    </div>
                                                    <div class="tp-testimonial-3-text pb-5">
                                                        <p>Our experienced electricians are highly trained aspects
                                                            electrical and many security to emergency </p>
                                                    </div>
                                                    <div class="tp-testimonial-3-star">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="tp-testimonial-3-item-wrap p-relative">
                                            <div class="tp-testimonial-3-item p-relative text-center">
                                                <div class="tp-testimonial-3-shape-1">
                                                    <img src="assets/img/testimonial/shape-3-1.png" alt="">
                                                </div>
                                                <div class="tp-testimonial-3-avata">
                                                    <img src="assets/img/testimonial/author-1-5.png" alt="">
                                                </div>
                                                <div class="tp-testimonial-3-content z-index-5">
                                                    <div class="tp-testimonial-3-author-info pb-20">
                                                        <h5 class="tp-testimonial-3-title">Robinson Cruze</h5>
                                                        <span>Electrician</span>
                                                    </div>
                                                    <div class="tp-testimonial-3-text pb-5">
                                                        <p>Our experienced electricians are highly trained aspects
                                                            electrical and many security to emergency </p>
                                                    </div>
                                                    <div class="tp-testimonial-3-star">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="tp-testimonial-3-item-wrap p-relative">
                                            <div class="tp-testimonial-3-item p-relative text-center">
                                                <div class="tp-testimonial-3-shape-1">
                                                    <img src="assets/img/testimonial/shape-3-1.png" alt="">
                                                </div>
                                                <div class="tp-testimonial-3-avata">
                                                    <img src="assets/img/testimonial/author-1-1.png" alt="">
                                                </div>
                                                <div class="tp-testimonial-3-content z-index-5">
                                                    <div class="tp-testimonial-3-author-info pb-20">
                                                        <h5 class="tp-testimonial-3-title">Alberta Infantio</h5>
                                                        <span>Engineer</span>
                                                    </div>
                                                    <div class="tp-testimonial-3-text pb-5">
                                                        <p>Our experienced electricians are highly trained aspects
                                                            electrical and many security to emergency </p>
                                                    </div>
                                                    <div class="tp-testimonial-3-star">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="tp-cta-3-area fix">
            <div class="container-fluid p-0">
                <div class="row g-0">
                    <div class="col-xl-6 col-lg-6">
                        <div class="tp-cta-3-left-wrap theme-bg z-index-3 p-relative">
                            <div class="tp-cta-3-left-shape d-none d-xl-block">
                                <img src="<?php echo SITE_URL; ?>/img/<?php echo $home->section_10_img_109 ?>"
                                    alt="<?php echo $home->section_10_image_alt_109 ?>" class="">
                            </div>
                            <div class="tp-cta-3-left-box">
                                <div class="row align-items-center">
                                    <div class="col-xl-6 col-lg-6 col-md-5 d-none d-md-block">
                                        <div class="tp-cta-3-left-thumb">
                                            <img src="<?php echo SITE_URL; ?>/img/<?php echo $home->section_10_img_110 ?>"
                                                alt="<?php echo $home->section_10_image_alt_110 ?>" class="">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-7">
                                        <div class="tp-cta-3-left-text text-center text-md-start">
                                            <h5 class="tp-cta-3-left-title">
                                                <?php echo $home->section_10_conteudo_111 ?>
                                            </h5>
                                            <a href="<?php echo $home->section_10_link_112 ?>"
                                                aria-label="<?php echo $home->section_10_link_alt_112 ?>"
                                                class="tp-btn-black hover-2">
                                                <span>
                                                    <?php echo $home->section_10_link_conteudo_112 ?>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="tp-cta-3-right-wrap black-bg">
                            <div class="tp-cta-3-right-box jarallax z-index"
                                style="background-image: url(<?php echo SITE_URL . '/img/' . $home->section_10_img_113 ?>);">

                                <h4 class="tp-section-title text-white text-center z-index-3">
                                    <?php echo $home->section_10_conteudo_114 ?>
                                </h4>
                                <div class="tp-cta-3-right-shape">
                                    <img src="<?php echo SITE_URL; ?>/img/<?php echo $home->section_10_img_115 ?>"
                                        alt="<?php echo $home->section_10_image_alt_115 ?>" class="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="tp-blog-3-area pt-120 pb-90">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="tp-blog-3-section-box text-center mb-50">
                            <span class="tp-section-subtitle">
                                <?php echo $home->section_11_conteudo_116 ?>
                            </span>
                            <h4 class="tp-section-title">
                                <?php echo $home->section_11_conteudo_117 ?>
                            </h4>
                        </div>
                    </div>
                    <?php foreach ($puxaBlogs as $blogSingle) { ?>
                        <div class="col-xl-4 col-lg-4 col-md-6 mb-30 wow tpfadeUp" data-wow-duration=".9s"
                            data-wow-delay=".3s">
                            <div class="tp-blog-3-item">
                                <div class="tp-blog-3-thumb p-relative">
                                    <img src="<?php echo SITE_URL; ?>/img/<?php echo $blogSingle->foto ?>">
                                    <div class="tp-blog-3-icon">
                                        <a href="<?php echo SITE_URL; ?>/blog/<?php echo $blogSingle->url_amigavel ?>"><i
                                                class="flaticon-right-arrow"></i></a>
                                    </div>
                                </div>
                                <div class="tp-blog-3-content text-center z-index">
                                    <div class="tp-blog-meta pb-10">
                                        <span><i class="fa-light fa-circle-user"></i>postado por
                                            <?php echo $blogSingle->postado_por ?>
                                        </span>
                                    </div>
                                    <h4 class="tp-blog-3-title"><a
                                            href="<?php echo SITE_URL; ?>/blog/<?php echo $blogSingle->url_amigavel ?>">
                                            <?php echo $blogSingle->titulo ?>
                                        </a></h4>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </section>
    </main>
    <?php include "footer.php" ?>
    <?php include "scripts.php" ?>
</body>

</html>
<?php
include "includes.php";
include "Class/home.class.php";
$hor = Home::getInstance(Conexao::getInstance());
$home = $hor->rsDados(1);

?>
<!DOCTYPE html>
<html lang="en">

<head>
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
    <meta property="og:image" content="<?php echo SITE_URL; ?>/img/<?php echo $infoSistema->logo_principal; ?>" />
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
    <?php include 'head.php'; ?>
</head>

<body>
    <div class="page-wrapper">
        <?php include 'header.php'; ?>

        <section class="features-two">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-3 col-lg-6 col-md-6  wow fadeInLeft" data-wow-delay="0ms"
                        data-wow-duration="1500ms">
                        <div class="features-two__single">
                            <div class="features-two__single-top">
                                <div class="icon">
                                    <span class="icon-information"><img
                                            src="<?php echo SITE_URL; ?>/img/<?php echo $home->section_2_img_7 ?>"
                                            alt="<?php echo $home->section_2_image_alt_7 ?>" class=""></span>
                                </div>
                                <div class="count-box"></div>
                            </div>
                            <div class="features-two__single-title">
                                <h3>
                                    <?php echo $home->section_2_conteudo_8 ?>
                                </h3>
                                <p>
                                    <?php echo $home->section_2_conteudo_9 ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6  wow fadeInLeft" data-wow-delay="200ms"
                        data-wow-duration="1500ms">
                        <div class="features-two__single">
                            <div class="features-two__single-top">
                                <div class="icon">
                                    <span class="icon-farmer"><img
                                            src="<?php echo SITE_URL; ?>/img/<?php echo $home->section_2_img_10 ?>"
                                            alt="<?php echo $home->section_2_image_alt_10 ?>" class=""></span>
                                </div>
                                <div class="count-box"></div>
                            </div>
                            <div class="features-two__single-title">
                                <h3>
                                    <?php echo $home->section_2_conteudo_11 ?>
                                </h3>
                                <p>
                                    <?php echo $home->section_2_conteudo_12 ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6  wow fadeInRight" data-wow-delay="0ms"
                        data-wow-duration="1500ms">
                        <div class="features-two__single">
                            <div class="features-two__single-top">
                                <div class="icon">
                                    <span class="icon-setting"><img
                                            src="<?php echo SITE_URL; ?>/img/<?php echo $home->section_2_img_13 ?>"
                                            alt="<?php echo $home->section_2_image_alt_13 ?>" class=""></span>
                                </div>
                                <div class="count-box"></div>
                            </div>
                            <div class="features-two__single-title">
                                <h3>
                                    <?php echo $home->section_2_conteudo_14 ?>
                                </h3>
                                <p>
                                    <?php echo $home->section_2_conteudo_15 ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <?php if ($home->section_2_conteudo_17 <> '') { ?>
                        <div class="col-xl-3 col-lg-6 col-md-6  wow fadeInRight" data-wow-delay="200ms"
                            data-wow-duration="1500ms">
                            <div class="features-two__single">
                                <div class="features-two__single-top">
                                    <div class="icon">
                                        <span class="icon-conveyor"><img
                                                src="<?php echo SITE_URL; ?>/img/<?php echo $home->section_2_img_16 ?>"
                                                alt="<?php echo $home->section_2_image_alt_16 ?>" class=""></span>
                                    </div>
                                    <div class="count-box"></div>
                                </div>
                                <div class="features-two__single-title">
                                    <h3>
                                        <?php echo $home->section_2_conteudo_17 ?>
                                    </h3>
                                    <p>
                                        <?php echo $home->section_2_conteudo_18 ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <div class="features-two__call-box  wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="features-two__call-box-inner">

                                <div class="title">
                                    <p>
                                        <?php echo $home->section_2_conteudo_20 ?>
                                    </p>
                                    <h2>
                                        <?php echo $home->section_2_conteudo_21 ?>
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="video-one video-one--two jarallax clearfix" data-jarallax data-speed="0.2"
            data-imgPosition="50% 0%" style="background-color: red;">
            <div class="video-one-border"></div>
            <div class="video-one-border video-one-border-two"></div>
            <div class="video-one-border video-one-border-three"></div>
            <div class="video-one-border video-one-border-four"></div>
            <div class="video-one-border video-one-border-five"></div>
            <div class="video-one-border video-one-border-six"></div>

            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="video-one__wrpper">
                            <div class="video-one__left">
                                <div class="video-one__leaf"></div>
                                <h2 class="video-one__title">
                                    <?php echo $home->section_10_conteudo_97 ?>
                                </h2>
                                <div class="video-one__btn">
                                    <a href="<?php echo $home->section_10_link_98 ?>"
                                        aria-label="<?php echo $home->section_10_link_alt_98 ?>" class="thm-btn">
                                        <?php echo $home->section_10_link_conteudo_98 ?>
                                    </a>
                                </div>
                            </div>
                            <div class="video-one__right">
                                <div class="icon wow zoomIn" data-wow-delay="300ms" data-wow-duration="1500ms">
                                    <a href="<?php echo $home->section_10_link_99 ?>"
                                        aria-label="<?php echo $home->section_10_link_alt_99 ?>" class="video-popup">
                                        <span class="icon-play-button-1"></span> </a>
                                    <span class="border-animation border-1"></span>
                                    <span class="border-animation border-2"></span>
                                    <span class="border-animation border-3"></span>
                                </div>
                                <div class="title">
                                    <h2>
                                        <?php echo $home->section_10_conteudo_101 ?>
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <?php include "footer.php" ?>

    <?php include "scripts.php" ?>
</body>

</html>
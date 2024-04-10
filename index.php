<?php include "includes.php";
include "Class/home.class.php";
$puxaHome = Home::getInstance(Conexao::getInstance());
$home = $puxaHome->rsDados(1);

include "Class/blogs.class.php";
$Blogs = Blogs::getInstance(Conexao::getInstance());
$puxaBlogs = $Blogs->rsDados('', 'id DESC');

include "Class/produto.class.php";
$puxaProduto = Produto::getInstance(Conexao::getInstance());
$produto = $puxaProduto->rsDados();

include "Class/faqs.class.php";
$puxaFaqs = Faqs::getInstance(Conexao::getInstance());
$faqs = $puxaFaqs->rsDados();

include "Class/testemunhos.class.php";
$puxaTestemunhos = Testemunhos::getInstance(Conexao::getInstance());
$testemunhos = $puxaTestemunhos->rsDados();
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

<body>
    <div class="page-wrapper">
        <?php include 'header.php'; ?>
        <section class="home_one">
            <div class="container z-1">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-12 home_col">
                        <span>
                            <div class="line_home"></div>
                            <?php echo $home->section_1_conteudo_1 ?>
                        </span>
                        <h1>
                            <?php echo $home->section_1_conteudo_2 ?>
                        </h1>
                        <p>
                            <?php echo $home->section_1_conteudo_3 ?>
                        </p>
                        <div class="home_one_link">
                            <a href="<?php echo $home->section_1_link_conteudo_6 ?>"
                                aria-label="<?php echo $home->section_1_link_alt_6 ?>">
                                <?php echo $home->section_1_link_6 ?>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12">
                        <img src="<?php echo SITE_URL; ?>/img/<?php echo $home->section_1_img_7 ?>"
                            alt="<?php echo $home->section_1_image_alt_7 ?>" class="w-100">
                    </div>
                </div>
            </div>
            <div class="home_one_absolute">
                <img src="<?php echo SITE_URL; ?>/img/<?php echo $home->section_10_conteudo_70 ?>"
                            alt="<?php echo $home->section_10_conteudo_72 ?>" class="w-100">
            </div>
            
        </section>
        <section class="home_two">
            <div class="container h-100">
                <div class="home_two_title">
                    <h2>
                        <?php echo $home->section_2_conteudo_8 ?>
                    </h2>
                    <a href="<?php echo $home->section_2_link_conteudo_9 ?>"
                        aria-label="<?php echo $home->section_2_link_alt_9 ?>">
                        <?php echo $home->section_2_link_9 ?>
                    </a>
                </div>
                <div class="swiper-container two">
                    <div class="swiper-wrapper swiper-wrapper_home_two">
                        <?php foreach ($produto as $produto_single) { ?>
                            <div class="swiper-slide home_slide">
                                
                                    <div class="slider-image">
                                        <a href="<?php echo SITE_URL; ?>/produto/<?php echo $produto_single->pagina_individual ?>">
                                        <img src="<?php echo SITE_URL; ?>/img/<?php echo $produto_single->section_1_img_1 ?>"
                                            alt="<?php echo $produto_single->section_1_image_alt_1 ?>" class="w-100">
                                            </a>
                                    </div>
                                    <div class="slider_text">
                                        <h4>
                                            <?php echo $produto_single->section_1_conteudo_2 ?>
                                        </h4>
                                        <span>
                                            <?php echo $produto_single->section_1_conteudo_3 ?>
                                        </span>
                                    </div>
                            </div>
                            
                        <?php } ?>
                    </div>
                    <div class="swiper_button_home">
                        <div class="swiper-button-prev swiper-button-white button_home_prev1 "><i class="fa fa-chevron-left"></i></div>
                        <div class="swiper-button-next swiper-button-white button_home_next1"><i class="fa fa-chevron-right"></i></div>
                    </div>

                    
                </div>
            </div>
        </section>
        <section class="home_three">
            <div class="container">
                <div class="home_three_title">
                    <h3>
                        <?php echo $home->section_3_conteudo_10 ?>
                    </h3>
                    <p>
                        <?php echo $home->section_3_conteudo_11 ?>
                    </p>
                    <p>
                        <?php echo $home->section_3_conteudo_12 ?>
                    </p>
                </div>
                <div class="home_three_content">
                    <img src="<?php echo SITE_URL; ?>/img/<?php echo $home->section_3_img_13 ?>" alt="<?php echo $home->section_3_image_alt_13 ?>" class="w-100">
                    <div class="shapes">
                        <div class="feature-note right top wow fadeInRight show-cont first shape_one" style="visibility: visible; animation-name: fadeInRight;">
                            <div class="indicator">
                                <div class="plus-icon">
                                    <span class="plus">+</span>
                                </div>
                            </div>
                            <div class="feature-name">
                                <?php echo $home->section_3_conteudo_14 ?>
                            </div>
                        </div>
                        <div class="feature-note left bottom wow fadeInLeft show-cont second shape_two" style="visibility: visible; animation-name: fadeInLeft;">
                            <div class="indicator">
                                <div class="plus-icon">
                                    <span class="plus">+</span>
                                </div>
                            </div>
                            <div class="feature-name">
                                <?php echo $home->section_3_conteudo_15 ?>
                            </div>
                        </div>
                        <div class="feature-note left bottom wow featuretwo fadeInRight show-cont shape_three" style="visibility: visible; animation-name: fadeInRight;">
                            <div class="indicator">
                                <div class="plus-icon">
                                    <span class="plus">+</span>
                                </div>
                            </div>
                            <div class="feature-name">
                                <?php echo $home->section_3_conteudo_16 ?>
                            </div>
                        </div>
                        <div class="feature-note left bottom featureOne wow fadeInLeft show-cont shape_four" style="visibility: visible; animation-name: fadeInLeft;">
                            <div class="indicator">
                                <div class="plus-icon">
                                    <span class="plus">+</span>
                                </div>
                            </div>
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
                        <div class="col-xl-4 col-lg-4 col-md-12">
                            <img src="<?php echo SITE_URL; ?>/img/<?php echo $home->section_4_img_18 ?>" alt="<?php echo $home->section_4_image_alt_18 ?>">
                            <p class="text-center"><?php echo $home->section_4_conteudo_19 ?></p>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-12">
                            <img src="<?php echo SITE_URL; ?>/img/<?php echo $home->section_4_img_20 ?>"
                                alt="<?php echo $home->section_4_image_alt_20 ?>">
                            <p class="text-center">
                                <?php echo $home->section_4_conteudo_21 ?>
                            </p>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-12">
                            <img src="<?php echo SITE_URL; ?>/img/<?php echo $home->section_4_img_22 ?>"
                                alt="<?php echo $home->section_4_image_alt_22 ?>">
                            <p class="text-center">
                                <?php echo $home->section_4_conteudo_23 ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="home_five">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-12">
                        <img src="<?php echo SITE_URL; ?>/img/<?php echo $home->section_5_img_24 ?>"
                            alt="<?php echo $home->section_5_image_alt_24 ?>" class="w-100">
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12 d-flex align-items-center">
                        <div class="content">
                            <div class="home_five_title">
                                <span>
                                    <?php echo $home->section_5_conteudo_25 ?>
                                </span>
                                <p>
                                    <?php echo $home->section_5_conteudo_26 ?>
                                </p>
                                <p>
                                    <?php echo $home->section_5_conteudo_27 ?>
                                </p>
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
                    <div class="col-xl-6 col-lg-6 col-md-12 d-flex justify-content-center z-2">
                        <div class="home_six_text">
                            <h3>
                                <?php echo $home->section_6_conteudo_29 ?>
                            </h3>
                            <div class="home_six_link">
                                <a href="<?php echo $home->section_6_link_conteudo_30 ?>"
                                    aria-label="<?php echo $home->section_6_link_alt_30 ?>">
                                    <?php echo $home->section_6_link_30 ?>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12 z-2">
                        <img src="<?php echo SITE_URL; ?>/img/<?php echo $home->section_6_img_31 ?>"
                            alt="<?php echo $home->section_6_image_alt_31 ?>" class="w-100">
                    </div>
                    <div class="home_six_svg">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%"
                            height="100%" viewBox="0 0 717 486">
                            <image id="LOGO_EM_ALTA" data-name="LOGO EM ALTA" width="100%" height="100%"
                                xlink:href="data:img/png;base64,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" />
                        </svg>
                    </div>
                </div>
            </div>
        </section>
        <section class="home_seven">
            <div class="container overflow-hidden">
                <div class="home_seven_title">
                    <h3>
                        <?php echo $home->section_7_conteudo_32 ?>
                    </h3>
                </div>
                <div class="row d-flex justify-content-center swiper_home_six position-relative">
                    <div class="swiper-wrapper">
                        <?php foreach ($testemunhos as $testemunho) { ?>
                            <div class="swiper-slide d-flex justify-content-center">
                                <div class="home_seven_item ">
                                   <i class="fa fa-quote-left"></i>
                                    <h3><?php echo $testemunho->nome?></h3>
                                   <div class="stars">
                                       <i class="fa fa-star"></i>
                                       <i class="fa fa-star"></i>
                                       <i class="fa fa-star"></i>
                                       <i class="fa fa-star"></i>
                                       <i class="fa fa-star"></i>
                                   </div>
                                    <p><?php echo $testemunho->testemunho?></p>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="swiper-button-prev swiper-button-white button_home_prev2"><i class="fa fa-chevron-left"></i></div>
                    <div class="swiper-button-next swiper-button-white button_home_next2"><i class="fa fa-chevron-right"></i></div>
                </div>
            </div>
        </section>
        <section class="faq-one home_eight" style="background-image: url(<?php echo SITE_URL; ?>/img/<?php echo $home->section_8_img_33 ?>);">
            <div class="faq-one__shape"></div>
            <div class="container">
                <div class="home_eight_title">
                    <h3><?php echo $home->section_8_conteudo_34 ?></h3>
                </div>
                <div class="accrodion-grp faq-one-accrodion" data-grp-name="faq-one-accrodion">
                    <div class="row">

                       <?php
                        $totalFaqs = count($faqs);
                        $faqsPerColumn = ceil($totalFaqs / 2);
                        
                        for ($columnIndex = 0; $columnIndex < 2; $columnIndex++) {
                            echo '<div class="col-lg-6"><div class="faq-one__accordions"><div class="accrodion-grp faq-one-accrodion" data-grp-name="faq-one-accrodion">';
                            
                            for ($i = $columnIndex * $faqsPerColumn; $i < ($columnIndex + 1) * $faqsPerColumn && $i < $totalFaqs; $i++) {
                                $faq = $faqs[$i];
                                $activeClass = ($i === 0) ? 'active' : '';
                                $iconClass = ($activeClass === 'active') ? 'fa fa-minus' : 'fa fa-plus';
                        
                                echo '<div class="accrodion wow fadeInUp animated ' . $activeClass . '" data-wow-delay="0ms" data-wow-duration="1000ms">';
                                echo '<div class="accrodion-title">';
                                echo '<h4>' . $faq->titulo . '<i class="' . $iconClass . '"></i></h4>';
                                echo '</div>';
                                echo '<div class="accrodion-content">';
                                echo '<div class="inner">';
                                echo '<p>' . $faq->descricao . '</p>';
                                echo '</div>';
                                echo '</div>';
                                echo '</div>';
                            }
                        
                            echo '</div></div></div>';
                        }
                        ?>


                    </div>
                  
                    <div class="home_eight_cta">
                        <p><?php echo $home->section_8_conteudo_59 ?></p>
                        <div class="home_eight_cta_link">
                            <a href="<?php echo $home->section_8_link_conteudo_60 ?>" aria-label="<?php echo $home->section_8_link_alt_60 ?>">
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
                    <div class="col-xl-6 col-lg-6 col-md-12 home_nine_titles">
                        <span>
                            <?php echo $home->section_9_conteudo_61 ?>
                        </span>
                        <h3>
                            <?php echo $home->section_9_conteudo_62 ?>
                        </h3>
                        <p>
                            <?php echo $home->section_9_conteudo_63 ?>
                        </p>
                        <div class="home_nine_titles_link">
                            <a href="<?php echo $home->section_9_link_conteudo_64 ?>"
                                aria-label="<?php echo $home->section_9_link_alt_64 ?>">
                                <?php echo $home->section_9_link_64 ?>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12 d-flex">
                        <div class="each_itens">
                            <div class="itens_one">
                                <a href="<?php echo SITE_URL; ?>/blog/<?php echo $puxaBlogs[0]->url_amigavel ?>">
                                    <img src="<?php echo SITE_URL; ?>/img/<?php echo $puxaBlogs[0]->foto ?>" class="w-100">
                                    <div class="itens_content">
                                        <p>
                                            <?php echo $puxaBlogs[0]->titulo ?>
                                        </p>
                                        <span>
                                            <?php echo formataData($puxaBlogs[0]->data_postagem);?>
                                        </span>
                                    </div>
                                </a>
                            </div>
                            <?php if (isset($puxaBlogs[1]) && $puxaBlogs[1] != null) { ?>
                                <div class="itens_two">
                                    <a href="<?php echo SITE_URL; ?>/blog/<?php echo $puxaBlogs[1]->url_amigavel ?>">
                                        <img src="<?php echo SITE_URL; ?>/img/<?php echo $puxaBlogs[1]->foto ?>"class="w-100">
                                        <div class="itens_content">
                                            <p>
                                                <?php echo $puxaBlogs[1]->titulo ?>
                                            </p>
                                            <span>
                                                <?php echo formataData($puxaBlogs[1]->data_postagem);?>
                                            </span>
                                        </div>
                                    </a>
                                </div>
                            <?php } ?>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="home_ten" style="background-image: url(<?php echo SITE_URL; ?>/img/<?php echo $home->section_10_img_65 ?>);">
            <div class="container h-100">
                <div class="home_ten_content">
                    <div class="home_ten_content_itens">
                        <h4><?php echo $home->section_10_conteudo_66 ?></h4>
                        <img src="<?php echo SITE_URL; ?>/img/<?php echo $home->section_10_img_67 ?>" alt="<?php echo $home->section_10_image_alt_67 ?>">
                        <p>
                            <?php echo $infoSistema->endereco; ?>
                        </p>
                        <img src="<?php echo SITE_URL; ?>/img/<?php echo $home->section_10_img_69 ?>" alt="<?php echo $home->section_10_image_alt_69 ?>">
                        <a href="tel:<?php echo $infoSistema->telefone1; ?>"> <p> <?php echo $infoSistema->telefone1; ?></p>  </a>
                        <img src="<?php echo SITE_URL; ?>/img/<?php echo $home->section_10_img_71 ?>" alt="<?php echo $home->section_10_image_alt_71 ?>">
                        <a href="mailto:<?php echo $infoSistema->email1 ?>" aria-label="Contato via E-mail da <?php echo $infoSistema->nome_empresa ?>"> <p>Contato via E-mail</p> </a>
                    </div>
                </div>
            </div>
        </section>

    </div>
    <?php include "footer.php" ?>
    <?php include "scripts.php" ?>
</body>

</html>
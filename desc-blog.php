<?php
include "includes.php";
include "Class/blogs.class.php";

$blogs = Blogs::getInstance(Conexao::getInstance());

$id = '';
if (isset($_GET['id'])) {
    if (empty($_GET['id'])) {
        header('Location: ' . SITE_URL);
    } else {
        $id = $_GET['id'];
    }
}

$descBlog = $blogs->rsDados('', '', '', '', '', $id);
$outrosBlog = $blogs->rsDados('', 'rand()', '3', '', $descBlog->id);
?>
<!doctype html>
<html lang="pt-BR">

<head>
    <?php include 'head.php'; ?>
    <meta name="theme-color" content="#91d8f7">
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?php if (isset($descBlog->meta_title) && !empty($descBlog->meta_title)) {
            echo $descBlog->meta_title;
        } ?>
    </title>
    <meta name="description" content="<?php if (isset($descBlog->meta_description) && !empty($descBlog->meta_description)) {
        echo $descBlog->meta_description;
    } ?>" />
    <meta name="keywords" content="<?php if (isset($descBlog->meta_keywords) && !empty($descBlog->meta_keywords)) {
        echo $descBlog->meta_keywords;
    } ?>">
    <meta name="twitter:card" content="<?php if (isset($descBlog->meta_title) && !empty($descBlog->meta_title)) {
        echo $descBlog->meta_title;
    } ?>" />
    <meta name="twitter:site" content="<?php echo SITE_URL; ?>" />
    <meta name="twitter:creator" content="Hoogli" />
    <meta property="og:title" content="<?php if (isset($descBlog->meta_title) && !empty($descBlog->meta_title)) {
        echo $descBlog->meta_title;
    } ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?php echo SITE_URL; ?>" />
    <meta property="og:image:type" content="image/png" />
    <meta property="og:image" content="<?php echo SITE_URL; ?>/img/<?php echo $infoSistema->favicon; ?>" />
    <meta property="og:image:width" content="400" />
    <meta property="og:image:height" content="300" />
    <meta property="og:description" content="<?php if (isset($descBlog->meta_description) && !empty($descBlog->meta_description)) {
        echo $descBlog->meta_description;
    } ?>" />
    <meta property="og:determiner" content="A" />
    <meta property="og:locale" content="pt_BR" />
    <meta property="og:site_name" content="<?php echo $infoSistema->nome_empresa ?>" />
    <meta name="author" content="Hoogli">
    <link rel="shortcut icon" href="<?php echo SITE_URL; ?>/img/<?php echo $infoSistema->favicon; ?>">
    <link rel="icon" href="<?php echo SITE_URL; ?>/img/<?php echo $infoSistema->favicon; ?>">
    <link rel="stylesheet" href="<?php echo SITE_URL; ?>/assets/css/blog.css" />
</head>

<body>
    <?php include "header.php"; ?>

    <section class="blog-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12" style="padding: 9rem 0px;">
                    <div class="blog-single-post-listing details mb--0">
                        <div class="thumbnail">
                            <img src="<?php echo SITE_URL . '/img/' . $descBlog->banner ?>"
                                alt="<?php echo $descBlog->descricao_imagem ?>">
                        </div>
                        <div class="blog-listing-content">
                            <div class="user-info">
                                <div class="single">
                                    <i class="far fa-user-circle"></i>
                                    <span>Por:
                                        <?php echo $descBlog->postado_por ?>
                                    </span>
                                </div>
                                <div class="single">
                                    <i class="far fa-clock"></i>
                                    <span>
                                        <?php echo formataData($descBlog->data_postagem) ?>
                                    </span>
                                </div>
                            </div>
                            <h1 class="title">
                                <?php echo $descBlog->titulo ?>
                            </h1>
                            <?php echo $descBlog->conteudo ?>
                            <?php if ($descBlog->video <> "") {
                                $embed = $descBlog->video;
                                $embed2 = substr($embed, 32);
                                ?>
                                <iframe width="560" height="550" src="https://www.youtube.com/embed/<?php echo $embed2 ?>"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    allowfullscreen></iframe>
                            <?php } ?>
                            <?php if ($descBlog->tem_cta1 == 'S') { ?>
                                <div class="contact-info-holder">
                                    <div class="left">
                                        <h2>
                                            <?php echo $descBlog->titulo_cta1 ?>
                                        </h2>
                                    </div>
                                    <div class="right">
                                        <div class="contact-button">
                                            <a href="<?php echo $descBlog->link_botao_cta1 ?>"
                                                aria-label="<?php echo $descBlog->texto_ancora_cta1 ?>">
                                                <?php echo $descBlog->nome_botao_cta1 ?>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                            <?php echo $descBlog->conteudo2 ?>
                            <?php if ($descBlog->tem_cta2 == 'S') { ?>
                                <div class="contact-info-holder">
                                    <div class="left">
                                        <h2>
                                            <?php echo $descBlog->titulo_cta2 ?>
                                        </h2>
                                    </div>
                                    <div class="right">
                                        <div class="contact-button">
                                            <a href="<?php echo $descBlog->link_botao_cta2 ?>"
                                                aria-label="<?php echo $descBlog->texto_ancora_cta2 ?>">
                                                <?php echo $descBlog->nome_botao_cta2 ?>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                            <?php echo $descBlog->conteudo3 ?>

                            <?php if ($descBlog->tem_cta3 == "S") { ?>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="contact-info-holder-img">
                                            <div class="left">
                                                <img src="<?php echo SITE_URL . '/img/' . $descBlog->foto_cta ?>"
                                                    alt="<?php echo $descBlog->legenda_imagem_cta ?>">
                                            </div>
                                            <div class="right width-cta">
                                                <h2 class="h2-blog">
                                                    <?php echo $descBlog->titulo_cta_3 ?>
                                                </h2>
                                                <div class="contact-button">
                                                    <a href="<?php echo $descBlog->link_botao_cta3 ?>"
                                                        aria-label="<?php echo $descBlog->texto_ancora_cta3 ?>">
                                                        <?php echo $descBlog->nome_botao_cta3 ?>
                                                    </a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include "footer.php"; ?>
    <?php include "scripts.php" ?>

</body>

</html>
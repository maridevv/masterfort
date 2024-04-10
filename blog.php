<?php
include "includes.php";

include "Class/blog.class.php";
$blo = Blog::getInstance(Conexao::getInstance());
$blog = $blo->rsDados(1);

include "Class/blogs.class.php";
$Blogs = Blogs::getInstance(Conexao::getInstance());
$puxaBlogs = $Blogs->rsDados('', 'id DESC');
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

<body>
    <div class="page-wrapper">

        <?php include 'header.php'; ?>
        <section class="page-header clearfix blogs_one">
            <div class="container">
                <div class="page-header__inner text-center clearfix">
                    <h1>
                        <?php echo $blog->section_1_conteudo_1 ?>
                    </h1>
                </div>
            </div>
        </section>
        <section class="blog-one blog-one--news">
            <div class="blog-one__bg wow slideInDown animated" data-wow-delay="100ms" data-wow-duration="2500ms"
                style="visibility: visible; animation-duration: 2500ms; animation-delay: 100ms; animation-name: slideInDown;">
            </div>
            <div class="container">
                <div class="row">
                    <?php foreach ($puxaBlogs as $blogSingle) { ?>
                        <div class="col-lg-6 col-md-6 wow fadeInLeft animated" data-wow-delay="0ms"
                            data-wow-duration="1500ms"
                            style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;">
                            <div class="blog-one__single">
                                <div class="blog-one__single-img">
                                    <img src="<?php echo SITE_URL; ?>/img/<?php echo $blogSingle->foto ?>" />
                                </div>

                                <div class="blog-one__single-content">
                                    <h2>
                                        <a href="<?php echo SITE_URL; ?>/blog/<?php echo $blogSingle->url_amigavel ?>">
                                            <?php echo $blogSingle->titulo ?>
                                        </a>
                                    </h2>
                                    <div class="date-box">
                                        <span>
                                           <?php echo formataData($blogSingle->data_postagem);?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </section>
        <?php include "footer.php" ?>
    </div>
    <?php include "scripts.php" ?>
</body>

</html>
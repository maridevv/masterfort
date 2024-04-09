<?php include "includes.php";
include "Class/sucesso.class.php";
$puxaSucesso = Sucesso::getInstance(Conexao::getInstance());
$sucesso = $puxaSucesso->rsDados(1);
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
    <?php if (isset($sucesso->meta_title) && !empty($sucesso->meta_title)) {
      echo $sucesso->meta_title;
    } ?>
  </title>
  <meta name="description" content="<?php if (isset($sucesso->meta_description) && !empty($sucesso->meta_description)) {
    echo $sucesso->meta_description;
  } ?>" />
  <meta name="keywords" content="<?php if (isset($sucesso->meta_keywords) && !empty($sucesso->meta_keywords)) {
    echo $sucesso->meta_keywords;
  } ?>">
  <meta name="twitter:card" content="<?php if (isset($sucesso->meta_title) && !empty($sucesso->meta_title)) {
    echo $sucesso->meta_title;
  } ?>" />
  <meta name="twitter:site" content="<?php echo SITE_URL; ?>" />
  <meta name="twitter:creator" content="Hoogli" />
  <meta property="og:title" content="<?php if (isset($sucesso->meta_title) && !empty($sucesso->meta_title)) {
    echo $sucesso->meta_title;
  } ?>" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="<?php echo SITE_URL; ?>" />
  <meta property="og:image:type" content="image/png" />
  <meta property="og:image" content="<?php echo SITE_URL; ?>/img/<?php echo $infoSistema->favicon; ?>" />
  <meta property="og:image:width" content="400" />
  <meta property="og:image:height" content="300" />
  <meta property="og:description" content="<?php if (isset($sucesso->meta_description) && !empty($sucesso->meta_description)) {
    echo $sucesso->meta_description;
  } ?>" />
  <meta property="og:determiner" content="A" />
  <meta property="og:locale" content="pt_BR" />
  <meta property="og:site_name" content="<?php echo $infoSistema->nome_empresa ?>" />
  <meta name="author" content="Hoogli">
  <link rel="shortcut icon" href="<?php echo SITE_URL; ?>/img/<?php echo $infoSistema->favicon; ?>">
  <link rel="icon" href="<?php echo SITE_URL; ?>/img/<?php echo $infoSistema->favicon; ?>">
</head>

<body>
  <?php include "header.php" ?>
  <section class="page-banner bg_cover p-r  text-white" style="background: #63ce80;padding: 12rem 0;margin-top: 7rem;">
    <div class="container">
      <h1 style="color: #fff;">
        <?php echo $sucesso->section_1_conteudo_1 ?>
      </h1>
      <br>
      <p style=" font-size: 22px; font-weight: 500;color:#fff ">
        <?php echo $sucesso->section_1_conteudo_2 ?>.
      </p>
    </div>
  </section>
  <?php include "footer.php" ?>
  <?php include "scripts.php" ?>
</body>

</html>
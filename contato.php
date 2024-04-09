<?php include "includes.php";
include "Class/contato.class.php";
$puxaContato = Contato::getInstance(Conexao::getInstance());
$contato = $puxaContato->rsDados(1);
?>
<html lang="pt-BR">
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

<body>
  <div class="page-wrapper">
    <?php include 'header.php'; ?>
    <div class="stricky-header stricked-menu main-menu">
      <div class="sticky-header__content">
      </div>
    </div>

    <section class="contact_one page-header clearfix image_contato">
      <div class="container">
        <div class="page-header__inner text-center clearfix">
          <h1>
            <?php echo $contato->section_1_conteudo_1 ?>
          </h1>
        </div>
      </div>
    </section>
    <section class="products_three">
      <div class="container">
        <div class="products_three_content">
          <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-12 products_three_title">
              <h3>
                <?php echo $contato->section_2_conteudo_2 ?>
              </h3>
              <form class="comment-one__form" method="POST">
                                          <?php if (!empty($erros)) { ?>
                        <div class="alert alert-danger" role="alert">
                            Seu contato não foi enviado:
                            <ul class="mb-0">
                                <?php foreach ($erros as $erro) {
                                    echo '<li>' . htmlspecialchars($erro) . "</li>\n";
                                } ?>
                            </ul>
                        </div>
                        <?php } ?>
                  <input type="text" name="empresa" id="empresa" style="position: absolute;top: -999999px;">
                <div class="col-xl-12 col-lg-12">
                  <div class="comment-form__input-box">
                    <input type="text" placeholder="Nome completo" name="nome">
                  </div>
                </div>
                <div class="col-xl-12 col-lg-12">
                  <div class="comment-form__input-box">
                    <input type="email" placeholder="Email" name="email">
                  </div>
                </div>
                <div class="col-xl-12 col-lg-12">
                  <div class="comment-form__input-box">
                    <input type="text" placeholder="Telefone" name="telefone">
                  </div>
                </div>
                <div class="col-xl-12 col-lg-12">
                  <div class="comment-form__input-box">
                    <input type="text" placeholder="Assunto" name="assunto">
                  </div>
                </div>
                  <div class="col-xl-12 col-lg-12">
                    <div class="comment-form__input-box">
                      <textarea name="mensagem" placeholder="mensagem"></textarea>
                    </div>
                  </div>
                        <div class="col-xl-12 col-lg-12 ">
                            <div class="row">
                            <div class="col-md-4 col-lg-3">
                                <div class="math comment-form__input-box">
                                    <p id="conta" style="color: #000;margin-left: 13px;"><span id="valor1"></span> + <span id="valor2"></span> = </p>
                                </div>
                            </div>
                            <div class="col-md-8 col-lg-9">
                                <div class="math comment-form__input-box" >
                                    <input class="form-control style-white" id="totalvalores" type="text" name="totalvalores" placeholder="Total soma" required >
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-4">
                                <p id="aviso"></p>
                            </div>
                            <div class="col-lg-12">
                                <input type="submit" placeholder="Enviar" class="thm-btn comment-form__btn">
                            </div>
                            <p class="form-message"></p>
                            <input type="hidden" name="acaoEnvio2" id="enviar" value="Enviar">
                            </div>
                        </div>
              </form>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12 d-flex">
              <div class="products_three_title_relative">
                <img src="<?php echo SITE_URL; ?>/img/<?php echo $contato->section_2_img_3 ?>"
                  alt="<?php echo $contato->section_2_image_alt_3 ?>" class="first_image">
                <div class="products_three_title_relative_item">
                  <h3>
                    <?php echo $contato->section_2_conteudo_4 ?>
                  </h3>
                  <div class="d-flex align-items-center products_three_item">
                    <img src="<?php echo SITE_URL; ?>/img/<?php echo $contato->section_2_img_5 ?>"
                      alt="<?php echo $contato->section_2_image_alt_5 ?>">
                    <a href="tel:<?php echo $infoSistema->telefone1; ?>">
                                               <p> <?php echo $infoSistema->telefone1; ?></p>
                                            </a>
                  </div>
                  <div class="d-flex align-items-center products_three_item">
                    <img src="<?php echo SITE_URL; ?>/img/<?php echo $contato->section_2_img_6 ?>"
                      alt="<?php echo $contato->section_2_image_alt_6 ?>">
                    <a href="mailto:<?php echo $infoSistema->email1 ?>"
                                                aria-label="Link de encaminhamento para o E-mail da <?php echo $infoSistema->nome_empresa ?>">
                                                <p><?php echo $infoSistema->email1 ?></p>
                                            </a>
                  </div>
                  <div class="d-flex align-items-center products_three_item">
                    <img src="<?php echo SITE_URL; ?>/img/<?php echo $contato->section_2_img_7 ?>"
                      alt="<?php echo $contato->section_2_image_alt_7 ?>">
                   <p>
                        <?php echo $infoSistema->hora_atendimento ?>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
              <script>
            var valor1 = Math.floor((Math.random() * 10) + 1);
            var valor2 = Math.floor((Math.random() * 10) + 1);
            document.getElementById("valor1").innerHTML = valor1;
            document.getElementById("valor2").innerHTML = valor2;
            document.getElementById("enviar").setAttribute("disabled", "");
            document.getElementById('totalvalores').onchange = function() {
                validar()
            }

            function validar() {
                var totalvalores = document.getElementById("totalvalores").value;
                if (totalvalores == valor1 + valor2) {
                    document.getElementById('aviso').innerHTML = "reCAPTCHA válido";
                    document.getElementById("enviar").removeAttribute("disabled");
                } else {
                    document.getElementById('aviso').innerHTML = "reCAPTCHA inválido";
                    document.getElementById("enviar").setAttribute("disabled", "");
                }
            }
        </script>
    <?php include "footer.php" ?>
  </div>
  <?php include "scripts.php" ?>
</body>

</html>
<?php include "flutuante/flutuante.php";
include_once "Class/produto.class.php";
$puxaProduto = Produto::getInstance(Conexao::getInstance());
$produto_head = $puxaProduto->rsDados();
?>
<header class="main-header main-header--one main-header--one--two  clearfix">
  <div class="main-header--one__wrapper">
    <div class="main-header--one__bottom clearfix">
      <div class="container">
        <div class="main-header--one__bottom-inner">
          <div class="main-header--one__bottom-middel">
            <div class="logo">
              <a href="<?php echo SITE_URL; ?>">
                <img loading="lazy" class="light-logo"
                  src="<?php echo SITE_URL; ?>/img/<?php echo $infoSistema->logo_principal; ?>" alt="Logo Principal">
              </a>
            </div>
          </div>
          <nav class="main-menu main-menu--1">
            <div class="main-menu__inner">
              <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
              <div class="stricky-one-logo">
                <div class="logo">
                  <div class="logo">
                    <a href="<?php echo SITE_URL; ?>">
                      <img loading="lazy" class="dark-logo"
                        src="<?php echo SITE_URL; ?>/img/<?php echo $infoSistema->logo_principal; ?>"
                        alt="Logo Principal">
                      <img loading="lazy" class="light-logo"
                        src="<?php echo SITE_URL; ?>/img/<?php echo $infoSistema->logo_principal; ?>"
                        alt="Logo Principal">
                    </a>
                  </div>
                </div>
              </div>
              <div class="main-header--one__bottom-left">
                <ul class="main-menu__list">
                  <li><a href="<?php echo SITE_URL; ?>">Home</a></li>
                  <li><a href="<?php echo SITE_URL; ?>/sobre">Sobre</a></li>
                  <li><a href="<?php echo SITE_URL; ?>/produtos">Produtos</a>
                    <ul>
                        <?php foreach ($produto_head as $head) { ?>
                            <li><a href="<?php echo SITE_URL; ?>/produto/<?php echo $head->pagina_individual ?>"><?php echo $head->section_1_conteudo_2 ?></a></li>
                        <?php } ?>
                    </ul>
                  </li>
                  <li><a href="<?php echo SITE_URL; ?>/blog">Blog</a></li>
                  <li><a href="<?php echo SITE_URL; ?>/contato">Contato</a></li>
                </ul>
              </div>
            </div>
          </nav>
        </div>

      </div>
    </div>
  </div>
</header>
<div class="stricky-header stricked-menu main-menu">
  <div class="sticky-header__content">
  </div>
</div>
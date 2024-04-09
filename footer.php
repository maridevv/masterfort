<footer class="footer-one">
    <div class="footer-one__top">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="footer-one__top-wrapper">
                        <div class="footer-one__bg"><img src="assets/images/backgrounds/footer-one-bg.png" alt="" />
                        </div>
                        <div class="row">
                            <div class="col-xl-3 col-lg-6 col-md-6 wow animated fadeInUp" data-wow-delay="0.1s">
                                <div class="footer-widget__column footer-widget__about">
                                    <div class="footer-widget__about-logo">
                                        <a href="<?php echo SITE_URL; ?>"><img loading="lazy"
                                                src="<?php echo SITE_URL; ?>/img/<?php echo $infoSistema->logo_principal; ?>"
                                                alt="Logo Principal"></a>
                                    </div>
                                    <p class="footer-widget__about-text">
                                        <?php echo $infoSistema->sobre_breve ?>
                                    </p>

                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-6 col-md-6 wow animated fadeInUp" data-wow-delay="0.5s">
                                <div class="footer-widget__column footer-widget__explore">
                                    <h2 class="footer-widget__title">Site Map</h2>
                                    <ul class="footer-widget__explore-list">

                                        <li class="footer-widget__explore-list-item"> <a
                                                href="<?php echo SITE_URL; ?>">Home</a></li>
                                        <li class="footer-widget__explore-list-item">
                                            <a href="<?php echo SITE_URL; ?>/sobre">Sobre</a>
                                        </li>
                                        <li class="footer-widget__explore-list-item"><a
                                                href="<?php echo SITE_URL; ?>/produtos">Produtos</a></li>
                                        <li class="footer-widget__explore-list-item"><a
                                                href="<?php echo SITE_URL; ?>/blog">Blog</a>
                                        <li class="footer-widget__explore-list-item"><a
                                                href="<?php echo SITE_URL; ?>/contato">Contato</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6 wow animated fadeInUp" data-wow-delay="0.5s">
                                <div class="footer-widget__column footer-widget__explore">
                                    <h2 class="footer-widget__title">contato</h2>
                                    <div class="footer-widget__about-contact-box">
                                        <p class="phone">
                                            <a href="tel:<?php echo $infoSistema->telefone1; ?>"><i
                                                    class="fas fa-phone-square-alt"></i>
                                                <?php echo $infoSistema->telefone1; ?>
                                            </a>
                                        </p>
                                        <p>
                                            <a href="mailto:<?php echo $infoSistema->email1 ?>"
                                                aria-label="Link de encaminhamento para o E-mail da <?php echo $infoSistema->nome_empresa ?>"><i
                                                    class="fa fa-envelope"></i>
                                                <?php echo $infoSistema->email1 ?>
                                            </a>
                                        </p>
                                        <p class="text">
                                            <i class="fas fa-map-marker-alt"></i>
                                            <?php echo $infoSistema->endereco; ?>
                                        </p>

                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-2 col-lg-6 col-md-6 wow animated fadeInUp" data-wow-delay="0.7s">
                                <div class="footer-widget__column footer-widget__newletter">
                                    <h2 class="footer-widget__title">Social</h2>
                                    <div class="d-flex">
                                        <?php if ($infoSistema->facebook <> '') { ?>
                                        <a href="<?php echo $infoSistema->facebook ?>"
                                            aria-label="Link de encaminhamento para o Facebook da <?php echo $infoSistema->nome_empresa ?>"
                                            target="_blank"><i class="fab fa-facebook-f"></i></a>
                                    <?php } ?>
                                    <?php if ($infoSistema->instagram <> '') { ?>
                                        <a href="<?php echo $infoSistema->instagram ?>" target="_blank"
                                            aria-label="Link de encaminhamento para o Instagram da <?php echo $infoSistema->nome_empresa ?>"><i
                                                class="fab fa-instagram"></i></a>
                                    <?php } ?>

                                    <?php if ($infoSistema->twitter <> '') { ?>
                                        <a href="<?php echo $infoSistema->twitter ?>" target="_blank"
                                            aria-label="Link de encaminhamento para o Twitter da <?php echo $infoSistema->nome_empresa ?>"><i
                                                class="fab fa-twitter"></i></a>
                                    <?php } ?>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-one__bottom">
        <?php include "copy.php" ?>
    </div>
</footer>
<div class="mobile-nav__wrapper">
    <div class="mobile-nav__overlay mobile-nav__toggler"></div>
    <div class="mobile-nav__content">
        <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

        <div class="logo-box">
            <a href="<?php echo SITE_URL; ?>"><img loading="lazy" width="155"
                    src="<?php echo SITE_URL; ?>/img/<?php echo $infoSistema->logo_principal; ?>"
                    alt="Logo Principal"></a>
        </div>
        <div class="mobile-nav__container"></div>
        <ul class="mobile-nav__contact list-unstyled">
            <li>
                <i class="icon-phone-call"></i>
                <a href="tel:<?php echo $infoSistema->telefone1; ?>">
                    <?php echo $infoSistema->telefone1; ?>
                </a>
            </li>
            <li>
                <i class="icon-letter"></i>
                <a href="mailto:<?php echo $infoSistema->email1 ?>">
                    <?php echo $infoSistema->email1 ?>
                </a>
            </li>
        </ul>
        <div class="mobile-nav__top">
            <div class="mobile-nav__social">
                <?php if ($infoSistema->facebook <> '') { ?>
                    <a href="<?php echo $infoSistema->facebook ?>"
                        aria-label="Link de encaminhamento para o Facebook da <?php echo $infoSistema->nome_empresa ?>"
                        target="_blank"><i class="fab fa-facebook-f"></i></a>
                <?php } ?>
                <?php if ($infoSistema->instagram <> '') { ?>
                    <a href="<?php echo $infoSistema->instagram ?>" target="_blank"
                        aria-label="Link de encaminhamento para o Instagram da <?php echo $infoSistema->nome_empresa ?>"><i
                            class="fab fa-instagram"></i></a>
                <?php } ?>
                <?php if ($infoSistema->linkedin <> '') { ?>
                    <a href="<?php echo $infoSistema->linkedin ?>"><i class="fab fa-linkedin-in"
                            aria-label="Link de encaminhamento para o Linkedin da <?php echo $infoSistema->nome_empresa ?>"
                            target="_blank"></i></a>
                <?php } ?>
                <?php if ($infoSistema->twitter <> '') { ?>
                    <a href="<?php echo $infoSistema->twitter ?>" target="_blank"
                        aria-label="Link de encaminhamento para o Twitter da <?php echo $infoSistema->nome_empresa ?>"><i
                            class="fab fa-twitter"></i></a>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
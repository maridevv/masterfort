<?php include "includes.php";
$id = '';
if (isset($_GET['id'])) {
  if (empty($_GET['id'])) {
    header('Location: /');
  } else {
    $id = $_GET['id'];
  }
} else {
  header('Location: /');
}
include "Class/Faqs.class.php";
$puxaFaqs = Faqs::getInstance(Conexao::getInstance());
$faqs = $puxaFaqs->rsDados('', '', '', $id, '');
?>


<body>
  <section class="swiper-slide d-flex justify-content-center swiper-slide-active" data-swiper-slide-index="1"
    style="width: 1200px; margin-right: 60px;">
    <div class="home_seven_item">
      <img src="<?php echo SITE_URL; ?>/img/<?php echo $faqs->section_1_img_1 ?>"
        alt="<?php echo $faqs->section_1_image_alt_1 ?>" class="home_seven_first_img">
      <?php echo $faqs->section_1_conteudo_2 ?>
      <img src="<?php echo SITE_URL; ?>/img/<?php echo $faqs->section_1_img_3 ?>"
        alt="<?php echo $faqs->section_1_image_alt_3 ?>" class="home_seven_second_img">
      <?php echo $faqs->section_1_textarea_4 ?>
    </div>
  </section>
</body>
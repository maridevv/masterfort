<?php
@session_start();
$EnviaInstanciada = '';
if(empty($EnviaInstanciada)) {
  if(file_exists('Connection/conexao.php')) {
    require_once('Connection/con-pdo.php');
    require_once('Class/funcoes.php');
  } else {
    require_once('../Connection/con-pdo.php');
    require_once('../Class/funcoes.php');
  }

  class Envia {
    private $pdo = null;

    private static $Envia = null;

    private function __construct($conexao){
      $this->pdo = $conexao;
    }

    public static function getInstance($conexao){
      if (!isset(self::$Envia)):
        self::$Envia = new Envia($conexao);
      endif;
      return self::$Envia;
    }

function rsDados($id='', $orderBy='', $limite='', $pagina_individual='', $ativo='') {
  /// FILTROS
  $nCampos = 0;
  $sql = '';
  $sqlOrdem = '';
  $sqlLimite = '';
  if(!empty($id)) {
    $sql .= " and id = ?";
    $nCampos++;
    $campo[$nCampos] = $id;
  }
  if(!empty($pagina_individual)) {
    $sql .= " and pagina_individual = ?";
    $nCampos++;
    $campo[$nCampos] = $pagina_individual;
  }
  if(!empty($ativo)) {
    $sql .= " and ativo = ?";
    $nCampos++;
    $campo[$nCampos] = $ativo;
  }

  /// ORDEM
  if(!empty($orderBy)) {
    $sqlOrdem = " order by {$orderBy}";
  }

  if(!empty($limite)) {
    $sqlLimite = " limit 0,{$limite}";
  }

  try {
    $sql = "SELECT * FROM tbl_envia where 1=1 $sql $sqlOrdem $sqlLimite";
    $stm = $this->pdo->prepare($sql);

    for($i=1; $i<=$nCampos; $i++) {
      $stm->bindValue($i, $campo[$i]);
    }

    $stm->execute();
    $rsDados = $stm->fetchAll(PDO::FETCH_OBJ);

    if($id <> '' or $limite == 1) {
      if(isset($rsDados[0]) && !empty($rsDados[0])) {
        return($rsDados[0]);
      }
    } else {
      return($rsDados);
    }
  } catch(PDOException $erro) {
    echo $erro->getMessage();
  }
  }
function add($redireciona='') {
    if(isset($_POST['acao']) && $_POST['acao'] == 'addEnvia') {
if(isset($_POST['meta_title']) && !empty($_POST['meta_title'])){
    $meta_title = $_POST['meta_title'];
}else{
    $meta_title = '';
}
if(isset($_POST['meta_keywords']) && !empty($_POST['meta_keywords'])){
    $meta_keywords = $_POST['meta_keywords'];
}else{
    $meta_keywords = '';
}
if(isset($_POST['meta_description']) && !empty($_POST['meta_description'])){
    $meta_description = $_POST['meta_description'];
}else{
    $meta_description = '';
}
if(isset($_POST['section_1_image_alt_1']) && !empty($_POST['section_1_image_alt_1'])){
    $section_1_image_alt_1 = $_POST['section_1_image_alt_1'];
}else{
    $section_1_image_alt_1 = '';
}
if(isset($_POST['section_1_conteudo_2']) && !empty($_POST['section_1_conteudo_2'])){
    $section_1_conteudo_2 = $_POST['section_1_conteudo_2'];
}else{
    $section_1_conteudo_2 = '';
}
if(isset($_POST['section_1_conteudo_3']) && !empty($_POST['section_1_conteudo_3'])){
    $section_1_conteudo_3 = $_POST['section_1_conteudo_3'];
}else{
    $section_1_conteudo_3 = '';
}
if(isset($_POST['section_1_image_alt_4']) && !empty($_POST['section_1_image_alt_4'])){
    $section_1_image_alt_4 = $_POST['section_1_image_alt_4'];
}else{
    $section_1_image_alt_4 = '';
}
if(isset($_POST['section_1_conteudo_5']) && !empty($_POST['section_1_conteudo_5'])){
    $section_1_conteudo_5 = $_POST['section_1_conteudo_5'];
}else{
    $section_1_conteudo_5 = '';
}
if(isset($_POST['section_1_conteudo_6']) && !empty($_POST['section_1_conteudo_6'])){
    $section_1_conteudo_6 = $_POST['section_1_conteudo_6'];
}else{
    $section_1_conteudo_6 = '';
}
if(isset($_POST['section_1_image_alt_7']) && !empty($_POST['section_1_image_alt_7'])){
    $section_1_image_alt_7 = $_POST['section_1_image_alt_7'];
}else{
    $section_1_image_alt_7 = '';
}
if(isset($_POST['section_1_conteudo_8']) && !empty($_POST['section_1_conteudo_8'])){
    $section_1_conteudo_8 = $_POST['section_1_conteudo_8'];
}else{
    $section_1_conteudo_8 = '';
}
if(isset($_POST['section_1_conteudo_9']) && !empty($_POST['section_1_conteudo_9'])){
    $section_1_conteudo_9 = $_POST['section_1_conteudo_9'];
}else{
    $section_1_conteudo_9 = '';
}
if(isset($_POST['section_2_image_alt_10']) && !empty($_POST['section_2_image_alt_10'])){
    $section_2_image_alt_10 = $_POST['section_2_image_alt_10'];
}else{
    $section_2_image_alt_10 = '';
}
if(isset($_POST['section_2_conteudo_11']) && !empty($_POST['section_2_conteudo_11'])){
    $section_2_conteudo_11 = $_POST['section_2_conteudo_11'];
}else{
    $section_2_conteudo_11 = '';
}
if(isset($_POST['section_2_conteudo_12']) && !empty($_POST['section_2_conteudo_12'])){
    $section_2_conteudo_12 = $_POST['section_2_conteudo_12'];
}else{
    $section_2_conteudo_12 = '';
}
if(isset($_POST['section_2_conteudo_13']) && !empty($_POST['section_2_conteudo_13'])){
    $section_2_conteudo_13 = $_POST['section_2_conteudo_13'];
}else{
    $section_2_conteudo_13 = '';
}
if(isset($_POST['section_2_conteudo_14']) && !empty($_POST['section_2_conteudo_14'])){
    $section_2_conteudo_14 = $_POST['section_2_conteudo_14'];
}else{
    $section_2_conteudo_14 = '';
}
if(isset($_POST['section_2_conteudo_15']) && !empty($_POST['section_2_conteudo_15'])){
    $section_2_conteudo_15 = $_POST['section_2_conteudo_15'];
}else{
    $section_2_conteudo_15 = '';
}
if(isset($_POST['section_2_conteudo_16']) && !empty($_POST['section_2_conteudo_16'])){
    $section_2_conteudo_16 = $_POST['section_2_conteudo_16'];
}else{
    $section_2_conteudo_16 = '';
}
if(isset($_POST['section_2_image_alt_17']) && !empty($_POST['section_2_image_alt_17'])){
    $section_2_image_alt_17 = $_POST['section_2_image_alt_17'];
}else{
    $section_2_image_alt_17 = '';
}
 $maximo = 180000;if ($_FILES["section_1_img_1"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_1_img_1"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_1_img_4"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_1_img_4"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_1_img_7"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_1_img_7"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_2_img_10"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_2_img_10"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_2_img_17"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_2_img_17"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
    try { 
        if(file_exists('Connection/conexao.php')) {
            $pastaArquivos = 'img';
        } else {
            $pastaArquivos = '../img';
        }
            $sql = "INSERT INTO tbl_envia (meta_title, meta_keywords, meta_description, section_1_img_1, section_1_image_alt_1, section_1_conteudo_2, section_1_conteudo_3, section_1_img_4, section_1_image_alt_4, section_1_conteudo_5, section_1_conteudo_6, section_1_img_7, section_1_image_alt_7, section_1_conteudo_8, section_1_conteudo_9, section_2_img_10, section_2_image_alt_10, section_2_conteudo_11, section_2_conteudo_12, section_2_conteudo_13, section_2_conteudo_14, section_2_conteudo_15, section_2_conteudo_16, section_2_img_17, section_2_image_alt_17) VALUES ( ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?)";        $stm = $this->pdo->prepare($sql);
        $stm->bindValue(1, $meta_title);
        $stm->bindValue(2, $meta_keywords);
        $stm->bindValue(3, $meta_description);
        $stm->bindValue(4, upload("section_1_img_1",$pastaArquivos, "N"));
        $stm->bindValue(5, $section_1_image_alt_1);
        $stm->bindValue(6, $section_1_conteudo_2);
        $stm->bindValue(7, $section_1_conteudo_3);
        $stm->bindValue(8, upload("section_1_img_4",$pastaArquivos, "N"));
        $stm->bindValue(9, $section_1_image_alt_4);
        $stm->bindValue(10, $section_1_conteudo_5);
        $stm->bindValue(11, $section_1_conteudo_6);
        $stm->bindValue(12, upload("section_1_img_7",$pastaArquivos, "N"));
        $stm->bindValue(13, $section_1_image_alt_7);
        $stm->bindValue(14, $section_1_conteudo_8);
        $stm->bindValue(15, $section_1_conteudo_9);
        $stm->bindValue(16, upload("section_2_img_10",$pastaArquivos, "N"));
        $stm->bindValue(17, $section_2_image_alt_10);
        $stm->bindValue(18, $section_2_conteudo_11);
        $stm->bindValue(19, $section_2_conteudo_12);
        $stm->bindValue(20, $section_2_conteudo_13);
        $stm->bindValue(21, $section_2_conteudo_14);
        $stm->bindValue(22, $section_2_conteudo_15);
        $stm->bindValue(23, $section_2_conteudo_16);
        $stm->bindValue(24, upload("section_2_img_17",$pastaArquivos, "N"));
        $stm->bindValue(25, $section_2_image_alt_17);
        $stm->execute();
$idBanner = $this->pdo->lastInsertId();
    } catch(PDOException $erro){
        echo $erro->getMessage();
    }
  }
}
function editar($redireciona='envia.php') {
    if(isset($_POST['acao']) && $_POST['acao'] == 'editaEnvia') {
if(isset($_POST['meta_title']) && !empty($_POST['meta_title'])){
    $meta_title = $_POST['meta_title'];
}else{
    $meta_title = '';
}
if(isset($_POST['meta_keywords']) && !empty($_POST['meta_keywords'])){
    $meta_keywords = $_POST['meta_keywords'];
}else{
    $meta_keywords = '';
}
if(isset($_POST['meta_description']) && !empty($_POST['meta_description'])){
    $meta_description = $_POST['meta_description'];
}else{
    $meta_description = '';
}
if(isset($_POST['section_1_image_alt_1']) && !empty($_POST['section_1_image_alt_1'])){
    $section_1_image_alt_1 = $_POST['section_1_image_alt_1'];
}else{
    $section_1_image_alt_1 = '';
}
if(isset($_POST['section_1_conteudo_2']) && !empty($_POST['section_1_conteudo_2'])){
    $section_1_conteudo_2 = $_POST['section_1_conteudo_2'];
}else{
    $section_1_conteudo_2 = '';
}
if(isset($_POST['section_1_conteudo_3']) && !empty($_POST['section_1_conteudo_3'])){
    $section_1_conteudo_3 = $_POST['section_1_conteudo_3'];
}else{
    $section_1_conteudo_3 = '';
}
if(isset($_POST['section_1_image_alt_4']) && !empty($_POST['section_1_image_alt_4'])){
    $section_1_image_alt_4 = $_POST['section_1_image_alt_4'];
}else{
    $section_1_image_alt_4 = '';
}
if(isset($_POST['section_1_conteudo_5']) && !empty($_POST['section_1_conteudo_5'])){
    $section_1_conteudo_5 = $_POST['section_1_conteudo_5'];
}else{
    $section_1_conteudo_5 = '';
}
if(isset($_POST['section_1_conteudo_6']) && !empty($_POST['section_1_conteudo_6'])){
    $section_1_conteudo_6 = $_POST['section_1_conteudo_6'];
}else{
    $section_1_conteudo_6 = '';
}
if(isset($_POST['section_1_image_alt_7']) && !empty($_POST['section_1_image_alt_7'])){
    $section_1_image_alt_7 = $_POST['section_1_image_alt_7'];
}else{
    $section_1_image_alt_7 = '';
}
if(isset($_POST['section_1_conteudo_8']) && !empty($_POST['section_1_conteudo_8'])){
    $section_1_conteudo_8 = $_POST['section_1_conteudo_8'];
}else{
    $section_1_conteudo_8 = '';
}
if(isset($_POST['section_1_conteudo_9']) && !empty($_POST['section_1_conteudo_9'])){
    $section_1_conteudo_9 = $_POST['section_1_conteudo_9'];
}else{
    $section_1_conteudo_9 = '';
}
if(isset($_POST['section_2_image_alt_10']) && !empty($_POST['section_2_image_alt_10'])){
    $section_2_image_alt_10 = $_POST['section_2_image_alt_10'];
}else{
    $section_2_image_alt_10 = '';
}
if(isset($_POST['section_2_conteudo_11']) && !empty($_POST['section_2_conteudo_11'])){
    $section_2_conteudo_11 = $_POST['section_2_conteudo_11'];
}else{
    $section_2_conteudo_11 = '';
}
if(isset($_POST['section_2_conteudo_12']) && !empty($_POST['section_2_conteudo_12'])){
    $section_2_conteudo_12 = $_POST['section_2_conteudo_12'];
}else{
    $section_2_conteudo_12 = '';
}
if(isset($_POST['section_2_conteudo_13']) && !empty($_POST['section_2_conteudo_13'])){
    $section_2_conteudo_13 = $_POST['section_2_conteudo_13'];
}else{
    $section_2_conteudo_13 = '';
}
if(isset($_POST['section_2_conteudo_14']) && !empty($_POST['section_2_conteudo_14'])){
    $section_2_conteudo_14 = $_POST['section_2_conteudo_14'];
}else{
    $section_2_conteudo_14 = '';
}
if(isset($_POST['section_2_conteudo_15']) && !empty($_POST['section_2_conteudo_15'])){
    $section_2_conteudo_15 = $_POST['section_2_conteudo_15'];
}else{
    $section_2_conteudo_15 = '';
}
if(isset($_POST['section_2_conteudo_16']) && !empty($_POST['section_2_conteudo_16'])){
    $section_2_conteudo_16 = $_POST['section_2_conteudo_16'];
}else{
    $section_2_conteudo_16 = '';
}
if(isset($_POST['section_2_image_alt_17']) && !empty($_POST['section_2_image_alt_17'])){
    $section_2_image_alt_17 = $_POST['section_2_image_alt_17'];
}else{
    $section_2_image_alt_17 = '';
}
 $id = filter_input(INPUT_POST, 'id');
 $pagina_individual = filter_input(INPUT_POST, 'pagina_individual');
    $maximo = 180000;
    if ($_FILES["section_1_img_1"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_1_img_1"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_1_img_4"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_1_img_4"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_1_img_7"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_1_img_7"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_2_img_10"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_2_img_10"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_2_img_17"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_2_img_17"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
    try { 
        if(file_exists('Connection/conexao.php')) {
            $pastaArquivos = 'img';
        } else {
            $pastaArquivos = '../img';
        }
            $sql = "UPDATE tbl_envia SET meta_title=?, meta_keywords=?, meta_description=?, section_1_img_1=?, section_1_image_alt_1=?, section_1_conteudo_2=?, section_1_conteudo_3=?, section_1_img_4=?, section_1_image_alt_4=?, section_1_conteudo_5=?, section_1_conteudo_6=?, section_1_img_7=?, section_1_image_alt_7=?, section_1_conteudo_8=?, section_1_conteudo_9=?, section_2_img_10=?, section_2_image_alt_10=?, section_2_conteudo_11=?, section_2_conteudo_12=?, section_2_conteudo_13=?, section_2_conteudo_14=?, section_2_conteudo_15=?, section_2_conteudo_16=?, section_2_img_17=?, section_2_image_alt_17=? WHERE id=?";        $stm = $this->pdo->prepare($sql);
        $stm->bindValue(1, $meta_title);
        $stm->bindValue(2, $meta_keywords);
        $stm->bindValue(3, $meta_description);
        $stm->bindValue(4, upload("section_1_img_1",$pastaArquivos, "N"));
        $stm->bindValue(5, $section_1_image_alt_1);
        $stm->bindValue(6, $section_1_conteudo_2);
        $stm->bindValue(7, $section_1_conteudo_3);
        $stm->bindValue(8, upload("section_1_img_4",$pastaArquivos, "N"));
        $stm->bindValue(9, $section_1_image_alt_4);
        $stm->bindValue(10, $section_1_conteudo_5);
        $stm->bindValue(11, $section_1_conteudo_6);
        $stm->bindValue(12, upload("section_1_img_7",$pastaArquivos, "N"));
        $stm->bindValue(13, $section_1_image_alt_7);
        $stm->bindValue(14, $section_1_conteudo_8);
        $stm->bindValue(15, $section_1_conteudo_9);
        $stm->bindValue(16, upload("section_2_img_10",$pastaArquivos, "N"));
        $stm->bindValue(17, $section_2_image_alt_10);
        $stm->bindValue(18, $section_2_conteudo_11);
        $stm->bindValue(19, $section_2_conteudo_12);
        $stm->bindValue(20, $section_2_conteudo_13);
        $stm->bindValue(21, $section_2_conteudo_14);
        $stm->bindValue(22, $section_2_conteudo_15);
        $stm->bindValue(23, $section_2_conteudo_16);
        $stm->bindValue(24, upload("section_2_img_17",$pastaArquivos, "N"));
        $stm->bindValue(25, $section_2_image_alt_17);
$stm->bindValue(26, $id);
        $stm->execute();
    } catch(PDOException $erro){
        echo $erro->getMessage();
    }

// Trecho adicional
if($pagina_individual == 'S') {
  echo "  <script>
          alert('Modificado com sucesso!');
          window.location='editar-envia.php?pi=S&id=$id';
      </script>";
  exit;
} else {
  echo "  <script>
          window.location='{$redireciona}';
      </script>";
  exit;
}
}
}
function excluir() {
  if (isset($_GET['acao']) && $_GET['acao'] == 'excluirServico') {
    try {
      $sql = "DELETE FROM tbl_envia WHERE id=? ";
      $stm = $this->pdo->prepare($sql);
      $stm->bindValue(1, $_GET['id']);
      $stm->execute();
    } catch (PDOException $erro) {
      echo $erro->getMessage();
    }

    echo "  <script>
            window.location='envia.php';
        </script>";
    exit;
  }
}
  }
}
?>

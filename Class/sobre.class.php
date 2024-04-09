<?php
@session_start();
$SobreInstanciada = '';
if(empty($SobreInstanciada)) {
  if(file_exists('Connection/conexao.php')) {
    require_once('Connection/con-pdo.php');
    require_once('Class/funcoes.php');
  } else {
    require_once('../Connection/con-pdo.php');
    require_once('../Class/funcoes.php');
  }

  class Sobre {
    private $pdo = null;

    private static $Sobre = null;

    private function __construct($conexao){
      $this->pdo = $conexao;
    }

    public static function getInstance($conexao){
      if (!isset(self::$Sobre)):
        self::$Sobre = new Sobre($conexao);
      endif;
      return self::$Sobre;
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
    $sql = "SELECT * FROM tbl_sobre where 1=1 $sql $sqlOrdem $sqlLimite";
    $stm = $this->pdo->prepare($sql);

    for($i=1; $i<=$nCampos; $i++) {
      $stm->bindValue($i, $campo[$i]);
    }

    $stm->execute();
    $rsDados = $stm->fetchAll(PDO::FETCH_OBJ);

    if($id <> '' or $limite == 1 or $pagina_individual <> '') {
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
function editar($redireciona='editar-sobre.php?pi=S&id=1') {
    if(isset($_POST['acao']) && $_POST['acao'] == 'editaSobre') {
$meta_title = (isset($_POST['meta_title']) && !empty($_POST['meta_title'])) ? $_POST['meta_title'] : '' ;
$meta_keywords = (isset($_POST['meta_keywords']) && !empty($_POST['meta_keywords'])) ? $_POST['meta_keywords'] : '' ;
$meta_description = (isset($_POST['meta_description']) && !empty($_POST['meta_description'])) ? $_POST['meta_description'] : '' ;
$section_1_conteudo_1 = (isset($_POST['section_1_conteudo_1']) && !empty($_POST['section_1_conteudo_1'])) ? $_POST['section_1_conteudo_1'] : '' ;
$section_2_image_alt_2 = (isset($_POST['section_2_image_alt_2']) && !empty($_POST['section_2_image_alt_2'])) ? $_POST['section_2_image_alt_2'] : '' ;
$section_2_conteudo_3 = (isset($_POST['section_2_conteudo_3']) && !empty($_POST['section_2_conteudo_3'])) ? $_POST['section_2_conteudo_3'] : '' ;
$section_2_conteudo_4 = (isset($_POST['section_2_conteudo_4']) && !empty($_POST['section_2_conteudo_4'])) ? $_POST['section_2_conteudo_4'] : '' ;
$section_2_conteudo_5 = (isset($_POST['section_2_conteudo_5']) && !empty($_POST['section_2_conteudo_5'])) ? $_POST['section_2_conteudo_5'] : '' ;
$section_2_conteudo_6 = (isset($_POST['section_2_conteudo_6']) && !empty($_POST['section_2_conteudo_6'])) ? $_POST['section_2_conteudo_6'] : '' ;
$section_2_conteudo_7 = (isset($_POST['section_2_conteudo_7']) && !empty($_POST['section_2_conteudo_7'])) ? $_POST['section_2_conteudo_7'] : '' ;
$section_2_conteudo_8 = (isset($_POST['section_2_conteudo_8']) && !empty($_POST['section_2_conteudo_8'])) ? $_POST['section_2_conteudo_8'] : '' ;
$section_2_conteudo_9 = (isset($_POST['section_2_conteudo_9']) && !empty($_POST['section_2_conteudo_9'])) ? $_POST['section_2_conteudo_9'] : '' ;
$section_2_conteudo_10 = (isset($_POST['section_2_conteudo_10']) && !empty($_POST['section_2_conteudo_10'])) ? $_POST['section_2_conteudo_10'] : '' ;
$section_2_conteudo_11 = (isset($_POST['section_2_conteudo_11']) && !empty($_POST['section_2_conteudo_11'])) ? $_POST['section_2_conteudo_11'] : '' ;
$section_3_image_alt_12 = (isset($_POST['section_3_image_alt_12']) && !empty($_POST['section_3_image_alt_12'])) ? $_POST['section_3_image_alt_12'] : '' ;
$section_3_conteudo_13 = (isset($_POST['section_3_conteudo_13']) && !empty($_POST['section_3_conteudo_13'])) ? $_POST['section_3_conteudo_13'] : '' ;
$section_3_conteudo_14 = (isset($_POST['section_3_conteudo_14']) && !empty($_POST['section_3_conteudo_14'])) ? $_POST['section_3_conteudo_14'] : '' ;
$section_3_image_alt_15 = (isset($_POST['section_3_image_alt_15']) && !empty($_POST['section_3_image_alt_15'])) ? $_POST['section_3_image_alt_15'] : '' ;
$section_3_conteudo_16 = (isset($_POST['section_3_conteudo_16']) && !empty($_POST['section_3_conteudo_16'])) ? $_POST['section_3_conteudo_16'] : '' ;
$section_3_conteudo_17 = (isset($_POST['section_3_conteudo_17']) && !empty($_POST['section_3_conteudo_17'])) ? $_POST['section_3_conteudo_17'] : '' ;
$section_3_image_alt_18 = (isset($_POST['section_3_image_alt_18']) && !empty($_POST['section_3_image_alt_18'])) ? $_POST['section_3_image_alt_18'] : '' ;
$section_3_conteudo_19 = (isset($_POST['section_3_conteudo_19']) && !empty($_POST['section_3_conteudo_19'])) ? $_POST['section_3_conteudo_19'] : '' ;
$section_3_conteudo_20 = (isset($_POST['section_3_conteudo_20']) && !empty($_POST['section_3_conteudo_20'])) ? $_POST['section_3_conteudo_20'] : '' ;
$section_4_conteudo_21 = (isset($_POST['section_4_conteudo_21']) && !empty($_POST['section_4_conteudo_21'])) ? $_POST['section_4_conteudo_21'] : '' ;
$section_4_conteudo_22 = (isset($_POST['section_4_conteudo_22']) && !empty($_POST['section_4_conteudo_22'])) ? $_POST['section_4_conteudo_22'] : '' ;
$section_5_image_alt_23 = (isset($_POST['section_5_image_alt_23']) && !empty($_POST['section_5_image_alt_23'])) ? $_POST['section_5_image_alt_23'] : '' ;
$section_5_conteudo_24 = (isset($_POST['section_5_conteudo_24']) && !empty($_POST['section_5_conteudo_24'])) ? $_POST['section_5_conteudo_24'] : '' ;
$section_5_image_alt_25 = (isset($_POST['section_5_image_alt_25']) && !empty($_POST['section_5_image_alt_25'])) ? $_POST['section_5_image_alt_25'] : '' ;
$section_5_conteudo_26 = (isset($_POST['section_5_conteudo_26']) && !empty($_POST['section_5_conteudo_26'])) ? $_POST['section_5_conteudo_26'] : '' ;
$section_5_image_alt_27 = (isset($_POST['section_5_image_alt_27']) && !empty($_POST['section_5_image_alt_27'])) ? $_POST['section_5_image_alt_27'] : '' ;
$section_5_conteudo_28 = (isset($_POST['section_5_conteudo_28']) && !empty($_POST['section_5_conteudo_28'])) ? $_POST['section_5_conteudo_28'] : '' ;
$section_5_image_alt_29 = (isset($_POST['section_5_image_alt_29']) && !empty($_POST['section_5_image_alt_29'])) ? $_POST['section_5_image_alt_29'] : '' ;
$section_5_conteudo_30 = (isset($_POST['section_5_conteudo_30']) && !empty($_POST['section_5_conteudo_30'])) ? $_POST['section_5_conteudo_30'] : '' ;
 $id = filter_input(INPUT_POST, 'id');
          if (isset($_POST['pagina_individual']) && !empty($_POST['pagina_individual'])) { $pagina_individual = $_POST['pagina_individual'];  } else {   $pagina_individual = gerarTituloSEO($section_1_conteudo_1);  } $maximo = 180000;if ($_FILES["section_2_img_2"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_2_img_2"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_3_img_12"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_3_img_12"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_3_img_15"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_3_img_15"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_3_img_18"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_3_img_18"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_5_img_23"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_5_img_23"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_5_img_25"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_5_img_25"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_5_img_27"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_5_img_27"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_5_img_29"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_5_img_29"]["size"] / 1000;
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
            $sql = "UPDATE tbl_sobre SET meta_title=?, meta_keywords=?, meta_description=?, section_1_conteudo_1=?, section_2_img_2=?, section_2_image_alt_2=?, section_2_conteudo_3=?, section_2_conteudo_4=?, section_2_conteudo_5=?, section_2_conteudo_6=?, section_2_conteudo_7=?, section_2_conteudo_8=?, section_2_conteudo_9=?, section_2_conteudo_10=?, section_2_conteudo_11=?, section_3_img_12=?, section_3_image_alt_12=?, section_3_conteudo_13=?, section_3_conteudo_14=?, section_3_img_15=?, section_3_image_alt_15=?, section_3_conteudo_16=?, section_3_conteudo_17=?, section_3_img_18=?, section_3_image_alt_18=?, section_3_conteudo_19=?, section_3_conteudo_20=?, section_4_conteudo_21=?, section_4_conteudo_22=?, section_5_img_23=?, section_5_image_alt_23=?, section_5_conteudo_24=?, section_5_img_25=?, section_5_image_alt_25=?, section_5_conteudo_26=?, section_5_img_27=?, section_5_image_alt_27=?, section_5_conteudo_28=?, section_5_img_29=?, section_5_image_alt_29=?, section_5_conteudo_30=?,pagina_individual=? WHERE id=?";        $stm = $this->pdo->prepare($sql);
        $stm->bindValue(1, $meta_title);
        $stm->bindValue(2, $meta_keywords);
        $stm->bindValue(3, $meta_description);
        $stm->bindValue(4, $section_1_conteudo_1);
        $stm->bindValue(5, upload("section_2_img_2",$pastaArquivos, "N"));
        $stm->bindValue(6, $section_2_image_alt_2);
        $stm->bindValue(7, $section_2_conteudo_3);
        $stm->bindValue(8, $section_2_conteudo_4);
        $stm->bindValue(9, $section_2_conteudo_5);
        $stm->bindValue(10, $section_2_conteudo_6);
        $stm->bindValue(11, $section_2_conteudo_7);
        $stm->bindValue(12, $section_2_conteudo_8);
        $stm->bindValue(13, $section_2_conteudo_9);
        $stm->bindValue(14, $section_2_conteudo_10);
        $stm->bindValue(15, $section_2_conteudo_11);
        $stm->bindValue(16, upload("section_3_img_12",$pastaArquivos, "N"));
        $stm->bindValue(17, $section_3_image_alt_12);
        $stm->bindValue(18, $section_3_conteudo_13);
        $stm->bindValue(19, $section_3_conteudo_14);
        $stm->bindValue(20, upload("section_3_img_15",$pastaArquivos, "N"));
        $stm->bindValue(21, $section_3_image_alt_15);
        $stm->bindValue(22, $section_3_conteudo_16);
        $stm->bindValue(23, $section_3_conteudo_17);
        $stm->bindValue(24, upload("section_3_img_18",$pastaArquivos, "N"));
        $stm->bindValue(25, $section_3_image_alt_18);
        $stm->bindValue(26, $section_3_conteudo_19);
        $stm->bindValue(27, $section_3_conteudo_20);
        $stm->bindValue(28, $section_4_conteudo_21);
        $stm->bindValue(29, $section_4_conteudo_22);
        $stm->bindValue(30, upload("section_5_img_23",$pastaArquivos, "N"));
        $stm->bindValue(31, $section_5_image_alt_23);
        $stm->bindValue(32, $section_5_conteudo_24);
        $stm->bindValue(33, upload("section_5_img_25",$pastaArquivos, "N"));
        $stm->bindValue(34, $section_5_image_alt_25);
        $stm->bindValue(35, $section_5_conteudo_26);
        $stm->bindValue(36, upload("section_5_img_27",$pastaArquivos, "N"));
        $stm->bindValue(37, $section_5_image_alt_27);
        $stm->bindValue(38, $section_5_conteudo_28);
        $stm->bindValue(39, upload("section_5_img_29",$pastaArquivos, "N"));
        $stm->bindValue(40, $section_5_image_alt_29);
        $stm->bindValue(41, $section_5_conteudo_30);
$stm->bindValue(42, $pagina_individual);
$stm->bindValue(43, $id);
        $stm->execute();
    } catch(PDOException $erro){
        echo $erro->getMessage();
    }

// Trecho adicional
if($pagina_individual == 'S') {
  echo "  <script>
          alert('Modificado com sucesso!');
          window.location='editar-sobre.php?pi=S&id=$id';
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
  if (isset($_GET['acao']) && $_GET['acao'] == 'excluirSobre') {
    try {
      $sql = "DELETE FROM tbl_sobre WHERE id=? ";
      $stm = $this->pdo->prepare($sql);
      $stm->bindValue(1, $_GET['id']);
      $stm->execute();
    } catch (PDOException $erro) {
      echo $erro->getMessage();
    }

    echo "  <script>
            window.location='sobre.php';
        </script>";
    exit;
  }
}
  }
}
?>

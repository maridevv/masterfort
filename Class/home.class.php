<?php
@session_start();
$HomeInstanciada = '';
if(empty($HomeInstanciada)) {
  if(file_exists('Connection/conexao.php')) {
    require_once('Connection/con-pdo.php');
    require_once('Class/funcoes.php');
  } else {
    require_once('../Connection/con-pdo.php');
    require_once('../Class/funcoes.php');
  }

  class Home {
    private $pdo = null;

    private static $Home = null;

    private function __construct($conexao){
      $this->pdo = $conexao;
    }

    public static function getInstance($conexao){
      if (!isset(self::$Home)):
        self::$Home = new Home($conexao);
      endif;
      return self::$Home;
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
    $sql = "SELECT * FROM tbl_home where 1=1 $sql $sqlOrdem $sqlLimite";
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
function editar($redireciona='editar-home.php?pi=S&id=1') {
    if(isset($_POST['acao']) && $_POST['acao'] == 'editaHome') {
$meta_title = (isset($_POST['meta_title']) && !empty($_POST['meta_title'])) ? $_POST['meta_title'] : '' ;
$meta_keywords = (isset($_POST['meta_keywords']) && !empty($_POST['meta_keywords'])) ? $_POST['meta_keywords'] : '' ;
$meta_description = (isset($_POST['meta_description']) && !empty($_POST['meta_description'])) ? $_POST['meta_description'] : '' ;
$section_1_conteudo_1 = (isset($_POST['section_1_conteudo_1']) && !empty($_POST['section_1_conteudo_1'])) ? $_POST['section_1_conteudo_1'] : '' ;
$section_1_conteudo_2 = (isset($_POST['section_1_conteudo_2']) && !empty($_POST['section_1_conteudo_2'])) ? $_POST['section_1_conteudo_2'] : '' ;
$section_1_conteudo_3 = (isset($_POST['section_1_conteudo_3']) && !empty($_POST['section_1_conteudo_3'])) ? $_POST['section_1_conteudo_3'] : '' ;
$section_1_conteudo_4 = (isset($_POST['section_1_conteudo_4']) && !empty($_POST['section_1_conteudo_4'])) ? $_POST['section_1_conteudo_4'] : '' ;
$section_1_conteudo_5 = (isset($_POST['section_1_conteudo_5']) && !empty($_POST['section_1_conteudo_5'])) ? $_POST['section_1_conteudo_5'] : '' ;
$section_1_link_6 = (isset($_POST['section_1_link_6']) && !empty($_POST['section_1_link_6'])) ? $_POST['section_1_link_6'] : '' ;
$section_1_link_alt_6 = (isset($_POST['section_1_link_alt_6']) && !empty($_POST['section_1_link_alt_6'])) ? $_POST['section_1_link_alt_6'] : '' ;
$section_1_link_conteudo_6 = (isset($_POST['section_1_link_conteudo_6']) && !empty($_POST['section_1_link_conteudo_6'])) ? $_POST['section_1_link_conteudo_6'] : '' ;
$section_1_image_alt_7 = (isset($_POST['section_1_image_alt_7']) && !empty($_POST['section_1_image_alt_7'])) ? $_POST['section_1_image_alt_7'] : '' ;
$section_2_conteudo_8 = (isset($_POST['section_2_conteudo_8']) && !empty($_POST['section_2_conteudo_8'])) ? $_POST['section_2_conteudo_8'] : '' ;
$section_2_link_9 = (isset($_POST['section_2_link_9']) && !empty($_POST['section_2_link_9'])) ? $_POST['section_2_link_9'] : '' ;
$section_2_link_alt_9 = (isset($_POST['section_2_link_alt_9']) && !empty($_POST['section_2_link_alt_9'])) ? $_POST['section_2_link_alt_9'] : '' ;
$section_2_link_conteudo_9 = (isset($_POST['section_2_link_conteudo_9']) && !empty($_POST['section_2_link_conteudo_9'])) ? $_POST['section_2_link_conteudo_9'] : '' ;
$section_3_conteudo_10 = (isset($_POST['section_3_conteudo_10']) && !empty($_POST['section_3_conteudo_10'])) ? $_POST['section_3_conteudo_10'] : '' ;
$section_3_conteudo_11 = (isset($_POST['section_3_conteudo_11']) && !empty($_POST['section_3_conteudo_11'])) ? $_POST['section_3_conteudo_11'] : '' ;
$section_3_conteudo_12 = (isset($_POST['section_3_conteudo_12']) && !empty($_POST['section_3_conteudo_12'])) ? $_POST['section_3_conteudo_12'] : '' ;
$section_3_image_alt_13 = (isset($_POST['section_3_image_alt_13']) && !empty($_POST['section_3_image_alt_13'])) ? $_POST['section_3_image_alt_13'] : '' ;
$section_3_conteudo_14 = (isset($_POST['section_3_conteudo_14']) && !empty($_POST['section_3_conteudo_14'])) ? $_POST['section_3_conteudo_14'] : '' ;
$section_3_conteudo_15 = (isset($_POST['section_3_conteudo_15']) && !empty($_POST['section_3_conteudo_15'])) ? $_POST['section_3_conteudo_15'] : '' ;
$section_3_conteudo_16 = (isset($_POST['section_3_conteudo_16']) && !empty($_POST['section_3_conteudo_16'])) ? $_POST['section_3_conteudo_16'] : '' ;
$section_3_conteudo_17 = (isset($_POST['section_3_conteudo_17']) && !empty($_POST['section_3_conteudo_17'])) ? $_POST['section_3_conteudo_17'] : '' ;
$section_4_image_alt_18 = (isset($_POST['section_4_image_alt_18']) && !empty($_POST['section_4_image_alt_18'])) ? $_POST['section_4_image_alt_18'] : '' ;
$section_4_conteudo_19 = (isset($_POST['section_4_conteudo_19']) && !empty($_POST['section_4_conteudo_19'])) ? $_POST['section_4_conteudo_19'] : '' ;
$section_4_image_alt_20 = (isset($_POST['section_4_image_alt_20']) && !empty($_POST['section_4_image_alt_20'])) ? $_POST['section_4_image_alt_20'] : '' ;
$section_4_conteudo_21 = (isset($_POST['section_4_conteudo_21']) && !empty($_POST['section_4_conteudo_21'])) ? $_POST['section_4_conteudo_21'] : '' ;
$section_4_image_alt_22 = (isset($_POST['section_4_image_alt_22']) && !empty($_POST['section_4_image_alt_22'])) ? $_POST['section_4_image_alt_22'] : '' ;
$section_4_conteudo_23 = (isset($_POST['section_4_conteudo_23']) && !empty($_POST['section_4_conteudo_23'])) ? $_POST['section_4_conteudo_23'] : '' ;
$section_5_image_alt_24 = (isset($_POST['section_5_image_alt_24']) && !empty($_POST['section_5_image_alt_24'])) ? $_POST['section_5_image_alt_24'] : '' ;
$section_5_conteudo_25 = (isset($_POST['section_5_conteudo_25']) && !empty($_POST['section_5_conteudo_25'])) ? $_POST['section_5_conteudo_25'] : '' ;
$section_5_conteudo_26 = (isset($_POST['section_5_conteudo_26']) && !empty($_POST['section_5_conteudo_26'])) ? $_POST['section_5_conteudo_26'] : '' ;
$section_5_conteudo_27 = (isset($_POST['section_5_conteudo_27']) && !empty($_POST['section_5_conteudo_27'])) ? $_POST['section_5_conteudo_27'] : '' ;
$section_5_link_28 = (isset($_POST['section_5_link_28']) && !empty($_POST['section_5_link_28'])) ? $_POST['section_5_link_28'] : '' ;
$section_5_link_alt_28 = (isset($_POST['section_5_link_alt_28']) && !empty($_POST['section_5_link_alt_28'])) ? $_POST['section_5_link_alt_28'] : '' ;
$section_5_link_conteudo_28 = (isset($_POST['section_5_link_conteudo_28']) && !empty($_POST['section_5_link_conteudo_28'])) ? $_POST['section_5_link_conteudo_28'] : '' ;
$section_6_conteudo_29 = (isset($_POST['section_6_conteudo_29']) && !empty($_POST['section_6_conteudo_29'])) ? $_POST['section_6_conteudo_29'] : '' ;
$section_6_link_30 = (isset($_POST['section_6_link_30']) && !empty($_POST['section_6_link_30'])) ? $_POST['section_6_link_30'] : '' ;
$section_6_link_alt_30 = (isset($_POST['section_6_link_alt_30']) && !empty($_POST['section_6_link_alt_30'])) ? $_POST['section_6_link_alt_30'] : '' ;
$section_6_link_conteudo_30 = (isset($_POST['section_6_link_conteudo_30']) && !empty($_POST['section_6_link_conteudo_30'])) ? $_POST['section_6_link_conteudo_30'] : '' ;
$section_6_image_alt_31 = (isset($_POST['section_6_image_alt_31']) && !empty($_POST['section_6_image_alt_31'])) ? $_POST['section_6_image_alt_31'] : '' ;
$section_7_conteudo_32 = (isset($_POST['section_7_conteudo_32']) && !empty($_POST['section_7_conteudo_32'])) ? $_POST['section_7_conteudo_32'] : '' ;
$section_8_image_alt_33 = (isset($_POST['section_8_image_alt_33']) && !empty($_POST['section_8_image_alt_33'])) ? $_POST['section_8_image_alt_33'] : '' ;
$section_8_conteudo_34 = (isset($_POST['section_8_conteudo_34']) && !empty($_POST['section_8_conteudo_34'])) ? $_POST['section_8_conteudo_34'] : '' ;
$section_8_conteudo_35 = (isset($_POST['section_8_conteudo_35']) && !empty($_POST['section_8_conteudo_35'])) ? $_POST['section_8_conteudo_35'] : '' ;
$section_8_conteudo_36 = (isset($_POST['section_8_conteudo_36']) && !empty($_POST['section_8_conteudo_36'])) ? $_POST['section_8_conteudo_36'] : '' ;
$section_8_conteudo_37 = (isset($_POST['section_8_conteudo_37']) && !empty($_POST['section_8_conteudo_37'])) ? $_POST['section_8_conteudo_37'] : '' ;
$section_8_conteudo_38 = (isset($_POST['section_8_conteudo_38']) && !empty($_POST['section_8_conteudo_38'])) ? $_POST['section_8_conteudo_38'] : '' ;
$section_8_conteudo_39 = (isset($_POST['section_8_conteudo_39']) && !empty($_POST['section_8_conteudo_39'])) ? $_POST['section_8_conteudo_39'] : '' ;
$section_8_conteudo_40 = (isset($_POST['section_8_conteudo_40']) && !empty($_POST['section_8_conteudo_40'])) ? $_POST['section_8_conteudo_40'] : '' ;
$section_8_conteudo_41 = (isset($_POST['section_8_conteudo_41']) && !empty($_POST['section_8_conteudo_41'])) ? $_POST['section_8_conteudo_41'] : '' ;
$section_8_conteudo_42 = (isset($_POST['section_8_conteudo_42']) && !empty($_POST['section_8_conteudo_42'])) ? $_POST['section_8_conteudo_42'] : '' ;
$section_8_conteudo_43 = (isset($_POST['section_8_conteudo_43']) && !empty($_POST['section_8_conteudo_43'])) ? $_POST['section_8_conteudo_43'] : '' ;
$section_8_conteudo_44 = (isset($_POST['section_8_conteudo_44']) && !empty($_POST['section_8_conteudo_44'])) ? $_POST['section_8_conteudo_44'] : '' ;
$section_8_conteudo_45 = (isset($_POST['section_8_conteudo_45']) && !empty($_POST['section_8_conteudo_45'])) ? $_POST['section_8_conteudo_45'] : '' ;
$section_8_conteudo_46 = (isset($_POST['section_8_conteudo_46']) && !empty($_POST['section_8_conteudo_46'])) ? $_POST['section_8_conteudo_46'] : '' ;
$section_8_conteudo_47 = (isset($_POST['section_8_conteudo_47']) && !empty($_POST['section_8_conteudo_47'])) ? $_POST['section_8_conteudo_47'] : '' ;
$section_8_conteudo_48 = (isset($_POST['section_8_conteudo_48']) && !empty($_POST['section_8_conteudo_48'])) ? $_POST['section_8_conteudo_48'] : '' ;
$section_8_conteudo_49 = (isset($_POST['section_8_conteudo_49']) && !empty($_POST['section_8_conteudo_49'])) ? $_POST['section_8_conteudo_49'] : '' ;
$section_8_conteudo_50 = (isset($_POST['section_8_conteudo_50']) && !empty($_POST['section_8_conteudo_50'])) ? $_POST['section_8_conteudo_50'] : '' ;
$section_8_conteudo_51 = (isset($_POST['section_8_conteudo_51']) && !empty($_POST['section_8_conteudo_51'])) ? $_POST['section_8_conteudo_51'] : '' ;
$section_8_conteudo_52 = (isset($_POST['section_8_conteudo_52']) && !empty($_POST['section_8_conteudo_52'])) ? $_POST['section_8_conteudo_52'] : '' ;
$section_8_conteudo_53 = (isset($_POST['section_8_conteudo_53']) && !empty($_POST['section_8_conteudo_53'])) ? $_POST['section_8_conteudo_53'] : '' ;
$section_8_conteudo_54 = (isset($_POST['section_8_conteudo_54']) && !empty($_POST['section_8_conteudo_54'])) ? $_POST['section_8_conteudo_54'] : '' ;
$section_8_conteudo_55 = (isset($_POST['section_8_conteudo_55']) && !empty($_POST['section_8_conteudo_55'])) ? $_POST['section_8_conteudo_55'] : '' ;
$section_8_conteudo_56 = (isset($_POST['section_8_conteudo_56']) && !empty($_POST['section_8_conteudo_56'])) ? $_POST['section_8_conteudo_56'] : '' ;
$section_8_conteudo_57 = (isset($_POST['section_8_conteudo_57']) && !empty($_POST['section_8_conteudo_57'])) ? $_POST['section_8_conteudo_57'] : '' ;
$section_8_conteudo_58 = (isset($_POST['section_8_conteudo_58']) && !empty($_POST['section_8_conteudo_58'])) ? $_POST['section_8_conteudo_58'] : '' ;
$section_8_conteudo_59 = (isset($_POST['section_8_conteudo_59']) && !empty($_POST['section_8_conteudo_59'])) ? $_POST['section_8_conteudo_59'] : '' ;
$section_8_link_60 = (isset($_POST['section_8_link_60']) && !empty($_POST['section_8_link_60'])) ? $_POST['section_8_link_60'] : '' ;
$section_8_link_alt_60 = (isset($_POST['section_8_link_alt_60']) && !empty($_POST['section_8_link_alt_60'])) ? $_POST['section_8_link_alt_60'] : '' ;
$section_8_link_conteudo_60 = (isset($_POST['section_8_link_conteudo_60']) && !empty($_POST['section_8_link_conteudo_60'])) ? $_POST['section_8_link_conteudo_60'] : '' ;
$section_9_conteudo_61 = (isset($_POST['section_9_conteudo_61']) && !empty($_POST['section_9_conteudo_61'])) ? $_POST['section_9_conteudo_61'] : '' ;
$section_9_conteudo_62 = (isset($_POST['section_9_conteudo_62']) && !empty($_POST['section_9_conteudo_62'])) ? $_POST['section_9_conteudo_62'] : '' ;
$section_9_conteudo_63 = (isset($_POST['section_9_conteudo_63']) && !empty($_POST['section_9_conteudo_63'])) ? $_POST['section_9_conteudo_63'] : '' ;
$section_9_link_64 = (isset($_POST['section_9_link_64']) && !empty($_POST['section_9_link_64'])) ? $_POST['section_9_link_64'] : '' ;
$section_9_link_alt_64 = (isset($_POST['section_9_link_alt_64']) && !empty($_POST['section_9_link_alt_64'])) ? $_POST['section_9_link_alt_64'] : '' ;
$section_9_link_conteudo_64 = (isset($_POST['section_9_link_conteudo_64']) && !empty($_POST['section_9_link_conteudo_64'])) ? $_POST['section_9_link_conteudo_64'] : '' ;
$section_10_image_alt_65 = (isset($_POST['section_10_image_alt_65']) && !empty($_POST['section_10_image_alt_65'])) ? $_POST['section_10_image_alt_65'] : '' ;
$section_10_conteudo_66 = (isset($_POST['section_10_conteudo_66']) && !empty($_POST['section_10_conteudo_66'])) ? $_POST['section_10_conteudo_66'] : '' ;
$section_10_image_alt_67 = (isset($_POST['section_10_image_alt_67']) && !empty($_POST['section_10_image_alt_67'])) ? $_POST['section_10_image_alt_67'] : '' ;
$section_10_conteudo_68 = (isset($_POST['section_10_conteudo_68']) && !empty($_POST['section_10_conteudo_68'])) ? $_POST['section_10_conteudo_68'] : '' ;
$section_10_image_alt_69 = (isset($_POST['section_10_image_alt_69']) && !empty($_POST['section_10_image_alt_69'])) ? $_POST['section_10_image_alt_69'] : '' ;
$section_10_image_alt_71 = (isset($_POST['section_10_image_alt_71']) && !empty($_POST['section_10_image_alt_71'])) ? $_POST['section_10_image_alt_71'] : '' ;
$section_10_conteudo_72 = (isset($_POST['section_10_conteudo_72']) && !empty($_POST['section_10_conteudo_72'])) ? $_POST['section_10_conteudo_72'] : '' ;
 $id = filter_input(INPUT_POST, 'id');
          if (isset($_POST['pagina_individual']) && !empty($_POST['pagina_individual'])) { $pagina_individual = $_POST['pagina_individual'];  } else {   $pagina_individual = gerarTituloSEO($section_1_conteudo_1);  } $maximo = 180000;if ($_FILES["section_1_img_7"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_1_img_7"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_3_img_13"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_3_img_13"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_4_img_18"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_4_img_18"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_4_img_20"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_4_img_20"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_4_img_22"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_4_img_22"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_5_img_24"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_5_img_24"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_6_img_31"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_6_img_31"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_8_img_33"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_8_img_33"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_10_img_65"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_10_img_65"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_10_img_67"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_10_img_67"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_10_img_69"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_10_img_69"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_10_img_71"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_10_img_71"]["size"] / 1000;
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
            $sql = "UPDATE tbl_home SET meta_title=?, meta_keywords=?, meta_description=?, section_1_conteudo_1=?, section_1_conteudo_2=?, section_1_conteudo_3=?, section_1_conteudo_4=?, section_1_conteudo_5=?, section_1_link_6=?, section_1_link_alt_6=?, section_1_link_conteudo_6=?, section_1_img_7=?, section_1_image_alt_7=?, section_2_conteudo_8=?, section_2_link_9=?, section_2_link_alt_9=?, section_2_link_conteudo_9=?, section_3_conteudo_10=?, section_3_conteudo_11=?, section_3_conteudo_12=?, section_3_img_13=?, section_3_image_alt_13=?, section_3_conteudo_14=?, section_3_conteudo_15=?, section_3_conteudo_16=?, section_3_conteudo_17=?, section_4_img_18=?, section_4_image_alt_18=?, section_4_conteudo_19=?, section_4_img_20=?, section_4_image_alt_20=?, section_4_conteudo_21=?, section_4_img_22=?, section_4_image_alt_22=?, section_4_conteudo_23=?, section_5_img_24=?, section_5_image_alt_24=?, section_5_conteudo_25=?, section_5_conteudo_26=?, section_5_conteudo_27=?, section_5_link_28=?, section_5_link_alt_28=?, section_5_link_conteudo_28=?, section_6_conteudo_29=?, section_6_link_30=?, section_6_link_alt_30=?, section_6_link_conteudo_30=?, section_6_img_31=?, section_6_image_alt_31=?, section_7_conteudo_32=?, section_8_img_33=?, section_8_image_alt_33=?, section_8_conteudo_34=?, section_8_conteudo_35=?, section_8_conteudo_36=?, section_8_conteudo_37=?, section_8_conteudo_38=?, section_8_conteudo_39=?, section_8_conteudo_40=?, section_8_conteudo_41=?, section_8_conteudo_42=?, section_8_conteudo_43=?, section_8_conteudo_44=?, section_8_conteudo_45=?, section_8_conteudo_46=?, section_8_conteudo_47=?, section_8_conteudo_48=?, section_8_conteudo_49=?, section_8_conteudo_50=?, section_8_conteudo_51=?, section_8_conteudo_52=?, section_8_conteudo_53=?, section_8_conteudo_54=?, section_8_conteudo_55=?, section_8_conteudo_56=?, section_8_conteudo_57=?, section_8_conteudo_58=?, section_8_conteudo_59=?, section_8_link_60=?, section_8_link_alt_60=?, section_8_link_conteudo_60=?, section_9_conteudo_61=?, section_9_conteudo_62=?, section_9_conteudo_63=?, section_9_link_64=?, section_9_link_alt_64=?, section_9_link_conteudo_64=?, section_10_img_65=?, section_10_image_alt_65=?, section_10_conteudo_66=?, section_10_img_67=?, section_10_image_alt_67=?, section_10_conteudo_68=?, section_10_img_69=?, section_10_image_alt_69=?, section_10_conteudo_70=?, section_10_img_71=?, section_10_image_alt_71=?, section_10_conteudo_72=?,pagina_individual=? WHERE id=?";        $stm = $this->pdo->prepare($sql);
        $stm->bindValue(1, $meta_title);
        $stm->bindValue(2, $meta_keywords);
        $stm->bindValue(3, $meta_description);
        $stm->bindValue(4, $section_1_conteudo_1);
        $stm->bindValue(5, $section_1_conteudo_2);
        $stm->bindValue(6, $section_1_conteudo_3);
        $stm->bindValue(7, $section_1_conteudo_4);
        $stm->bindValue(8, $section_1_conteudo_5);
        $stm->bindValue(9, $section_1_link_6);
        $stm->bindValue(10, $section_1_link_alt_6);
        $stm->bindValue(11, $section_1_link_conteudo_6);
        $stm->bindValue(12, upload("section_1_img_7",$pastaArquivos, "N"));
        $stm->bindValue(13, $section_1_image_alt_7);
        $stm->bindValue(14, $section_2_conteudo_8);
        $stm->bindValue(15, $section_2_link_9);
        $stm->bindValue(16, $section_2_link_alt_9);
        $stm->bindValue(17, $section_2_link_conteudo_9);
        $stm->bindValue(18, $section_3_conteudo_10);
        $stm->bindValue(19, $section_3_conteudo_11);
        $stm->bindValue(20, $section_3_conteudo_12);
        $stm->bindValue(21, upload("section_3_img_13",$pastaArquivos, "N"));
        $stm->bindValue(22, $section_3_image_alt_13);
        $stm->bindValue(23, $section_3_conteudo_14);
        $stm->bindValue(24, $section_3_conteudo_15);
        $stm->bindValue(25, $section_3_conteudo_16);
        $stm->bindValue(26, $section_3_conteudo_17);
        $stm->bindValue(27, upload("section_4_img_18",$pastaArquivos, "N"));
        $stm->bindValue(28, $section_4_image_alt_18);
        $stm->bindValue(29, $section_4_conteudo_19);
        $stm->bindValue(30, upload("section_4_img_20",$pastaArquivos, "N"));
        $stm->bindValue(31, $section_4_image_alt_20);
        $stm->bindValue(32, $section_4_conteudo_21);
        $stm->bindValue(33, upload("section_4_img_22",$pastaArquivos, "N"));
        $stm->bindValue(34, $section_4_image_alt_22);
        $stm->bindValue(35, $section_4_conteudo_23);
        $stm->bindValue(36, upload("section_5_img_24",$pastaArquivos, "N"));
        $stm->bindValue(37, $section_5_image_alt_24);
        $stm->bindValue(38, $section_5_conteudo_25);
        $stm->bindValue(39, $section_5_conteudo_26);
        $stm->bindValue(40, $section_5_conteudo_27);
        $stm->bindValue(41, $section_5_link_28);
        $stm->bindValue(42, $section_5_link_alt_28);
        $stm->bindValue(43, $section_5_link_conteudo_28);
        $stm->bindValue(44, $section_6_conteudo_29);
        $stm->bindValue(45, $section_6_link_30);
        $stm->bindValue(46, $section_6_link_alt_30);
        $stm->bindValue(47, $section_6_link_conteudo_30);
        $stm->bindValue(48, upload("section_6_img_31",$pastaArquivos, "N"));
        $stm->bindValue(49, $section_6_image_alt_31);
        $stm->bindValue(50, $section_7_conteudo_32);
        $stm->bindValue(51, upload("section_8_img_33",$pastaArquivos, "N"));
        $stm->bindValue(52, $section_8_image_alt_33);
        $stm->bindValue(53, $section_8_conteudo_34);
        $stm->bindValue(54, $section_8_conteudo_35);
        $stm->bindValue(55, $section_8_conteudo_36);
        $stm->bindValue(56, $section_8_conteudo_37);
        $stm->bindValue(57, $section_8_conteudo_38);
        $stm->bindValue(58, $section_8_conteudo_39);
        $stm->bindValue(59, $section_8_conteudo_40);
        $stm->bindValue(60, $section_8_conteudo_41);
        $stm->bindValue(61, $section_8_conteudo_42);
        $stm->bindValue(62, $section_8_conteudo_43);
        $stm->bindValue(63, $section_8_conteudo_44);
        $stm->bindValue(64, $section_8_conteudo_45);
        $stm->bindValue(65, $section_8_conteudo_46);
        $stm->bindValue(66, $section_8_conteudo_47);
        $stm->bindValue(67, $section_8_conteudo_48);
        $stm->bindValue(68, $section_8_conteudo_49);
        $stm->bindValue(69, $section_8_conteudo_50);
        $stm->bindValue(70, $section_8_conteudo_51);
        $stm->bindValue(71, $section_8_conteudo_52);
        $stm->bindValue(72, $section_8_conteudo_53);
        $stm->bindValue(73, $section_8_conteudo_54);
        $stm->bindValue(74, $section_8_conteudo_55);
        $stm->bindValue(75, $section_8_conteudo_56);
        $stm->bindValue(76, $section_8_conteudo_57);
        $stm->bindValue(77, $section_8_conteudo_58);
        $stm->bindValue(78, $section_8_conteudo_59);
        $stm->bindValue(79, $section_8_link_60);
        $stm->bindValue(80, $section_8_link_alt_60);
        $stm->bindValue(81, $section_8_link_conteudo_60);
        $stm->bindValue(82, $section_9_conteudo_61);
        $stm->bindValue(83, $section_9_conteudo_62);
        $stm->bindValue(84, $section_9_conteudo_63);
        $stm->bindValue(85, $section_9_link_64);
        $stm->bindValue(86, $section_9_link_alt_64);
        $stm->bindValue(87, $section_9_link_conteudo_64);
        $stm->bindValue(88, upload("section_10_img_65",$pastaArquivos, "N"));
        $stm->bindValue(89, $section_10_image_alt_65);
        $stm->bindValue(90, $section_10_conteudo_66);
        $stm->bindValue(91, upload("section_10_img_67",$pastaArquivos, "N"));
        $stm->bindValue(92, $section_10_image_alt_67);
        $stm->bindValue(93, $section_10_conteudo_68);
        $stm->bindValue(94, upload("section_10_img_69",$pastaArquivos, "N"));
        $stm->bindValue(95, $section_10_image_alt_69);
        $stm->bindValue(96, upload("section_10_conteudo_70",$pastaArquivos, "N"));
        $stm->bindValue(97, upload("section_10_img_71",$pastaArquivos, "N"));
        $stm->bindValue(98, $section_10_image_alt_71);
        $stm->bindValue(99, $section_10_conteudo_72);
$stm->bindValue(100, $pagina_individual);
$stm->bindValue(101, $id);
        $stm->execute();
    } catch(PDOException $erro){
        echo $erro->getMessage();
    }

// Trecho adicional
if($pagina_individual == 'S') {
  echo "  <script>
          alert('Modificado com sucesso!');
          window.location='editar-home.php?pi=S&id=$id';
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
  if (isset($_GET['acao']) && $_GET['acao'] == 'excluirHome') {
    try {
      $sql = "DELETE FROM tbl_home WHERE id=? ";
      $stm = $this->pdo->prepare($sql);
      $stm->bindValue(1, $_GET['id']);
      $stm->execute();
    } catch (PDOException $erro) {
      echo $erro->getMessage();
    }

    echo "  <script>
            window.location='home.php';
        </script>";
    exit;
  }
}
  }
}
?>

<?php
@session_start();
$SucessoInstanciada = '';
if(empty($SucessoInstanciada)) {
  if(file_exists('Connection/conexao.php')) {
    require_once('Connection/con-pdo.php');
    require_once('Class/funcoes.php');
  } else {
    require_once('../Connection/con-pdo.php');
    require_once('../Class/funcoes.php');
  }

  class Sucesso {
    private $pdo = null;

    private static $Sucesso = null;

    private function __construct($conexao){
      $this->pdo = $conexao;
    }

    public static function getInstance($conexao){
      if (!isset(self::$Sucesso)):
        self::$Sucesso = new Sucesso($conexao);
      endif;
      return self::$Sucesso;
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
    $sql = "SELECT * FROM tbl_sucesso where 1=1 $sql $sqlOrdem $sqlLimite";
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
function editar($redireciona='editar-sucesso.php?pi=S&id=1') {
    if(isset($_POST['acao']) && $_POST['acao'] == 'editaSucesso') {
$meta_title = (isset($_POST['meta_title']) && !empty($_POST['meta_title'])) ? $_POST['meta_title'] : '' ;
$meta_keywords = (isset($_POST['meta_keywords']) && !empty($_POST['meta_keywords'])) ? $_POST['meta_keywords'] : '' ;
$meta_description = (isset($_POST['meta_description']) && !empty($_POST['meta_description'])) ? $_POST['meta_description'] : '' ;
$section_1_conteudo_1 = (isset($_POST['section_1_conteudo_1']) && !empty($_POST['section_1_conteudo_1'])) ? $_POST['section_1_conteudo_1'] : '' ;
$section_1_conteudo_2 = (isset($_POST['section_1_conteudo_2']) && !empty($_POST['section_1_conteudo_2'])) ? $_POST['section_1_conteudo_2'] : '' ;
 $id = filter_input(INPUT_POST, 'id');
          if (isset($_POST['pagina_individual']) && !empty($_POST['pagina_individual'])) { $pagina_individual = $_POST['pagina_individual'];  } else {   $pagina_individual = gerarTituloSEO($section_1_conteudo_1);  } $maximo = 180000;    try { 
        if(file_exists('Connection/conexao.php')) {
            $pastaArquivos = 'img';
        } else {
            $pastaArquivos = '../img';
        }
            $sql = "UPDATE tbl_sucesso SET meta_title=?, meta_keywords=?, meta_description=?, section_1_conteudo_1=?, section_1_conteudo_2=?,pagina_individual=? WHERE id=?";        $stm = $this->pdo->prepare($sql);
        $stm->bindValue(1, $meta_title);
        $stm->bindValue(2, $meta_keywords);
        $stm->bindValue(3, $meta_description);
        $stm->bindValue(4, $section_1_conteudo_1);
        $stm->bindValue(5, $section_1_conteudo_2);
$stm->bindValue(6, $pagina_individual);
$stm->bindValue(7, $id);
        $stm->execute();
    } catch(PDOException $erro){
        echo $erro->getMessage();
    }

// Trecho adicional
if($pagina_individual == 'S') {
  echo "  <script>
          alert('Modificado com sucesso!');
          window.location='editar-sucesso.php?pi=S&id=$id';
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
  if (isset($_GET['acao']) && $_GET['acao'] == 'excluirSucesso') {
    try {
      $sql = "DELETE FROM tbl_sucesso WHERE id=? ";
      $stm = $this->pdo->prepare($sql);
      $stm->bindValue(1, $_GET['id']);
      $stm->execute();
    } catch (PDOException $erro) {
      echo $erro->getMessage();
    }

    echo "  <script>
            window.location='sucesso.php';
        </script>";
    exit;
  }
}
  }
}
?>

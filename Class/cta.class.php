<?php
@session_start();
$CtaInstanciada = '';
if (empty($CtaInstanciada)) {
  if (file_exists('Connection/conexao.php')) {
    require_once('Connection/con-pdo.php');
    require_once('Class/funcoes.php');
  } else {
    require_once('../Connection/con-pdo.php');
    require_once('../Class/funcoes.php');
  }

  class Cta
  {
    private $pdo = null;

    private static $Cta = null;

    private function __construct($conexao)
    {
      $this->pdo = $conexao;
    }

    public static function getInstance($conexao)
    {
      if (!isset(self::$Cta)):
        self::$Cta = new Cta($conexao);
      endif;
      return self::$Cta;
    }

    function rsDados($id = '', $orderBy = '', $limite = '', $pagina_individual = '', $ativo = '')
    {
      /// FILTROS
      $nCampos = 0;
      $sql = '';
      $sqlOrdem = '';
      $sqlLimite = '';
      if (!empty($id)) {
        $sql .= " and id = ?";
        $nCampos++;
        $campo[$nCampos] = $id;
      }
      if (!empty($pagina_individual)) {
        $sql .= " and pagina_individual = ?";
        $nCampos++;
        $campo[$nCampos] = $pagina_individual;
      }
      if (!empty($ativo)) {
        $sql .= " and ativo = ?";
        $nCampos++;
        $campo[$nCampos] = $ativo;
      }

      /// ORDEM
      if (!empty($orderBy)) {
        $sqlOrdem = " order by {$orderBy}";
      }

      if (!empty($limite)) {
        $sqlLimite = " limit 0,{$limite}";
      }

      try {
        $sql = "SELECT * FROM tbl_cta where 1=1 $sql $sqlOrdem $sqlLimite";
        $stm = $this->pdo->prepare($sql);

        for ($i = 1; $i <= $nCampos; $i++) {
          $stm->bindValue($i, $campo[$i]);
        }

        $stm->execute();
        $rsDados = $stm->fetchAll(PDO::FETCH_OBJ);

        if ($id <> '' or $limite == 1 or $pagina_individual <> '') {
          if (isset($rsDados[0]) && !empty($rsDados[0])) {
            return ($rsDados[0]);
          }
        } else {
          return ($rsDados);
        }
      } catch (PDOException $erro) {
        echo $erro->getMessage();
      }
    }
    function add($redireciona = '')
    {
      if (isset($_POST['acao']) && $_POST['acao'] == 'addCta') {
        $meta_title = (isset($_POST['meta_title']) && !empty($_POST['meta_title'])) ? $_POST['meta_title'] : '';
        $meta_keywords = (isset($_POST['meta_keywords']) && !empty($_POST['meta_keywords'])) ? $_POST['meta_keywords'] : '';
        $meta_description = (isset($_POST['meta_description']) && !empty($_POST['meta_description'])) ? $_POST['meta_description'] : '';
        $section_1_conteudo_1 = (isset($_POST['section_1_conteudo_1']) && !empty($_POST['section_1_conteudo_1'])) ? $_POST['section_1_conteudo_1'] : '';
        $section_1_link_2 = (isset($_POST['section_1_link_2']) && !empty($_POST['section_1_link_2'])) ? $_POST['section_1_link_2'] : '';
        $section_1_link_alt_2 = (isset($_POST['section_1_link_alt_2']) && !empty($_POST['section_1_link_alt_2'])) ? $_POST['section_1_link_alt_2'] : '';
        $section_1_link_conteudo_2 = (isset($_POST['section_1_link_conteudo_2']) && !empty($_POST['section_1_link_conteudo_2'])) ? $_POST['section_1_link_conteudo_2'] : '';
        if (isset($_POST['pagina_individual']) && !empty($_POST['pagina_individual'])) {
          $pagina_individual = $_POST['pagina_individual'];
        } else {
          $pagina_individual = gerarTituloSEO($section_1_conteudo_1);
        }
        $cta = '<div class="cta_content">
                <h3>' . $section_1_conteudo_1 . '</h3>
                <div class="cta_link">
                  <a href="' . $section_1_link_conteudo_2 . ' " aria-label="' . $section_1_link_alt_2 . '">
                  ' . $section_1_link_2 . '
                </a>
                </div>
            </div>';
        try {
          if (file_exists('Connection/conexao.php')) {
            $pastaArquivos = 'img';
          } else {
            $pastaArquivos = '../img';
          }
          $sql = "INSERT INTO tbl_cta (meta_title, meta_keywords, meta_description, section_1_conteudo_1, section_1_link_2, section_1_link_alt_2, section_1_link_conteudo_2,pagina_individual,cta) VALUES ( ?,  ?,  ?,  ?,  ?,  ?,  ?,?,?)";
          $stm = $this->pdo->prepare($sql);
          $stm->bindValue(1, $meta_title);
          $stm->bindValue(2, $meta_keywords);
          $stm->bindValue(3, $meta_description);
          $stm->bindValue(4, $section_1_conteudo_1);
          $stm->bindValue(5, $section_1_link_2);
          $stm->bindValue(6, $section_1_link_alt_2);
          $stm->bindValue(7, $section_1_link_conteudo_2);
          $stm->bindValue(8, $pagina_individual);
          $stm->bindValue(9, $cta);
          $stm->execute();
          $idBanner = $this->pdo->lastInsertId();
        } catch (PDOException $erro) {
          echo $erro->getMessage();
        }
      }
    }
    function editar($redireciona = 'cta.php')
    {
      if (isset($_POST['acao']) && $_POST['acao'] == 'editaCta') {
        $meta_title = (isset($_POST['meta_title']) && !empty($_POST['meta_title'])) ? $_POST['meta_title'] : '';
        $meta_keywords = (isset($_POST['meta_keywords']) && !empty($_POST['meta_keywords'])) ? $_POST['meta_keywords'] : '';
        $meta_description = (isset($_POST['meta_description']) && !empty($_POST['meta_description'])) ? $_POST['meta_description'] : '';
        $section_1_conteudo_1 = (isset($_POST['section_1_conteudo_1']) && !empty($_POST['section_1_conteudo_1'])) ? $_POST['section_1_conteudo_1'] : '';
        $section_1_link_2 = (isset($_POST['section_1_link_2']) && !empty($_POST['section_1_link_2'])) ? $_POST['section_1_link_2'] : '';
        $section_1_link_alt_2 = (isset($_POST['section_1_link_alt_2']) && !empty($_POST['section_1_link_alt_2'])) ? $_POST['section_1_link_alt_2'] : '';
        $section_1_link_conteudo_2 = (isset($_POST['section_1_link_conteudo_2']) && !empty($_POST['section_1_link_conteudo_2'])) ? $_POST['section_1_link_conteudo_2'] : '';
        $id = filter_input(INPUT_POST, 'id');
        if (isset($_POST['pagina_individual']) && !empty($_POST['pagina_individual'])) {
          $pagina_individual = $_POST['pagina_individual'];
        } else {
          $pagina_individual = gerarTituloSEO($section_1_conteudo_1);
        }
           $cta = '<div class="cta_content">
                <h3>' . $section_1_conteudo_1 . '</h3>
                <div class="cta_link">
                  <a href="' . $section_1_link_conteudo_2 . ' " aria-label="' . $section_1_link_alt_2 . '">
                  ' . $section_1_link_2 . '
                </a>
                </div>
            </div>';
        try {
          if (file_exists('Connection/conexao.php')) {
            $pastaArquivos = 'img';
          } else {
            $pastaArquivos = '../img';
          }
          $sql = "UPDATE tbl_cta SET meta_title=?, meta_keywords=?, meta_description=?, section_1_conteudo_1=?, section_1_link_2=?, section_1_link_alt_2=?, section_1_link_conteudo_2=?,pagina_individual=?,cta=? WHERE id=?";
          $stm = $this->pdo->prepare($sql);
          $stm->bindValue(1, $meta_title);
          $stm->bindValue(2, $meta_keywords);
          $stm->bindValue(3, $meta_description);
          $stm->bindValue(4, $section_1_conteudo_1);
          $stm->bindValue(5, $section_1_link_2);
          $stm->bindValue(6, $section_1_link_alt_2);
          $stm->bindValue(7, $section_1_link_conteudo_2);
          $stm->bindValue(8, $pagina_individual);
          $stm->bindValue(9, $cta);
          $stm->bindValue(10, $id);
          $stm->execute();
        } catch (PDOException $erro) {
          echo $erro->getMessage();
        }

        // Trecho adicional
        if ($pagina_individual == 'S') {
          echo "  <script>
          alert('Modificado com sucesso!');
          window.location='editar-cta.php?pi=S&id=$id';
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
    function excluir()
    {
      if (isset($_GET['acao']) && $_GET['acao'] == 'excluirCta') {
        try {
          $sql = "DELETE FROM tbl_cta WHERE id=? ";
          $stm = $this->pdo->prepare($sql);
          $stm->bindValue(1, $_GET['id']);
          $stm->execute();
        } catch (PDOException $erro) {
          echo $erro->getMessage();
        }

        echo "  <script>
            window.location='cta.php';
        </script>";
        exit;
      }
    }
  }
}
?>
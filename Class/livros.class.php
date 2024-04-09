<?php
@session_start();
$LivrosInstanciada = '';
if (empty($LivrosInstanciada)) {
  if (file_exists('Connection/conexao.php')) {
    require_once('Connection/con-pdo.php');
    require_once('Class/funcoes.php');
  } else {
    require_once('../Connection/con-pdo.php');
    require_once('../Class/funcoes.php');
  }

  class Livros
  {
    private $pdo = null;

    private static $Livros = null;

    private function __construct($conexao)
    {
      $this->pdo = $conexao;
    }

    public static function getInstance($conexao)
    {
      if (!isset(self::$Livros)):
        self::$Livros = new Livros($conexao);
      endif;
      return self::$Livros;
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
        $sql = "SELECT * FROM tbl_livros where 1=1 $sql $sqlOrdem $sqlLimite";
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
    function editar($redireciona = 'editar-livros.php?pi=S&id=1')
    {
      if (isset($_POST['acao']) && $_POST['acao'] == 'editaLivros') {
        $meta_title = (isset($_POST['meta_title']) && !empty($_POST['meta_title'])) ? $_POST['meta_title'] : '';
        $meta_keywords = (isset($_POST['meta_keywords']) && !empty($_POST['meta_keywords'])) ? $_POST['meta_keywords'] : '';
        $meta_description = (isset($_POST['meta_description']) && !empty($_POST['meta_description'])) ? $_POST['meta_description'] : '';
        $section_1_image_alt_1 = (isset($_POST['section_1_image_alt_1']) && !empty($_POST['section_1_image_alt_1'])) ? $_POST['section_1_image_alt_1'] : '';
        $section_1_image_alt_2 = (isset($_POST['section_1_image_alt_2']) && !empty($_POST['section_1_image_alt_2'])) ? $_POST['section_1_image_alt_2'] : '';
        $section_1_link_3 = (isset($_POST['section_1_link_3']) && !empty($_POST['section_1_link_3'])) ? $_POST['section_1_link_3'] : '';
        $section_1_link_alt_3 = (isset($_POST['section_1_link_alt_3']) && !empty($_POST['section_1_link_alt_3'])) ? $_POST['section_1_link_alt_3'] : '';
        $section_1_link_conteudo_3 = (isset($_POST['section_1_link_conteudo_3']) && !empty($_POST['section_1_link_conteudo_3'])) ? $_POST['section_1_link_conteudo_3'] : '';
        $section_1_conteudo_4 = (isset($_POST['section_1_conteudo_4']) && !empty($_POST['section_1_conteudo_4'])) ? $_POST['section_1_conteudo_4'] : '';
        $section_2_image_alt_5 = (isset($_POST['section_2_image_alt_5']) && !empty($_POST['section_2_image_alt_5'])) ? $_POST['section_2_image_alt_5'] : '';
        $section_2_image_alt_6 = (isset($_POST['section_2_image_alt_6']) && !empty($_POST['section_2_image_alt_6'])) ? $_POST['section_2_image_alt_6'] : '';
        $section_2_conteudo_7 = (isset($_POST['section_2_conteudo_7']) && !empty($_POST['section_2_conteudo_7'])) ? $_POST['section_2_conteudo_7'] : '';
        $section_2_link_8 = (isset($_POST['section_2_link_8']) && !empty($_POST['section_2_link_8'])) ? $_POST['section_2_link_8'] : '';
        $section_2_link_alt_8 = (isset($_POST['section_2_link_alt_8']) && !empty($_POST['section_2_link_alt_8'])) ? $_POST['section_2_link_alt_8'] : '';
        $section_2_link_conteudo_8 = (isset($_POST['section_2_link_conteudo_8']) && !empty($_POST['section_2_link_conteudo_8'])) ? $_POST['section_2_link_conteudo_8'] : '';
        $id = filter_input(INPUT_POST, 'id');
        if (isset($_POST['pagina_individual']) && !empty($_POST['pagina_individual'])) {
          $pagina_individual = $_POST['pagina_individual'];
        } else {
          $pagina_individual = gerarTituloSEO($section_1_image_alt_1);
        }
        $maximo = 10080000;
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
        if ($_FILES["section_1_img_2"]["size"] > $maximo) {
          echo "Erro! O arquivo enviado por você ultrapassa o ";
          $valorKb = $maximo / 1000;
          $tamanhoFoto = $_FILES["section_1_img_2"]["size"] / 1000;
          echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
          exit;
        }
        if ($_FILES["section_2_img_5"]["size"] > $maximo) {
          echo "Erro! O arquivo enviado por você ultrapassa o ";
          $valorKb = $maximo / 1000;
          $tamanhoFoto = $_FILES["section_2_img_5"]["size"] / 1000;
          echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
          exit;
        }
        if ($_FILES["section_2_img_6"]["size"] > $maximo) {
          echo "Erro! O arquivo enviado por você ultrapassa o ";
          $valorKb = $maximo / 1000;
          $tamanhoFoto = $_FILES["section_2_img_6"]["size"] / 1000;
          echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
          exit;
        }
        try {
          if (file_exists('Connection/conexao.php')) {
            $pastaArquivos = 'img';
          } else {
            $pastaArquivos = '../img';
          }
          $sql = "UPDATE tbl_livros SET meta_title=?, meta_keywords=?, meta_description=?, section_1_img_1=?, section_1_image_alt_1=?, section_1_img_2=?, section_1_image_alt_2=?, section_1_link_3=?, section_1_link_alt_3=?, section_1_link_conteudo_3=?, section_1_conteudo_4=?, section_2_img_5=?, section_2_image_alt_5=?, section_2_img_6=?, section_2_image_alt_6=?, section_2_conteudo_7=?, section_2_link_8=?, section_2_link_alt_8=?, section_2_link_conteudo_8=?,pagina_individual=? WHERE id=?";
          $stm = $this->pdo->prepare($sql);
          $stm->bindValue(1, $meta_title);
          $stm->bindValue(2, $meta_keywords);
          $stm->bindValue(3, $meta_description);
          $stm->bindValue(4, upload("section_1_img_1", $pastaArquivos, "N"));
          $stm->bindValue(5, $section_1_image_alt_1);
          $stm->bindValue(6, upload("section_1_img_2", $pastaArquivos, "N"));
          $stm->bindValue(7, $section_1_image_alt_2);
          $stm->bindValue(8, $section_1_link_3);
          $stm->bindValue(9, $section_1_link_alt_3);
          $stm->bindValue(10, $section_1_link_conteudo_3);
          $stm->bindValue(11, $section_1_conteudo_4);
          $stm->bindValue(12, upload("section_2_img_5", $pastaArquivos, "N"));
          $stm->bindValue(13, $section_2_image_alt_5);
          $stm->bindValue(14, upload("section_2_img_6", $pastaArquivos, "N"));
          $stm->bindValue(15, $section_2_image_alt_6);
          $stm->bindValue(16, $section_2_conteudo_7);
          $stm->bindValue(17, $section_2_link_8);
          $stm->bindValue(18, $section_2_link_alt_8);
          $stm->bindValue(19, $section_2_link_conteudo_8);
          $stm->bindValue(20, $pagina_individual);
          $stm->bindValue(21, $id);
          $stm->execute();
        } catch (PDOException $erro) {
          echo $erro->getMessage();
        }

        // Trecho adicional
        if ($pagina_individual == 'S') {
          echo "  <script>
          alert('Modificado com sucesso!');
          window.location='editar-livros.php?pi=S&id=$id';
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
      if (isset($_GET['acao']) && $_GET['acao'] == 'excluirLivros') {
        try {
          $sql = "DELETE FROM tbl_livros WHERE id=? ";
          $stm = $this->pdo->prepare($sql);
          $stm->bindValue(1, $_GET['id']);
          $stm->execute();
        } catch (PDOException $erro) {
          echo $erro->getMessage();
        }

        echo "  <script>
            window.location='livros.php';
        </script>";
        exit;
      }
    }
  }
}
?>
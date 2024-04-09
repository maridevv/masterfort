<?php
@session_start();
$Desc_colunistaInstanciada = '';
if (empty($Desc_colunistaInstanciada)) {
  if (file_exists('Connection/conexao.php')) {
    require_once('Connection/con-pdo.php');
    require_once('Class/funcoes.php');
  } else {
    require_once('../Connection/con-pdo.php');
    require_once('../Class/funcoes.php');
  }

  class Desc_colunista
  {
    private $pdo = null;

    private static $Desc_colunista = null;

    private function __construct($conexao)
    {
      $this->pdo = $conexao;
    }

    public static function getInstance($conexao)
    {
      if (!isset(self::$Desc_colunista)):
        self::$Desc_colunista = new Desc_colunista($conexao);
      endif;
      return self::$Desc_colunista;
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
        $sql = "SELECT * FROM tbl_desc_colunista where 1=1 $sql $sqlOrdem $sqlLimite";
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
      
      if (isset($_POST['acao']) && $_POST['acao'] == 'addDesc_colunista') {
        $meta_title = (isset($_POST['meta_title']) && !empty($_POST['meta_title'])) ? $_POST['meta_title'] : '';
        $meta_keywords = (isset($_POST['meta_keywords']) && !empty($_POST['meta_keywords'])) ? $_POST['meta_keywords'] : '';
        $meta_description = (isset($_POST['meta_description']) && !empty($_POST['meta_description'])) ? $_POST['meta_description'] : '';
        $section_1_image_alt_1 = (isset($_POST['section_1_image_alt_1']) && !empty($_POST['section_1_image_alt_1'])) ? $_POST['section_1_image_alt_1'] : '';
        $section_1_conteudo_2 = (isset($_POST['section_1_conteudo_2']) && !empty($_POST['section_1_conteudo_2'])) ? $_POST['section_1_conteudo_2'] : '';
        $section_1_conteudo_3 = (isset($_POST['section_1_conteudo_3']) && !empty($_POST['section_1_conteudo_3'])) ? $_POST['section_1_conteudo_3'] : '';
        $section_1_link_4 = (isset($_POST['section_1_link_4']) && !empty($_POST['section_1_link_4'])) ? $_POST['section_1_link_4'] : '';
        $section_1_link_alt_4 = (isset($_POST['section_1_link_alt_4']) && !empty($_POST['section_1_link_alt_4'])) ? $_POST['section_1_link_alt_4'] : '';
        $section_1_link_5 = (isset($_POST['section_1_link_5']) && !empty($_POST['section_1_link_5'])) ? $_POST['section_1_link_5'] : '';
        $section_1_link_alt_5 = (isset($_POST['section_1_link_alt_5']) && !empty($_POST['section_1_link_alt_5'])) ? $_POST['section_1_link_alt_5'] : '';
        $section_1_link_6 = (isset($_POST['section_1_link_6']) && !empty($_POST['section_1_link_6'])) ? $_POST['section_1_link_6'] : '';
        $section_1_link_alt_6 = (isset($_POST['section_1_link_alt_6']) && !empty($_POST['section_1_link_alt_6'])) ? $_POST['section_1_link_alt_6'] : '';
        $section_1_link_7 = (isset($_POST['section_1_link_7']) && !empty($_POST['section_1_link_7'])) ? $_POST['section_1_link_7'] : '';
        $section_1_link_alt_7 = (isset($_POST['section_1_link_alt_7']) && !empty($_POST['section_1_link_alt_7'])) ? $_POST['section_1_link_alt_7'] : '';
        $section_2_image_alt_8 = (isset($_POST['section_2_image_alt_8']) && !empty($_POST['section_2_image_alt_8'])) ? $_POST['section_2_image_alt_8'] : '';
        $section_2_image_alt_9 = (isset($_POST['section_2_image_alt_9']) && !empty($_POST['section_2_image_alt_9'])) ? $_POST['section_2_image_alt_9'] : '';
        $section_2_conteudo_10 = (isset($_POST['section_2_conteudo_10']) && !empty($_POST['section_2_conteudo_10'])) ? $_POST['section_2_conteudo_10'] : '';
        $section_3_image_alt_11 = (isset($_POST['section_3_image_alt_11']) && !empty($_POST['section_3_image_alt_11'])) ? $_POST['section_3_image_alt_11'] : '';
        $section_3_image_alt_12 = (isset($_POST['section_3_image_alt_12']) && !empty($_POST['section_3_image_alt_12'])) ? $_POST['section_3_image_alt_12'] : '';
        $section_3_conteudo_13 = (isset($_POST['section_3_conteudo_13']) && !empty($_POST['section_3_conteudo_13'])) ? $_POST['section_3_conteudo_13'] : '';
        $section_3_conteudo_14 = (isset($_POST['section_3_conteudo_14']) && !empty($_POST['section_3_conteudo_14'])) ? $_POST['section_3_conteudo_14'] : '';
  
        if (isset($_POST['pagina_individual']) && !empty($_POST['pagina_individual'])) {
          $pagina_individual = $_POST['pagina_individual'];
        } else {
          $pagina_individual = gerarTituloSEO($section_1_conteudo_3);
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
        if ($_FILES["section_2_img_8"]["size"] > $maximo) {
          echo "Erro! O arquivo enviado por você ultrapassa o ";
          $valorKb = $maximo / 1000;
          $tamanhoFoto = $_FILES["section_2_img_8"]["size"] / 1000;
          echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
          exit;
        }
        if ($_FILES["section_2_img_9"]["size"] > $maximo) {
          echo "Erro! O arquivo enviado por você ultrapassa o ";
          $valorKb = $maximo / 1000;
          $tamanhoFoto = $_FILES["section_2_img_9"]["size"] / 1000;
          echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
          exit;
        }
        if ($_FILES["section_3_img_11"]["size"] > $maximo) {
          echo "Erro! O arquivo enviado por você ultrapassa o ";
          $valorKb = $maximo / 1000;
          $tamanhoFoto = $_FILES["section_3_img_11"]["size"] / 1000;
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
        try {
          if (file_exists('Connection/conexao.php')) {
            $pastaArquivos = 'img';
          } else {
            $pastaArquivos = '../img';
          }

          $sql = "INSERT INTO tbl_desc_colunista (meta_title, meta_keywords, meta_description, section_1_img_1, section_1_image_alt_1, section_1_conteudo_2, section_1_conteudo_3, section_1_link_4, section_1_link_alt_4, section_1_link_5, section_1_link_alt_5, section_1_link_6, section_1_link_alt_6, section_1_link_7, section_1_link_alt_7, section_2_img_8, section_2_image_alt_8, section_2_img_9, section_2_image_alt_9, section_2_conteudo_10, section_3_img_11, section_3_image_alt_11, section_3_img_12, section_3_image_alt_12, section_3_conteudo_13, section_3_conteudo_14,pagina_individual) VALUES ( ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,?)";
          $stm = $this->pdo->prepare($sql);
          $stm->bindValue(1, $meta_title);
          $stm->bindValue(2, $meta_keywords);
          $stm->bindValue(3, $meta_description);
          $stm->bindValue(4, upload("section_1_img_1", $pastaArquivos, "N"));
          $stm->bindValue(5, $section_1_image_alt_1);
          $stm->bindValue(6, $section_1_conteudo_2);
          $stm->bindValue(7, $section_1_conteudo_3);
          $stm->bindValue(8, $section_1_link_4);
          $stm->bindValue(9, $section_1_link_alt_4);
          $stm->bindValue(10, $section_1_link_5);
          $stm->bindValue(11, $section_1_link_alt_5);
          $stm->bindValue(12, $section_1_link_6);
          $stm->bindValue(13, $section_1_link_alt_6);
          $stm->bindValue(14, $section_1_link_7);
          $stm->bindValue(15, $section_1_link_alt_7);
          $stm->bindValue(16, upload("section_2_img_8", $pastaArquivos, "N"));
          $stm->bindValue(17, $section_2_image_alt_8);
          $stm->bindValue(18, upload("section_2_img_9", $pastaArquivos, "N"));
          $stm->bindValue(19, $section_2_image_alt_9);
          $stm->bindValue(20, $section_2_conteudo_10);
          $stm->bindValue(21, upload("section_3_img_11", $pastaArquivos, "N"));
          $stm->bindValue(22, $section_3_image_alt_11);
          $stm->bindValue(23, upload("section_3_img_12", $pastaArquivos, "N"));
          $stm->bindValue(24, $section_3_image_alt_12);
          $stm->bindValue(25, $section_3_conteudo_13);
          $stm->bindValue(26, $section_3_conteudo_14);
          $stm->bindValue(27, $pagina_individual);
          $stm->execute();
          $idBanner = $this->pdo->lastInsertId();
        } catch (PDOException $erro) {
          echo $erro->getMessage();
          die();
          exit;
        }
      }
    }
    function editar($redireciona = 'desc_colunista.php')
    {
      if (isset($_POST['acao']) && $_POST['acao'] == 'editaDesc_colunista') {
        $meta_title = (isset($_POST['meta_title']) && !empty($_POST['meta_title'])) ? $_POST['meta_title'] : '';
        $meta_keywords = (isset($_POST['meta_keywords']) && !empty($_POST['meta_keywords'])) ? $_POST['meta_keywords'] : '';
        $meta_description = (isset($_POST['meta_description']) && !empty($_POST['meta_description'])) ? $_POST['meta_description'] : '';
        $section_1_image_alt_1 = (isset($_POST['section_1_image_alt_1']) && !empty($_POST['section_1_image_alt_1'])) ? $_POST['section_1_image_alt_1'] : '';
        $section_1_conteudo_2 = (isset($_POST['section_1_conteudo_2']) && !empty($_POST['section_1_conteudo_2'])) ? $_POST['section_1_conteudo_2'] : '';
        $section_1_conteudo_3 = (isset($_POST['section_1_conteudo_3']) && !empty($_POST['section_1_conteudo_3'])) ? $_POST['section_1_conteudo_3'] : '';
        $section_1_link_4 = (isset($_POST['section_1_link_4']) && !empty($_POST['section_1_link_4'])) ? $_POST['section_1_link_4'] : '';
        $section_1_link_alt_4 = (isset($_POST['section_1_link_alt_4']) && !empty($_POST['section_1_link_alt_4'])) ? $_POST['section_1_link_alt_4'] : '';
        $section_1_link_5 = (isset($_POST['section_1_link_5']) && !empty($_POST['section_1_link_5'])) ? $_POST['section_1_link_5'] : '';
        $section_1_link_alt_5 = (isset($_POST['section_1_link_alt_5']) && !empty($_POST['section_1_link_alt_5'])) ? $_POST['section_1_link_alt_5'] : '';
        $section_1_link_6 = (isset($_POST['section_1_link_6']) && !empty($_POST['section_1_link_6'])) ? $_POST['section_1_link_6'] : '';
        $section_1_link_alt_6 = (isset($_POST['section_1_link_alt_6']) && !empty($_POST['section_1_link_alt_6'])) ? $_POST['section_1_link_alt_6'] : '';
        $section_1_link_7 = (isset($_POST['section_1_link_7']) && !empty($_POST['section_1_link_7'])) ? $_POST['section_1_link_7'] : '';
        $section_1_link_alt_7 = (isset($_POST['section_1_link_alt_7']) && !empty($_POST['section_1_link_alt_7'])) ? $_POST['section_1_link_alt_7'] : '';
        $section_2_image_alt_8 = (isset($_POST['section_2_image_alt_8']) && !empty($_POST['section_2_image_alt_8'])) ? $_POST['section_2_image_alt_8'] : '';
        $section_2_image_alt_9 = (isset($_POST['section_2_image_alt_9']) && !empty($_POST['section_2_image_alt_9'])) ? $_POST['section_2_image_alt_9'] : '';
        $section_2_conteudo_10 = (isset($_POST['section_2_conteudo_10']) && !empty($_POST['section_2_conteudo_10'])) ? $_POST['section_2_conteudo_10'] : '';
        $section_3_image_alt_11 = (isset($_POST['section_3_image_alt_11']) && !empty($_POST['section_3_image_alt_11'])) ? $_POST['section_3_image_alt_11'] : '';
        $section_3_image_alt_12 = (isset($_POST['section_3_image_alt_12']) && !empty($_POST['section_3_image_alt_12'])) ? $_POST['section_3_image_alt_12'] : '';
        $section_3_conteudo_13 = (isset($_POST['section_3_conteudo_13']) && !empty($_POST['section_3_conteudo_13'])) ? $_POST['section_3_conteudo_13'] : '';
        $section_3_conteudo_14 = (isset($_POST['section_3_conteudo_14']) && !empty($_POST['section_3_conteudo_14'])) ? $_POST['section_3_conteudo_14'] : '';
        $id = filter_input(INPUT_POST, 'id');
        if (isset($_POST['pagina_individual']) && !empty($_POST['pagina_individual'])) {
          $pagina_individual = $_POST['pagina_individual'];
        } else {
          $pagina_individual = gerarTituloSEO($section_1_conteudo_3);
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
        if ($_FILES["section_2_img_8"]["size"] > $maximo) {
          echo "Erro! O arquivo enviado por você ultrapassa o ";
          $valorKb = $maximo / 1000;
          $tamanhoFoto = $_FILES["section_2_img_8"]["size"] / 1000;
          echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
          exit;
        }
        if ($_FILES["section_2_img_9"]["size"] > $maximo) {
          echo "Erro! O arquivo enviado por você ultrapassa o ";
          $valorKb = $maximo / 1000;
          $tamanhoFoto = $_FILES["section_2_img_9"]["size"] / 1000;
          echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
          exit;
        }
        if ($_FILES["section_3_img_11"]["size"] > $maximo) {
          echo "Erro! O arquivo enviado por você ultrapassa o ";
          $valorKb = $maximo / 1000;
          $tamanhoFoto = $_FILES["section_3_img_11"]["size"] / 1000;
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
        try {
          if (file_exists('Connection/conexao.php')) {
            $pastaArquivos = 'img';
          } else {
            $pastaArquivos = '../img';
          }
          $sql = "UPDATE tbl_desc_colunista SET meta_title=?, meta_keywords=?, meta_description=?, section_1_img_1=?, section_1_image_alt_1=?, section_1_conteudo_2=?, section_1_conteudo_3=?, section_1_link_4=?, section_1_link_alt_4=?, section_1_link_5=?, section_1_link_alt_5=?, section_1_link_6=?, section_1_link_alt_6=?, section_1_link_7=?, section_1_link_alt_7=?, section_2_img_8=?, section_2_image_alt_8=?, section_2_img_9=?, section_2_image_alt_9=?, section_2_conteudo_10=?, section_3_img_11=?, section_3_image_alt_11=?, section_3_img_12=?, section_3_image_alt_12=?, section_3_conteudo_13=?, section_3_conteudo_14=?,pagina_individual=? WHERE id=?";
          $stm = $this->pdo->prepare($sql);
          $stm->bindValue(1, $meta_title);
          $stm->bindValue(2, $meta_keywords);
          $stm->bindValue(3, $meta_description);
          $stm->bindValue(4, upload("section_1_img_1", $pastaArquivos, "N"));
          $stm->bindValue(5, $section_1_image_alt_1);
          $stm->bindValue(6, $section_1_conteudo_2);
          $stm->bindValue(7, $section_1_conteudo_3);
          $stm->bindValue(8, $section_1_link_4);
          $stm->bindValue(9, $section_1_link_alt_4);
          $stm->bindValue(10, $section_1_link_5);
          $stm->bindValue(11, $section_1_link_alt_5);
          $stm->bindValue(12, $section_1_link_6);
          $stm->bindValue(13, $section_1_link_alt_6);
          $stm->bindValue(14, $section_1_link_7);
          $stm->bindValue(15, $section_1_link_alt_7);
          $stm->bindValue(16, upload("section_2_img_8", $pastaArquivos, "N"));
          $stm->bindValue(17, $section_2_image_alt_8);
          $stm->bindValue(18, upload("section_2_img_9", $pastaArquivos, "N"));
          $stm->bindValue(19, $section_2_image_alt_9);
          $stm->bindValue(20, $section_2_conteudo_10);
          $stm->bindValue(21, upload("section_3_img_11", $pastaArquivos, "N"));
          $stm->bindValue(22, $section_3_image_alt_11);
          $stm->bindValue(23, upload("section_3_img_12", $pastaArquivos, "N"));
          $stm->bindValue(24, $section_3_image_alt_12);
          $stm->bindValue(25, $section_3_conteudo_13);
          $stm->bindValue(26, $section_3_conteudo_14);
          $stm->bindValue(27, $pagina_individual);
          $stm->bindValue(28, $id);
          $stm->execute();
        } catch (PDOException $erro) {
          echo $erro->getMessage();
        }

        // Trecho adicional
        if ($pagina_individual == 'S') {
          echo "  <script>
          alert('Modificado com sucesso!');
          window.location='editar-desc_colunista.php?pi=S&id=$id';
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
      if (isset($_GET['acao']) && $_GET['acao'] == 'excluirDesc_colunista') {
        try {
          $sql = "DELETE FROM tbl_desc_colunista WHERE id=? ";
          $stm = $this->pdo->prepare($sql);
          $stm->bindValue(1, $_GET['id']);
          $stm->execute();
        } catch (PDOException $erro) {
          echo $erro->getMessage();
        }

        echo "  <script>
            window.location='desc_colunista.php';
        </script>";
        exit;
      }
    }
  }
}
?>
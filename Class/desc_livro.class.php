<?php
@session_start();
$Desc_livroInstanciada = '';
if (empty($Desc_livroInstanciada)) {
  if (file_exists('Connection/conexao.php')) {
    require_once('Connection/con-pdo.php');
    require_once('Class/funcoes.php');
  } else {
    require_once('../Connection/con-pdo.php');
    require_once('../Class/funcoes.php');
  }

  class Desc_livro
  {
    private $pdo = null;

    private static $Desc_livro = null;

    private function __construct($conexao)
    {
      $this->pdo = $conexao;
    }

    public static function getInstance($conexao)
    {
      if (!isset(self::$Desc_livro)):
        self::$Desc_livro = new Desc_livro($conexao);
      endif;
      return self::$Desc_livro;
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
        $sql = "SELECT * FROM tbl_desc_livro where 1=1 $sql $sqlOrdem $sqlLimite";
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
      if (isset($_POST['acao']) && $_POST['acao'] == 'addDesc_livro') {
        $meta_title = (isset($_POST['meta_title']) && !empty($_POST['meta_title'])) ? $_POST['meta_title'] : '';
        $meta_keywords = (isset($_POST['meta_keywords']) && !empty($_POST['meta_keywords'])) ? $_POST['meta_keywords'] : '';
        $meta_description = (isset($_POST['meta_description']) && !empty($_POST['meta_description'])) ? $_POST['meta_description'] : '';
        $section_1_image_alt_1 = (isset($_POST['section_1_image_alt_1']) && !empty($_POST['section_1_image_alt_1'])) ? $_POST['section_1_image_alt_1'] : '';
        $section_1_conteudo_2 = (isset($_POST['section_1_conteudo_2']) && !empty($_POST['section_1_conteudo_2'])) ? $_POST['section_1_conteudo_2'] : '';
        $section_2_image_alt_3 = (isset($_POST['section_2_image_alt_3']) && !empty($_POST['section_2_image_alt_3'])) ? $_POST['section_2_image_alt_3'] : '';
        $section_2_image_alt_4 = (isset($_POST['section_2_image_alt_4']) && !empty($_POST['section_2_image_alt_4'])) ? $_POST['section_2_image_alt_4'] : '';
        $section_2_conteudo_5 = (isset($_POST['section_2_conteudo_5']) && !empty($_POST['section_2_conteudo_5'])) ? $_POST['section_2_conteudo_5'] : '';
        $section_3_image_alt_6 = (isset($_POST['section_3_image_alt_6']) && !empty($_POST['section_3_image_alt_6'])) ? $_POST['section_3_image_alt_6'] : '';
        $section_3_conteudo_7 = (isset($_POST['section_3_conteudo_7']) && !empty($_POST['section_3_conteudo_7'])) ? $_POST['section_3_conteudo_7'] : '';
        $section_3_conteudo_8 = (isset($_POST['section_3_conteudo_8']) && !empty($_POST['section_3_conteudo_8'])) ? $_POST['section_3_conteudo_8'] : '';
        $section_3_conteudo_9 = (isset($_POST['section_3_conteudo_9']) && !empty($_POST['section_3_conteudo_9'])) ? $_POST['section_3_conteudo_9'] : '';
        $section_3_link_10 = (isset($_POST['section_3_link_10']) && !empty($_POST['section_3_link_10'])) ? $_POST['section_3_link_10'] : '';
        $section_3_link_alt_10 = (isset($_POST['section_3_link_alt_10']) && !empty($_POST['section_3_link_alt_10'])) ? $_POST['section_3_link_alt_10'] : '';
        $section_3_link_conteudo_10 = (isset($_POST['section_3_link_conteudo_10']) && !empty($_POST['section_3_link_conteudo_10'])) ? $_POST['section_3_link_conteudo_10'] : '';
        $section_3_conteudo_11 = (isset($_POST['section_3_conteudo_11']) && !empty($_POST['section_3_conteudo_11'])) ? $_POST['section_3_conteudo_11'] : '';
        $section_3_link_12 = (isset($_POST['section_3_link_12']) && !empty($_POST['section_3_link_12'])) ? $_POST['section_3_link_12'] : '';
        $section_3_link_alt_12 = (isset($_POST['section_3_link_alt_12']) && !empty($_POST['section_3_link_alt_12'])) ? $_POST['section_3_link_alt_12'] : '';
        $section_3_link_conteudo_12 = (isset($_POST['section_3_link_conteudo_12']) && !empty($_POST['section_3_link_conteudo_12'])) ? $_POST['section_3_link_conteudo_12'] : '';
        $section_3_image_alt_13 = (isset($_POST['section_3_image_alt_13']) && !empty($_POST['section_3_image_alt_13'])) ? $_POST['section_3_image_alt_13'] : '';
        $section_3_conteudo_14 = (isset($_POST['section_3_conteudo_14']) && !empty($_POST['section_3_conteudo_14'])) ? $_POST['section_3_conteudo_14'] : '';
        $section_3_conteudo_15 = (isset($_POST['section_3_conteudo_15']) && !empty($_POST['section_3_conteudo_15'])) ? $_POST['section_3_conteudo_15'] : '';
        $section_3_image_alt_16 = (isset($_POST['section_3_image_alt_16']) && !empty($_POST['section_3_image_alt_16'])) ? $_POST['section_3_image_alt_16'] : '';
        $section_3_conteudo_17 = (isset($_POST['section_3_conteudo_17']) && !empty($_POST['section_3_conteudo_17'])) ? $_POST['section_3_conteudo_17'] : '';
        $section_3_conteudo_18 = (isset($_POST['section_3_conteudo_18']) && !empty($_POST['section_3_conteudo_18'])) ? $_POST['section_3_conteudo_18'] : '';
        $section_3_conteudo_19 = (isset($_POST['section_3_conteudo_19']) && !empty($_POST['section_3_conteudo_19'])) ? $_POST['section_3_conteudo_19'] : '';
        if (isset($_POST['pagina_individual']) && !empty($_POST['pagina_individual'])) {
          $pagina_individual = $_POST['pagina_individual'];
        } else {
          $pagina_individual = gerarTituloSEO($section_1_conteudo_2);
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
        if ($_FILES["section_2_img_3"]["size"] > $maximo) {
          echo "Erro! O arquivo enviado por você ultrapassa o ";
          $valorKb = $maximo / 1000;
          $tamanhoFoto = $_FILES["section_2_img_3"]["size"] / 1000;
          echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
          exit;
        }
        if ($_FILES["section_2_img_4"]["size"] > $maximo) {
          echo "Erro! O arquivo enviado por você ultrapassa o ";
          $valorKb = $maximo / 1000;
          $tamanhoFoto = $_FILES["section_2_img_4"]["size"] / 1000;
          echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
          exit;
        }
        if ($_FILES["section_3_img_6"]["size"] > $maximo) {
          echo "Erro! O arquivo enviado por você ultrapassa o ";
          $valorKb = $maximo / 1000;
          $tamanhoFoto = $_FILES["section_3_img_6"]["size"] / 1000;
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
        if ($_FILES["section_3_img_16"]["size"] > $maximo) {
          echo "Erro! O arquivo enviado por você ultrapassa o ";
          $valorKb = $maximo / 1000;
          $tamanhoFoto = $_FILES["section_3_img_16"]["size"] / 1000;
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
          $sql = "INSERT INTO tbl_desc_livro (meta_title, meta_keywords, meta_description, section_1_img_1, section_1_image_alt_1, section_1_conteudo_2, section_2_img_3, section_2_image_alt_3, section_2_img_4, section_2_image_alt_4, section_2_conteudo_5, section_3_img_6, section_3_image_alt_6, section_3_conteudo_7, section_3_conteudo_8, section_3_conteudo_9, section_3_link_10, section_3_link_alt_10, section_3_link_conteudo_10, section_3_conteudo_11, section_3_link_12, section_3_link_alt_12, section_3_link_conteudo_12, section_3_img_13, section_3_image_alt_13, section_3_conteudo_14, section_3_conteudo_15, section_3_img_16, section_3_image_alt_16, section_3_conteudo_17, section_3_conteudo_18, section_3_conteudo_19,pagina_individual) VALUES ( ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,?)";
          $stm = $this->pdo->prepare($sql);
          $stm->bindValue(1, $meta_title);
          $stm->bindValue(2, $meta_keywords);
          $stm->bindValue(3, $meta_description);
          $stm->bindValue(4, upload("section_1_img_1", $pastaArquivos, "N"));
          $stm->bindValue(5, $section_1_image_alt_1);
          $stm->bindValue(6, $section_1_conteudo_2);
          $stm->bindValue(7, upload("section_2_img_3", $pastaArquivos, "N"));
          $stm->bindValue(8, $section_2_image_alt_3);
          $stm->bindValue(9, upload("section_2_img_4", $pastaArquivos, "N"));
          $stm->bindValue(10, $section_2_image_alt_4);
          $stm->bindValue(11, $section_2_conteudo_5);
          $stm->bindValue(12, upload("section_3_img_6", $pastaArquivos, "N"));
          $stm->bindValue(13, $section_3_image_alt_6);
          $stm->bindValue(14, $section_3_conteudo_7);
          $stm->bindValue(15, $section_3_conteudo_8);
          $stm->bindValue(16, $section_3_conteudo_9);
          $stm->bindValue(17, $section_3_link_10);
          $stm->bindValue(18, $section_3_link_alt_10);
          $stm->bindValue(19, $section_3_link_conteudo_10);
          $stm->bindValue(20, $section_3_conteudo_11);
          $stm->bindValue(21, $section_3_link_12);
          $stm->bindValue(22, $section_3_link_alt_12);
          $stm->bindValue(23, $section_3_link_conteudo_12);
          $stm->bindValue(24, upload("section_3_img_13", $pastaArquivos, "N"));
          $stm->bindValue(25, $section_3_image_alt_13);
          $stm->bindValue(26, $section_3_conteudo_14);
          $stm->bindValue(27, $section_3_conteudo_15);
          $stm->bindValue(28, upload("section_3_img_16", $pastaArquivos, "N"));
          $stm->bindValue(29, $section_3_image_alt_16);
          $stm->bindValue(30, $section_3_conteudo_17);
          $stm->bindValue(31, $section_3_conteudo_18);
          $stm->bindValue(32, $section_3_conteudo_19);
          $stm->bindValue(33, $pagina_individual);
          $stm->execute();
          $idBanner = $this->pdo->lastInsertId();
        } catch (PDOException $erro) {
          echo $erro->getMessage();
        }
      }
    }
    function editar($redireciona = 'desc_livro.php')
    {
      if (isset($_POST['acao']) && $_POST['acao'] == 'editaDesc_livro') {
        $meta_title = (isset($_POST['meta_title']) && !empty($_POST['meta_title'])) ? $_POST['meta_title'] : '';
        $meta_keywords = (isset($_POST['meta_keywords']) && !empty($_POST['meta_keywords'])) ? $_POST['meta_keywords'] : '';
        $meta_description = (isset($_POST['meta_description']) && !empty($_POST['meta_description'])) ? $_POST['meta_description'] : '';
        $section_1_image_alt_1 = (isset($_POST['section_1_image_alt_1']) && !empty($_POST['section_1_image_alt_1'])) ? $_POST['section_1_image_alt_1'] : '';
        $section_1_conteudo_2 = (isset($_POST['section_1_conteudo_2']) && !empty($_POST['section_1_conteudo_2'])) ? $_POST['section_1_conteudo_2'] : '';
        $section_2_image_alt_3 = (isset($_POST['section_2_image_alt_3']) && !empty($_POST['section_2_image_alt_3'])) ? $_POST['section_2_image_alt_3'] : '';
        $section_2_image_alt_4 = (isset($_POST['section_2_image_alt_4']) && !empty($_POST['section_2_image_alt_4'])) ? $_POST['section_2_image_alt_4'] : '';
        $section_2_conteudo_5 = (isset($_POST['section_2_conteudo_5']) && !empty($_POST['section_2_conteudo_5'])) ? $_POST['section_2_conteudo_5'] : '';
        $section_3_image_alt_6 = (isset($_POST['section_3_image_alt_6']) && !empty($_POST['section_3_image_alt_6'])) ? $_POST['section_3_image_alt_6'] : '';
        $section_3_conteudo_7 = (isset($_POST['section_3_conteudo_7']) && !empty($_POST['section_3_conteudo_7'])) ? $_POST['section_3_conteudo_7'] : '';
        $section_3_conteudo_8 = (isset($_POST['section_3_conteudo_8']) && !empty($_POST['section_3_conteudo_8'])) ? $_POST['section_3_conteudo_8'] : '';
        $section_3_conteudo_9 = (isset($_POST['section_3_conteudo_9']) && !empty($_POST['section_3_conteudo_9'])) ? $_POST['section_3_conteudo_9'] : '';
        $section_3_link_10 = (isset($_POST['section_3_link_10']) && !empty($_POST['section_3_link_10'])) ? $_POST['section_3_link_10'] : '';
        $section_3_link_alt_10 = (isset($_POST['section_3_link_alt_10']) && !empty($_POST['section_3_link_alt_10'])) ? $_POST['section_3_link_alt_10'] : '';
        $section_3_link_conteudo_10 = (isset($_POST['section_3_link_conteudo_10']) && !empty($_POST['section_3_link_conteudo_10'])) ? $_POST['section_3_link_conteudo_10'] : '';
        $section_3_conteudo_11 = (isset($_POST['section_3_conteudo_11']) && !empty($_POST['section_3_conteudo_11'])) ? $_POST['section_3_conteudo_11'] : '';
        $section_3_link_12 = (isset($_POST['section_3_link_12']) && !empty($_POST['section_3_link_12'])) ? $_POST['section_3_link_12'] : '';
        $section_3_link_alt_12 = (isset($_POST['section_3_link_alt_12']) && !empty($_POST['section_3_link_alt_12'])) ? $_POST['section_3_link_alt_12'] : '';
        $section_3_link_conteudo_12 = (isset($_POST['section_3_link_conteudo_12']) && !empty($_POST['section_3_link_conteudo_12'])) ? $_POST['section_3_link_conteudo_12'] : '';
        $section_3_image_alt_13 = (isset($_POST['section_3_image_alt_13']) && !empty($_POST['section_3_image_alt_13'])) ? $_POST['section_3_image_alt_13'] : '';
        $section_3_conteudo_14 = (isset($_POST['section_3_conteudo_14']) && !empty($_POST['section_3_conteudo_14'])) ? $_POST['section_3_conteudo_14'] : '';
        $section_3_conteudo_15 = (isset($_POST['section_3_conteudo_15']) && !empty($_POST['section_3_conteudo_15'])) ? $_POST['section_3_conteudo_15'] : '';
        $section_3_image_alt_16 = (isset($_POST['section_3_image_alt_16']) && !empty($_POST['section_3_image_alt_16'])) ? $_POST['section_3_image_alt_16'] : '';
        $section_3_conteudo_17 = (isset($_POST['section_3_conteudo_17']) && !empty($_POST['section_3_conteudo_17'])) ? $_POST['section_3_conteudo_17'] : '';
        $section_3_conteudo_18 = (isset($_POST['section_3_conteudo_18']) && !empty($_POST['section_3_conteudo_18'])) ? $_POST['section_3_conteudo_18'] : '';
        $section_3_conteudo_19 = (isset($_POST['section_3_conteudo_19']) && !empty($_POST['section_3_conteudo_19'])) ? $_POST['section_3_conteudo_19'] : '';
        $id = filter_input(INPUT_POST, 'id');
        if (isset($_POST['pagina_individual']) && !empty($_POST['pagina_individual'])) {
          $pagina_individual = $_POST['pagina_individual'];
        } else {
          $pagina_individual = gerarTituloSEO($section_1_conteudo_2);
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
        if ($_FILES["section_2_img_3"]["size"] > $maximo) {
          echo "Erro! O arquivo enviado por você ultrapassa o ";
          $valorKb = $maximo / 1000;
          $tamanhoFoto = $_FILES["section_2_img_3"]["size"] / 1000;
          echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
          exit;
        }
        if ($_FILES["section_2_img_4"]["size"] > $maximo) {
          echo "Erro! O arquivo enviado por você ultrapassa o ";
          $valorKb = $maximo / 1000;
          $tamanhoFoto = $_FILES["section_2_img_4"]["size"] / 1000;
          echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
          exit;
        }
        if ($_FILES["section_3_img_6"]["size"] > $maximo) {
          echo "Erro! O arquivo enviado por você ultrapassa o ";
          $valorKb = $maximo / 1000;
          $tamanhoFoto = $_FILES["section_3_img_6"]["size"] / 1000;
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
        if ($_FILES["section_3_img_16"]["size"] > $maximo) {
          echo "Erro! O arquivo enviado por você ultrapassa o ";
          $valorKb = $maximo / 1000;
          $tamanhoFoto = $_FILES["section_3_img_16"]["size"] / 1000;
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
          $sql = "UPDATE tbl_desc_livro SET meta_title=?, meta_keywords=?, meta_description=?, section_1_img_1=?, section_1_image_alt_1=?, section_1_conteudo_2=?, section_2_img_3=?, section_2_image_alt_3=?, section_2_img_4=?, section_2_image_alt_4=?, section_2_conteudo_5=?, section_3_img_6=?, section_3_image_alt_6=?, section_3_conteudo_7=?, section_3_conteudo_8=?, section_3_conteudo_9=?, section_3_link_10=?, section_3_link_alt_10=?, section_3_link_conteudo_10=?, section_3_conteudo_11=?, section_3_link_12=?, section_3_link_alt_12=?, section_3_link_conteudo_12=?, section_3_img_13=?, section_3_image_alt_13=?, section_3_conteudo_14=?, section_3_conteudo_15=?, section_3_img_16=?, section_3_image_alt_16=?, section_3_conteudo_17=?, section_3_conteudo_18=?, section_3_conteudo_19=?,pagina_individual=? WHERE id=?";
          $stm = $this->pdo->prepare($sql);
          $stm->bindValue(1, $meta_title);
          $stm->bindValue(2, $meta_keywords);
          $stm->bindValue(3, $meta_description);
          $stm->bindValue(4, upload("section_1_img_1", $pastaArquivos, "N"));
          $stm->bindValue(5, $section_1_image_alt_1);
          $stm->bindValue(6, $section_1_conteudo_2);
          $stm->bindValue(7, upload("section_2_img_3", $pastaArquivos, "N"));
          $stm->bindValue(8, $section_2_image_alt_3);
          $stm->bindValue(9, upload("section_2_img_4", $pastaArquivos, "N"));
          $stm->bindValue(10, $section_2_image_alt_4);
          $stm->bindValue(11, $section_2_conteudo_5);
          $stm->bindValue(12, upload("section_3_img_6", $pastaArquivos, "N"));
          $stm->bindValue(13, $section_3_image_alt_6);
          $stm->bindValue(14, $section_3_conteudo_7);
          $stm->bindValue(15, $section_3_conteudo_8);
          $stm->bindValue(16, $section_3_conteudo_9);
          $stm->bindValue(17, $section_3_link_10);
          $stm->bindValue(18, $section_3_link_alt_10);
          $stm->bindValue(19, $section_3_link_conteudo_10);
          $stm->bindValue(20, $section_3_conteudo_11);
          $stm->bindValue(21, $section_3_link_12);
          $stm->bindValue(22, $section_3_link_alt_12);
          $stm->bindValue(23, $section_3_link_conteudo_12);
          $stm->bindValue(24, upload("section_3_img_13", $pastaArquivos, "N"));
          $stm->bindValue(25, $section_3_image_alt_13);
          $stm->bindValue(26, $section_3_conteudo_14);
          $stm->bindValue(27, $section_3_conteudo_15);
          $stm->bindValue(28, upload("section_3_img_16", $pastaArquivos, "N"));
          $stm->bindValue(29, $section_3_image_alt_16);
          $stm->bindValue(30, $section_3_conteudo_17);
          $stm->bindValue(31, $section_3_conteudo_18);
          $stm->bindValue(32, $section_3_conteudo_19);
          $stm->bindValue(33, $pagina_individual);
          $stm->bindValue(34, $id);
          $stm->execute();
        } catch (PDOException $erro) {
          echo $erro->getMessage();
        }

        // Trecho adicional
        if ($pagina_individual == 'S') {
          echo "  <script>
          alert('Modificado com sucesso!');
          window.location='editar-desc_livro.php?pi=S&id=$id';
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
      if (isset($_GET['acao']) && $_GET['acao'] == 'excluirDesc_livro') {
        try {
          $sql = "DELETE FROM tbl_desc_livro WHERE id=? ";
          $stm = $this->pdo->prepare($sql);
          $stm->bindValue(1, $_GET['id']);
          $stm->execute();
        } catch (PDOException $erro) {
          echo $erro->getMessage();
        }

        echo "  <script>
            window.location='desc_livro.php';
        </script>";
        exit;
      }
    }
  }
}
?>
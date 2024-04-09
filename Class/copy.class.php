<?php
@session_start();
$ProjetosInstanciada = '';
if (empty($ProjetosInstanciada)) {
    if (file_exists('Connection/conexao.php')) {
        require_once('Connection/con-pdo.php');
        require_once('Class/funcoes.php');
    } else {
        require_once('../Connection/con-pdo.php');
        require_once('../Class/funcoes.php');
    }

    class Projetos
    {
        private $pdo = null;

        private static $Projetos = null;

        private function __construct($conexao)
        {
            $this->pdo = $conexao;
        }

        public static function getInstance($conexao)
        {
            if (!isset(self::$Projetos)):
                self::$Projetos = new Projetos($conexao);
            endif;
            return self::$Projetos;
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
                $sql = "SELECT * FROM tbl_projetos where 1=1 $sql $sqlOrdem $sqlLimite";
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
            if (isset($_POST['acao']) && $_POST['acao'] == 'addProjetos') {
                if (isset($_POST['meta_title']) && !empty($_POST['meta_title'])) {
                    $meta_title = $_POST['meta_title'];
                } else {
                    $meta_title = '';
                }
                if (isset($_POST['meta_keywords']) && !empty($_POST['meta_keywords'])) {
                    $meta_keywords = $_POST['meta_keywords'];
                } else {
                    $meta_keywords = '';
                }
                if (isset($_POST['meta_description']) && !empty($_POST['meta_description'])) {
                    $meta_description = $_POST['meta_description'];
                } else {
                    $meta_description = '';
                }
                if (isset($_POST['section_1_image_alt_1']) && !empty($_POST['section_1_image_alt_1'])) {
                    $section_1_image_alt_1 = $_POST['section_1_image_alt_1'];
                } else {
                    $section_1_image_alt_1 = '';
                }
                if (isset($_POST['section_1_conteudo_2']) && !empty($_POST['section_1_conteudo_2'])) {
                    $section_1_conteudo_2 = $_POST['section_1_conteudo_2'];
                } else {
                    $section_1_conteudo_2 = '';
                }
                if (isset($_POST['section_1_link_3']) && !empty($_POST['section_1_link_3'])) {
                    $section_1_link_3 = $_POST['section_1_link_3'];
                } else {
                    $section_1_link_3 = '';
                }
                if (isset($_POST['section_1_link_alt_3']) && !empty($_POST['section_1_link_alt_3'])) {
                    $section_1_link_alt_3 = $_POST['section_1_link_alt_3'];
                } else {
                    $section_1_link_alt_3 = '';
                }
                if (isset($_POST['section_1_conteudo_4']) && !empty($_POST['section_1_conteudo_4'])) {
                    $section_1_conteudo_4 = $_POST['section_1_conteudo_4'];
                } else {
                    $section_1_conteudo_4 = '';
                }
                if (isset($_POST['section_1_image_alt_5']) && !empty($_POST['section_1_image_alt_5'])) {
                    $section_1_image_alt_5 = $_POST['section_1_image_alt_5'];
                } else {
                    $section_1_image_alt_5 = '';
                }
                if (isset($_POST['section_1_image_alt_6']) && !empty($_POST['section_1_image_alt_6'])) {
                    $section_1_image_alt_6 = $_POST['section_1_image_alt_6'];
                } else {
                    $section_1_image_alt_6 = '';
                }
                if (isset($_POST['section_1_conteudo_7']) && !empty($_POST['section_1_conteudo_7'])) {
                    $section_1_conteudo_7 = $_POST['section_1_conteudo_7'];
                } else {
                    $section_1_conteudo_7 = '';
                }
                if (isset($_POST['section_1_conteudo_8']) && !empty($_POST['section_1_conteudo_8'])) {
                    $section_1_conteudo_8 = $_POST['section_1_conteudo_8'];
                } else {
                    $section_1_conteudo_8 = '';
                }
                if (isset($_POST['section_2_image_alt_9']) && !empty($_POST['section_2_image_alt_9'])) {
                    $section_2_image_alt_9 = $_POST['section_2_image_alt_9'];
                } else {
                    $section_2_image_alt_9 = '';
                }
                if (isset($_POST['section_2_conteudo_10']) && !empty($_POST['section_2_conteudo_10'])) {
                    $section_2_conteudo_10 = $_POST['section_2_conteudo_10'];
                } else {
                    $section_2_conteudo_10 = '';
                }
                if (isset($_POST['section_2_conteudo_11']) && !empty($_POST['section_2_conteudo_11'])) {
                    $section_2_conteudo_11 = $_POST['section_2_conteudo_11'];
                } else {
                    $section_2_conteudo_11 = '';
                }
                if (isset($_POST['section_2_conteudo_12']) && !empty($_POST['section_2_conteudo_12'])) {
                    $section_2_conteudo_12 = $_POST['section_2_conteudo_12'];
                } else {
                    $section_2_conteudo_12 = '';
                }
                if (isset($_POST['section_2_image_alt_13']) && !empty($_POST['section_2_image_alt_13'])) {
                    $section_2_image_alt_13 = $_POST['section_2_image_alt_13'];
                } else {
                    $section_2_image_alt_13 = '';
                }
                if (isset($_POST['section_2_conteudo_14']) && !empty($_POST['section_2_conteudo_14'])) {
                    $section_2_conteudo_14 = $_POST['section_2_conteudo_14'];
                } else {
                    $section_2_conteudo_14 = '';
                }
                if (isset($_POST['section_2_conteudo_15']) && !empty($_POST['section_2_conteudo_15'])) {
                    $section_2_conteudo_15 = $_POST['section_2_conteudo_15'];
                } else {
                    $section_2_conteudo_15 = '';
                }
                if (isset($_POST['section_2_image_alt_16']) && !empty($_POST['section_2_image_alt_16'])) {
                    $section_2_image_alt_16 = $_POST['section_2_image_alt_16'];
                } else {
                    $section_2_image_alt_16 = '';
                }
                if (isset($_POST['section_2_conteudo_17']) && !empty($_POST['section_2_conteudo_17'])) {
                    $section_2_conteudo_17 = $_POST['section_2_conteudo_17'];
                } else {
                    $section_2_conteudo_17 = '';
                }
                if (isset($_POST['section_2_conteudo_18']) && !empty($_POST['section_2_conteudo_18'])) {
                    $section_2_conteudo_18 = $_POST['section_2_conteudo_18'];
                } else {
                    $section_2_conteudo_18 = '';
                }
                if (isset($_POST['section_2_conteudo_19']) && !empty($_POST['section_2_conteudo_19'])) {
                    $section_2_conteudo_19 = $_POST['section_2_conteudo_19'];
                } else {
                    $section_2_conteudo_19 = '';
                }
                if (isset($_POST['section_2_conteudo_20']) && !empty($_POST['section_2_conteudo_20'])) {
                    $section_2_conteudo_20 = $_POST['section_2_conteudo_20'];
                } else {
                    $section_2_conteudo_20 = '';
                }
                if (isset($_POST['section_2_conteudo_21']) && !empty($_POST['section_2_conteudo_21'])) {
                    $section_2_conteudo_21 = $_POST['section_2_conteudo_21'];
                } else {
                    $section_2_conteudo_21 = '';
                }
                if (isset($_POST['section_2_link_22']) && !empty($_POST['section_2_link_22'])) {
                    $section_2_link_22 = $_POST['section_2_link_22'];
                } else {
                    $section_2_link_22 = '';
                }
                if (isset($_POST['section_2_link_alt_22']) && !empty($_POST['section_2_link_alt_22'])) {
                    $section_2_link_alt_22 = $_POST['section_2_link_alt_22'];
                } else {
                    $section_2_link_alt_22 = '';
                }
                if (isset($_POST['section_2_link_23']) && !empty($_POST['section_2_link_23'])) {
                    $section_2_link_23 = $_POST['section_2_link_23'];
                } else {
                    $section_2_link_23 = '';
                }
                if (isset($_POST['section_2_link_alt_23']) && !empty($_POST['section_2_link_alt_23'])) {
                    $section_2_link_alt_23 = $_POST['section_2_link_alt_23'];
                } else {
                    $section_2_link_alt_23 = '';
                }
                if (isset($_POST['section_2_link_24']) && !empty($_POST['section_2_link_24'])) {
                    $section_2_link_24 = $_POST['section_2_link_24'];
                } else {
                    $section_2_link_24 = '';
                }
                if (isset($_POST['section_2_link_alt_24']) && !empty($_POST['section_2_link_alt_24'])) {
                    $section_2_link_alt_24 = $_POST['section_2_link_alt_24'];
                } else {
                    $section_2_link_alt_24 = '';
                }
                if (isset($_POST['section_2_link_25']) && !empty($_POST['section_2_link_25'])) {
                    $section_2_link_25 = $_POST['section_2_link_25'];
                } else {
                    $section_2_link_25 = '';
                }
                if (isset($_POST['section_2_link_alt_25']) && !empty($_POST['section_2_link_alt_25'])) {
                    $section_2_link_alt_25 = $_POST['section_2_link_alt_25'];
                } else {
                    $section_2_link_alt_25 = '';
                }
                if (isset($_POST['section_3_conteudo_26']) && !empty($_POST['section_3_conteudo_26'])) {
                    $section_3_conteudo_26 = $_POST['section_3_conteudo_26'];
                } else {
                    $section_3_conteudo_26 = '';
                }
                if (isset($_POST['section_3_conteudo_27']) && !empty($_POST['section_3_conteudo_27'])) {
                    $section_3_conteudo_27 = $_POST['section_3_conteudo_27'];
                } else {
                    $section_3_conteudo_27 = '';
                }
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
                if ($_FILES["section_1_img_5"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_1_img_5"]["size"] / 1000;
                    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
                    exit;
                }
                if ($_FILES["section_1_img_6"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_1_img_6"]["size"] / 1000;
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
                if ($_FILES["section_2_img_13"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_2_img_13"]["size"] / 1000;
                    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
                    exit;
                }
                if ($_FILES["section_2_img_16"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_2_img_16"]["size"] / 1000;
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
                    $sql = "INSERT INTO tbl_projetos (meta_title, meta_keywords, meta_description, section_1_img_1, section_1_image_alt_1, section_1_conteudo_2, section_1_link_3, section_1_link_alt_3, section_1_conteudo_4, section_1_img_5, section_1_image_alt_5, section_1_img_6, section_1_image_alt_6, section_1_conteudo_7, section_1_conteudo_8, section_2_img_9, section_2_image_alt_9, section_2_conteudo_10, section_2_conteudo_11, section_2_conteudo_12, section_2_img_13, section_2_image_alt_13, section_2_conteudo_14, section_2_conteudo_15, section_2_img_16, section_2_image_alt_16, section_2_conteudo_17, section_2_conteudo_18, section_2_conteudo_19, section_2_conteudo_20, section_2_conteudo_21, section_2_link_22, section_2_link_alt_22, section_2_link_23, section_2_link_alt_23, section_2_link_24, section_2_link_alt_24, section_2_link_25, section_2_link_alt_25, section_3_conteudo_26, section_3_conteudo_27,pagina_individual) VALUES ( ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?, ?)";
                    $stm = $this->pdo->prepare($sql);
                    $stm->bindValue(1, $meta_title);
                    $stm->bindValue(2, $meta_keywords);
                    $stm->bindValue(3, $meta_description);
                    $stm->bindValue(4, upload("section_1_img_1", $pastaArquivos, "N"));
                    $stm->bindValue(5, $section_1_image_alt_1);
                    $stm->bindValue(6, $section_1_conteudo_2);
                    $stm->bindValue(7, $section_1_link_3);
                    $stm->bindValue(8, $section_1_link_alt_3);
                    $stm->bindValue(9, $section_1_conteudo_4);
                    $stm->bindValue(10, upload("section_1_img_5", $pastaArquivos, "N"));
                    $stm->bindValue(11, $section_1_image_alt_5);
                    $stm->bindValue(12, upload("section_1_img_6", $pastaArquivos, "N"));
                    $stm->bindValue(13, $section_1_image_alt_6);
                    $stm->bindValue(14, $section_1_conteudo_7);
                    $stm->bindValue(15, $section_1_conteudo_8);
                    $stm->bindValue(16, upload("section_2_img_9", $pastaArquivos, "N"));
                    $stm->bindValue(17, $section_2_image_alt_9);
                    $stm->bindValue(18, $section_2_conteudo_10);
                    $stm->bindValue(19, $section_2_conteudo_11);
                    $stm->bindValue(20, $section_2_conteudo_12);
                    $stm->bindValue(21, upload("section_2_img_13", $pastaArquivos, "N"));
                    $stm->bindValue(22, $section_2_image_alt_13);
                    $stm->bindValue(23, $section_2_conteudo_14);
                    $stm->bindValue(24, $section_2_conteudo_15);
                    $stm->bindValue(25, upload("section_2_img_16", $pastaArquivos, "N"));
                    $stm->bindValue(26, $section_2_image_alt_16);
                    $stm->bindValue(27, $section_2_conteudo_17);
                    $stm->bindValue(28, $section_2_conteudo_18);
                    $stm->bindValue(29, $section_2_conteudo_19);
                    $stm->bindValue(30, $section_2_conteudo_20);
                    $stm->bindValue(31, $section_2_conteudo_21);
                    $stm->bindValue(32, $section_2_link_22);
                    $stm->bindValue(33, $section_2_link_alt_22);
                    $stm->bindValue(34, $section_2_link_23);
                    $stm->bindValue(35, $section_2_link_alt_23);
                    $stm->bindValue(36, $section_2_link_24);
                    $stm->bindValue(37, $section_2_link_alt_24);
                    $stm->bindValue(38, $section_2_link_25);
                    $stm->bindValue(39, $section_2_link_alt_25);
                    $stm->bindValue(40, $section_3_conteudo_26);
                    $stm->bindValue(41, $section_3_conteudo_27);
                    $stm->bindValue(42, $pagina_individual);
                    $stm->execute();
                    $idBanner = $this->pdo->lastInsertId();
                } catch (PDOException $erro) {
                    echo $erro->getMessage();
                }
            }
        }
        function editar($redireciona = 'projetos.php')
        {
            if (isset($_POST['acao']) && $_POST['acao'] == 'editaProjetos') {
                if (isset($_POST['meta_title']) && !empty($_POST['meta_title'])) {
                    $meta_title = $_POST['meta_title'];
                } else {
                    $meta_title = '';
                }
                if (isset($_POST['meta_keywords']) && !empty($_POST['meta_keywords'])) {
                    $meta_keywords = $_POST['meta_keywords'];
                } else {
                    $meta_keywords = '';
                }
                if (isset($_POST['meta_description']) && !empty($_POST['meta_description'])) {
                    $meta_description = $_POST['meta_description'];
                } else {
                    $meta_description = '';
                }
                if (isset($_POST['section_1_image_alt_1']) && !empty($_POST['section_1_image_alt_1'])) {
                    $section_1_image_alt_1 = $_POST['section_1_image_alt_1'];
                } else {
                    $section_1_image_alt_1 = '';
                }
                if (isset($_POST['section_1_conteudo_2']) && !empty($_POST['section_1_conteudo_2'])) {
                    $section_1_conteudo_2 = $_POST['section_1_conteudo_2'];
                } else {
                    $section_1_conteudo_2 = '';
                }
                if (isset($_POST['section_1_link_3']) && !empty($_POST['section_1_link_3'])) {
                    $section_1_link_3 = $_POST['section_1_link_3'];
                } else {
                    $section_1_link_3 = '';
                }
                if (isset($_POST['section_1_link_alt_3']) && !empty($_POST['section_1_link_alt_3'])) {
                    $section_1_link_alt_3 = $_POST['section_1_link_alt_3'];
                } else {
                    $section_1_link_alt_3 = '';
                }
                if (isset($_POST['section_1_conteudo_4']) && !empty($_POST['section_1_conteudo_4'])) {
                    $section_1_conteudo_4 = $_POST['section_1_conteudo_4'];
                } else {
                    $section_1_conteudo_4 = '';
                }
                if (isset($_POST['section_1_image_alt_5']) && !empty($_POST['section_1_image_alt_5'])) {
                    $section_1_image_alt_5 = $_POST['section_1_image_alt_5'];
                } else {
                    $section_1_image_alt_5 = '';
                }
                if (isset($_POST['section_1_image_alt_6']) && !empty($_POST['section_1_image_alt_6'])) {
                    $section_1_image_alt_6 = $_POST['section_1_image_alt_6'];
                } else {
                    $section_1_image_alt_6 = '';
                }
                if (isset($_POST['section_1_conteudo_7']) && !empty($_POST['section_1_conteudo_7'])) {
                    $section_1_conteudo_7 = $_POST['section_1_conteudo_7'];
                } else {
                    $section_1_conteudo_7 = '';
                }
                if (isset($_POST['section_1_conteudo_8']) && !empty($_POST['section_1_conteudo_8'])) {
                    $section_1_conteudo_8 = $_POST['section_1_conteudo_8'];
                } else {
                    $section_1_conteudo_8 = '';
                }
                if (isset($_POST['section_2_image_alt_9']) && !empty($_POST['section_2_image_alt_9'])) {
                    $section_2_image_alt_9 = $_POST['section_2_image_alt_9'];
                } else {
                    $section_2_image_alt_9 = '';
                }
                if (isset($_POST['section_2_conteudo_10']) && !empty($_POST['section_2_conteudo_10'])) {
                    $section_2_conteudo_10 = $_POST['section_2_conteudo_10'];
                } else {
                    $section_2_conteudo_10 = '';
                }
                if (isset($_POST['section_2_conteudo_11']) && !empty($_POST['section_2_conteudo_11'])) {
                    $section_2_conteudo_11 = $_POST['section_2_conteudo_11'];
                } else {
                    $section_2_conteudo_11 = '';
                }
                if (isset($_POST['section_2_conteudo_12']) && !empty($_POST['section_2_conteudo_12'])) {
                    $section_2_conteudo_12 = $_POST['section_2_conteudo_12'];
                } else {
                    $section_2_conteudo_12 = '';
                }
                if (isset($_POST['section_2_image_alt_13']) && !empty($_POST['section_2_image_alt_13'])) {
                    $section_2_image_alt_13 = $_POST['section_2_image_alt_13'];
                } else {
                    $section_2_image_alt_13 = '';
                }
                if (isset($_POST['section_2_conteudo_14']) && !empty($_POST['section_2_conteudo_14'])) {
                    $section_2_conteudo_14 = $_POST['section_2_conteudo_14'];
                } else {
                    $section_2_conteudo_14 = '';
                }
                if (isset($_POST['section_2_conteudo_15']) && !empty($_POST['section_2_conteudo_15'])) {
                    $section_2_conteudo_15 = $_POST['section_2_conteudo_15'];
                } else {
                    $section_2_conteudo_15 = '';
                }
                if (isset($_POST['section_2_image_alt_16']) && !empty($_POST['section_2_image_alt_16'])) {
                    $section_2_image_alt_16 = $_POST['section_2_image_alt_16'];
                } else {
                    $section_2_image_alt_16 = '';
                }
                if (isset($_POST['section_2_conteudo_17']) && !empty($_POST['section_2_conteudo_17'])) {
                    $section_2_conteudo_17 = $_POST['section_2_conteudo_17'];
                } else {
                    $section_2_conteudo_17 = '';
                }
                if (isset($_POST['section_2_conteudo_18']) && !empty($_POST['section_2_conteudo_18'])) {
                    $section_2_conteudo_18 = $_POST['section_2_conteudo_18'];
                } else {
                    $section_2_conteudo_18 = '';
                }
                if (isset($_POST['section_2_conteudo_19']) && !empty($_POST['section_2_conteudo_19'])) {
                    $section_2_conteudo_19 = $_POST['section_2_conteudo_19'];
                } else {
                    $section_2_conteudo_19 = '';
                }
                if (isset($_POST['section_2_conteudo_20']) && !empty($_POST['section_2_conteudo_20'])) {
                    $section_2_conteudo_20 = $_POST['section_2_conteudo_20'];
                } else {
                    $section_2_conteudo_20 = '';
                }
                if (isset($_POST['section_2_conteudo_21']) && !empty($_POST['section_2_conteudo_21'])) {
                    $section_2_conteudo_21 = $_POST['section_2_conteudo_21'];
                } else {
                    $section_2_conteudo_21 = '';
                }
                if (isset($_POST['section_2_link_22']) && !empty($_POST['section_2_link_22'])) {
                    $section_2_link_22 = $_POST['section_2_link_22'];
                } else {
                    $section_2_link_22 = '';
                }
                if (isset($_POST['section_2_link_alt_22']) && !empty($_POST['section_2_link_alt_22'])) {
                    $section_2_link_alt_22 = $_POST['section_2_link_alt_22'];
                } else {
                    $section_2_link_alt_22 = '';
                }
                if (isset($_POST['section_2_link_23']) && !empty($_POST['section_2_link_23'])) {
                    $section_2_link_23 = $_POST['section_2_link_23'];
                } else {
                    $section_2_link_23 = '';
                }
                if (isset($_POST['section_2_link_alt_23']) && !empty($_POST['section_2_link_alt_23'])) {
                    $section_2_link_alt_23 = $_POST['section_2_link_alt_23'];
                } else {
                    $section_2_link_alt_23 = '';
                }
                if (isset($_POST['section_2_link_24']) && !empty($_POST['section_2_link_24'])) {
                    $section_2_link_24 = $_POST['section_2_link_24'];
                } else {
                    $section_2_link_24 = '';
                }
                if (isset($_POST['section_2_link_alt_24']) && !empty($_POST['section_2_link_alt_24'])) {
                    $section_2_link_alt_24 = $_POST['section_2_link_alt_24'];
                } else {
                    $section_2_link_alt_24 = '';
                }
                if (isset($_POST['section_2_link_25']) && !empty($_POST['section_2_link_25'])) {
                    $section_2_link_25 = $_POST['section_2_link_25'];
                } else {
                    $section_2_link_25 = '';
                }
                if (isset($_POST['section_2_link_alt_25']) && !empty($_POST['section_2_link_alt_25'])) {
                    $section_2_link_alt_25 = $_POST['section_2_link_alt_25'];
                } else {
                    $section_2_link_alt_25 = '';
                }
                if (isset($_POST['section_3_conteudo_26']) && !empty($_POST['section_3_conteudo_26'])) {
                    $section_3_conteudo_26 = $_POST['section_3_conteudo_26'];
                } else {
                    $section_3_conteudo_26 = '';
                }
                if (isset($_POST['section_3_conteudo_27']) && !empty($_POST['section_3_conteudo_27'])) {
                    $section_3_conteudo_27 = $_POST['section_3_conteudo_27'];
                } else {
                    $section_3_conteudo_27 = '';
                }
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
                if ($_FILES["section_1_img_5"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_1_img_5"]["size"] / 1000;
                    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
                    exit;
                }
                if ($_FILES["section_1_img_6"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_1_img_6"]["size"] / 1000;
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
                if ($_FILES["section_2_img_13"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_2_img_13"]["size"] / 1000;
                    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
                    exit;
                }
                if ($_FILES["section_2_img_16"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_2_img_16"]["size"] / 1000;
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
                    $sql = "UPDATE tbl_projetos SET meta_title=?, meta_keywords=?, meta_description=?, section_1_img_1=?, section_1_image_alt_1=?, section_1_conteudo_2=?, section_1_link_3=?, section_1_link_alt_3=?, section_1_conteudo_4=?, section_1_img_5=?, section_1_image_alt_5=?, section_1_img_6=?, section_1_image_alt_6=?, section_1_conteudo_7=?, section_1_conteudo_8=?, section_2_img_9=?, section_2_image_alt_9=?, section_2_conteudo_10=?, section_2_conteudo_11=?, section_2_conteudo_12=?, section_2_img_13=?, section_2_image_alt_13=?, section_2_conteudo_14=?, section_2_conteudo_15=?, section_2_img_16=?, section_2_image_alt_16=?, section_2_conteudo_17=?, section_2_conteudo_18=?, section_2_conteudo_19=?, section_2_conteudo_20=?, section_2_conteudo_21=?, section_2_link_22=?, section_2_link_alt_22=?, section_2_link_23=?, section_2_link_alt_23=?, section_2_link_24=?, section_2_link_alt_24=?, section_2_link_25=?, section_2_link_alt_25=?, section_3_conteudo_26=?, section_3_conteudo_27=?,pagina_individual=? WHERE id=?";
                    $stm = $this->pdo->prepare($sql);
                    $stm->bindValue(1, $meta_title);
                    $stm->bindValue(2, $meta_keywords);
                    $stm->bindValue(3, $meta_description);
                    $stm->bindValue(4, upload("section_1_img_1", $pastaArquivos, "N"));
                    $stm->bindValue(5, $section_1_image_alt_1);
                    $stm->bindValue(6, $section_1_conteudo_2);
                    $stm->bindValue(7, $section_1_link_3);
                    $stm->bindValue(8, $section_1_link_alt_3);
                    $stm->bindValue(9, $section_1_conteudo_4);
                    $stm->bindValue(10, upload("section_1_img_5", $pastaArquivos, "N"));
                    $stm->bindValue(11, $section_1_image_alt_5);
                    $stm->bindValue(12, upload("section_1_img_6", $pastaArquivos, "N"));
                    $stm->bindValue(13, $section_1_image_alt_6);
                    $stm->bindValue(14, $section_1_conteudo_7);
                    $stm->bindValue(15, $section_1_conteudo_8);
                    $stm->bindValue(16, upload("section_2_img_9", $pastaArquivos, "N"));
                    $stm->bindValue(17, $section_2_image_alt_9);
                    $stm->bindValue(18, $section_2_conteudo_10);
                    $stm->bindValue(19, $section_2_conteudo_11);
                    $stm->bindValue(20, $section_2_conteudo_12);
                    $stm->bindValue(21, upload("section_2_img_13", $pastaArquivos, "N"));
                    $stm->bindValue(22, $section_2_image_alt_13);
                    $stm->bindValue(23, $section_2_conteudo_14);
                    $stm->bindValue(24, $section_2_conteudo_15);
                    $stm->bindValue(25, upload("section_2_img_16", $pastaArquivos, "N"));
                    $stm->bindValue(26, $section_2_image_alt_16);
                    $stm->bindValue(27, $section_2_conteudo_17);
                    $stm->bindValue(28, $section_2_conteudo_18);
                    $stm->bindValue(29, $section_2_conteudo_19);
                    $stm->bindValue(30, $section_2_conteudo_20);
                    $stm->bindValue(31, $section_2_conteudo_21);
                    $stm->bindValue(32, $section_2_link_22);
                    $stm->bindValue(33, $section_2_link_alt_22);
                    $stm->bindValue(34, $section_2_link_23);
                    $stm->bindValue(35, $section_2_link_alt_23);
                    $stm->bindValue(36, $section_2_link_24);
                    $stm->bindValue(37, $section_2_link_alt_24);
                    $stm->bindValue(38, $section_2_link_25);
                    $stm->bindValue(39, $section_2_link_alt_25);
                    $stm->bindValue(40, $section_3_conteudo_26);
                    $stm->bindValue(41, $section_3_conteudo_27);
                    $stm->bindValue(42, $pagina_individual);
                    $stm->bindValue(43, $id);
                    $stm->execute();
                } catch (PDOException $erro) {
                    echo $erro->getMessage();
                }

                // Trecho adicional
                if ($pagina_individual == 'S') {
                    echo "  <script>
          alert('Modificado com sucesso!');
          window.location='editar-projetos.php?pi=S&id=$id';
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
            if (isset($_GET['acao']) && $_GET['acao'] == 'excluirProjetos') {
                try {
                    $sql = "DELETE FROM tbl_projetos WHERE id=? ";
                    $stm = $this->pdo->prepare($sql);
                    $stm->bindValue(1, $_GET['id']);
                    $stm->execute();
                } catch (PDOException $erro) {
                    echo $erro->getMessage();
                }

                echo "  <script>
            window.location='projetos.php';
        </script>";
                exit;
            }
        }
    }
}
?>
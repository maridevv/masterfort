<?php
include "includes.php";
function gerarHtml($name, $body, $desc)
{

    global $contador, $contador_sequencia, $nomes_aleatorios, $dados_bd;
    $contador_sequencia = 1;
    require_once('./simple_html_dom.php');
    require_once('backend.php');
    $nomes_aleatorios = [];
    $novos_campos = ["\$meta_title", "\$meta_keywords", "\$meta_description"];
    array_unshift($nomes_aleatorios, ...$novos_campos);
    $name = str_replace(' ', '_', $name);
    $tabelaName = $name;
    $className = ucfirst($tabelaName);
    $texto_html = $body;

    $texto_html_sem_comentarios = removeComentariosHTML($texto_html);
    $html = str_get_html($texto_html_sem_comentarios);
    $sections = $html->find('section');

    if (empty($sections)) {
        $sections = $html->find('foreach');
    }
    $dados_bd = [];
    foreach ($sections as $index => $section) {
        $nomeVariavel = '$section_' . ($index + 1) . '_';
        $tags = $section->find('p, a, span, h1, h2, h3, h4, h5, h6, img, strong, button,textarea');
        foreach ($tags as $tag) {
            $tag_name = $tag->tag;
            if ($tag_name == 'a') {
                $tag->outertext = substituirTagA($tag, $tabelaName, $nomeVariavel);
                $contador_sequencia++;
            } elseif ($tag_name == 'img') {
                $nova_tag = substituirTagImg($tag, $tabelaName, $nomeVariavel);
                $tag->outertext = $nova_tag;
                $contador_sequencia++;
            } else {
                $nova_tag = substituirConteudoPorPHP($tag, $tabelaName, $nomeVariavel);
                $tag->outertext = $nova_tag;
                $contador_sequencia++;
            }
        }
    }
    $incl = includ($tabelaName, $desc);
    $head = head($tabelaName);
    $bod = body($tabelaName);

    $novo_html = $incl;
    $novo_html .= $head;
    $novo_html .= $bod;
    $novo_html .= $html->root->innertext;

    $nome_arquivo = $className . 'new.php';
    $classArquivo = './Class/' . $tabelaName . '.class.php';
    if ($desc == 'sim') {
        $add = './painel/add-' . $tabelaName . '.php';
        $painel = './painel/' . $tabelaName . '.php';
    }
    $edit = './painel/editar-' . $tabelaName . '.php';

    if (file_exists($nome_arquivo)) {
        unlink($nome_arquivo);
    }
    if (file_exists($classArquivo)) {
        unlink($classArquivo);
    }
    if ($desc == 'sim') {
        if (file_exists($add)) {
            unlink($add);
        }
        if (file_exists($painel)) {
            unlink($painel);
        }
    }
    if (file_exists($edit)) {
        unlink($edit);
    }

    file_put_contents($nome_arquivo, $novo_html);
    file_put_contents($classArquivo, '');

    $nome_arquivo_config = $classArquivo;
    $arquivo_config = fopen($nome_arquivo_config, 'w');
    if ($arquivo_config) {
        // Escreva o cabeçalho do arquivo
        fwrite($arquivo_config, '<?php' . PHP_EOL);
        fwrite($arquivo_config, '@session_start();' . PHP_EOL);
        fwrite($arquivo_config, '$' . $className . 'Instanciada = \'\';' . PHP_EOL);
        fwrite($arquivo_config, 'if(empty($' . $className . 'Instanciada)) {' . PHP_EOL);
        fwrite($arquivo_config, '  if(file_exists(\'Connection/conexao.php\')) {' . PHP_EOL);
        fwrite($arquivo_config, '    require_once(\'Connection/con-pdo.php\');' . PHP_EOL);
        fwrite($arquivo_config, '    require_once(\'Class/funcoes.php\');' . PHP_EOL);
        fwrite($arquivo_config, '  } else {' . PHP_EOL);
        fwrite($arquivo_config, '    require_once(\'../Connection/con-pdo.php\');' . PHP_EOL);
        fwrite($arquivo_config, '    require_once(\'../Class/funcoes.php\');' . PHP_EOL);
        fwrite($arquivo_config, '  }' . PHP_EOL);
        fwrite($arquivo_config, '' . PHP_EOL);
        fwrite($arquivo_config, '  class ' . $className . ' {' . PHP_EOL);
        fwrite($arquivo_config, '    private $pdo = null;' . PHP_EOL);
        fwrite($arquivo_config, '' . PHP_EOL);
        fwrite($arquivo_config, '    private static $' . $className . ' = null;' . PHP_EOL);
        fwrite($arquivo_config, '' . PHP_EOL);
        fwrite($arquivo_config, '    private function __construct($conexao){' . PHP_EOL);
        fwrite($arquivo_config, '      $this->pdo = $conexao;' . PHP_EOL);
        fwrite($arquivo_config, '    }' . PHP_EOL);
        fwrite($arquivo_config, '' . PHP_EOL);
        fwrite($arquivo_config, '    public static function getInstance($conexao){' . PHP_EOL);
        fwrite($arquivo_config, '      if (!isset(self::$' . $className . ')):' . PHP_EOL);
        fwrite($arquivo_config, '        self::$' . $className . ' = new ' . $className . '($conexao);' . PHP_EOL);
        fwrite($arquivo_config, '      endif;' . PHP_EOL);
        fwrite($arquivo_config, '      return self::$' . $className . ';' . PHP_EOL);
        fwrite($arquivo_config, '    }' . PHP_EOL);
        fwrite($arquivo_config, '' . PHP_EOL);


        fwrite($arquivo_config, 'function rsDados($id=\'\', $orderBy=\'\', $limite=\'\', $pagina_individual=\'\', $ativo=\'\') {' . PHP_EOL);
        fwrite($arquivo_config, '  /// FILTROS' . PHP_EOL);
        fwrite($arquivo_config, '  $nCampos = 0;' . PHP_EOL);
        fwrite($arquivo_config, '  $sql = \'\';' . PHP_EOL);
        fwrite($arquivo_config, '  $sqlOrdem = \'\';' . PHP_EOL);
        fwrite($arquivo_config, '  $sqlLimite = \'\';' . PHP_EOL);
        fwrite($arquivo_config, '  if(!empty($id)) {' . PHP_EOL);
        fwrite($arquivo_config, '    $sql .= " and id = ?";' . PHP_EOL);
        fwrite($arquivo_config, '    $nCampos++;' . PHP_EOL);
        fwrite($arquivo_config, '    $campo[$nCampos] = $id;' . PHP_EOL);
        fwrite($arquivo_config, '  }' . PHP_EOL);
        fwrite($arquivo_config, '  if(!empty($pagina_individual)) {' . PHP_EOL);
        fwrite($arquivo_config, '    $sql .= " and pagina_individual = ?";' . PHP_EOL);
        fwrite($arquivo_config, '    $nCampos++;' . PHP_EOL);
        fwrite($arquivo_config, '    $campo[$nCampos] = $pagina_individual;' . PHP_EOL);
        fwrite($arquivo_config, '  }' . PHP_EOL);
        fwrite($arquivo_config, '  if(!empty($ativo)) {' . PHP_EOL);
        fwrite($arquivo_config, '    $sql .= " and ativo = ?";' . PHP_EOL);
        fwrite($arquivo_config, '    $nCampos++;' . PHP_EOL);
        fwrite($arquivo_config, '    $campo[$nCampos] = $ativo;' . PHP_EOL);
        fwrite($arquivo_config, '  }' . PHP_EOL);
        fwrite($arquivo_config, '' . PHP_EOL);
        fwrite($arquivo_config, '  /// ORDEM' . PHP_EOL);
        fwrite($arquivo_config, '  if(!empty($orderBy)) {' . PHP_EOL);
        fwrite($arquivo_config, '    $sqlOrdem = " order by {$orderBy}";' . PHP_EOL);
        fwrite($arquivo_config, '  }' . PHP_EOL);
        fwrite($arquivo_config, '' . PHP_EOL);
        fwrite($arquivo_config, '  if(!empty($limite)) {' . PHP_EOL);
        fwrite($arquivo_config, '    $sqlLimite = " limit 0,{$limite}";' . PHP_EOL);
        fwrite($arquivo_config, '  }' . PHP_EOL);
        fwrite($arquivo_config, '' . PHP_EOL);
        fwrite($arquivo_config, '  try {' . PHP_EOL);
        fwrite($arquivo_config, '    $sql = "SELECT * FROM tbl_' . $tabelaName . ' where 1=1 $sql $sqlOrdem $sqlLimite";' . PHP_EOL);
        fwrite($arquivo_config, '    $stm = $this->pdo->prepare($sql);' . PHP_EOL);
        fwrite($arquivo_config, '' . PHP_EOL);
        fwrite($arquivo_config, '    for($i=1; $i<=$nCampos; $i++) {' . PHP_EOL);
        fwrite($arquivo_config, '      $stm->bindValue($i, $campo[$i]);' . PHP_EOL);
        fwrite($arquivo_config, '    }' . PHP_EOL);
        fwrite($arquivo_config, '' . PHP_EOL);
        fwrite($arquivo_config, '    $stm->execute();' . PHP_EOL);
        fwrite($arquivo_config, '    $rsDados = $stm->fetchAll(PDO::FETCH_OBJ);' . PHP_EOL);
        fwrite($arquivo_config, '' . PHP_EOL);
        fwrite($arquivo_config, '    if($id <> \'\' or $limite == 1 or $pagina_individual <> \'\') {' . PHP_EOL);
        fwrite($arquivo_config, '      if(isset($rsDados[0]) && !empty($rsDados[0])) {' . PHP_EOL);
        fwrite($arquivo_config, '        return($rsDados[0]);' . PHP_EOL);
        fwrite($arquivo_config, '      }' . PHP_EOL);
        fwrite($arquivo_config, '    } else {' . PHP_EOL);
        fwrite($arquivo_config, '      return($rsDados);' . PHP_EOL);
        fwrite($arquivo_config, '    }' . PHP_EOL);
        fwrite($arquivo_config, '  } catch(PDOException $erro) {' . PHP_EOL);
        fwrite($arquivo_config, '    echo $erro->getMessage();' . PHP_EOL);
        fwrite($arquivo_config, '  }' . PHP_EOL);
        fwrite($arquivo_config, '  }' . PHP_EOL);




        //add
        if ($desc == 'sim') {
            fwrite($arquivo_config, 'function add($redireciona=\'\') {' . PHP_EOL);
            fwrite($arquivo_config, '    if(isset($_POST[\'acao\']) && $_POST[\'acao\'] == \'add' . $className . '\') {' . PHP_EOL);
            foreach ($nomes_aleatorios as $nome_aleatorio) {
                $nome_variavel = substr($nome_aleatorio, 1);

                if (strpos($nome_variavel, 'img') !== false) {
                    continue;
                }
                $linha = $nome_aleatorio . ' = (isset($_POST[\'' . $nome_variavel . '\']) && !empty($_POST[\'' . $nome_variavel . '\'])) ? $_POST[\'' . $nome_variavel . '\'] : \'\' ;';
                $linha .= PHP_EOL;
                fwrite($arquivo_config, $linha);
            }
            $conteudo = '';
            foreach ($nomes_aleatorios as $valor) {
                if (strpos($valor, 'conteudo') !== false) {
                    $conteudo = $valor;
                    break;
                }
            }
            $linhaumemeio = "  if (isset(\$_POST['pagina_individual']) && !empty(\$_POST['pagina_individual'])) {";
            $linhaumemeio .= " \$pagina_individual = \$_POST['pagina_individual']; ";
            $linhaumemeio .= " } else { ";
            $linhaumemeio .= "  \$pagina_individual = gerarTituloSEO(" . $conteudo . ");";
            $linhaumemeio .= "  }";
            $linhaumemeio .= " \$maximo = 180000;";
            fwrite($arquivo_config, $linhaumemeio);
            foreach ($nomes_aleatorios as $nome_aleatorio) {
                $nome_variavel = substr($nome_aleatorio, 1);

                if (strpos($nome_variavel, 'img') !== false) {
                    fwrite($arquivo_config, 'if ($_FILES["' . $nome_variavel . '"]["size"] > $maximo) {');
                    fwrite($arquivo_config, PHP_EOL);
                    fwrite($arquivo_config, '    echo "Erro! O arquivo enviado por você ultrapassa o ";');
                    fwrite($arquivo_config, PHP_EOL);
                    fwrite($arquivo_config, '    $valorKb = $maximo / 1000;');
                    fwrite($arquivo_config, PHP_EOL);
                    fwrite($arquivo_config, '    $tamanhoFoto = $_FILES["' . $nome_variavel . '"]["size"] / 1000;');
                    fwrite($arquivo_config, PHP_EOL);
                    fwrite($arquivo_config, '    echo "<script>');
                    fwrite($arquivo_config, PHP_EOL);
                    fwrite($arquivo_config, '    alert(\'limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB\');');
                    fwrite($arquivo_config, PHP_EOL);
                    fwrite($arquivo_config, '    history.back();');
                    fwrite($arquivo_config, PHP_EOL);
                    fwrite($arquivo_config, '    </script>";');
                    fwrite($arquivo_config, PHP_EOL);
                    fwrite($arquivo_config, '    exit;');
                    fwrite($arquivo_config, PHP_EOL);
                    fwrite($arquivo_config, '}');
                    fwrite($arquivo_config, PHP_EOL);
                }
            }


            $linha2 = "    try { 
        if(file_exists('Connection/conexao.php')) {
            \$pastaArquivos = 'img';
        } else {
            \$pastaArquivos = '../img';
        }
    ";
            fwrite($arquivo_config, $linha2);
            $linha3 = "        \$sql = \"INSERT INTO tbl_" . $tabelaName . " (";
            foreach ($nomes_aleatorios as $nome_aleatorio) {
                $nome_variavel = substr($nome_aleatorio, 1);
                $coluna_tabela = $nome_variavel;
                $linha3 .= $coluna_tabela . ", ";
            }
            $linha3 = rtrim($linha3, ", ");
            $linha3 .= ",pagina_individual)";
            fwrite($arquivo_config, $linha3);
            $linha4 = " VALUES (";
            foreach ($nomes_aleatorios as $nome_aleatorio) {
                $linha4 .= " ?, ";
            }
            $linha4 = rtrim($linha4, ", ");
            $linha4 .= ",?)\";";
            fwrite($arquivo_config, $linha4);
            $contador = 1;
            fwrite($arquivo_config, '        $stm = $this->pdo->prepare($sql);' . PHP_EOL);
            // Bind das variáveis geradas aos placeholders
            foreach ($nomes_aleatorios as $nome_aleatorio) {
                $nome_variavel = substr($nome_aleatorio, 1);
                if (strpos($nome_variavel, 'img') !== false) {
                    fwrite($arquivo_config, '        $stm->bindValue(' . $contador . ', upload("' . $nome_variavel . '",$pastaArquivos, "N"));' . PHP_EOL);
                    $contador++;
                } else {
                    fwrite($arquivo_config, '        $stm->bindValue(' . $contador . ', ' . $nome_aleatorio . ');' . PHP_EOL);
                    $contador++;
                }
            }
            fwrite($arquivo_config, '        $stm->bindValue(' . $contador . ', $pagina_individual);' . PHP_EOL);
            // Execute a consulta SQL
            fwrite($arquivo_config, '        $stm->execute();' . PHP_EOL);
            fwrite($arquivo_config, '$idBanner = $this->pdo->lastInsertId();' . PHP_EOL);



            fwrite($arquivo_config, '    } catch(PDOException $erro){' . PHP_EOL);
            fwrite($arquivo_config, '        echo $erro->getMessage();' . PHP_EOL);
            fwrite($arquivo_config, '    }' . PHP_EOL);

            fwrite($arquivo_config, '  }' . PHP_EOL);
            fwrite($arquivo_config, '}' . PHP_EOL);
        }
        //editar
        if ($desc == 'sim') {
            fwrite($arquivo_config, 'function editar($redireciona=\'' . $tabelaName . '.php\') {' . PHP_EOL);
        } else {
            fwrite($arquivo_config, 'function editar($redireciona=\'editar-' . $tabelaName . '.php?pi=S&id=1\') {' . PHP_EOL);
        }
        fwrite($arquivo_config, '    if(isset($_POST[\'acao\']) && $_POST[\'acao\'] == \'edita' . $className . '\') {' . PHP_EOL);

        foreach ($nomes_aleatorios as $nome_aleatorio) {

            $nome_variavel = substr($nome_aleatorio, 1);
            if (strpos($nome_variavel, 'img') !== false) {
                continue;
            }
            $linha = $nome_aleatorio . ' = (isset($_POST[\'' . $nome_variavel . '\']) && !empty($_POST[\'' . $nome_variavel . '\'])) ? $_POST[\'' . $nome_variavel . '\'] : \'\' ;';
            $linha .= PHP_EOL;
            fwrite($arquivo_config, $linha);
        }
        $conteudo = '';
        foreach ($nomes_aleatorios as $valor) {
            if (strpos($valor, 'conteudo') !== false) {
                $conteudo = $valor;
                break;
            }
        }
        $linhaumemeio = " \$id = filter_input(INPUT_POST, 'id');
        ";
        $linhaumemeio .= "  if (isset(\$_POST['pagina_individual']) && !empty(\$_POST['pagina_individual'])) {";
        $linhaumemeio .= " \$pagina_individual = \$_POST['pagina_individual']; ";
        $linhaumemeio .= " } else { ";
        $linhaumemeio .= "  \$pagina_individual = gerarTituloSEO(" . $conteudo . ");";
        $linhaumemeio .= "  } ";
        $linhaumemeio .= "\$maximo = 180000;";
        fwrite($arquivo_config, $linhaumemeio);
        foreach ($nomes_aleatorios as $nome_aleatorio) {
            $nome_variavel = substr($nome_aleatorio, 1);

            if (strpos($nome_variavel, 'img') !== false) {
                fwrite($arquivo_config, 'if ($_FILES["' . $nome_variavel . '"]["size"] > $maximo) {');
                fwrite($arquivo_config, PHP_EOL);
                fwrite($arquivo_config, '    echo "Erro! O arquivo enviado por você ultrapassa o ";');
                fwrite($arquivo_config, PHP_EOL);
                fwrite($arquivo_config, '    $valorKb = $maximo / 1000;');
                fwrite($arquivo_config, PHP_EOL);
                fwrite($arquivo_config, '    $tamanhoFoto = $_FILES["' . $nome_variavel . '"]["size"] / 1000;');
                fwrite($arquivo_config, PHP_EOL);
                fwrite($arquivo_config, '    echo "<script>');
                fwrite($arquivo_config, PHP_EOL);
                fwrite($arquivo_config, '    alert(\'limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB\');');
                fwrite($arquivo_config, PHP_EOL);
                fwrite($arquivo_config, '    history.back();');
                fwrite($arquivo_config, PHP_EOL);
                fwrite($arquivo_config, '    </script>";');
                fwrite($arquivo_config, PHP_EOL);
                fwrite($arquivo_config, '    exit;');
                fwrite($arquivo_config, PHP_EOL);
                fwrite($arquivo_config, '}');
                fwrite($arquivo_config, PHP_EOL);
            }
        }
        $linha2 = "    try { 
        if(file_exists('Connection/conexao.php')) {
            \$pastaArquivos = 'img';
        } else {
            \$pastaArquivos = '../img';
        }
    ";
        fwrite($arquivo_config, $linha2);

        $linha3 = "        \$sql = \"UPDATE tbl_" . $tabelaName . " SET ";
        foreach ($nomes_aleatorios as $nome_aleatorio) {
            $nome_variavel = substr($nome_aleatorio, 1);
            // Defina os nomes das colunas da tabela correspondentes aos nomes aleatórios
            $coluna_tabela = $nome_variavel;

            // Adicione a coluna e o placeholder à string SQL
            $linha3 .= $coluna_tabela . "=?, ";
        }
        // Remova a vírgula extra no final da string SQL
        $linha3 = rtrim($linha3, ", ");

        // Adicione a condição WHERE com o placeholder do ID
        $linha3 .= ",pagina_individual=? WHERE id=?\";";
        fwrite($arquivo_config, $linha3);
        fwrite($arquivo_config, '        $stm = $this->pdo->prepare($sql);' . PHP_EOL);
        $contadorseq = 1;
        foreach ($nomes_aleatorios as $nome_aleatorio) {
            $nome_variavel = substr($nome_aleatorio, 1);
            if (strpos($nome_variavel, 'img') !== false) {
                fwrite($arquivo_config, '        $stm->bindValue(' . $contadorseq . ', upload("' . $nome_variavel . '",$pastaArquivos, "N"));' . PHP_EOL);
                $contadorseq++;
            } else {
                fwrite($arquivo_config, '        $stm->bindValue(' . $contadorseq . ', ' . $nome_aleatorio . ');' . PHP_EOL);
                $contadorseq++;
            }
        }
        fwrite($arquivo_config, '$stm->bindValue(' . $contadorseq . ', $pagina_individual);' . PHP_EOL);
        $contadorseq++;
        fwrite($arquivo_config, '$stm->bindValue(' . $contadorseq . ', $id);' . PHP_EOL);

        // Execute a consulta SQL
        fwrite($arquivo_config, '        $stm->execute();' . PHP_EOL);

        // Finalize o bloco try-catch
        fwrite($arquivo_config, '    } catch(PDOException $erro){' . PHP_EOL);
        fwrite($arquivo_config, '        echo $erro->getMessage();' . PHP_EOL);
        fwrite($arquivo_config, '    }' . PHP_EOL);

        fwrite($arquivo_config, '' . PHP_EOL);
        fwrite($arquivo_config, '// Trecho adicional' . PHP_EOL);
        fwrite($arquivo_config, 'if($pagina_individual == \'S\') {' . PHP_EOL);
        fwrite($arquivo_config, '  echo "  <script>' . PHP_EOL);
        fwrite($arquivo_config, '          alert(\'Modificado com sucesso!\');' . PHP_EOL);
        fwrite($arquivo_config, '          window.location=\'editar-' . $tabelaName . '.php?pi=S&id=$id\';' . PHP_EOL);
        fwrite($arquivo_config, '      </script>";' . PHP_EOL);
        fwrite($arquivo_config, '  exit;' . PHP_EOL);
        fwrite($arquivo_config, '} else {' . PHP_EOL);
        fwrite($arquivo_config, '  echo "  <script>' . PHP_EOL);
        fwrite($arquivo_config, '          window.location=\'{$redireciona}\';' . PHP_EOL);
        fwrite($arquivo_config, '      </script>";' . PHP_EOL);
        fwrite($arquivo_config, '  exit;' . PHP_EOL);
        fwrite($arquivo_config, '}' . PHP_EOL);

        fwrite($arquivo_config, '}' . PHP_EOL);

        // Feche a função
        fwrite($arquivo_config, '}' . PHP_EOL);
        // Função excluir
        fwrite($arquivo_config, 'function excluir() {' . PHP_EOL);
        fwrite($arquivo_config, '  if (isset($_GET[\'acao\']) && $_GET[\'acao\'] == \'excluir' . $className . '\') {' . PHP_EOL);
        fwrite($arquivo_config, '    try {' . PHP_EOL);
        fwrite($arquivo_config, '      $sql = "DELETE FROM tbl_' . $tabelaName . ' WHERE id=? ";' . PHP_EOL);
        fwrite($arquivo_config, '      $stm = $this->pdo->prepare($sql);' . PHP_EOL);
        fwrite($arquivo_config, '      $stm->bindValue(1, $_GET[\'id\']);' . PHP_EOL);
        fwrite($arquivo_config, '      $stm->execute();' . PHP_EOL);
        fwrite($arquivo_config, '    } catch (PDOException $erro) {' . PHP_EOL);
        fwrite($arquivo_config, '      echo $erro->getMessage();' . PHP_EOL);
        fwrite($arquivo_config, '    }' . PHP_EOL);
        fwrite($arquivo_config, '' . PHP_EOL);
        fwrite($arquivo_config, '    echo "  <script>' . PHP_EOL);
        fwrite($arquivo_config, '            window.location=\'' . $tabelaName . '.php\';' . PHP_EOL);
        fwrite($arquivo_config, '        </script>";' . PHP_EOL);
        fwrite($arquivo_config, '    exit;' . PHP_EOL);
        fwrite($arquivo_config, '  }' . PHP_EOL);
        fwrite($arquivo_config, '}' . PHP_EOL);
        fwrite($arquivo_config, '  }' . PHP_EOL);
        fwrite($arquivo_config, '}' . PHP_EOL);
        fwrite($arquivo_config, '?>' . PHP_EOL);
        fclose($arquivo_config);
        $verifica = './painel/verifica.php';
        $nomeClass = $tabelaName . '.class.php';
        $itemConcatenado = 'include "../Class/' . $nomeClass . '";' . PHP_EOL;
        $itemConcatenado .= '$' . $tabelaName . ' = ' . $className . '::getInstance(Conexao::getInstance());' . PHP_EOL;
        $arquivo = fopen($verifica, 'r');

        if ($arquivo) {
            $conteudo = fread($arquivo, filesize($verifica));
            $posicaoGetUrl = strpos($conteudo, 'function get_url()');
            if ($posicaoGetUrl !== false) {
                $parteAntesGetUrl = substr($conteudo, 0, $posicaoGetUrl);
                $parteDepoisGetUrl = substr($conteudo, $posicaoGetUrl);
                $conteudoModificado = $parteAntesGetUrl . $itemConcatenado . $parteDepoisGetUrl;
            } else {
                echo 'Função get_url() não encontrada no arquivo.';
                exit;
            }
            fclose($arquivo);
            $arquivo = fopen($verifica, 'w');

            if ($arquivo) {
                fwrite($arquivo, $conteudoModificado);
                fclose($arquivo);
                echo 'Item concatenado antes da função get_url() com sucesso!';
            } else {
                echo 'Erro ao abrir o arquivo para escrita.';
            }
        } else {
            echo 'Erro ao abrir o arquivo para leitura.';
        }

        echo "O arquivo de configuração do 'updateSobre' foi gerado como '$nome_arquivo_config'.";
    } else {
        echo "Não foi possível criar o arquivo de configuração.";
    }
    echo "O novo arquivo HTML foi gerado como '$nome_arquivo'.";

    if ($desc == 'sim') {
        $formularioAdd = gerarAddDinamico($nomes_aleatorios, $tabelaName, $dados_bd);
        file_put_contents($add, $formularioAdd);
        $formulariopainel = principal($tabelaName, $nomes_aleatorios);
        file_put_contents($painel, $formulariopainel);
    }

    $formularioEdit = gerarEditDinamico($nomes_aleatorios, $tabelaName, $dados_bd);
    file_put_contents($edit, $formularioEdit);

    $menuLateralFile = './painel/inc-menu-lateral.php';
    $menuLateralContent = file_get_contents($menuLateralFile);
    if ($desc == 'sim') {
        $itemAdicionado = '
        <li class="sidebar-item"> 
            <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                <i data-feather="file-text" class="feather-icon"></i>
                <span class="hide-menu">' . $className . '</span>
            </a>
            <ul aria-expanded="false" class="collapse first-level base-level-line">
                <li class="sidebar-item"><a href="' . $tabelaName . '.php" class="sidebar-link"><span class="hide-menu">
                    Listar ' . $className . '</span></a></li>
                <li class="sidebar-item"><a href="add-' . $tabelaName . '.php" class="sidebar-link"><span class="hide-menu">
                    Adicionar ' . $tabelaName . '</span></a></li>
            </ul>
        </li>
        ';
        $posição = strpos($menuLateralContent, $itemAdicionado);

        if ($posição !== false) {
            $menuLateralContentModificado = substr_replace($menuLateralContent, '', $posição, strlen($itemAdicionado));
            file_put_contents($menuLateralFile, $menuLateralContentModificado);
        }
    } else {
        $itemAdicionado = '
        <li class="sidebar-item"> <a class="sidebar-link" href="editar-' . $tabelaName . '.php?pi=S&id=1"> 
            <i data-feather="file-text" class="feather-icon"></i>' . $className . '</a>
        </li>
        ';
        $posição = strpos($menuLateralContent, $itemAdicionado);

        if ($posição !== false) {
            $menuLateralContentModificado = substr_replace($menuLateralContent, '', $posição, strlen($itemAdicionado));
            file_put_contents($menuLateralFile, $menuLateralContentModificado);
        }
    }



    if ($menuLateralContent !== false) {
        // Encontre a posição da tag <li id="aqui"
        $posicaoIdAqui = strpos($menuLateralContent, '<li id="aqui" class="sidebar-item">');

        if ($posicaoIdAqui !== false) {
            // Insira o conteúdo antes da posição encontrada
            $menuLateralContentModificado = substr_replace($menuLateralContent, $itemAdicionado, $posicaoIdAqui, 0);

            // Salve o conteúdo modificado de volta no arquivo
            if (file_put_contents($menuLateralFile, $menuLateralContentModificado) !== false) {
                echo 'Item adicionado com sucesso!';
            } else {
                echo 'Erro ao salvar o arquivo.';
            }
        } else {
            echo 'Tag "<li id="aqui">" não encontrada no arquivo.';
        }
    } else {
        echo 'Erro ao abrir o arquivo.';
    }
    gerarB($tabelaName, $nomes_aleatorios, $dados_bd);

}
function substituirConteudoPorPHP($tag, $tabelaName, $section)
{

    global $nomes_aleatorios, $contador_sequencia, $dados_bd;
    if (isset($tag->innertext)) {
        $conteudo = $tag->innertext;
    } else {
        $conteudo = "Texto";
    }
    if ($tag == 'alt') {
        $nome_aleatorio = $section . 'link_alt_' . $contador_sequencia;
        $nomes_aleatorios[] = $nome_aleatorio;
        $dados_bd[$nome_aleatorio] = $conteudo;
        $nome_variavel = substr($nome_aleatorio, 1);
        return '<?php echo $' . $tabelaName . '->' . $nome_variavel . ' ?>';
    } elseif ($tag == 'conteudo') {
        $nome_aleatorio = $section . 'link_conteudo_' . $contador_sequencia;
        $nomes_aleatorios[] = $nome_aleatorio;
        $dados_bd[$nome_aleatorio] = $conteudo;
        $nome_variavel = substr($nome_aleatorio, 1);
        return '<?php echo $' . $tabelaName . '->' . $nome_variavel . ' ?>';
    } elseif ($tag == 'img_alt') {
        $nome_aleatorio = $section . 'image_alt_' . $contador_sequencia;
        $nomes_aleatorios[] = $nome_aleatorio;
        $dados_bd[$nome_aleatorio] = $conteudo;
        $nome_variavel = substr($nome_aleatorio, 1);
        return '<?php echo $' . $tabelaName . '->' . $nome_variavel . ' ?>';
    } else {
        if ($tag->tag == 'a') {
            $nome_aleatorio = $section . 'link_' . $contador_sequencia;
            $nomes_aleatorios[] = $nome_aleatorio;
            $dados_bd[$nome_aleatorio] = $conteudo;
            $nome_variavel = substr($nome_aleatorio, 1);
            return '<?php echo $' . $tabelaName . '->' . $nome_variavel . ' ?>';
        } elseif ($tag->tag == 'img') {
            $pattern = '/^\.\/img\//';
            $newSrc = preg_replace($pattern, '', $tag->src);
            $nome_aleatorio = $section . 'img_' . $contador_sequencia;
            $nomes_aleatorios[] = $nome_aleatorio;
            $dados_bd[$nome_aleatorio] = $newSrc;
            $nome_variavel = substr($nome_aleatorio, 1);
            return '<?php echo $' . $tabelaName . '->' . $nome_variavel . ' ?>';
        } elseif ($tag->tag == 'button') {
            $nome_aleatorio = $section . 'button' . $contador_sequencia;
            $nomes_aleatorios[] = $nome_aleatorio;
            $dados_bd[$nome_aleatorio] = $conteudo;
            $nome_variavel = substr($nome_aleatorio, 1);
            return '<?php echo $' . $tabelaName . '->' . $nome_variavel . ' ?>';
        } elseif ($tag->tag == 'textarea') {
            $nome_aleatorio = $section . 'textarea_' . $contador_sequencia;
            $nomes_aleatorios[] = $nome_aleatorio;
            $dados_bd[$nome_aleatorio] = $conteudo;
            $nome_variavel = substr($nome_aleatorio, 1);
            return '<?php echo $' . $tabelaName . '->' . $nome_variavel . ' ?>';
        } else {
            $nome_aleatorio = $section . 'conteudo_' . $contador_sequencia;
            $nomes_aleatorios[] = $nome_aleatorio;
            $dados_bd[$nome_aleatorio] = $conteudo;
            $nome_variavel = substr($nome_aleatorio, 1);
            return '<?php echo $' . $tabelaName . '->' . $nome_variavel . ' ?>';
        }
    }
}
function substituirTagA($tag, $tabelaName, $section)
{
    $conteudo = $tag->innertext;
    $conteudoSemTags = strip_tags($conteudo);
    $conteudoSemTags = trim($conteudoSemTags);
    $classe_original = $tag->getAttribute('class');
    $classe_adicional = '';
    if (!empty($classe_original)) {
        $classe_adicional = $classe_original;
    }
    if (!empty($conteudoSemTags) && $conteudoSemTags !== '<i></i>') {
        $inicio_i = strpos($conteudo, '<i');
        $fim_i = strpos($conteudo, '</i>');
        $inicio_i += strlen('<i>');
        if ($fim_i !== false) {
            $parte_i = substr($conteudo, $inicio_i, $fim_i + $inicio_i);
            $href = substituirConteudoPorPHP($tag, $tabelaName, $section);
            $aria_label = substituirConteudoPorPHP('alt', $tabelaName, $section);
            $conteudo = substituirConteudoPorPHP('conteudo', $tabelaName, $section);
            return '<a href="' . $conteudo . '" aria-label="' . $aria_label . '" class="' . $classe_adicional . '"><i ' . $parte_i . $href . '</a>';
        } else {
            $href = substituirConteudoPorPHP($tag, $tabelaName, $section);
            $aria_label = substituirConteudoPorPHP('alt', $tabelaName, $section);
            $conteudo = substituirConteudoPorPHP('conteudo', $tabelaName, $section);
            return '<a href="' . $conteudo . '" aria-label="' . $aria_label . '" class="' . $classe_adicional . '">' . $href . '</a>';
        }
    } else {
        $href = substituirConteudoPorPHP($tag, $tabelaName, $section);
        $aria_label = substituirConteudoPorPHP('alt', $tabelaName, $section);
        return '<a href="' . $conteudo . '" aria-label="' . $aria_label . '" class="' . $classe_adicional . '">' . $href . '</a>';
    }
}

function substituirTagImg($tag, $tabelaName, $section)
{
    $img = substituirConteudoPorPHP($tag, $tabelaName, $section);
    $aria_label = substituirConteudoPorPHP('img_alt', $tabelaName, $section);
    $classe_original = $tag->getAttribute('class');
    $classe_adicional = '';
    if (!empty($classe_original)) {
        $classe_adicional = $classe_original;
    }

    return '<img src="<?php echo SITE_URL;?>/img/' . $img . '" alt="' . $aria_label . '" class="' . $classe_adicional . '">';
}

function removeComentariosHTML($html)
{
    return preg_replace('/<!--(.|\s)*?-->/', '', $html);
}
require_once('./Connection/con-pdo.php');

function gerarB($tabelaName, $nomes_aleatorios, $dados_bd)
{
    global $conn;

    try {
        $table_name = "tbl_" . $tabelaName;

        $sql_drop_table = "DROP TABLE IF EXISTS $table_name";
        $conn->exec($sql_drop_table);

        $sql_create_table = "CREATE TABLE IF NOT EXISTS $table_name (
            id INT(11) AUTO_INCREMENT PRIMARY KEY,
        ";

        foreach ($nomes_aleatorios as $nome_aleatorio) {
            $nome_variavel = substr($nome_aleatorio, 1);
            $sql_create_table .= "$nome_variavel TEXT, ";
        }
        $sql_create_table .= "pagina_individual TEXT";
        $sql_create_table .= ")";
        $conn->exec($sql_create_table);

        $sql_insert_data = "INSERT INTO $table_name (";
        $values = "";

        foreach ($dados_bd as $key => $value) {
            $nome_variavel = substr($key, 1);
            $sql_insert_data .= "$nome_variavel, ";
            $values .= "'$value', ";
        }

        $sql_insert_data = rtrim($sql_insert_data, ', ') . ") VALUES (" . rtrim($values, ', ') . ")";

        $conn->exec($sql_insert_data);

        echo "Tabela criada com sucesso e dados inseridos: $table_name<br>";
    } catch (PDOException $e) {
        echo "Erro: " . $e->getMessage() . "<br>";
        die();
    }
}


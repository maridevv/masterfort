<?php
include('pastas.php');

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["arquivos_selecionados"])) {

    $arquivos_selecionados = $_POST["arquivos_selecionados"];
    $arquivos_dropdown = $_POST["arquivos_dropdown"];
    require_once('./simple_html_dom.php');

    foreach ($arquivos_selecionados as $arquivo) {
        $valor_dropdown = $arquivos_dropdown[$arquivo];
        $content = file_get_contents('./linkagem/' . $arquivo);
        $dom = str_get_html($content);

        $body_element = $dom->find('body', 0);

        $arquivo = pathinfo($arquivo, PATHINFO_FILENAME);
        $arquivo = strtolower($arquivo);
        $arquivo = str_replace('-', '_', $arquivo);
        $foreachElements = $dom->find('foreach');
        gerarHtml($arquivo, $body_element, $valor_dropdown);
    }
    $dados = "Linkado";
    header("Location: painel/pastas.php?dados=$dados");
    exit;
} else {
    echo "<p>Nenhum arquivo foi selecionado.</p>";
}

<?php
include "../Class/acesso.class.php";
$verificaRestrito = Acesso::getInstance(Conexao::getInstance());
$usuarios = Acesso::getInstance(Conexao::getInstance());

include "../Class/config.class.php";
$infoSistema = ConfigSistema::getInstance(Conexao::getInstance())->rsDados();
$acessosSite = ConfigSistema::getInstance(Conexao::getInstance());

include "../Class/metasTags.class.php";
$metastags = MetasTags::getInstance(Conexao::getInstance());

include "../Class/menus.class.php";
$menus = Menus::getInstance(Conexao::getInstance());

include "../Class/testemunhos.class.php";
$testemunhos = Testemunhos::getInstance(Conexao::getInstance());

include "../Class/blogs.class.php";
$blogs = Blogs::getInstance(Conexao::getInstance());

$verificaRestrito->restritoAdmin();
$dadosUsuarioLogado = $verificaRestrito->rsDados($_SESSION['dadosLogado']->id);

include "../Class/contato.class.php";
$contato = Contato::getInstance(Conexao::getInstance());

include "../Class/blog.class.php";
$blog = Blog::getInstance(Conexao::getInstance());

include "../Class/produto.class.php";
$produto = Produto::getInstance(Conexao::getInstance());

include "../Class/produtos.class.php";
$produtos = Produtos::getInstance(Conexao::getInstance());

include "../Class/sobre.class.php";
$sobre = Sobre::getInstance(Conexao::getInstance());

include "../Class/home.class.php";
$home = Home::getInstance(Conexao::getInstance());

include "../Class/faqs.class.php";
$faqs = Faqs::getInstance(Conexao::getInstance());

include "../Class/sucesso.class.php";
$sucesso = Sucesso::getInstance(Conexao::getInstance());

include "../Class/cta.class.php";
$cta = Cta::getInstance(Conexao::getInstance());
function get_url()
{
  return $_SERVER['SCRIPT_NAME'] . $_SERVER['REQUEST_URI'];
}

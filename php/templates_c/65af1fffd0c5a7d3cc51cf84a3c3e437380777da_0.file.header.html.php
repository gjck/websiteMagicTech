<?php
/* Smarty version 3.1.30, created on 2016-09-26 10:40:33
  from "/Applications/MAMP/htdocs/MagicTech/html/header.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57e8df01e5cd78_90668738',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '65af1fffd0c5a7d3cc51cf84a3c3e437380777da' => 
    array (
      0 => '/Applications/MAMP/htdocs/MagicTech/html/header.html',
      1 => 1474879225,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../html/nav.html' => 1,
  ),
),false)) {
function content_57e8df01e5cd78_90668738 (Smarty_Internal_Template $_smarty_tpl) {
?>
<header>

  <section id="placementLogoHeader">
    <a href="../index.php"><img src="../ressources/logoMT.png" alt="logoMagicTech" id="logoMagicTechHeader"/></a>
    <h1 id="titreHeader"> MagicTech </h1>
    <h2 id="sousTitreHeader"> Nous faisons de vos envies une réalité </h2>
  </section>

  <?php $_smarty_tpl->_subTemplateRender("file:../html/nav.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

   
</header>
<?php }
}

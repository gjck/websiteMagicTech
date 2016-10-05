<?php
/* Smarty version 3.1.30, created on 2016-10-05 09:50:24
  from "/Applications/MAMP/htdocs/MagicTech/html/header.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57f4b0c01bca13_32551832',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '65af1fffd0c5a7d3cc51cf84a3c3e437380777da' => 
    array (
      0 => '/Applications/MAMP/htdocs/MagicTech/html/header.html',
      1 => 1475653818,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../html/nav.html' => 1,
  ),
),false)) {
function content_57f4b0c01bca13_32551832 (Smarty_Internal_Template $_smarty_tpl) {
?>
<header>
  <?php echo '<script'; ?>
 type="text/javascript" src="../js/header.js"><?php echo '</script'; ?>
>

  <div class="alignementGauche">
    <section id="placementLogoHeader">
      <a href="../index.php"><div class="flexGauche"><img src="../ressources/logoMT.png" alt="logoMagicTech" id="logoMagicTechHeader"/><h1 id="titreHeader"> MagicTech </h1><span class="valign"></span></div></a>
    </section>
  </div>

  <div class="alignementDroite">
    <?php $_smarty_tpl->_subTemplateRender("file:../html/nav.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  </div>
</header>
<?php }
}

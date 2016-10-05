<?php
/* Smarty version 3.1.30, created on 2016-10-05 08:14:18
  from "/Applications/MAMP/htdocs/MagicTech/html/header.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57f49a3a962f15_12498226',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '65af1fffd0c5a7d3cc51cf84a3c3e437380777da' => 
    array (
      0 => '/Applications/MAMP/htdocs/MagicTech/html/header.html',
      1 => 1475648054,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../html/nav.html' => 1,
  ),
),false)) {
function content_57f49a3a962f15_12498226 (Smarty_Internal_Template $_smarty_tpl) {
?>
<header>
  <?php echo '<script'; ?>
 type="text/javascript" src="../js/header.js"><?php echo '</script'; ?>
>

  <div class="alignementGauche">
    <section id="placementLogoHeader">
      <a href="../index.php"><div class="flex"><img src="../ressources/logoMT.png" alt="logoMagicTech" id="logoMagicTechHeader"/><span class="valign"></span></div></a>
      <h1 id="titreHeader"> MagicTech </h1>
      <h2 id="sousTitreHeader"> Nous faisons de vos envies une réalité </h2>
    </section>
  </div>

  <div class="alignementDroite">
    <?php $_smarty_tpl->_subTemplateRender("file:../html/nav.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  </div>
</header>
<?php }
}

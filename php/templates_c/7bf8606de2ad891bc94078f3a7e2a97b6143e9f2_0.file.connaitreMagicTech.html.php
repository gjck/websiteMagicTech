<?php
/* Smarty version 3.1.30, created on 2016-09-22 11:11:45
  from "/Applications/MAMP/htdocs/MagicTech/html/connaitreMagicTech.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57e3a05156ca53_40256208',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7bf8606de2ad891bc94078f3a7e2a97b6143e9f2' => 
    array (
      0 => '/Applications/MAMP/htdocs/MagicTech/html/connaitreMagicTech.html',
      1 => 1474535504,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../html/header.html' => 1,
    'file:../html/nav.html' => 1,
    'file:../html/footer.html' => 1,
  ),
),false)) {
function content_57e3a05156ca53_40256208 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
  <head>
    <title> Magic Tech : Nous connaître </title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/style.css" />
  </head>

  <body>

<?php $_smarty_tpl->_subTemplateRender("file:../html/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<!--
  <header>
    <div class="backgroundPages">
      <video autoplay id="video-fond">
        <source type="video/mp4" src="../ressources/video-bg3.mp4" media="(orientation: landscape)">
      </video>
    </div>

    <?php $_smarty_tpl->_subTemplateRender("file:../html/nav.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  </header>
-->

    <section id="milieuAccueil">
      <img src="../ressources/logoMT.png" alt="logoMagicTech" id="logoMagicTech"/>
      <h1 id="titreAccueil"> MagicTech </h1>
      <h2 id="sousTitreAccueil"> Nous faisons de vos envies une réalité </h2>
    </section>

    <?php $_smarty_tpl->_subTemplateRender("file:../html/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


  </body>
</html>
<?php }
}

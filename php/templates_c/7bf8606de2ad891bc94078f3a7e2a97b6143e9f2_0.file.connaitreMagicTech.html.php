<?php
/* Smarty version 3.1.30, created on 2016-09-26 10:39:35
  from "/Applications/MAMP/htdocs/MagicTech/html/connaitreMagicTech.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57e8dec7e3e5a6_34753830',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7bf8606de2ad891bc94078f3a7e2a97b6143e9f2' => 
    array (
      0 => '/Applications/MAMP/htdocs/MagicTech/html/connaitreMagicTech.html',
      1 => 1474879168,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../html/header.html' => 1,
    'file:../html/footer.html' => 1,
  ),
),false)) {
function content_57e8dec7e3e5a6_34753830 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
  <head>
    <title> Magic Tech : Nous connaître </title>
    <meta charset="utf-8">
    <link href="../css/global.css" rel="stylesheet" type="text/css" media="all">
    <link href="../css/connaitreMagicTech.css" rel="stylesheet" type="text/css" media="all">
  </head>

  <body>

    <?php $_smarty_tpl->_subTemplateRender("file:../html/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <section class="sectionCentreeBornee">

    </section>

  <?php $_smarty_tpl->_subTemplateRender("file:../html/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


  <div class="backgroundBorne">
    <video autoplay id="video-fond">
      <source type="video/mp4" src="../ressources/video-bg4.mp4" media="(orientation: landscape)">
    </video>
  </div>

  </body>
</html>
<?php }
}

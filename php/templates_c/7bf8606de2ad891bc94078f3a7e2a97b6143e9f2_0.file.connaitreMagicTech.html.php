<?php
/* Smarty version 3.1.30, created on 2016-10-04 18:15:25
  from "/Applications/MAMP/htdocs/MagicTech/html/connaitreMagicTech.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57f3d59d46ab84_07550204',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7bf8606de2ad891bc94078f3a7e2a97b6143e9f2' => 
    array (
      0 => '/Applications/MAMP/htdocs/MagicTech/html/connaitreMagicTech.html',
      1 => 1475597694,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../html/header.html' => 1,
    'file:../html/footer.html' => 1,
  ),
),false)) {
function content_57f3d59d46ab84_07550204 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
  <head>
    <title> Magic Tech : Nous connaître </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, maximum-scale=1.0, minimum-scale=1.0 initial-scale=1.0" />
    <link href="../css/global.css" rel="stylesheet" type="text/css" media="all">
    <link href="../css/connaitreMagicTech.css" rel="stylesheet" type="text/css" media="all">
  </head>

  <body>
    <?php echo '<script'; ?>
 src="../libraries/jquery.js"><?php echo '</script'; ?>
>
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

<?php
/* Smarty version 3.1.30, created on 2016-09-26 14:14:37
  from "/Applications/MAMP/htdocs/MagicTech/html/projetsMagicTech.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57e9112d500a30_90080526',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1ab16c17e3c26e0c9692d3798ca136099c0f8783' => 
    array (
      0 => '/Applications/MAMP/htdocs/MagicTech/html/projetsMagicTech.html',
      1 => 1474892075,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../html/header.html' => 1,
    'file:../html/footer.html' => 1,
  ),
),false)) {
function content_57e9112d500a30_90080526 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
  <head>
    <title> Magic Tech : Nos projets </title>
    <meta charset="utf-8">
    <link href="../css/global.css" rel="stylesheet" type="text/css" media="all">
    <link href="../css/projetsMagicTech.css" rel="stylesheet" type="text/css" media="all">
  </head>

  <body>
      <?php echo '<script'; ?>
 type="text/javascript" src="../libraries/jquery.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 type="text/javascript" src="../js/projetsMagicTech.js"><?php echo '</script'; ?>
>

    <div class="backgroundBorne">
      <video autoplay id="video-fond">
        <source type="video/mp4" src="../ressources/video-bg4.mp4" media="(orientation: landscape)">
      </video>
    </div>

    <?php $_smarty_tpl->_subTemplateRender("file:../html/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <section id="centrageSlider">
      <div id="slider">
        <a href="#" class="control_next">></a>
        <a href="#" class="control_prev"><</a>
          <ul>
            <li>SLIDE 1</li>
            <li style="background: #aaa;">SLIDE 2</li>
            <li>SLIDE 3</li>
            <li style="background: #aaa;">SLIDE 4</li>
          </ul>
      </div>
    </section>

    <section class="projet">
      <p> Projet 1 </p>
    </section>

    <!--
    <?php $_smarty_tpl->_subTemplateRender("file:../html/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  -->
  </body>
</html>
<?php }
}

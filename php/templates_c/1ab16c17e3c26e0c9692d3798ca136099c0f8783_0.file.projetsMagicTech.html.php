<?php
/* Smarty version 3.1.30, created on 2016-09-26 17:56:21
  from "/Applications/MAMP/htdocs/MagicTech/html/projetsMagicTech.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57e94525092b85_06385823',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1ab16c17e3c26e0c9692d3798ca136099c0f8783' => 
    array (
      0 => '/Applications/MAMP/htdocs/MagicTech/html/projetsMagicTech.html',
      1 => 1474905376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../html/header.html' => 1,
    'file:../html/footer.html' => 1,
  ),
),false)) {
function content_57e94525092b85_06385823 (Smarty_Internal_Template $_smarty_tpl) {
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


    <div class="middleBody">
      <section id="centrageSlider">
        <div id="slider">
          <a href="#" class="control_next">></a>
          <a href="#" class="control_prev"><</a>
            <ul>
              <li><a href="#projet1"><img src="../ressources/img/balance.jpg" alt="Système de reconnaissance RFID de MagicTech" /></a></li>
              <li><a href="#projet2"><img src="../ressources/img/piano.jpg" alt="Piano jouant seul de MagicTech" /></a></li>
              <li><a href="#projet3"><img src="../ressources/img/miroir.jpg" alt="Miroir effrayant de MagicTech" /></a></li>
            </ul>
        </div>
      </section>

      <section class="projet">
        <article id="projet1">
          <p> Projet 1 </p>
          <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
              non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
          <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in Ben Beau Goss reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
              non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
        </article>
        <article id="projet2">
          <p> Projet 2 </p>
          <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
              non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
          <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in Ben Beau Goss reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
              non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
        </article>
        <article id="projet3">
          <p> Projet 3 </p>
          <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
              non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
          <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in Ben Beau Goss reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
              non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>            
        </article>
      </section>
    </div>

    <?php $_smarty_tpl->_subTemplateRender("file:../html/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


  </body>
</html>
<?php }
}

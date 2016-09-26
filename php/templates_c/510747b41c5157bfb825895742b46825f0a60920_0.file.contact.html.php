<?php
/* Smarty version 3.1.30, created on 2016-09-26 17:06:57
  from "/Applications/MAMP/htdocs/MagicTech/html/contact.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57e93991d67234_76337767',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '510747b41c5157bfb825895742b46825f0a60920' => 
    array (
      0 => '/Applications/MAMP/htdocs/MagicTech/html/contact.html',
      1 => 1474902285,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../html/header.html' => 1,
    'file:../html/footer.html' => 1,
  ),
),false)) {
function content_57e93991d67234_76337767 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
  <head>
    <title> Magic Tech : Contacts </title>
    <meta charset="utf-8">
    <link href="../css/global.css" rel="stylesheet" type="text/css" media="all">
    <link href="../css/contact.css" rel="stylesheet" type="text/css" media="all">
  </head>

  <body>
      <?php echo '<script'; ?>
 type="text/javascript" src="../libraries/jquery.js"><?php echo '</script'; ?>
>

    <div class="backgroundBorne">
      <video autoplay id="video-fond">
        <source type="video/mp4" src="../ressources/video-bg4.mp4" media="(orientation: landscape)">
      </video>
    </div>

    <?php $_smarty_tpl->_subTemplateRender("file:../html/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <div class="middleBody">
      <section id="gauche">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2783.1946690607133!2d4.835523215732256!3d45.76728877910576!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f4eaf90cc26bfb%3A0x8ceea9600698de03!2s4+Quai+Jean+Moulin%2C+69001+Lyon!5e0!3m2!1sfr!2sfr!4v1474901883698" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
      </section>
      <section id="droite">
        <h1> Contact </h1>
        <h2> Magic Tech </h2>
        <p> 4 Quai Jean Moulin <br> 69001 LYON </p>
        <a href="mailto:contact@magictechfrance.com"> contact@magictechfrance.com </a>
      </section>
    </div>

    <?php $_smarty_tpl->_subTemplateRender("file:../html/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


  </body>
</html>
<?php }
}

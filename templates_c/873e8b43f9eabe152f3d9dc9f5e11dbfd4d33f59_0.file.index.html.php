<?php
/* Smarty version 3.1.30, created on 2016-09-22 10:37:43
  from "/Applications/MAMP/htdocs/MagicTech/html/index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57e398578e64b3_70740465',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '873e8b43f9eabe152f3d9dc9f5e11dbfd4d33f59' => 
    array (
      0 => '/Applications/MAMP/htdocs/MagicTech/html/index.html',
      1 => 1474532810,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:html/nav.html' => 1,
    'file:html/footer.html' => 1,
  ),
),false)) {
function content_57e398578e64b3_70740465 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
  <head>
    <title> Magic Tech </title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css" />
  </head>

  <body>
  <?php echo '<script'; ?>
 src="libraries/jquery.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
>
    $(function()
      {
        $('#titreAccueil').hide(1);
        $('#logoMagicTech').hide(1);
        $('#sousTitreAccueil').hide(1);
        $('#logoMagicTech').fadeIn(1500,function showTitre(){
          $('#titreAccueil').fadeIn(1500,function showSousTitre(){
            $('#sousTitreAccueil').fadeIn(1500);
            });
          });
      });
  <?php echo '</script'; ?>
>

    <div class="background">
      <video autoplay id="video-fond">
        <source type="video/mp4" src="ressources/video-bg3.mp4" media="(orientation: landscape)">
      </video>
    </div>

    <?php $_smarty_tpl->_subTemplateRender("file:html/nav.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <section id="milieuAccueil">
      <img src="ressources/logoMT.png" alt="logoMagicTech" id="logoMagicTech"/>
      <h1 id="titreAccueil"> MagicTech </h1>
      <h2 id="sousTitreAccueil"> Nous faisons de vos envies une réalité </h2>
    </section>

    <?php $_smarty_tpl->_subTemplateRender("file:html/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


  </body>
</html>
<?php }
}

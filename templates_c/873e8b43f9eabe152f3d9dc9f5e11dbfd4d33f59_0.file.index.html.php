<?php
/* Smarty version 3.1.30, created on 2016-09-23 09:33:52
  from "/Applications/MAMP/htdocs/MagicTech/html/index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57e4dae0e9a077_24114172',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '873e8b43f9eabe152f3d9dc9f5e11dbfd4d33f59' => 
    array (
      0 => '/Applications/MAMP/htdocs/MagicTech/html/index.html',
      1 => 1474616021,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57e4dae0e9a077_24114172 (Smarty_Internal_Template $_smarty_tpl) {
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
        <source type="video/mp4" src="ressources/video-bg4.mp4" media="(orientation: landscape)">
      </video>
    </div>

    <nav>
      <ul>
        <li><a href="php/connaitreMagicTech.php">Nous connaître</a></li>
        <li><a href="php/projetsMagicTech.php">Nos projets</a></li>
        <li><a href="html/devis.html">Devis</a></li>
        <li><a href="html/contact.html">Contact</a></li>
      <ul>
    </nav>


    <section id="milieuAccueil">
      <img src="ressources/logoMT.png" alt="logoMagicTech" id="logoMagicTech"/>
      <h1 id="titreAccueil"> MagicTech </h1>
      <h2 id="sousTitreAccueil"> Nous faisons de vos envies une réalité </h2>
    </section>

    <footer id="footerAccueil">
      <ul>
        <li> <a href="html/mentionsLegales.html"> Mentions légales </a> </li>
        <li> <a href="html/cgvMagicTech.html">Conditions générales de vente </a> </li>
        <li> <a href="html/cguMagicTech.html">Conditions générales d'utilisation </a> </li>
        <li> <a href="html/politiqueConfidentialitéMagicTech.html">Politique de confidentialité</a> </li>
        <li> <a href="html/planDuSite.html"> Plan du site </a> </li>
      </ul>
    </footer>

  </body>
</html>
<?php }
}
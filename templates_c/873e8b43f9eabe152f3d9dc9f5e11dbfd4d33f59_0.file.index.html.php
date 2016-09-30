<?php
/* Smarty version 3.1.30, created on 2016-09-30 11:22:17
  from "/Applications/MAMP/htdocs/MagicTech/html/index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57ee2ec931d388_54987680',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '873e8b43f9eabe152f3d9dc9f5e11dbfd4d33f59' => 
    array (
      0 => '/Applications/MAMP/htdocs/MagicTech/html/index.html',
      1 => 1475227321,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57ee2ec931d388_54987680 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
  <head>
    <title> Magic Tech </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, maximum-scale=1.0, minimum-scale=1.0 initial-scale=1.0" />
    <link href="css/global.css" rel="stylesheet" type="text/css" media="all">
    <link href="css/index.css" rel="stylesheet" type="text/css" media="all">
  </head>

  <body>
  <?php echo '<script'; ?>
 src="libraries/jquery.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="js/index.js"><?php echo '</script'; ?>
>

    <div id="backgroundAccueil">
      <video autoplay id="video-fond">
        <source type="video/mp4" src="ressources/video-bg4.mp4" media="(orientation: landscape)">
      </video>
    </div>

    <nav id="navAccueil">
      <ul class="navigation">
        <li class="sousMenu"><span>Menu</span>
          <ul class="menu">
            <li><a href="php/connaitreMagicTech.php">Nous connaître</a></li>
            <li><a href="php/projetsMagicTech.php">Nos projets</a></li>
            <li><a href="php/devis.php">Devis</a></li>
            <li><a href="php/contact.php">Contact</a></li>
          </ul>
        </li>
      </ul>
    </nav>

    <section id="milieuAccueil">
      <img src="ressources/logoMT.png" alt="logoMagicTech" id="logoMagicTech"/>
      <h1 id="titreAccueil"> MagicTech </h1>
      <h2 id="sousTitreAccueil"> Nous faisons de vos envies une réalité </h2>
    </section>

    <footer id="footerAccueil">
    <ul class="navigationFooter">
        <li class="sousMenuFooter"><span>Informations légales</span>
          <ul class="menuFooter">
            <li> <a href="html/mentionsLegales.html"> Mentions légales </a> </li>
            <li> <a href="html/cgvMagicTech.html">Conditions générales de vente </a> </li>
            <li> <a href="html/cguMagicTech.html">Conditions générales d'utilisation </a> </li>
            <li> <a href="html/politiqueConfidentialitéMagicTech.html">Politique de confidentialité</a> </li>
            <li> <a href="html/planDuSite.html"> Plan du site </a> </li>
          </ul>
        </li>
    </ul>
    </footer>

  <div class="hidden">Icons made by <a href="http://www.flaticon.com/authors/robin-kylander" title="Robin Kylander">Robin Kylander</a> from <a href="http://www.flaticon.com" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
  </body>
</html>
<?php }
}

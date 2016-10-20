<?php
/* Smarty version 3.1.30, created on 2016-10-20 15:29:43
  from "/Applications/MAMP/htdocs/MagicTech/html/header.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5808c6c7de6430_89144734',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '65af1fffd0c5a7d3cc51cf84a3c3e437380777da' => 
    array (
      0 => '/Applications/MAMP/htdocs/MagicTech/html/header.html',
      1 => 1476969246,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5808c6c7de6430_89144734 (Smarty_Internal_Template $_smarty_tpl) {
?>
<header>
  <?php echo '<script'; ?>
 type="text/javascript" src="../js/header.js"><?php echo '</script'; ?>
>

  <div class="alignementGauche">
    <!--<div id="placementLogoHeader">-->
      <a href="../index.php"><div class="flexGauche"><img src="ressources/logoMT.png" alt="logoMagicTech" id="logoMagicTechHeader"/><h1 id="titreHeader"> MagicTech </h1><span class="valign"></span></div></a>
      <!--<div class="flexGauche"><h1 id="titreHeader">MagicTech</h1><span class="valign"></span></div>-->
    <!--</div>-->
  </div>

  <div class="alignementDroite">
    <ul class="menuNavigation">
      <li><a href="php/connaitreMagicTech.php">Nous connaître</a></li>
      <li><a href="php/projetsMagicTech.php">Nos projets</a></li>
      <li><a href="php/devis.php">Devis</a></li>
      <li><a href="#contact">Contact</a></li>
    </ul>
  </div>
</header>
<?php }
}

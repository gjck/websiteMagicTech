<?php
/* Smarty version 3.1.30, created on 2016-09-22 11:19:29
  from "/Applications/MAMP/htdocs/MagicTech/html/header.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57e3a2215fc121_53654780',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '65af1fffd0c5a7d3cc51cf84a3c3e437380777da' => 
    array (
      0 => '/Applications/MAMP/htdocs/MagicTech/html/header.html',
      1 => 1474535661,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../html/nav.html' => 1,
  ),
),false)) {
function content_57e3a2215fc121_53654780 (Smarty_Internal_Template $_smarty_tpl) {
?>
<header>
  <div class="backgroundPages">
    <video autoplay id="video-fond">
      <source type="video/mp4" src="../ressources/video-bg3.mp4" media="(orientation: landscape)">
    </video>
  </div>

  <?php $_smarty_tpl->_subTemplateRender("file:../html/nav.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


  <section id="placementLogoHeader">
    <img src="../ressources/logoMT.png" alt="logoMagicTech" id="logoMagicTechHeader"/>
    <h1 id="titreHeader"> MagicTech </h1>
    <h2 id="sousTitreHeader"> Nous faisons de vos envies une réalité </h2>
  </section>
</header>
<?php }
}

<?php
/* Smarty version 3.1.30, created on 2016-09-26 17:46:51
  from "/Applications/MAMP/htdocs/MagicTech/html/devis.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57e942ebb10850_78752444',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5c77748c553f0b73b0904797ce90873cb0320322' => 
    array (
      0 => '/Applications/MAMP/htdocs/MagicTech/html/devis.html',
      1 => 1474904785,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../html/header.html' => 1,
    'file:../html/footer.html' => 1,
  ),
),false)) {
function content_57e942ebb10850_78752444 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
  <head>
    <title> Magic Tech : Demandez un devis</title>
    <meta charset="utf-8">
    <link href="../css/global.css" rel="stylesheet" type="text/css" media="all">
    <link href="../css/devis.css" rel="stylesheet" type="text/css" media="all">
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
      <div id="formulaireDevis">
        <h1> Demander un devis </h1>
          <form action="demandeDevis.php" method="post">
            <p> Civilité : </p>
            <select name="genre">
                <option value="M.">M.</option>
                <option value="Mme." selected>Mme.</option>
                <option value="Mlle.">Mlle.</option>
            </select><br>
            <p> NOM : </p>
            <input type="text" name="NOM" placeholder="Nom"><br>
            <p> Prénom : </p>
            <input type="text" name="Prénom" placeholder="Prénom"><br>
            <p> Sujet : </p>
            <input type="text" name="Sujet" placeholder="Descriptif en trois mots"><br>
            <p> Détails sur la demande : </p>
            <textarea name="descriptif" id="descriptif">Descriptif plus complet de votre demande</textarea><br>
            <input type="submit" value="Envoyer ma demande" id="submit">
          </form>
      </div>
    </div>

    <?php $_smarty_tpl->_subTemplateRender("file:../html/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


  </body>
</html>
<?php }
}

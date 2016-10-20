<?php
/* Smarty version 3.1.30, created on 2016-10-20 16:34:48
  from "/Applications/MAMP/htdocs/MagicTech/html/index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5808d608582804_91375733',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '873e8b43f9eabe152f3d9dc9f5e11dbfd4d33f59' => 
    array (
      0 => '/Applications/MAMP/htdocs/MagicTech/html/index.html',
      1 => 1476974086,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:html/header.html' => 1,
    'file:../html/footer.html' => 1,
  ),
),false)) {
function content_5808d608582804_91375733 (Smarty_Internal_Template $_smarty_tpl) {
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

  <div class="container">
    <div id="menuComplet">
      <?php $_smarty_tpl->_subTemplateRender("file:html/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    </div>

    <div id="containerSection">
      <section>
        <div id="debut" class="ancres"></div>
        <div class="imgBackground">
          <div id="milieuAccueil">
            <img src="ressources/logoMT.png" alt="logoMagicTech" id="logoMagicTech"/>
            <p id="titreAccueil"> MagicTech </p>
            <p id="sousTitreAccueil"> De l'innovation à la magie</p>
          </div>
        </div>
      </section>

      <section>
        <div id="contact" class="ancres"></div>
        <div class="titreSection"><h2> Contactez-nous </h2></div>
        <div id="formulaireDevis">
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
      </section>

      <section>
        <div id="localisation" class="ancres"></div>
        <div class="titreSection"><h2> Informations pratiques</h2></div>
        <div id="carte">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2783.1946690607133!2d4.835523215732256!3d45.76728877910576!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f4eaf90cc26bfb%3A0x8ceea9600698de03!2s4+Quai+Jean+Moulin%2C+69001+Lyon!5e0!3m2!1sfr!2sfr!4v1474901883698" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <div id="adresse">
          <h3> Magic Tech </h3>
          <p> 4 Quai Jean Moulin <br> 69001 LYON </p>
          <a href="mailto:contact@magictechfrance.com"> contact@magictechfrance.com </a>
        </div>
      </section>

      <?php $_smarty_tpl->_subTemplateRender("file:../html/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    </div>
  </div>

  </body>
</html>
<?php }
}

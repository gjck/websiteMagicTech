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

    //Menu
    $(".navigation ul.menu").hide();

    $(".navigation li.sousMenu span").each( function () {
        $(this).replaceWith('<a href="" title="Afficher le sous-menu">' + $(this).text() + '<\/a>') ;
    } ) ;

    $(".navigation li.sousMenu > a").click( function () {
        // Si le sous-menu était déjà ouvert, on le referme :
        if ($(this).next("ul.menu:visible").length != 0) {
            $(this).next("ul.menu").slideUp("normal");
        }
        // Si le sous-menu est caché, on ferme les autres et on l'affiche :
        else {
            $(".navigation ul.menu").slideUp("normal");
            $(this).next("ul.menu").slideDown("normal");
        }
        // On empêche le navigateur de suivre le lien :
        return false;
    });
});

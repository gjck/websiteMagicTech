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
        $(this).replaceWith('<div class="placementIconeMenu"><div class="flex"><a href="" title="Afficher le sous-menu"><img src="ressources/img/iconMenu.svg" alt="Icone Menu"/><span id="titreMenu">' + $(this).text() + '</span></a><span class="valign"></span></div></div>') ;
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

    //Footer
    $(".navigationFooter ul.menuFooter").hide();

    $(".navigationFooter li.sousMenuFooter span").each( function () {
        $(this).replaceWith('<a href="" title="Afficher le sous-menu" id="titreFooter">' + $(this).text() + '<\/a>') ;
    } ) ;

    $(".navigationFooter li.sousMenuFooter > a").click( function () {
        // Si le sous-menu était déjà ouvert, on le referme :
        if ($(this).next("ul.menuFooter:visible").length != 0) {
            $(this).next("ul.menuFooter").slideUp("normal");
        }
        // Si le sous-menu est caché, on ferme les autres et on l'affiche :
        else {
            $(".navigationFooter ul.menuFooter").slideUp("normal");
            $(this).next("ul.menuFooter").slideDown("normal");
        }
        // On empêche le navigateur de suivre le lien :
        return false;
    });
});

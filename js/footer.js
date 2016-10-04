$(function()
  {
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

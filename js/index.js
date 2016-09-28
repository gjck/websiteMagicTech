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

$(document).ready(function(){
  $('#soumission').click(function(){
    var retour = true;
    if($('#pseudo').val()==''){
      $('#pseudo').css('border-color', 'red');
      $('.erreurpseudo').html('<i>Merci de saisir votre pseudo.</i>');
      retour = false;
    }
    return retour; 
  }); 
}); 

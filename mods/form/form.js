(function( $ ){
	
  var $body;

  $(document).ready(function(){
    $body = $('body');

    $body
      .find('#tel').each(function(){
          $(this).mask("+38 (999) 999-99-99", {autoсlear: true});
      });

    $body.on('keyup','#tel',function(){
      var phone = $(this),
          phoneVal = phone.val(),
          form = $(this).parents('form');

    });

  });

})( jQuery );
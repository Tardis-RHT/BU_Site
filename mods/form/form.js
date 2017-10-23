// (function( $ ){
	
//   var $body;

//   $(document).ready(function(){
//     $body = $('body');

//     $body
//       .find('#tel').each(function(){
//           $(this).mask("+38 (999) 999-99-99", {autoсlear: true});
//       });

//     $body.on('keyup','#tel',function(){
//       var phone = $(this),
//           phoneVal = phone.val(),
//           form = $(this).parents('form');

//     });

//   });

// })( jQuery );

$(document).ready(function($){
  if($("#tel").length>0){
		$("#tel").mask("+380 (99) 999 - 99 - 99");
}
  $('.close-btn').click(function(event){
    event.preventDefault();
    $(".form-thankyou").hide(250,'swing');
  })
  $('#mainForm').submit(function(){
      var str = $(this).serialize();
      console.log(str);
      $.ajax({
          type:"POST",
          data:"str",
          error: function( xhr,err ) {
              console.log( 'Sample of error data:', err );
              console.log("readyState: "+xhr.readyState+"\nstatus: "+xhr.status+"\nresponseText: "+xhr.responseText);
          },
          success: function(data, textStatus, jqXHR){
          if (jqXHR.status == 200){
            $("#mainForm").trigger('reset');
            $(".form-thankyou").show(250,'swing');
          }
              
              // if (console && console.log) {
              //     console.log( 'Sample of data:', data.slice(0,100) );
              //     console.log('textStatus: ', textStatus);
              //     console.log('jqXHR: ', jqXHR);
              //     console.log('statusText: ', jqXHR.statusText);
              // }
          }            
      });
      return false;
  });
});

// function replaceValidationUI(form) {
//   // Suppress the default bubbles
//   form.addEventListener("invalid", function(event) {
//     event.preventDefault();
//   }, true);

//   // Support Safari, iOS Safari, and the Android browser—each of which do not prevent
//   // form submissions by default
//   form.addEventListener("submit", function(event) {
//     if (!this.checkValidity()) {
//       event.preventDefault();
//     }
//   });

//   var submitButton = form.querySelector("button:not([type=button]), input[type=submit]");
//   submitButton.addEventListener("click", function(event) {
//     var invalidFields = form.querySelectorAll(":invalid"),
//       errorMessages = form.querySelectorAll(".error-message"),
//       parent;

//     // Remove any existing messages
//     for (var i = 0; i < errorMessages.length; i++) {
//       errorMessages[i].parentNode.removeChild(errorMessages[i]);
//     }

//     for (var i = 0; i < invalidFields.length; i++) {
//       parent = invalidFields[i].parentNode;
//       parent.insertAdjacentHTML("beforeend", "<div class='error-message'>" +
//         invalidFields[i].validationMessage +
//         "</div>");
//     }

//     // If there are errors, give focus to the first invalid field
//     if (invalidFields.length > 0) {
//       invalidFields[0].focus();
//     }
//   });
// }

// // Replace the validation UI for all forms
// var forms = document.querySelectorAll("form");
// for (var i = 0; i < forms.length; i++) {
//   replaceValidationUI(forms[i]);
// }

$(document).ready(function($){
  if($("#tel").length>0){
		$("#tel").mask("+38 (999) 999 - 99 - 99", {
      completed:function(){
      telValidity();
      }
  });
}
//   $('#mainForm').submit(function(){
//     event.preventDefault();
//     var form = $('#mainForm');
//     var str = $(this).serialize();
//     console.log(str);
//     var data = {
//       curse: $('input')[4].value,
//       name: $('input')[0].value,
//       surname: $('input')[1].value,
//       phone: $('input')[2].value,
//       email: $('input')[3].value
//     }
//     var dataJson = JSON.stringify(data, null, "  ");
//     console.log(dataJson);
//       $.ajax({
//           type: 'GET',
//           data: 'dataJson',
//           response: 'text',
//           error: function( xhr,err ) {
//               console.log( 'Sample of error data:', err );
//               console.log("readyState: "+xhr.readyState+"\nstatus: "+xhr.status+"\nresponseText: "+xhr.responseText);
//           },
//           success: function(data, textStatus, jqXHR){
//           if (jqXHR.status == 200){
//             $("#mainForm").trigger('reset');
//             // window.location.href='/thankyou' + current_url;
//             window.location.href='/thankyou';
//           }
              
//               if (console && console.log) {
//                   console.log( 'Sample of data:', data.slice(0,100) );
//                   console.log('textStatus: ', textStatus);
//                   console.log('jqXHR: ', jqXHR);
//                   console.log('statusText: ', jqXHR.statusText);
//               }
//           }            
//       });
//       return false;
//   });
// });

function replaceValidationUI(form) {
  // Suppress the default bubbles
  form.addEventListener("invalid", function(event) {
    event.preventDefault();
  }, true);

  // Support Safari, iOS Safari, and the Android browser—each of which do not prevent
  // form submissions by default
  form.addEventListener("submit", function(event) {
    if (!this.checkValidity()) {
      event.preventDefault();
    }
  });

  var submitButton = form.querySelector("button:not([type=button]), input[type=submit]");
  submitButton.addEventListener("click", function(event) {
    var invalidFields = form.querySelectorAll(":invalid"),
      errorMessages = form.querySelectorAll(".error-message"),
      parent;

    // Remove any existing messages
    for (var i = 0; i < errorMessages.length; i++) {
      errorMessages[i].parentNode.removeChild(errorMessages[i]);
    }

    for (var i = 0; i < invalidFields.length; i++) {
      parent = invalidFields[i].parentNode;
      parent.insertAdjacentHTML("beforeend", "<div class='error-message'>" +
        // invalidFields[i].validationMessage +
        error_text +
        "</div>");
    }

    // If there are errors, give focus to the first invalid field
    if (invalidFields.length > 0) {
      for (var i = 0; i < invalidFields.length; i++ ){
        invalidFields[i].style.borderColor = "var(--secondary-color)";
      }
      // invalidFields.forEach(function(){
      // invalidFields.style.background = "red";
      // });
      // console.log(invalidFields);
      invalidFields[0].focus();
    }

  });
  
}

// Replace the validation UI for all forms
var forms = document.querySelectorAll("form");
for (var i = 0; i < forms.length; i++) {
  replaceValidationUI(forms[i]);
}


var input = document.getElementsByClassName('form__input');
var error_msg = document.getElementsByClassName('error-message');

  for (var i = 0; i < input.length; i++){
  input[i].oninput = function validity() {
    this.checkValidity();
    var parent = this.parentNode;
    if(this.checkValidity() == true && parent.getElementsByClassName('error-message').length > 0){
      parent.removeChild(parent.lastChild);  
      this.style.borderColor = "var(--primary-color)";
      this.onblur = function(){
        this.style.borderColor = "var(--darker-color)";
      }
      this.onfocus = function(){
        this.style.borderColor = "var(--primary-color)";
      }              
    }
  }
}


function telValidity(){
  var tel = document.getElementById('tel');
  var parent = tel.parentNode;
  if(parent.getElementsByClassName('error-message').length > 0){
    parent.removeChild(parent.lastChild);  
    tel.style.borderColor = "var(--primary-color)";
    tel.onblur = function(){
      tel.style.borderColor = "var(--darker-color)";
    }
    tel.onfocus = function(){
      tel.style.borderColor = "var(--primary-color)";
    }                
  }
}

});

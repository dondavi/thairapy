 $(document).ready(function(){
   'use strict';
   
  $('#send_message').click(function(e){
            
    //Stop form submission & check the validation
    e.preventDefault();
    
    // Variable declaration
    var error = false;
    var email = $('#email').val();
			
			$('#email').click(function(){
				$(this).removeClass("error_input");
			});
            
      if(email.length === 0 || email.indexOf('@') === '-1'){
          var error = true;
          $('#email').addClass("error_input");
      } else {
          $('#email').removeClass("error_input");
      }
      
            // If there is no validation error, next to process the mail function
            if(error === false){
               // Disable submit button just after the form processed 1st time successfully.
                $('#send_message').attr({'disabled' : 'true', 'value' : 'Sending...' });
                
				/* Post Ajax function of jQuery to get all the data from the submission of the form as soon as the form sends the values to email.php*/
                $.post($("#contact_form").attr('action'), $("#contact_form").serialize(),function(result){
                    //Check the result set from email.php file.
                    if(result === 'sent'){
                        //If the email is sent successfully, remove the submit button
                         $('#submit').remove();
                        //Display the success message
                        $('#mail_success').fadeIn(500);
                    }else{
                        //Display the error message
                        $('#mail_fail').fadeIn(500);
                        // Enable the submit button again
                        $('#send_message').removeAttr('disabled').attr('value', 'Send The Message');
                    }
                });
            }
        });    
    });
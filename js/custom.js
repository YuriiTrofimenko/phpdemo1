$( document ).ready(function() {
    
    var pwd = $("#password").val();
    var passwordAgain = $("#password_again").val();
    console.log(pwd + ' ' + pwd);
    
    jQuery.validator.addMethod( 'passwordMatch', function(value, element) {

        // The two password inputs
        var pwd = $("#password").val();
        var passwordAgain = $("#password_again").val();
        //console.log(pwd + ' ' + pwd);
        // Check for equality with the password inputs
        if (pwd !== passwordAgain ) {
            return false;
        } else {
            return true;
        }

    }, "Your Passwords Must Match");

    $('#regform').validate({
        // rules
        rules: {
            password: {
                required: true
            },
            password_again: {
                required: true,
                passwordMatch: true // set this on the field you're trying to match
            }
        },

        // messages
        messages: {
            password: {
                required: "What is your password?"
            },
            password_again: {
                required: "You must confirm your password",
                passwordMatch: "Your Passwords Must Match" // custom message for mismatched passwords
            }
        }
    });//end validate
});

/*$("#commentForm").validate({
  rules: {
    password: "required",
    password_again: {
      equalTo: "#password"
    }
  }
});*/

/*$("#regform").validate({
  rules: {
    password_again: {
      equalTo: "#password"
    }
  }
});*/

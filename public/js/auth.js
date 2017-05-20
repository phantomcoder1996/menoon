<script>
    $(document).ready(function(){
        var registerForm = $("#registerForm");
        registerForm.submit(function(e){
            e.preventDefault();
            var formData = registerForm.serialize();
           
            $( '#register-errors-username' ).html( "" );
            $( '#register-errors-address' ).html( "" );
            $( '#register-errors-membership' ).html( "" );
            $( '#register-errors-email' ).html( "" );
            $( '#register-errors-password' ).html( "" );
            $("#register-fname").removeClass("has-error");
            $("#register-lname").removeClass("has-error");
            $("#register-username").removeClass("has-error");
            $("#register-address").removeClass("has-error");
            $("#register-membership").removeClass("has-error");
            $("#register-email").removeClass("has-error");
            $("#register-password").removeClass("has-error");


            $.ajax({
                url:'/register',
                type:'POST',
                data:formData,
                success:function(data){
                    $('#registerModal').modal( 'hide' );
                   

                      location.reload();
                },
                error: function (data) {
                    console.log(data.responseText);
                    var obj = jQuery.parseJSON( data.responseText );
                  
                     if(obj.username){
                        $("#register-username").addClass("has-error");
                        $( '#register-errors-username' ).html( obj.username );
                    }

                     if(obj.address){
                        $("#register-address").addClass("has-error");
                        $( '#register-errors-address' ).html( obj.address);
                    }
                     if(obj.membership){
                        $("#register-membership").addClass("has-error");
                        $( '#register-errors-membership' ).html( obj.membership);
                    }
                    if(obj.email){
                        $("#register-email").addClass("has-error");
                        $( '#register-errors-email' ).html( obj.email );
                    }
                    if(obj.password){
                        $("#register-password").addClass("has-error");
                        $( '#register-errors-password' ).html( obj.password );
                    }
                }
            });
        });
    });

 var loginForm = $("#loginForm");
loginForm.submit(function(e) {
    e.preventDefault();
    var formData = loginForm.serialize();
    $('#form-errors-username').html("");
    $('#form-errors-password').html("");
    $('#form-login-errors').html("");
    $("#username-div").removeClass("has-error");
    $("#password-div").removeClass("has-error");
    $("#login-errors").removeClass("has-error");
    $.ajax({
        url: '/login',
        type: 'POST',
        data: formData,
        success: function(data) {
           
            $('#loginModal').modal('hide');  
            location.reload();         
        },
        error: function(data) {
            console.log(data.responseText);
            var obj = jQuery.parseJSON(data.responseText);
            if (obj.username) {
                $("#username-div").addClass("has-error");
                $('#form-errors-username').html(obj.username);
            }
            if (obj.password) {
                $("#password-div").addClass("has-error");
                $('#form-errors-password').html(obj.password);
            }
            if (obj.error) {
                $("#login-errors").addClass("has-error");
                $('#form-login-errors').html(obj.error);
            }
        }
    });
});  



var foregtForm = $("#forgetpass");
foregtForm.submit(function(e) {
    e.preventDefault();
    var formData = foregtForm.serialize();
    $('#form-errors-email').html("");
    
    $("#email-div").removeClass("has-error");
   
    $.ajax({
        url: "password/email",
        type: 'POST',
        data: formData,
        success: function(data) {
             console.log(data.responseText); 
                 
        },
        error: function(data) {
            console.log(data.responseText);
            var obj = jQuery.parseJSON(data.responseText);
            if (obj.email) {
                $("#email-div").addClass("has-error");
                $('#form-errors-email').html(obj.email);
            }
            
        }
    });
});  
</script>

$(document).ready(function(){

    $("#send-message-btn").on('click', function(){
        var fname = $("#first-name-input").val();
        var lname = $("#last-name-input").val();
        var email = $("#email-input").val();
        var message = $("#message-input").val();

        if(fname == '' || lname == '' || email == '' || message == ''){
            $("#error-message-div").css('display', 'block');
            $("#error-message-div").text("Fill in all Fields");
        }
        else{
            $.ajax({
                url: "contact.inc.php",
                method: "POST",
                data:{fname: fname, lname: lname, email: email, message: message},
                success:function(){
                    $("#error-message-div").css('display', 'none');
                    $("#success-message-div").css('display', 'block');
                    $("#success-message-div").text("Message Sent");
                    setTimeout(function(){                        
                        $("#success-message-div").css('display', 'none');
                    }, 3000)
                }
            })
        }
    })

})
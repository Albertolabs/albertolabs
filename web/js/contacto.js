var Contact = ( function() 
{
    // Constructor
    var cls = function() { };
     
    cls.prototype = {
              
        events: function()
        {
            $("button#contactform-submit").on("click", function(e)
            {   
                e.preventDefault();
                
                if(cls.prototype.validate_form())
                {
                    cls.prototype.send_email();
                }
            });
        },
 
        validate_form: function()
        {
            var ret = false;
            var msj = "";
            var fields = new Array();

            var email_err = 0;
            var fields_errs = 0;

            $("div#form-contact-errors, div#form-contact-email-sent").addClass("hidden");

            var name    = $("input#contactform-name");
            var email   = $("input#contactform-email");
            var phone   = $("input#contactform-phone");
            var subject = $("input#contactform-subject");
            var service = $("input#contactform-service");
            var message = $("textarea#contactform-message");

            if( ! name.val().length)
            {
                fields.push("<b>Name</b>");
                fields_errs++;
            }
            if( ! email.val().length)
            {
                fields.push("<b>Email</b>");
                fields_errs++;
            }
            else if( ! cls.prototype.validate_email(email.val()))
            {
                email_err++;
            }
            if( ! subject.val().length)
            {
                fields.push("<b>Subject</b>");
                fields_errs++;
            }
            if( ! message.val().length)
            {
                fields.push("<b>Message</b>");
                fields_errs++;
            }

            if(fields_errs == 0 && email_err == 0)
            {
                ret = true;
            }
            else
            {
                if(fields.length || email_err)
                {
                    if(fields_errs)
                    {
                        msj += "<li>Error, the following fields are required: &nbsp;" + fields.join(", ") + ".</li>";
                    }
                    if(email_err)
                    {
                        msj += "<li>Error, enter a valid email address.</li>";
                    }

                    msj = "<ul>" + msj + "</ul>";
                    $("div#form-contact-errors").html(msj).removeClass("hidden");
                }
            }

            return ret;
        },

        send_email: function()
        {
            var data    = {};
                data.name    = $("input#contactform-name").val();
                data.email   = $("input#contactform-email").val();
                data.phone   = $("input#contactform-phone").val();
                data.subject = $("input#contactform-subject").val();
                data.message = $("textarea#contactform-message").val();

            $.post("./includes/send_email.php", data, function(result)
            {
                if(result.STATUS == "OK")
                {
                    $("div#form-contact-email-sent").removeClass("hidden");
                }
                else
                {
                    $("div#form-contact-errors").html("An unexpected error has been occurred. Please, try it again.")
                                                .removeClass("hidden");
                }
            }, 
            "json");
        },

        validate_email: function(email)
        {
            var regex = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            return regex.test(email) ? true : false;
        }
    }
    
    return cls;
     
})();
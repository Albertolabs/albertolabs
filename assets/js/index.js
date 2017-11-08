jQuery(window).load(function()
{
    if( $.inArray(currRoute, ["home"]) !== -1 )
    {
        // contact form
        var contact = new Contact();
            contact.events();
    }

    // portafolio image click event
    $("div.portfolio-image").on("click", function(e)
    {
        var link = $(this).find("div.portfolio-overlay a");
        var url = link.attr("href");

        if(url.length && url != "#")
        {
            window.location = url;
        }
    });

    

});
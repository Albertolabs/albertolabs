jQuery(window).load(function()
{
    if( $.inArray(currRoute, ["home"]) !== -1 )
    {
        // contact form
        var contact = new Contact();
            contact.events();

        // arrow down click event
        var servicesPosition = $("#section-services").offset().top - 200;

        $("a#arrow-down-icon").on("click", function(e)
        {
            e.preventDefault();

            $("html, body").animate(
            {
                scrollTop: servicesPosition + "px"
            },
            700);
        });
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
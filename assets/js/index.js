jQuery(window).load(function()
{
    // checks url params
    var currentUrl = window.location;
    var contactReg = new RegExp("#contact$");

    // goes to contact section
    if(contactReg.test(currentUrl))
    {
        var contactPosition = $("#section-contact").offset().top - 200;
        $("html, body").animate({scrollTop:contactPosition + "px"});
    }
    // end check url params

    var $container = $('#portfolio');

    $container.isotope({ transitionDuration: '0.65s' });

    function getHashFilter() {
        var hash = location.hash;
        // get filter=filterName
        var matches = location.hash.match( /filter=([^&]+)/i );
        var hashFilter = matches && matches[1];
        return hashFilter && decodeURIComponent( hashFilter );
    }

    var isIsotopeInit = false;

    function onHashchange() {
        var hashFilter = getHashFilter();
        if ( !hashFilter && isIsotopeInit ) {
            return;
        }
        isIsotopeInit = true;
        // filter isotope
        $container.isotope({ filter: hashFilter });
        // set selected class on button
        if ( hashFilter ) {
            $('#portfolio-filter li').removeClass('activeFilter');
            $('#portfolio-filter li').find('[data-filter="' + hashFilter + '"]').parent('li').addClass('activeFilter');
        }
    }

    $(window).on( 'hashchange', onHashchange );
    // trigger event handler to init Isotope
    onHashchange();

    $('#portfolio-filter a').click(function(){
        $('#portfolio-filter li').removeClass('activeFilter');
        $(this).parent('li').addClass('activeFilter');
        var selector = $(this).attr('data-filter');
        $container.isotope({ filter: selector });
        var filterAttr = $( this ).attr('data-filter');
        location.hash = 'filter=' + encodeURIComponent( filterAttr );
        return false;
    });

    $('#portfolio-shuffle').click(function(){
        $container.isotope('updateSortData').isotope({
            sortBy: 'random'
        });
    });

    $(window).resize(function() {
        $container.isotope('layout');
    });

    $("div.btn-down-scroll a").on("click", function(e)
    {
        e.preventDefault();

        var services_pos = $("div#section-services").offset().top;
        services_pos = services_pos - 200;
        $('body,html').stop(true).animate({ scrollTop:services_pos + "px" }, 600);
    });

    $("div.portfolio-image").on("click", function(e)
    {
        var link = $(this).find("div.portfolio-overlay a");
        var url = link.attr("href");

        if(url.length)
        {
            window.location = url;
        }
    });

});
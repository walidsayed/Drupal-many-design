jQuery(window).load(function(){
    jQuery(".header-sticky").sticky({
        topSpacing: 0,
        wrapperClassName: 'header-sticky-wrapper',
    });
});


jQuery(document).ready(function(){
	
// Header Elements =====================================================
    
    
    jQuery(".dropdown").hover(
        function() { jQuery('.dropdown-menu', this).stop().fadeIn("fast");
        },
        function() { jQuery('.dropdown-menu', this).stop().fadeOut("fast");
    });


    
// Close any div by target "href" =====================================================
	jQuery('.openclose').click(function() {
        jQuery(jQuery(this).attr('href')).fadeToggle();
        return false;
    });

	jQuery('.div-toggle').click(function() {
        jQuery(jQuery(this).attr('data-toggle')).slideToggle();
        return false;
    });

    jQuery('.sidemenu-trigger').click(function() {
        jQuery('#perspective').toggleClass("modalview animate");
    });


    //jQuery('.foot-newsletter-email').focus(function() {
    //        jQuery('.foot-newsletter-2nd-step').fadeIn('slow');
    //    })
    //    .blur(function() {
    //        jQuery('.foot-newsletter-2nd-step').fadeOut('fast')
    //});

    jQuery('.foot-newsletter-email').keyup(function(){
        if(jQuery(this).val().length)
            jQuery('.foot-newsletter-2nd-step').fadeIn('slow');
        else
            jQuery('.foot-newsletter-2nd-step').fadeOut('fast')
    });



    
// SLIDERs =====================================================    
    // owl 3 items slider
    jQuery(".slider-items7").owlCarousel({
        dots:false,
        margin:0,
        responsiveClass:true,
        loop:true,
        responsive:{
            0:{
                items:2,
            },
            520:{
                items:3,
            },
            1000:{
                items:6,
            },
            1200:{
                items:7,
            }
        },
        nav : false,
        pagination: false,
        autoplay:false,
        lazyLoad : true,
    });





// Fancybox "lightbox" ===================================================== 
  jQuery(".lightbox").fancybox({
    	openEffect	: 'elastic',
    	closeEffect	: 'elastic',
        layoutMode: 'fitRows',
          helpers: {
            title : {
                type : 'over'
            },
            overlay: {
              locked: false
            }
          }
    });
   
           
    
    
    
    
    
// Parallax Effect =====================================================
jQuerywindow = jQuery(window);
jQuery('.parallax').each(function(){
     var jQuerybgobj = jQuery(this); // assigning the object
      jQuery(window).scroll(function() {
		var yPos = -(jQuerywindow.scrollTop() / jQuerybgobj.data('speed')); 
		var coords = '50% '+ yPos + 'px';
		jQuerybgobj.css({ backgroundPosition: coords });
}); // window scroll Ends
});	




});



jQuery(document).ready(function() {
    var jQuerywindow = jQuery(window);
    function checkWidth() {
        var windowsize = jQuerywindow.width();
        if (windowsize > 991) {
            jQuery('#perspective').removeClass("modalview animate");
        }
    }
    checkWidth();
    jQuery(window).resize(checkWidth);
});

	

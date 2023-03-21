jQuery(document).ready(function () {
    jQuery('.home_img').css('min-height', jQuery(window).height() + 'px');
    jQuery(window).resize(function () {
        jQuery('.home_img').css('min-height', jQuery(window).height() + 'px');
    });

    jQuery('#menuToggle').on('click', function () {
        jQuery('#navbar').toggleClass('open');
        jQuery(this).toggleClass('open');

    });


    // tabs content js code
    jQuery('.tabscontent li').on('click', function () {
        jQuery(this).addClass('active');
        jQuery(this).siblings().removeClass('active');
        var tabid = jQuery(this).attr('data-tab');
        jQuery('#' + tabid).addClass('active')
        jQuery('#' + tabid).siblings().removeClass('active');
    });

    jQuery('li.menu-item-has-children').append('<span id="submenu" class="mobilesubmenu"><i class="fa fa-plus"></i></span>');
    jQuery('.nav-bar li #submenu').on('click', function () {
        jQuery(this).parent().toggleClass('open');
        jQuery(this).prev().toggleClass('open-submenu');
        jQuery(this).find('i').toggleClass('fa-plus fa-minus');
    });

    // counter animation
    jQuery('.statcounts').one("mouseenter", function () {
        jQuery(".menu").toggleClass("active");
        jQuery('.statcounts span').each(function () {
            jQuery(this).prop('Counter', 0).animate({
                Counter: jQuery(this).text()
            }, {
                duration: 4000,
                easing: 'swing',
                step: function (now) {
                    jQuery(this).text(Math.ceil(now));
                }
            });
        });
    });
    jQuery('.MoreLessButton').click(function () {
// 		jQuery(this).toggleClass("upbutton");
        jQuery('.moredata').slideToggle();
        if (jQuery('.MoreLessButton').text() == "Learn More") {
            jQuery(this).text("Less")
            jQuery(this).addClass("upbutton")
            jQuery(this).removeClass("Downbutton")
        } else {
            jQuery(this).text("Learn More")
            jQuery(this).addClass("Downbutton")
            jQuery(this).removeClass("upbutton")
        }
    });
    jQuery('.MoreLessButton2').click(function () {
		jQuery(this).toggleClass("upbutton");
        jQuery('.moredata2').slideToggle();
        jQuery('.afterBrush').toggleClass("moveleft");
        if (jQuery('.MoreLessButton2').text() == "Learn More") {
            jQuery(this).text("Less")
            jQuery(this).addClass("upbutton")
            jQuery(this).removeClass("Downbutton")
        } else {
          //  jQuery(this).text("Learn More")
            //jQuery(this).addClass("Downbutton")
            //jQuery(this).removeClass("upbutton")
        }
    });
    jQuery(window).scroll(function () {
        if (jQuery(this).scrollTop() > 96) {
            jQuery('.site-header').addClass('fixed');
        } else {
            jQuery('.site-header').removeClass('fixed');
        }
    });
    jQuery(window).scroll(function () {
        if (jQuery(this).scrollTop() > 850) {
            jQuery('.site-header').addClass('scrollSome');
        } else {
            jQuery('.site-header').removeClass('scrollSome');
        }
    });

    jQuery('#slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
		arrows: true,
		centerMode: false,
// 		responsive: [
// 			{
// 			  breakpoint: 667,
// 			  settings: {
// 				slidesToShow: 1,
// 				slidesToScroll: 1
// 			  }
// 			}
// 		  ]
    });
	jQuery('#htesti_slide_two1').slick({
         slidesToShow: 1,
         slidesToScroll: 1,
         arrows: false,
         fade: true,
         asNavFor: '#htesti_slide_one1'
       });
       jQuery('#htesti_slide_one1').slick({
         slidesToShow: 1,
         slidesToScroll: 1,
         asNavFor: '#htesti_slide_two1',
         dots: false,
         arrows: true,
         focusOnSelect: true,
         centerMode: true,
       });
	
         jQuery('#htesti_slide_two').slick({
         slidesToShow: 1,
         slidesToScroll: 1,
         arrows: false,
         fade: true,
         asNavFor: '#htesti_slide_one'
       });
       jQuery('#htesti_slide_one').slick({
         slidesToShow: 4,
         slidesToScroll: 1,
         asNavFor: '#htesti_slide_two',
         dots: false,
         arrows: true,
         focusOnSelect: true,
         centerMode: false,
// 		   rtl: true,
       });
		
	 	jQuery(function(){
    
			jQuery("[data-toggle=popover]").popover({
				html : true,
				content: function() {
					var content = jQuery(this).attr("data-popover-content");
					return jQuery(content).children(".popover-body").html();
				}
			});

		});
 
 
    const config = {
        rootMargin: '0px 0px 50px 0px',
        threshold: 0
    };

    function preloadImage(target) {
         target.setAttribute("src", target.getAttribute("data-src"))
    }
    // register the config object with an instance
    // of intersectionObserver
    let observer = new IntersectionObserver(function (entries, self) {
        // iterate over each entry
        entries.forEach(entry => {
            // process just the images that are intersecting.
            // isIntersecting is a property exposed by the interface
            if (entry.isIntersecting) {
                // custom function that copies the path to the img
                // from data-src to src
                preloadImage(entry.target);
                // the image is now in place, stop watching
                self.unobserve(entry.target);
            }
        });
    }, config);

     const imgs = document.querySelectorAll('[data-src]');
    imgs.forEach(img => {
        observer.observe(img);
    });
	

	
	let map;

	function initMap() {
	  map = new google.maps.Map(document.getElementById("map"), {
		center: { lat: -34.397, lng: 150.644 },
		zoom: 8,
	  });
	}

	window.initMap = initMap;
	
	// 	For email
	billingEmail= document.getElementById("billing_email");
	if(billingEmail.value){
			billingEmail.setAttribute("placeholder","");
	}else{ 
			billingEmail.setAttribute("placeholder","Your email");
		}
// 	billingAddress1.addEventListener("change",(e)=>{
// 		if(billingAddress1.value || e.target.value){
// 			billingAddress2.setAttribute("placeholder","");
// 		}else{ 
// 			billingAddress2.setAttribute("placeholder","(Optional: unit, suite, apartment number)")
// 		}
// 	})
// 	For billing
	billingAddress1= document.getElementById("billing_address_1");
	billingAddress2= document.getElementById("billing_address_2");
	if(billingAddress1.value){
			billingAddress2.setAttribute("placeholder","");
	}
	billingAddress1.addEventListener("change",(e)=>{
		if(billingAddress1.value || e.target.value){
			billingAddress2.setAttribute("placeholder","");
		}else{ 
			billingAddress2.setAttribute("placeholder","(Optional: unit, suite, apartment number)")
		}
	})
	
// 	for shipping
	shippingAddress1= document.getElementById("shipping_address_1");
	shippingAddress2= document.getElementById("shipping_address_2");
	if(shippingAddress1.value){
			shippingAddress2.setAttribute("placeholder","");
	}
	shippingAddress1.addEventListener("change",(e)=>{
		if(shippingAddress1.value || e.target.value){
			shippingAddress2.setAttribute("placeholder","");
		}else{ 
			shippingAddress2.setAttribute("placeholder","(Optional: unit, suite, apartment number)")
		}
	})
	
});




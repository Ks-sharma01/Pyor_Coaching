 AOS.init({
 	duration: 800,
 	easing: 'slide',
 	once: false
 });

jQuery(document).ready(function($) {

	"use strict";

	var siteMenuClone = function() {

		$('.js-clone-nav').each(function() {
			var $this = $(this);
			$this.clone().attr('class', 'site-nav-wrap').appendTo('.site-mobile-menu-body');
		});


    var counter = 0;
      $('.site-mobile-menu .has-children').each(function(){
        var $this = $(this);
        
        $this.prepend('<span class="arrow-collapse collapsed">');

        $this.find('.arrow-collapse').attr({
          'data-toggle' : 'collapse',
          'data-target' : '#collapseItem' + counter,
        });

        $this.find('> ul').attr({
          'class' : 'collapse',
          'id' : 'collapseItem' + counter,
        });

        counter++;

      });

		$('body').on('click', '.arrow-collapse', function(e) {
      var $this = $(this);
      if ( $this.closest('li').find('.collapse').hasClass('show') ) {
        $this.removeClass('active');
      } else {
        $this.addClass('active');
      }
      e.preventDefault();  
      
    });

		$(window).resize(function() {
			var $this = $(this),
				w = $this.width();

			if ( w > 768 ) {
				if ( $('body').hasClass('offcanvas-menu') ) {
					$('body').removeClass('offcanvas-menu');
				}
			}
		})

		$('body').on('click', '.js-menu-toggle', function(e) {
			var $this = $(this);
			e.preventDefault();

			if ( $('body').hasClass('offcanvas-menu') ) {
				$('body').removeClass('offcanvas-menu');
				$this.removeClass('active');
			} else {
				$('body').addClass('offcanvas-menu');
				$this.addClass('active');
			}
		}) 

		// click outisde offcanvas
		$(document).mouseup(function(e) {
	    var container = $(".site-mobile-menu");
	    if (!container.is(e.target) && container.has(e.target).length === 0) {
	      if ( $('body').hasClass('offcanvas-menu') ) {
					$('body').removeClass('offcanvas-menu');
				}
	    }
		});
	}; 
	siteMenuClone();


	var sitePlusMinus = function() {
		$('.js-btn-minus').on('click', function(e){
			e.preventDefault();
			if ( $(this).closest('.input-group').find('.form-control').val() != 0  ) {
				$(this).closest('.input-group').find('.form-control').val(parseInt($(this).closest('.input-group').find('.form-control').val()) - 1);
			} else {
				$(this).closest('.input-group').find('.form-control').val(parseInt(0));
			}
		});
		$('.js-btn-plus').on('click', function(e){
			e.preventDefault();
			$(this).closest('.input-group').find('.form-control').val(parseInt($(this).closest('.input-group').find('.form-control').val()) + 1);
		});
	};
	// sitePlusMinus();


	var siteSliderRange = function() {
    $( "#slider-range" ).slider({
      range: true,
      min: 0,
      max: 500,
      values: [ 75, 300 ],
      slide: function( event, ui ) {
        $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
      }
    });
    $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
      " - $" + $( "#slider-range" ).slider( "values", 1 ) );
	};
	// siteSliderRange();


	
	var siteCarousel = function () {
		if ( $('.nonloop-block-13').length > 0 ) {
			$('.nonloop-block-13').owlCarousel({
		    center: false,
		    items: 1,
		    loop: true,
				stagePadding: 0,
		    margin: 20,
		    smartSpeed: 1000,
		    autoplay: true,
		    nav: true,
				navText: ['<span class="icon-keyboard_arrow_left">', '<span class="icon-keyboard_arrow_right">'],
		    responsive:{
	        600:{
	        	margin: 20,
	        	nav: true,
	          items: 2
	        },
	        1000:{
	        	margin: 20,
	        	stagePadding: 0,
	        	nav: true,
	          items: 2
	        },
	        1200:{
	        	margin: 20,
	        	stagePadding: 0,
	        	nav: true,
	          items: 3
	        }
		    }
			});
		}

		$('.slide-one-item').owlCarousel({
	    center: false,
	    items: 1,
	    loop: true,
			stagePadding: 0,
	    margin: 0,
	    autoplay: true,
	    pauseOnHover: false,
	    nav: true,
	    animateIn: 'fadeIn',
	    animateOut: 'fadeOut',
	    navText: ['<span class="icon-keyboard_arrow_left">', '<span class="icon-keyboard_arrow_right">']
	  });

	  $('.owl-carousel-one').owlCarousel({
	    center: false,
	    items: 1,
	    loop: true,
			stagePadding: 0,
	    margin: 0,
	    autoplay: true,
	    pauseOnHover: false,
	    nav: true,
	    smartSpeed:1000,
	    navText: ['<span class="icon-keyboard_arrow_left">', '<span class="icon-keyboard_arrow_right">']
	  });

	  
	  $('.slide-one-item-alt').owlCarousel({
	    center: false,
	    items: 1,
	    loop: true,
			stagePadding: 0,
	    margin: 0,
	    smartSpeed: 1000,
	    autoplay: true,
	    pauseOnHover: true,
	    onDragged: function(event) {
	    	console.log('event : ',event.relatedTarget['_drag']['direction'])
	    	if ( event.relatedTarget['_drag']['direction'] == 'left') {
	    		$('.slide-one-item-alt-text').trigger('next.owl.carousel');
	    	} else {
	    		$('.slide-one-item-alt-text').trigger('prev.owl.carousel');
	    	}
	    }
	  });
	  $('.slide-one-item-alt-text').owlCarousel({
	    center: false,
	    items: 1,
	    loop: true,
			stagePadding: 0,
	    margin: 0,
	    smartSpeed: 1000,
	    autoplay: true,
	    pauseOnHover: true,
	    onDragged: function(event) {
	    	console.log('event : ',event.relatedTarget['_drag']['direction'])
	    	if ( event.relatedTarget['_drag']['direction'] == 'left') {
	    		$('.slide-one-item-alt').trigger('next.owl.carousel');
	    	} else {
	    		$('.slide-one-item-alt').trigger('prev.owl.carousel');
	    	}
	    }
	  });
	  

	  $('.custom-next').click(function(e) {
	  	e.preventDefault();
	  	$('.slide-one-item-alt').trigger('next.owl.carousel');
	  	$('.slide-one-item-alt-text').trigger('next.owl.carousel');
	  });
	  $('.custom-prev').click(function(e) {
	  	e.preventDefault();
	  	$('.slide-one-item-alt').trigger('prev.owl.carousel');
	  	$('.slide-one-item-alt-text').trigger('prev.owl.carousel');
	  });
	  
	};
	siteCarousel();

	var siteStellar = function() {
		$(window).stellar({
	    responsive: false,
	    parallaxBackgrounds: true,
	    parallaxElements: true,
	    horizontalScrolling: false,
	    hideDistantElements: false,
	    scrollProperty: 'scroll'
	  });
	};
	// siteStellar();

	var siteCountDown = function() {

		$('#date-countdown').countdown('2020/10/10', function(event) {
		  var $this = $(this).html(event.strftime(''
		    + '<span class="countdown-block"><span class="label">%w</span> weeks </span>'
		    + '<span class="countdown-block"><span class="label">%d</span> days </span>'
		    + '<span class="countdown-block"><span class="label">%H</span> hr </span>'
		    + '<span class="countdown-block"><span class="label">%M</span> min </span>'
		    + '<span class="countdown-block"><span class="label">%S</span> sec</span>'));
		});
				
	};
	siteCountDown();

	var siteDatePicker = function() {

		if ( $('.datepicker').length > 0 ) {
			$('.datepicker').datepicker();
		}

	};
	siteDatePicker();

	var siteSticky = function() {
		$(".js-sticky-header").sticky({topSpacing:0});
	};
	siteSticky();

	// navigation
  var OnePageNavigation = function() {
    var navToggler = $('.site-menu-toggle');
   	$("body").on("click", ".main-menu li a[href^='#'], .smoothscroll[href^='#'], .site-mobile-menu .site-nav-wrap li a", function(e) {
      e.preventDefault();

      var hash = this.hash;

      $('html, body').animate({
        'scrollTop': $(hash).offset().top
      }, 600, 'easeInOutExpo', function(){
        window.location.hash = hash;
      });

    });
  };
  OnePageNavigation();

  var siteScroll = function() {

  	

  	$(window).scroll(function() {

  		var st = $(this).scrollTop();

  		if (st > 100) {
  			$('.js-sticky-header').addClass('shrink');
  		} else {
  			$('.js-sticky-header').removeClass('shrink');
  		}

  	}) 

  };
  siteScroll();


  $('.fancybox').on('click', function() {
	  var visibleLinks = $('.fancybox');

	  $.fancybox.open( visibleLinks, {}, visibleLinks.index( this ) );

	  return false;
	});

});

// const contact_submit = document.getElementById("contact_submit");
// const contactForm = document.getElementById("ContactForm");
// if(contactForm){
// 	 document.getElementById("ContactForm")
//         .addEventListener("submit", function (e) {

//                 e.preventDefault();

//             contact_submit.disabled = true;
//             contact_submit.innerHTML = "Sending...";
//         });
// }


const contactForms = document.getElementById("ContactForm");

if (contactForms) {

    const contact_name = document.getElementById("contact_name");

    const contact_email = document.getElementById("contact_email");

    const contact_subject = document.getElementById("contact_subject");

    const contact_comment = document.getElementById("contact_comment");


    const contact_name_err = document.getElementById("contact_name_err");

    const contact_email_err = document.getElementById("contact_email_err");

    const contact_subject_err = document.getElementById("contact_subject_err");

    const contact_comment_err = document.getElementById("contact_comment_err");


    // FULL NAME

    function validateName() {

        const value = contact_name.value.trim();

        contact_name_err.textContent = "";

        if (value === "") {

            contact_name_err.textContent =
                "Name is required.";

            return false;
        }

        if (value.length < 2) {

            contact_name_err.textContent =
                "Please enter at least 2 characters.";

            return false;
        }

        if (!/^[a-zA-Z\s.'-]+$/.test(value)) {

            contact_name_err.textContent =
                "Please enter a valid name.";

            return false;
        }

        return true;
    }


    // EMAIL

    function validateEmail() {

        const value = contact_email.value.trim();

        contact_email_err.textContent = "";

        if (value === "") {

            contact_email_err.textContent =
                "Email is required.";

            return false;
        }

        const emailPattern =
            /^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/;

        if (!emailPattern.test(value)) {

            contact_email_err.textContent =
                "Please enter a valid email address.";

            return false;
        }

        return true;
    }


    // SUBJECT

    function validateSubject() {

        const value = contact_subject.value.trim();

        contact_subject_err.textContent = "";

        if (value === "") {

            contact_subject_err.textContent =
                "Please select subject.";

            return false;
        }


        return true;
    }

    // MESSAGE

    function validateMessage() {

        const value = contact_comment.value.trim();

        contact_comment_err.textContent = "";

        if (value === "") {

            contact_comment_err.textContent =
                "Message is required.";

            return false;
        }

        return true;
    }

    // VALIDATE WHILE USER TYPES

    contact_name.addEventListener(
        "input",
        validateName
    );

    contact_email.addEventListener(
        "input",
        validateEmail
    );

    contact_subject.addEventListener(
        "change",
        validateSubject
    );

    contact_comment.addEventListener(
        "input",
        validateMessage
    );


    // FORM SUBMIT

    contactForms.addEventListener(
        "submit",
        function (e) {
            e.preventDefault();


            const validName =
              validateName();

            const validEmail =
                validateEmail();

            const validSubject =
                validateSubject();

            const validMessage =
                validateMessage();


            // Stop if any field is invalid
            if (
                !validName ||
                !validEmail ||
                !validSubject ||
                !validMessage
            ) {

                return;
            }

            // SEND FORM

            const button =
                document.getElementById("contact_submit");

            const originalText =
                button.innerHTML;


            button.disabled = true;

            button.innerHTML = `
                Sending...
                <span class="ms-2">⏳</span>
            `;


            const formData =
                new FormData(contactForms);


            fetch("submit-message.php", {

                method: "POST",

                body: formData

            })

            .then(response => response.json())

                .then(data => {

                if (data.success) {

                    // Reset form
                    contactForms.reset();

                    // Show success toast
                    showToast(
                        "Success",
                        "Message sent successfully."
                    );

                } else {

                    showToast(
                        "Error",
                        data.message
                    );

                }

            })

            .catch(error => {

                console.error(error);

                showToast(
                    "Error",
                    "Unable to send your message. Please try again."
                );

            })

            .finally(() => {

                button.disabled = false;

                button.innerHTML = originalText;

            });

        }
    );

}

function showToast(title, message) {

    const toastElement =
        document.getElementById("formToast");

    const toastTitle =
        document.getElementById("toastTitle");

    const toastMessage =
        document.getElementById("toastMessage");


    if (!toastElement) {
        return;
    }


    toastTitle.textContent = title;

    toastMessage.textContent = message;


    $(toastElement)
      .toast({ delay: 4000 })
      .toast("show");
}





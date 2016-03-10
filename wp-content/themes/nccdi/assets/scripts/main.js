/* ========================================================================
 * DOM-based Routing
 * Based on http://goo.gl/EUTi53 by Paul Irish
 *
 * Only fires on body classes that match. If a body class contains a dash,
 * replace the dash with an underscore when adding it to the object below.
 *
 * .noConflict()
 * The routing is enclosed within an anonymous function so that you can
 * always reference jQuery with $, even when in .noConflict() mode.
 * ======================================================================== */

(function($) {

  // Determine trigger for touch/click events
  var clickortap;
  if ($('html').hasClass('touch')) {
    clickortap = 'touchend';
  } else {
    clickortap = 'click';
  }

  // Check for mobile or IE
  var ismobileorIE = /Android|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini|MSIE|Trident|Edge/i.test(navigator.userAgent);
  var isSafari = /Safari/i.test(navigator.userAgent) && /Apple Computer/.test(navigator.vendor);


  // Use this variable to set up the common and page specific functions. If you
  // rename this variable, you will also need to rename the namespace below.
  var Sage = {
    // All pages
    'common': {
      init: function() {

        // Toggle menu button to x close state on click
        $('#nav-toggle').on(clickortap, function(e) {
          e.preventDefault();
          if ($(this).hasClass('active')) {
            $(this).removeClass('active');
          } else {
            $(this).addClass('active');
          }
        });

        // Expandable mobile nav menu
        $('#mobile-nav .expandable-title, #mobile-nav .widgettitle-in-submenu').on(clickortap, function(e) {
          e.preventDefault();
          if ($(this).hasClass('open')) {
            $(this).removeClass('open');
          } else {
            $(this).addClass('open');
          }
        });

        $('#mobile-nav .widgettitle-in-submenu').append('<span class="caret"></span>');

      },
      finalize: function() {
        // JavaScript to be fired on all pages, after page specific JS is fired
      }
    },
    // Home page
    'home': {
      init: function() {
        // JavaScript to be fired on the home page
      },
      finalize: function() {
        // JavaScript to be fired on the home page, after the init JS
      }
    },
    'single': {
      init: function() {

        // Add body class for any posts with full width hero featured images
        if ($('.entry-header').hasClass('hero-image')) {
          if (!ismobileorIE) {
            $('body').addClass('hero-image-full');
          } else {
            $('body').addClass('hero-image');
          }
        }

        // Parallax featured image when hero
        if ($('.entry-header').hasClass('hero-image')) {
          // only do parallax if this is not mobile or IE
          if (!ismobileorIE) {
            var img = $('.entry-header.hero-image .parallax-img');

            // Set up CSS for devices that support parallax
            img.css({'top': '-50%', 'position':'absolute'});

            // Do it on init
            parallax(img);

            // Happy JS scroll pattern
            var scrollTimeout;  // global for any pending scrollTimeout
            $(window).scroll(function () {
            	if (scrollTimeout) {
            		// clear the timeout, if one is pending
            		clearTimeout(scrollTimeout);
            		scrollTimeout = null;
            	}
            	scrollTimeout = setTimeout(parallax(img), 10);
            });
          }
        }

        // Wrap any object embed with responsive wrapper (except for map embeds)
        $.expr[':'].childof = function(obj, index, meta, stack){
          return $(obj).parent().is(meta[3]);
        };
        $('object').wrap('<div class="object-wrapper"></div>');

        // Add special classes to .entry-content-wrapper divs for Instagram and Twitter embeds (not fixed ratio)
        $('.instagram-media').parent('.entry-content-asset').addClass('instagram');
        $('.twitter-tweet').parent('.entry-content-asset').addClass('twitter');

        // Add special class to .entry-content-wrapper for Slideshare (vertical fixed ratio)
        $('iframe[src*="slideshare.net"]').parent('.entry-content-asset').addClass('slideshare');

        // Add special class to .entry-content-wrapper for SoundCloud (fixed height)
        $('iframe[src*="soundcloud"]').parent('.entry-content-asset').addClass('soundcloud');

        // Make sure WordPress embeds have correct permissions
        $('iframe.wp-embedded-content').attr('sandbox', 'allow-scripts allow-same-origin allow-popups allow-popups-to-escape-sandbox');

        // Add special class to default WP embeds
        $('iframe.wp-embedded-content').closest('.entry-content-asset').addClass('wp-embed');

        // Wrap tables with Bootstrap responsive table wrapper
        $('.entry-content table').addClass('table table-striped').wrap('<div class="table-responsive"></div>');

        // Add watermark dropcap on pull quotes (left and right)
        $('blockquote p[style*=left], blockquote p[style*=right]').each(function() {
          var text = $(this).text();
          $(this).attr('data-before', text.charAt(0));
        });

        // Open Magnific for all image link types inside articles
        $('.entry-content a[href$=".gif"], .entry-content a[href$=".jpg"], .entry-content a[href$=".png"], .entry-content a[href$=".jpeg"]').not('.gallery a').magnificPopup({
          type: 'image',
          midClick: true,
          mainClass: 'mfp-with-zoom',
          zoom: {
            enabled: true,
            duration: 300,
            easing: 'ease-in-out',
            opener: function(openerElement) {
              return openerElement.is('img') ? openerElement : openerElement.find('img');
            }
          },
          image: {
            cursor: 'mfp-zoom-out-cur',
            verticalFit: true,
            titleSrc: function(item) {
              return $(item.el).children('img').attr('alt');
            }
          }
        });

        // Gallery lightboxes in articles
        $('.gallery').each(function() { // the containers for all your galleries
          $(this).magnificPopup({
            delegate: 'a', // the selector for gallery item
            type: 'image',
            gallery: {
              enabled:true
            },
            midClick: true,
            mainClass: 'mfp-with-zoom',
            zoom: {
              enabled: true,
              duration: 300,
              easing: 'ease-in-out',
              opener: function(openerElement) {
                return openerElement.is('img') ? openerElement : openerElement.find('img');
              }
            },
            image: {
              cursor: 'mfp-zoom-out-cur',
              verticalFit: true,
              titleSrc: function(item) {
                return $(item.el).children('img').attr('alt');
              }
            }
          });
        });

        // Smooth scroll to anchor on same page
        $('a[href*=#]:not([href=#]):not(.collapsed)').on(clickortap, function() {
          if (location.pathname.replace(/^\//,'') === this.pathname.replace(/^\//,'') && location.hostname === this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
              $('html,body').animate({
                scrollTop: target.offset().top
              }, 1000);
              return false;
            }
          }
        });

      }
    },
    // Data viz embeds
    'single_data_viz': {
      init: function() {
        // Add special class to default WP embeds
        $('iframe.wp-embedded-content').not('[src*="/flash-cards/"], [src*="/data-viz/"]').closest('.entry-content-asset').addClass('wp-embed');

        /**
         * Load Google Charts
         */
        function initDashboard() {
          $('.data-viz').initCharts();
        }
        google.charts.setOnLoadCallback(initDashboard);

        /**
         * FitText for big fancy numbers
         */
        $('.fancy-number').each(function() {
          $(this).fitText();
        });
      },
      finalize: function() {
        /**
         * Owl Carousel 2
         */
        $(window).on('load', function() {
          $('.g-carousel').each(function() {
            $(this).owlCarousel({
              items: 1,
              loop: true,
              autoHeight: true,
              animateOut: 'fadeOut',
              autoplay: true,
              autoplayTimeout: 3000,
              autoplayHoverPause: true
            });
          });
        });

        // Manual carousel nav
        $('.fc-nav .fc-next').on(clickortap, function() {
          owl.trigger('next.owl.carousel');
        });

        $('.fc-nav .fc-prev').on(clickortap, function() {
          owl.trigger('prev.owl.carousel');
        });

        // If 'print' URL parameter exists, open print dialog on page load
        if (window.location.search === '?print') {
          window.onload = function() { window.print(); };
        }
      }
    },
    // Data Dashboard
    'post_type_archive_data': {
      init: function() {
        // Add special class to default WP embeds
        $('iframe.wp-embedded-content').not('[src*="/flash-cards/"], [src*="/data-viz/"]').closest('.entry-content-asset').addClass('wp-embed');

        // Make sure WordPress embeds have correct permissions
        $('iframe.wp-embedded-content').attr('sandbox', 'allow-scripts allow-same-origin allow-popups allow-popups-to-escape-sandbox');

        // Add external-link icon to EdNC map embeds
        $('iframe[src*="//www.ednc.org"]').each(function() {
          var href = $(this).attr('src');
          $(this).after('<a class="icon-external-link" href="' + href + '" target="_blank"></a>');
        });

        /**
         * Load Google Charts
         */
        function initDashboard() {
          // Kick scroll event
          $(window).scroll();
          // Load each dashboard section one at a time
          $('.dashboard-section').scrolledIntoView().on('scrolledin', function() {
            $(this).initCharts();
          });
        }
        google.charts.setOnLoadCallback(initDashboard);

        /**
         * FitText for big fancy numbers
         */
        $('.fancy-number').each(function() {
          $(this).fitText();
        });

        /**
         * Bootstrap Affix
         */
        $(window).on('load', function() {
          $('#data-dash-nav').affix({
            offset: {
              top: function() {
                return (this.top = $('#data-dash-nav').offset().top - 20);
              },
              bottom: function () {
                return (this.bottom = $('footer.content-info').outerHeight(true) + $('.above-footer').outerHeight(true) + 96);
              }
            }
          }).on('affix.bs.affix', function() {
            // Set width of element on affix
            width = $(this).width();
            $(this).width(width);
          }).on('affix-top.bs.affix', function() {
            // Remove width of element when at top
            $(this).removeAttr('style');
          }).on('affix-bottom.bs.affix', function() {
            // Set width of element when at bottom
            $(this).width('auto');
          });
          $('body').scrollspy({
            target: '#data-dash-nav',
            offset: 40
          });
        });

        // Gallery lightboxes
        $('.gallery').each(function() { // the containers for all your galleries
          $(this).magnificPopup({
            delegate: 'a', // the selector for gallery item
            type: 'image',
            gallery: {
              enabled:true
            },
            midClick: true,
            mainClass: 'mfp-with-zoom',
            zoom: {
              enabled: true,
              duration: 300,
              easing: 'ease-in-out',
              opener: function(openerElement) {
                return openerElement.is('img') ? openerElement : openerElement.find('img');
              }
            },
            image: {
              cursor: 'mfp-zoom-out-cur',
              verticalFit: true,
              titleSrc: function(item) {
                return $(item.el).children('img').attr('alt');
              }
            }
          });
        });

      },
      finalize: function() {
        /**
         * Owl Carousel 2
         */
        $(window).on('load', function() {
          $('.g-carousel').each(function() {
            $(this).owlCarousel({
              items: 1,
              loop: true,
              autoHeight: true,
              animateOut: 'fadeOut',
              autoplay: true,
              autoplayTimeout: 3000,
              autoplayHoverPause: true
            });
          });
        });

        // Manual carousel nav
        $('.fc-nav .fc-next').on(clickortap, function() {
          owl.trigger('next.owl.carousel');
        });

        $('.fc-nav .fc-prev').on(clickortap, function() {
          owl.trigger('prev.owl.carousel');
        });
      }
    }
  };
  
  // The routing fires all common scripts, followed by the page specific scripts.
  // Add additional events for more control over timing e.g. a finalize event
  var UTIL = {
    fire: function(func, funcname, args) {
      var fire;
      var namespace = Sage;
      funcname = (funcname === undefined) ? 'init' : funcname;
      fire = func !== '';
      fire = fire && namespace[func];
      fire = fire && typeof namespace[func][funcname] === 'function';

      if (fire) {
        namespace[func][funcname](args);
      }
    },
    loadEvents: function() {
      // Fire common init JS
      UTIL.fire('common');

      // Fire page-specific init JS, and then finalize JS
      $.each(document.body.className.replace(/-/g, '_').split(/\s+/), function(i, classnm) {
        UTIL.fire(classnm);
        UTIL.fire(classnm, 'finalize');
      });

      // Fire common finalize JS
      UTIL.fire('common', 'finalize');
    }
  };

  // Load Events
  $(document).ready(UTIL.loadEvents);

})(jQuery); // Fully reference jQuery after this point.

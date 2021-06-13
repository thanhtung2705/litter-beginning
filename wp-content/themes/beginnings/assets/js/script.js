/*jslint browser: true*/
/*global $, jQuery, Modernizr, enquire*/
(function (window, document, $) {
  "use strict";

  // Contact form 7 redirect after submit.
  document.addEventListener( 'wpcf7mailsent', function( event ) {
    if ( '39' == event.detail.contactFormId ) {
        window.location.href = window.location.protocol + '//' + window.location.hostname + '/thank-you-enquire/';
    }
    if ( '40' == event.detail.contactFormId ) {
        window.location.href = window.location.protocol + '//' + window.location.hostname + '/thank-you-enquire/';
    }
    if ( '38' == event.detail.contactFormId ) {
        window.location.href = window.location.protocol + '//' + window.location.hostname + '/thank-you-book-tour/';
    }
    if ( '41' == event.detail.contactFormId ) {
        window.location.href = window.location.protocol + '//' + window.location.hostname + '/thank-you-enrol/';
    }
  }, false );

  // Ready Functions.
  $( document ).ready(function() {
    // Remove attr title.
    $('a, img').removeAttr('title');

    // Add placeholder to quiz validate form.
    $('.wpcf7-quiz').attr('placeholder', 'text-here');
    $('.form-type-date').attr('placeholder', 'Preferred Tour Date*')

    // Table responsive
    var $table = $('table');
    if ($table.length && !$table.parent().hasClass('table-responsive')) {
      $table.not($table.find('table')).wrap('<div class="table-responsive"></div>');
    }
    
    $('.js-show-mobile').on("click", function(e) {
      if ($(this).hasClass('is-show')) {
            $(this).removeClass('is-show');
            $('body').removeClass('show_mobile_menu noscroll');
        } else {
            $(this).addClass('is-show');
            $('body').addClass('show_mobile_menu noscroll');
        }
    });

    $('.js-close-mobile').on("click", function(e) {
      $('body').removeClass('show_mobile_menu');
      $('.js-show-mobile').removeClass('is-show');
    });

    // Add placeholder to quiz validate form.
    $('.wpcf7-quiz').attr('placeholder', 'What is the first letter of beginnings?*');

    // Form
    var $jsFormbtn = $('.js-show-form');
    var $jsClosebtn = $('.js-close-form');
    $jsFormbtn.on('click', function() {
      if($(this).parent().hasClass('is-active')) {
        $(this).parent().removeClass('is-active');
        $('.form-overlay').removeClass('is-active');
      } else {
        $('.form').removeClass('is-active');
        $(this).parent().addClass('is-active');
        $('.form-overlay').addClass('is-active');
      }
    });
    
    $jsClosebtn.on('click', function() {
      $('.form').removeClass('is-active');
      $('.form-overlay').removeClass('is-active');
    });

    // Anchor link
    var $jsAnchor = $('.js-anchor');
    $jsAnchor.on('click', function(e) {
      e.preventDefault();
      var dataId = $(this).attr("href");
      $('.' + dataId).trigger( "click" );
    });

    $(".home .header [href^='/#']").click(function(e) {
      e.preventDefault();
      var href= $(this).attr("href"),
          dataId = href.substr(href.indexOf("/#") + 1),
          wd = $( window ).width(),
          hdh = $('.header__logo').height();
          
      $('body').removeClass('show_mobile_menu noscroll');
      $('.js-show-mobile').removeClass('is-show');
      
      // Scroll to ID;
      if(wd > 992) {
        $('html, body').animate({
          scrollTop: $(dataId).offset().top
        }, 500);
      } else {
        $('html, body').animate({
          scrollTop: $(dataId).offset().top - hdh + 5
        }, 500);
      }
    });

    $('.js-menu a').on('click', function(e){
      e.preventDefault();
      var href= $(this).attr("href"),
          dataId = href.substr(href.indexOf("/") + 1);
      $('.' + dataId).trigger( "click" );
      $('body').removeClass('show_mobile_menu noscroll');
      $('.js-show-mobile').removeClass('is-show');
    });

    $('.header__menu-mobile ul li').click(function(){
      $('body').removeClass('show_mobile_menu');
      $('.js-show-mobile').removeClass('is-show');
    });


    // Back to top.
    var $jsBacktop = $('.js-back-top');
    if ( $jsBacktop.length) {
      var scrollTrigger = 100, // px
      backToTop = function () {
        var scrollTop = $(window).scrollTop();

        if (scrollTop > scrollTrigger) {
          $jsBacktop.addClass('show');
        } else {
          $jsBacktop.removeClass('show');
        }
      };

      // call function.
      backToTop();

      $(window).on('scroll', function () {
          backToTop();
      });
      $jsBacktop.on('click', function (e) {
        e.preventDefault();
        $('html,body').animate({
          scrollTop: 0
        }, 700);
      });
    }

    $jsBacktop.click(function(){
      $('body').removeClass('show_mobile_menu');
      $('.js-show-mobile').removeClass('is-show');
    });

    // Js Read more
    var $jsReadMore = $('.js-read-more');
    $jsReadMore.click(function(e) {
       e.preventDefault();
       if($(this).parent().parent().hasClass('active')) {
        $(this).parent().parent().removeClass('active');
        $(this).text('read more...');
      } else {
        $(this).parent().parent().addClass('active');
        $(this).text('read less');
      }
    });

    // Scroll book link footer
    var $hgBody = $('body').outerHeight();
    var $hgWindow = $(window).outerHeight();
    var position = $(window).scrollTop();
    $(window).scroll(function () {
      var $scroll = $(window).scrollTop();
      if($scroll < $hgBody - $hgWindow - 300) {
        var scroll = $(window).scrollTop();
        if(scroll > position) {
          $('.enquire-now-mobile').addClass('is-show');
        } else {
          $('.enquire-now-mobile').removeClass('is-show');
        }
        position = scroll;
      } else {
        $('.enquire-now-mobile').addClass('is-show');
      }
    });

    function maincontent() {
      var hwd = $(window).outerHeight(),
          hdh = $('.header__inner').outerHeight(),
          fth = $('.footer').outerHeight();
      $('main').css('min-height', hwd - hdh -fth );
    }

    maincontent();
    $( window ).resize(function() {
      maincontent();
    });
  });

  // Date picker.
  $('.datepicker').datepicker({ 
    dateFormat: 'dd-mm-yy',
    ignoreReadonly: true,
    allowInputToggle: true
  });
  $('.datepicker').attr('readonly', true);

}(this, this.document, this.jQuery));

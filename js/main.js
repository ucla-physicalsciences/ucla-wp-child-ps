/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/assets/js/accordion.js":
/*!******************************************!*\
  !*** ./resources/assets/js/accordion.js ***!
  \******************************************/
/*! no static exports found */
/***/ (function(module, exports) {

var $ = jQuery.noConflict();
$(document).ready(function () {
  //This is what happens when you click the title on mobile or desktop.
  // $('.accordion__title').click(function (){
  //   if ($(this).next('.accordion__content').find('a').attr('tabindex') === -1) {
  //     $(this).next('.accordion__content').find('a').attr('tabindex', '0');
  //   } else if ($(this).next('.accordion__content').find('a').attr('tabindex') === 0) {
  //     $(this).next('.accordion__content').find('a').attr('tabindex', '-1');
  //   } else {}
  //
  //   halfResetAria($);
  //
  // });
  //only reset the expanded attribute
  function halfResetAria($) {
    if ($('.accordion__title').hasClass('active')) {
      $('.accordion--mobile-only').find('button').attr('aria-expanded', 'true');
    } else {
      $('.accordion--mobile-only').find('button').attr('aria-expanded', 'false');
      $('.accordion__content').removeClass('show-me');
    }
  } //full reset of ada controls


  var accordBreakpoint = 767; // Remove accordion button functionality on tablet+desktop

  function resetAria($) {
    if (window.innerWidth <= accordBreakpoint) {
      $('.accordion--mobile-only').find('button').prop('disabled', false);
      halfResetAria($);
    } else if (window.innerWidth > accordBreakpoint) {
      $('.accordion--mobile-only').find('button').attr('aria-expanded', 'true');
      $('.accordion--mobile-only').find('button').prop('disabled', true);
      $('.accordion__content').find('a').attr('tabindex', '0');
      $('.accordion__content').addClass('show-me');
    } else {}
  }

  resetAria($);
  $(window).resize(function () {
    setTimeout(function () {
      resetAria($);
    }, 100);
  }); //
  // //Tabbing index set to dropdown arrown for College and Schools page only.
  // if (window.location.href.indexOf('college-and-schools') > -1) {
  //   $('.accordion__title-arrow').attr('tabindex', '0');
  //
  //   document.onkeydown = function (evt) {
  //
  //     let element = document.activeElement;
  //
  //     if ($('.accordion__title-arrow').is(':focus')) {
  //       if (evt.keyCode === 13) {
  //         $(element).parent('.accordion__title').trigger('click');
  //       }
  //     }
  //   };
  // }
});

/***/ }),

/***/ "./resources/assets/js/app.js":
/*!************************************!*\
  !*** ./resources/assets/js/app.js ***!
  \************************************/
/*! no static exports found */
/***/ (function(module, exports) {

var $ = jQuery.noConflict(); // Add external link icon

$('.external-link--blue').append('<span><img src="/img/external-link--defaultblue.svg" alt="external-link-icon"></span>'); // Add external link icon

$('.external-link--white').append('<span><img src="/img/external-link--white.svg" alt="external-link-icon"></span>');
$(document).ready(function () {
  // Attaches the fancybox toolbar to the slide so the close button is always just above it for each instance
  var heroCta = document.querySelectorAll('a.fancybox');
  heroCta.forEach(function (fancyClick) {
    fancyClick.addEventListener('click', function () {
      $('.fancybox-toolbar').prependTo('.fancybox-slide');
    });
  }); //format the ribbon text

  $('main .ribbon--yellow').each(function (index, value) {
    var text = $(value).html();
    var tmp = $.trim(text).split(' ');
    var ret = '';

    for (var i = 0; i < tmp.length; i++) {
      ret += '<span>' + tmp[i] + '</span>';
    }

    $(value).html(ret);
  });
});

/***/ }),

/***/ "./resources/assets/js/cookie-policy.js":
/*!**********************************************!*\
  !*** ./resources/assets/js/cookie-policy.js ***!
  \**********************************************/
/*! no static exports found */
/***/ (function(module, exports) {

var $ = jQuery.noConflict();
$(document).ready(function () {
  //COOKIE GETTER/SETTER METHODS//

  /**
  * [setCookie() sets a cookie value that expires after set day(s)]
  * @param {string} cname  [name of the cookie]
  * @param {string} cvalue [value to store in the cookie]
  * @param {int} exdays [number of day(s) when the cookie expires]
  */
  function setCookie() {
    $.ajax({
      url: '/api/cookie/set?name=ucla-cookie-policy&val=accepted&min=525600',
      dataType: 'json',
      success: function success(data) {
        if (!data.success) {
          console.log('ERROR: there was a problem setting the policy');
        }

        ;
      }
    });
  }

  function getCookie() {
    return $.ajax({
      url: '/api/cookie/get?name=ucla-cookie-policy',
      dataType: 'json'
    });
  }

  getCookie('ucla-cookie-policy').done(function (data) {
    var theCookie = '';

    if (data.success && data.value === 'accepted') {
      theCookie = data.value;
    }

    if (theCookie === '') {
      $('#cookie-policy').css({
        'display': 'block'
      });
    } else {
      $('#cookie-policy').remove();
    } //set the cookie when the user clicks on the accept button


    $('#cookie-policy-btn').on('click', function () {
      setCookie('ucla-cookie-policy', 'accepted', 365);
      $('#cookie-policy').remove();
    });
  });
});

/***/ }),

/***/ "./resources/assets/js/dropdown.js":
/*!*****************************************!*\
  !*** ./resources/assets/js/dropdown.js ***!
  \*****************************************/
/*! no static exports found */
/***/ (function(module, exports) {

// =================================================
// TABLE OF CONTENTS: Functions
// =================================================
// (0.0) General Variable and Functions
// ------------------------------------------- * * *
// (0.1) safari detection
// (0.2) Commonly used IDs
// (0.3) Hamburger
// (1.0) Desktop Functionality
// ------------------------------------------- * * *
// (1.1) load desktop nav click functions
// (1.2) Listeners and Keystroke Events
// (1.3)  Browser window width
// (2.0) Mobile Functionality
// ------------------------------------------- * * *
// (2.1) load desktop nav functionality
// (2.2) Listeners and Keystroke Events
// (3.0) Select Menu Funtionailty
// ------------------------------------------- * * *
// (3.1) Pick Menu
// (3.2) Window Resizing
var $ = jQuery.noConflict();
$(document).ready(function () {
  /*==================================================================
  // (0.0) General Variable and Functions
  // ------------------------------------------- * * *
  // (0.1) safari detection
  // (0.2) Commonly used IDs
  // (0.3) Hamburger
  ================================================================= */
  // (0.1) Detect Safari, https://gist.github.com/darryl-snow/3822361
  eval(function (p, a, c, k, _e) {
    _e = function e(c) {
      return (c < a ? '' : _e(c / a)) + String.fromCharCode(c % a + 161);
    };

    while (c--) {
      if (k[c]) {
        p = p.replace(new RegExp(_e(c), 'g'), k[c]);
      }
    }

    return p;
  }('Ö ¡(){® Ø={\'¥\':¡(){¢ £.¥},\'©\':{\'±\':¡(){¢ £.©.±},\'¯\':¡(){¢ £.©.¯}},\'¬\':¡(){¢ £.¬},\'¶\':¡(){¢ £.¶},\'º\':¡(){¢ £.º},\'Á\':¡(){¢ £.Á},\'À\':¡(){¢ £.À},\'½\':¡(){¢ £.½},\'¾\':¡(){¢ £.¾},\'¼\':¡(){¢ £.¼},\'·\':¡(){¢ £.·},\'Â\':¡(){¢ £.Â},\'³\':¡(){¢ £.³},\'Ä\':¡(){¢ £.Ä},\'Ã\':¡(){¢ £.Ã},\'Å\':¡(){¢ £.Å},\'¸\':¡(){¢ £.¸}};$.¥=Ø;® £={\'¥\':\'¿\',\'©\':{\'±\':²,\'¯\':\'¿\'},\'¬\':\'¿\',\'¶\':§,\'º\':§,\'Á\':§,\'À\':§,\'½\':§,\'¾\':§,\'¼\':§,\'·\':§,\'Â\':§,\'³\':§,\'Ä\':§,\'Ã\':§,\'Å\':§,\'¸\':§};Î(® i=0,«=».ì,°=».í,¦=[{\'¤\':\'Ý\',\'¥\':¡(){¢/Ù/.¨(°)}},{\'¤\':\'Ú\',\'¥\':¡(){¢ Û.³!=²}},{\'¤\':\'È\',\'¥\':¡(){¢/È/.¨(°)}},{\'¤\':\'Ü\',\'¥\':¡(){¢/Þ/.¨(°)}},{\'ª\':\'¶\',\'¤\':\'ß Ñ\',\'¥\':¡(){¢/à á â/.¨(«)},\'©\':¡(){¢ «.¹(/ã(\\d+(?:\\.\\d+)+)/)}},{\'¤\':\'Ì\',\'¥\':¡(){¢/Ì/.¨(«)}},{\'¤\':\'Í\',\'¥\':¡(){¢/Í/.¨(°)}},{\'¤\':\'Ï\',\'¥\':¡(){¢/Ï/.¨(«)}},{\'¤\':\'Ð\',\'¥\':¡(){¢/Ð/.¨(«)}},{\'ª\':\'·\',\'¤\':\'å Ñ\',\'¥\':¡(){¢/Ò/.¨(«)},\'©\':¡(){¢ «.¹(/Ò (\\d+(?:\\.\\d+)+(?:b\\d*)?)/)}},{\'¤\':\'Ó\',\'¥\':¡(){¢/æ|Ó/.¨(«)},\'©\':¡(){¢ «.¹(/è:(\\d+(?:\\.\\d+)+)/)}}];i<¦.Ë;i++){µ(¦[i].¥()){® ª=¦[i].ª?¦[i].ª:¦[i].¤.Õ();£[ª]=É;£.¥=¦[i].¤;® ­;µ(¦[i].©!=²&&(­=¦[i].©())){£.©.¯=­[1];£.©.±=Ê(­[1])}ê{® Ç=Ö ë(¦[i].¤+\'(?:\\\\s|\\\\/)(\\\\d+(?:\\\\.\\\\d+)+(?:(?:a|b)\\\\d*)?)\');­=«.¹(Ç);µ(­!=²){£.©.¯=­[1];£.©.±=Ê(­[1])}}×}};Î(® i=0,´=».ä,¦=[{\'ª\':\'¸\',\'¤\':\'ç\',\'¬\':¡(){¢/é/.¨(´)}},{\'¤\':\'Ô\',\'¬\':¡(){¢/Ô/.¨(´)}},{\'¤\':\'Æ\',\'¬\':¡(){¢/Æ/.¨(´)}}];i<¦.Ë;i++){µ(¦[i].¬()){® ª=¦[i].ª?¦[i].ª:¦[i].¤.Õ();£[ª]=É;£.¬=¦[i].¤;×}}}();', 77, 77, 'function|return|Private|name|browser|data|false|test|version|identifier|ua|OS|result|var|string|ve|number|undefined|opera|pl|if|aol|msie|win|match|camino|navigator|mozilla|icab|konqueror|Unknown|flock|firefox|netscape|linux|safari|mac|Linux|re|iCab|true|parseFloat|length|Flock|Camino|for|Firefox|Netscape|Explorer|MSIE|Mozilla|Mac|toLowerCase|new|break|Public|Apple|Opera|window|Konqueror|Safari|KDE|AOL|America|Online|Browser|rev|platform|Internet|Gecko|Windows|rv|Win|else|RegExp|userAgent|vendor'.split('|')));
  var userbrowser = $.browser.browser(); //detected user browser

  if (userbrowser === 'Safari') {
    $('html').addClass('safari');
  } //End Detect Safari


  $('input[name="search"]').value = ''; // (0.2) Commonly used IDs

  var hamButton = document.getElementById('hamburger'),
      //  mainNavWrap = document.getElementById('ucla-menu-wrap');
  mainNav = document.getElementById('main-nav');
  header = document.getElementById('header');
  mainContent = document.getElementById('main-content');
  searchButton = document.getElementById('search-button'), searchMenu = document.getElementById('search-menu'), searchInputMobile = document.getElementById('gsc-i-id1'), searchInputDesktop = document.getElementById('gsc-i-id2'), $body = $('body'); // (0.3) The hamClick function toggles the opening and closing of the primary navigation on mobile devices when the hamburger is clicked.

  hamButton.onclick = function hamClick() {
    hamButton.classList.toggle('is-active'); //  mainNavWrap.classList.toggle('is-active');

    mainNav.classList.toggle('is-active');
    header.classList.toggle('is-active');
    mainContent.classList.toggle('active-menu');
    $('.primary-nav__second-level-nav').removeClass('is-active');

    if (hamButton.classList.contains('is-active')) {
      hamButton.setAttribute('aria-expanded', 'true');
      $('.primary-nav__top-level a, .gsc-search-button.gsc-search-button-v2, input#gsc-i-id1').attr('tabindex', '0');
      $(hamButton).attr('aria-label', 'Close mobile menu');
    } else {
      hamButton.setAttribute('aria-expanded', 'false');
      $('.primary-nav__top-level a, .primary-nav__go-back, .gsc-search-button.gsc-search-button-v2, input#gsc-i-id1').attr('tabindex', '-1');
      $(hamButton).attr('aria-label', 'Open mobile menu');
      $('.primary-nav__go-back').removeClass('is-active');
      $('.primary-nav__top-level').css('overflow-y', 'scroll');
    }
  };
  /*==================================================================
  // (1.0) Desktop Functionality
  // ------------------------------------------- * * *
  // (1.1) load desktop nav click functions
  // (1.2) Listeners and Keystroke Events
  // (1.3)  Browser window width
  ================================================================= */


  function desktopMenu($) {
    // (1.1) load desktop nav click function
    var secondLevelNav = document.getElementsByClassName('primary-nav__second-level-nav'); // If a menu item is in focus, mousing over another menu item will result in closing the focused menu.

    for (var i = 0; i < document.getElementsByClassName('primary-nav__top-level-link').length; i++) {
      document.getElementsByClassName('primary-nav__top-level-link')[i].addEventListener('mouseenter', function (event) {
        if ($('.primary-nav__top-level-link.link-desktop').hasClass('open')) {
          event.preventDefault();
          $('.primary-nav__top-level-link').removeClass('open');
          $('.primary-nav__second-level-nav').css('display', '');
        } else if ($('.primary-nav__top-level-link.link-desktop').is(':focus')) {
          event.preventDefault();
          $('.primary-nav__top-level-link.link-desktop').blur();
        }
      });
    } // If a menu item is focused and the mouse clicks anywhere else on the page the menu will close.


    $(document).click(function () {
      if ($('.primary-nav__top-level-link.link-desktop').hasClass('open')) {
        $('.primary-nav__top-level-link.link-desktop').removeClass('open');
        $(this).find('.primary-nav__second-level-nav').css('display', '');
      }
    });
    $('.primary-nav__top-level a, .gsc-search-button.gsc-search-button-v2, input#gsc-i-id1').attr('tabindex', '0'); // Add the width off the window to the submenu

    desktopSubmenuResize($); // This function controls what happens when you click the desktop menu search button

    searchButton.onclick = function () {
      $('.desktop-searches').toggleClass('is-active');
      searchMenu.classList.toggle('is-active');

      if ($('.desktop-searches').hasClass('is-active')) {
        $('input#gsc-i-id2').focus();
        $(searchButton).attr('aria-label', 'Close Search menu');
        $(searchButton).attr('aria-expanded', 'true');
        $('.search-button_image').attr('src', 'img/close--blue.svg');
        searchButton.classList.add('is-active');

        for (var _i = 0; _i < secondLevelNav.length; _i += 1) {
          secondLevelNav[_i].style.display = 'none';
          $('.primary-nav__second-level-nav.desktop-searches').css('display', '');
        }
      } else {
        $(searchButton).attr('aria-label', 'Open Search menu');
        $(searchButton).attr('aria-expanded', 'false');
        $('.search-button_image').attr('src', 'img/search--blue.svg');
        searchButton.classList.remove('is-active');

        for (var _i2 = 0; _i2 < secondLevelNav.length; _i2 += 1) {
          secondLevelNav[_i2].style.display = '';
        }
      }
    }; // (1.2) Listeners and Keystroke Events
    // These keystroke events control where a keyboard user is focused when using the tab key.


    document.onkeydown = function (evt) {
      var element = document.activeElement,
          // The active elemenet in focus
      searchValue = $('input#gsc-i-id2').val(); // search input box

      evt = evt || window.event; // when an event keydown event happens and the browser window is active.

      /* =======
      - Screen readers and keyboards read html from top to bottom. When pressing tab all browser will jump to the next link in the top to bottom order.
      - All added events change what the browser does by default. Add events only when necessary to fit the design.
      - When adding an keybinding event, add it in the order that it is found in the html. (i.e. - Skip nav is at the top of the html page so goes first in the order.)
        This is the basic keydown function that creates specific events to help guide keyboard users.
      Find your keydown number - https://keycode.info/
       // If object is selectable and is in focus
      if ($('.class-name').is(':focus')) {
         // if the tab key is pressed while the object is focused
        if (evts.keyCode === 9) {
           // Preform an action when the specific key is pressed
          event.preventDefault(); // May require override of default event
          $(element).prev('li').children('a').focus();
        }
       // Repeat again for element further down the html chain.
      } else if ($('.class-name').is(':focus')){
         // Repeat speceific key event action
       }
       ======= */

      if ($('.skip-nav__desktop-nav').is(':focus')) {
        if (evt.keyCode === 13) {
          // Return Key
          setTimeout(function () {
            $('#about-menu').focus();
          }, 100);
        }
      } else if ($('.skip-nav__desktop-search').is(':focus')) {
        if (evt.keyCode === 13) {
          // Return Key
          $('.desktop-searches').toggleClass('is-active');
          searchMenu.classList.toggle('is-active');

          if ($('.desktop-searches').hasClass('is-active')) {
            setTimeout(function () {
              $('input#gsc-i-id2').focus();
            }, 100);
          }
        }
      } else if ($('.primary-nav__top-level-link').is(':focus')) {
        if (evt.keyCode === 9 && event.shiftKey) {
          // Tab key
          $(element).next('.primary-nav__second-level-nav').css('display', '');
          $(element).removeClass('open');
        } else if (evt.keyCode === 9) {
          // Tab
          $(element).next('.primary-nav__second-level-nav').css('display', 'block');
          $(element).addClass('open');
        } else if (evt.keyCode === 39) {
          // Right Arrow
          $(element).next('.primary-nav__second-level-nav').css('display', '');
          $(element).parent().next().find('.primary-nav__top-level-link').focus();
          $(element).removeClass('open');
        } else if (evt.keyCode === 37) {
          // Left Arrow
          $(element).parent().prev().find('.primary-nav__top-level-link').focus();
          $(element).removeClass('open');
        }
      } else if ($('.primary-nav__second-level-nav > .primary-nav__stack-holder > .primary-nav__stack-holder-wrap > .primary-nav__menu-stack:last-child > li:last-child > a').is(':focus')) {
        if (evt.keyCode === 9) {
          // Tab Key
          $(element).parent().parent().parent().parent().parent().css('display', '');
          $(element).parent().parent().parent().parent().parent().prev().removeClass('open');
        }
      } else if ($('input#gsc-i-id2').is(':focus') && searchValue === '') {
        if (evt.keyCode === 9) {
          // Tab Key
          $('.desktop-searches').removeClass('is-active');
          searchMenu.classList.remove('is-active');
        }
      } else if ($('a.gsst_a').is(':focus')) {
        if (evt.keyCode === 9) {
          // Tab Key
          $('.desktop-searches').removeClass('is-active');
          searchMenu.classList.remove('is-active');
        }
      }
    };
  }
  /* (1.3) Browser window width
  This function detects the width of the browser window on load and if changed. It applies the found width to the primary navigation submenu as inline html. This prevents window sidescrolling and allows us to extend the width of the submenu past its parent width.
  ================================================================= */


  function desktopSubmenuResize($) {
    var w = $(window).width(),
        offset = $('.primary-nav__top-level').offset(),
        negOffset = offset.left * -1;
    $('.primary-nav__top-level a, .gsc-search-button.gsc-search-button-v2, input#gsc-i-id1').attr('tabindex', '0'); //Add the width off the window to the submenu

    $('.primary-nav__second-level-nav').css('width', w); //Offset the menu to the left of the window.

    $('.primary-nav__second-level-nav').css({
      'left': negOffset
    });
  }
  /*==================================================================
  2.0 Mobile Functionality
  ================================================================= */


  function mobileMenu($) {
    // (2.1) load mobile nav functionality
    var desktop = 1024; // Remove and widths that the desktop sets.

    $('.primary-nav__second-level-nav').removeAttr('style'); // Menu is closed onload so the links are not tabable until the menu is open

    setTimeout(function () {
      $('.primary-nav__top-level a, .primary-nav__go-back, .gsc-search-button.gsc-search-button-v2, input#gsc-i-id1').attr('tabindex', '-1');
    }, 10); // Click the top level link

    for (var i = 0; i < document.getElementsByClassName('primary-nav__top-level-link').length; i++) {
      document.getElementsByClassName('primary-nav__top-level-link')[i].addEventListener('click', function (event) {
        if (window.innerWidth < desktop) {
          event.preventDefault();
          $('.primary-nav__top-level').scrollTop(0);
          $('.primary-nav__second-level-nav').scrollTop(0);
          $(this).next('.primary-nav__second-level-nav').addClass('is-active');
          $(this).next('.primary-nav__second-level-nav').find('.primary-nav__go-back').addClass('is-active');
          $('.primary-nav__top-level').css('overflow-y', 'hidden');
        }
      });
    } // Click the go back menu link


    for (var _i3 = 0; _i3 < document.getElementsByClassName('primary-nav__go-back').length; _i3++) {
      document.getElementsByClassName('primary-nav__go-back')[_i3].addEventListener('click', function (event) {
        if (window.innerWidth < desktop) {
          event.preventDefault();
          $(this).parent('.primary-nav__second-level-nav').removeClass('is-active');
          $(this).removeClass('is-active');
          $('.primary-nav__top-level').css('overflow-y', 'scroll');
        }
      });
    } // (2.2) Listeners and Keystroke Events
    // - Screen readers and keyboards read html from top to bottom. When pressing tab all browser will jump to the next link in the top to bottom order.
    // - All added events change what the browser does by default. Add events only when necessary to fit the design.
    // - When adding an keybinding event, add it in the order that it is found in the html. (i.e. - Skip nav is at the top of the html page so goes first in the order.)
    // - See section 1.2 for key function example.


    document.onkeydown = function (evt) {
      var element = document.activeElement,
          // The active elemenet in focus
      //searchValue = $('input#gsc-i-id1').val();
      evts = evt || window.event; // when an event happen in the window

      if ($('.skip-nav__mobile-nav').is(':focus')) {
        if (evts.keyCode === 13) {
          // Return Key
          if ($('#hamburger').hasClass('is-active')) {
            event.preventDefault();
            $('#about-menu').focus();
          } else {
            $('#hamburger').trigger('click');
            $('#about-menu').focus();
          }
        }
      } else if ($('.skip-nav__mobile-search').is(':focus')) {
        if (evts.keyCode === 13) {
          // Return Key
          if ($('#hamburger').hasClass('is-active')) {
            event.preventDefault();
            $('input#gsc-i-id1').focus();
          } else {
            console.log('hello');
            $('#hamburger').trigger('click');
            $('input#gsc-i-id1').focus();
          }
        }
      } else if ($('#about-menu').is(':focus')) {
        if (evts.keyCode === 13) {
          // Return Key
          $(element).next('ul').find('.primary-nav__go-back').attr('tabindex', '0');
          setTimeout(function () {
            $(element).next('ul').find('.primary-nav__go-back').focus();
          }, 100);
        } else if (evts.keyCode === 9 && event.shiftKey) {
          event.preventDefault();
          $('input#gsc-i-id1').focus();
        } else if (evts.keyCode === 9) {
          // Tab Key
          event.preventDefault();
          $(element).parent().next('.primary-nav__top-level-li').children('a').focus();
        } // direct to mobile only links

      } else if ($('#campus-life-menu').is(':focus')) {
        // Hit enter to open the second level flyout
        if (evts.keyCode === 13) {
          // Return Key
          $(element).next('ul').find('.primary-nav__go-back').attr('tabindex', '0');
          setTimeout(function () {
            $(element).next('ul').find('.primary-nav__go-back').focus();
          }, 100);
        } else if (evt.keyCode === 9 && event.shiftKey) {
          // Tab and Shift Keys
          event.preventDefault();
          $(element).parent().prev('.primary-nav__top-level-li').children('a').focus();
        } else if (evt.keyCode === 9) {
          // Tab Key
          event.preventDefault();
          $(element).parent().next().next('.primary-nav__top-level-mobile-li').children('a').focus();
        } // direct to Give Button

      } else if ($('#public-transit-menu').is(':focus')) {
        // if you hit shift+tab it will go back up a menu item
        if (evts.keyCode === 9 && event.shiftKey) {
          // Tab and Shift Keys
          event.preventDefault();
          $(element).parent().prev('.primary-nav__top-level-mobile-li').children('a').focus();
        } else if (evts.keyCode === 9) {
          // Tab Key
          event.preventDefault();
          $(element).parent().next().find('a').focus();
        }
      } else if ($('.primary-nav__top-level-link').is(':focus')) {
        //if you hit enter it will open the second level flyout
        if (evts.keyCode === 13) {
          // Return Key
          $(element).next('ul').find('.primary-nav__go-back').attr('tabindex', '0');
          setTimeout(function () {
            $(element).next('ul').find('.primary-nav__go-back').focus();
          }, 100);
          $('.primary-nav__top-level').css('overflow-y', 'hidden'); // if you hit tab instead of enter it move to the next list item and skips the flyout
        } else if (evts.keyCode === 9 && event.shiftKey) {
          // Tab and Shift Keys
          event.preventDefault();
          $(element).parent().prev('.primary-nav__top-level-li').children('a').focus();
        } else if (evts.keyCode === 9) {
          // Tab Key
          event.preventDefault();
          $(element).parent().next('.primary-nav__top-level-li').children('a').focus();
        }
      } else if ($('.primary-nav__menu-stack.last-mobile > li:last-child > a').is(':focus')) {
        if (evts.keyCode === 9 && event.shiftKey) {
          // Tab and Shift Keys
          event.preventDefault();
          $(element).parent().prev('li').children('a').focus();
        } else if (evts.keyCode === 9) {
          // Tab Key
          event.preventDefault();
          $(window).scrollTop(0);
          $(element).parent().parent().parent().parent().siblings('.primary-nav__go-back').focus();
        }
      } else if ($('.primary-nav__second-level-nav > li > a').is(':focus')) {
        if (evts.keyCode === 9 && event.shiftKey) {
          // Tab and Shift Keys
          $(element).prev('li').children('a').focus();
        }
      } else if ($('#directory-menu').is(':focus')) {
        if (evts.keyCode === 9 && event.shiftKey) {
          // Tab and Shift Keys
          event.preventDefault();
          $(element).parent().prev().prev('.primary-nav__top-level-li').children('a').focus();
        } else if (evts.keyCode === 9) {
          $(element).parent().next('.primary-nav__top-level-li').children('a').focus();
        }
      } else if ($('#give-btn').is(':focus')) {
        if (evts.keyCode === 9 && event.shiftKey) {
          // Tab and Shift Keys
          event.preventDefault();
          $(element).parent().parent().prev('.primary-nav__top-level-mobile-li').children('a').focus();
        } else if (evts.keyCode === 9) {
          // Tab Key
          event.preventDefault();
          setTimeout(function () {
            hamButton.classList.toggle('is-active');
            mainNav.classList.toggle('is-active');
            mainNavWrap.classList.toggle('is-active');
            header.classList.toggle('is-active');
            mainContent.classList.toggle('active-menu');
            $('.primary-nav__second-level-nav').removeClass('is-active');
            $body.removeClass('no-scroll');

            if (hamButton.classList.contains('is-active')) {
              hamButton.setAttribute('aria-expanded', 'true');
              $('.primary-nav__top-level a, .gsc-search-button.gsc-search-button-v2, input#gsc-i-id1').attr('tabindex', '0');
              $(hamButton).attr('aria-label', 'Close mobile menu');
            } else {
              hamButton.setAttribute('aria-expanded', 'false');
              $('.primary-nav__top-level a, .primary-nav__go-back, .gsc-search-button.gsc-search-button-v2, input#gsc-i-id1').attr('tabindex', '-1');
              $(hamButton).attr('aria-label', 'Open mobile menu');
            }

            $('main#main-content a').first().focus();
          }, 1);
        }
      } else if ($('.primary-nav__top-level-mobile-link').is(':focus')) {
        if (evts.keyCode === 9 && event.shiftKey) {
          // Tab and Shift Keys
          event.preventDefault();
          $(element).parent().prev('.primary-nav__top-level-mobile-li').children('a').focus();
        } else if (evts.keyCode === 9) {
          event.preventDefault();
          $(element).parent().next('.primary-nav__top-level-mobile-li').children('a').focus();
        }
      } else if ($('.primary-nav__go-back').is(':focus')) {
        if (evts.keyCode === 9 && event.shiftKey) {
          // Tab and Shift Keys
          event.preventDefault();
        } else if (evts.keyCode === 13) {
          // Return Key
          $('.primary-nav__go-back').parent('.primary-nav__second-level-nav').removeClass('is-active');
          setTimeout(function () {
            $(element).parent().prev().focus();
          }, 100);
          $('.primary-nav__top-level').css('overflow-y', 'scroll');
        }
      } else {// do nothing
      }
    };
    /* Disable Mobile scroll when menu is open CSS for no-scroll in stylesheet */


    $('#hamburger').on('click', scrollDisable);

    function scrollDisable() {
      if (hamButton.classList.contains('is-active')) {
        $body.addClass('no-scroll');
      } else {
        $body.removeClass('no-scroll');
      }
    }
  }
  /*==================================================================
  3.0 Select Menu Funtionailty
  Sections 1 defines the difference in functionality between desktop and mobile devices. Section 2 determines which functionality to load based on the users browser window size.
  // (3.1) Define Menus
  // (3.2) Select a menu based on Window size.
  ================================================================= */
  // (3.1) Pick Menu - Defines the menu functionality and how they work on desktop vs. mobile devices.


  function pickMenu($) {
    var desktop = 1024;
    setTimeout(function () {
      $('input#gsc-i-id1, .gsc-search-button.gsc-search-button-v2').attr('tabindex', '-1');
      $('.primary-nav__go-back').removeClass('is-active');
    }, 500);

    if (window.innerWidth >= desktop) {
      // If the window is greater than or equal to 1024px reset these classes to use the desktop functionailty.
      desktopMenu($);
      $('.primary-nav__top-level-link').addClass('link-desktop');
      $('header, ul, nav, #hamburger, #header-wrap').removeClass('is-active');
      $('#main-content').removeClass('active-menu');
      $('.primary-nav__top-level').css('overflow-y', 'visible');
      $body.removeClass('no-scroll');
      $(searchButton).attr('aria-label', 'Open Search menu');
      $(searchButton).attr('aria-expanded', 'false');
      $('.desktop-searches').removeClass('is-active');
    } else if (window.innerWidth < desktop) {
      // If the window is smaller than 1024px reset these classes to use the desktop functionailty.
      mobileMenu($);
      $('.primary-nav__top-level-link').removeClass('link-desktop');
      $('header, ul, nav, #hamburger, #header-wrap').removeClass('is-active');
      $('#main-content').removeClass('active-menu');
      $('.primary-nav__top-level').css('overflow-y', 'scroll');
      $body.removeClass('no-scroll');
      $(searchButton).attr('aria-label', 'Open Search menu');
      $(searchButton).attr('aria-expanded', 'false');
      $('#search-menu').removeClass('is-active');
    }
  }

  pickMenu($); // (3.2)	Select which functionailty to load when the browser window is resized.

  var isSmall = false;
  $(window).resize(function () {
    // This runs the pickMenu function only when the window is resized above or equal to 1024px.
    if (window.innerWidth < 1024 && !isSmall || window.innerWidth >= 1024 && isSmall) {
      isSmall = !isSmall; // Run the pickMenu function from (3.1). Without the timing delay bugs appear in the nav.

      setTimeout(function () {
        pickMenu($);
      }, 10);
    } // This adds the browser window width to the primary navigation submenu for desktop only.


    if (window.innerWidth >= 1024) {
      // Run the desktopSubmenuResize function from (1.3)
      desktopSubmenuResize($);
    }
  });
});

/***/ }),

/***/ "./resources/assets/js/email-signup.js":
/*!*********************************************!*\
  !*** ./resources/assets/js/email-signup.js ***!
  \*********************************************/
/*! no static exports found */
/***/ (function(module, exports) {

var $ = jQuery.noConflict();
$(document).ready(function () {
  $('.email__signup').bind('submit', function () {
    var $email = $('input#control_EMAIL'),
        $firstName = $('input#control_FIRSTNAME'),
        $lastName = $('input#control_LASTNAME'),
        $zipcode = $('input#control_ZipCode'),
        form = $('.email__signup'),
        error = false,
        errormsg = '';
    $('.email__form-success-msg').css({
      'display': 'none'
    }); //reset

    $email.removeClass('error');
    $firstName.removeClass('error');
    $lastName.removeClass('error');
    $zipcode.removeClass('error'); //validate email

    if (!isEmail($email.val())) {
      $email.addClass('error');
      errormsg += '<span class="email__form-error-icon"></span> Enter a valid email<br/>';
      error = true;
    } //validate first name


    if (!isName($firstName.val())) {
      $firstName.addClass('error');
      errormsg += '<span class="email__form-error-icon"></span> Enter a valid first name<br/>';
      error = true;
    } //validate last name


    if (!isName($lastName.val())) {
      $lastName.addClass('error');
      errormsg += '<span class="email__form-error-icon"></span> Enter a valid last name<br/>';
      error = true;
    } //validate zipcode


    if (!isZipcode($zipcode.val())) {
      $zipcode.addClass('error');
      errormsg += '<span class="email__form-error-icon"></span> Enter a valid zipcode<br/>';
      error = true;
    } //if there is an error


    if (error) {
      $('.email__form-error-msg').html(errormsg.substring(0, errormsg.length - 5));
      $('.email__form-error-msg').css({
        'display': 'block'
      }); //no error in the form
    } else {
      $('.email__form-error-msg').css({
        'display': 'none'
      });
      $('.email__input-loading').addClass('show');
      var formData = decodeURIComponent($(form).serialize());
      $.ajax({
        type: 'POST',
        url: $(form).attr('action'),
        dataType: 'json',
        data: formData,
        success: function success(result) {
          if (result.success) {
            $('.email__form-success-msg').css({
              'display': 'block'
            });
            $('.email__signup input[type="text"]').val('');
            $('.email__signup input[type="text"]').removeClass('checked');
          } else {
            $('.email__form-error-msg').html('<span class="email__form-error-icon"></span> ' + result.msg);
            $('.email__form-error-msg').css({
              'display': 'block'
            });
          }

          $('.email__input-loading').removeClass('show');
        }
      });
    }

    return false;
  });
  $('.email__signup input#control_EMAIL').bind('keyup', function () {
    $(this).removeClass('error');

    if (isEmail($(this).val())) {
      $(this).addClass('checked');
    } else {
      $(this).removeClass('checked');
    }
  });
  $('.email__signup input#control_FIRSTNAME, .email__signup input#control_LASTNAME').bind('keyup', function () {
    $(this).removeClass('error');

    if (isName($(this).val())) {
      $(this).addClass('checked');
    } else {
      $(this).removeClass('checked');
    }
  });
  $('.email__signup input#control_LASTNAME').bind('keyup', function () {
    $(this).removeClass('error');

    if (isName($(this).val())) {
      $(this).addClass('checked');
    } else {
      $(this).removeClass('checked');
    }
  });
  $('.email__signup input#control_ZipCode').bind('keyup', function () {
    $(this).removeClass('error');

    if (isZipcode($(this).val())) {
      $(this).addClass('checked');
    } else {
      $(this).removeClass('checked');
    }
  });
}); //validate email

function isEmail(email) {
  var regex = /^([a-zA-Z0-9_.+-])+@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  return regex.test(email);
} //validate name


function isName(name) {
  var regex = /^.+$/;
  return regex.test(name);
} //validate zipcode


function isZipcode(zipcode) {
  var regex = /^.{5,}$/;
  return regex.test(zipcode);
}

/***/ }),

/***/ "./resources/assets/js/events.js":
/*!***************************************!*\
  !*** ./resources/assets/js/events.js ***!
  \***************************************/
/*! no static exports found */
/***/ (function(module, exports) {

var $ = jQuery.noConflict();
$(document).ready(function () {
  // add no-image modifier class to event cards that don't have images
  $('.event-card__image-overlay').each(function () {
    if ($(this).find('.event-card__image').attr('src') === '') {
      $(this).find('.event-card__image').remove();
      $(this).addClass('event-card--no-image');
    }
  });
});

/***/ }),

/***/ "./resources/assets/js/programs.js":
/*!*****************************************!*\
  !*** ./resources/assets/js/programs.js ***!
  \*****************************************/
/*! no static exports found */
/***/ (function(module, exports) {

var $ = jQuery.noConflict();
$(document).ready(function () {
  //elements
  var $search = $('#academics-programs-and-majors #search'),
      $button = $('#academics-programs-and-majors .btn.load'),
      $listWrapper = $('#academics-programs-and-majors .list-wrapper'); //$rows = $('#academics-programs-and-majors .list-wrapper .row');
  //set the list load

  setListLoad($); //enable the search

  $search.hideseek();
  $search.on('_after', function () {
    setListLoad($);
    getListCount($, $(this).val()); //if there is a keyword in searchfield

    if ($(this).val() !== '') {
      $('.countwrapper .clear-btn').addClass('show');
    } else {
      $('.countwrapper .clear-btn').removeClass('show');
    }
  }); //load more click event

  $button.bind('click', function () {
    //update the data-rows
    var rowsUpdate = Number($listWrapper.attr('data-rows')) + 50;
    $listWrapper.attr('data-rows', rowsUpdate); //set the List Load

    setListLoad($);
    return false;
  }); //On Submission

  $('form[name="program-search"]').submit(function () {
    return false;
  });
  $('.countwrapper .clear-btn').bind('click', function () {
    $search.val('');
    var e = $.Event('keyup', {
      keyCode: 8
    });
    $search.trigger(e);
    $('.countwrapper .clear-btn').removeClass('show');
    return false;
  }); //enable link click on the rows

  /*$rows.bind('click', function() {
  	let link = $(this).find('a').attr('href');
  window.open(link,'_self')
  });*/
  //get the list count

  getListCount($);
});
/*================================================================================
Definition: see's if the list has more items to load
================================================================================*/

function setListLoad($) {
  var $listWrapper = $('#academics-programs-and-majors .list-wrapper'),
      //$rows = $('#academics-programs-and-majors .list-wrapper .row'),
  $button = $('#academics-programs-and-majors .btn.load'),
      dataRows = Number($listWrapper.attr('data-rows')),
      rowHeight = 87; //if rows shown is less than the number of rows

  if (getNumRows($) < getTotalRows($)) {
    //add a more class
    $listWrapper.addClass('more');
    $button.addClass('more'); //set list max height

    var maxHeight = (dataRows + 1) * rowHeight;
    /* eslint-disable-line */
  } else {
    //remove more class
    $listWrapper.removeClass('more');
    $button.removeClass('more'); //set list max height

    var maxHeight = dataRows * rowHeight;
    /* eslint-disable-line */
  } //animate the max height


  $listWrapper.animate({
    'maxHeight': maxHeight + 'px'
  }, 200, function () {});
}
/*================================================================================
Definition: Get the Number of Rows Shown
================================================================================*/


function getNumRows($) {
  var $listWrapper = $('#academics-programs-and-majors .list-wrapper'),
      $rows = $('#academics-programs-and-majors .list-wrapper .row'),
      rowsShown = Number($listWrapper.attr('data-rows')); //get the number of show rows

  var count = 0;
  $rows.each(function (key, val) {
    if (String($(val).attr('style')) !== 'display: none;') {
      count++;
    }
  }); //if count is less than rowsShown

  if (count < rowsShown) {
    rowsShown = count;
  }

  return rowsShown;
}
/*================================================================================
Definition: get Total Rows to Show
================================================================================*/


function getTotalRows($) {
  var $rows = $('#academics-programs-and-majors .list-wrapper .row'),
      rowTotal = $rows.length; //get the number of show rows

  var count = 0;
  $rows.each(function (key, val) {
    if (String($(val).attr('style')) !== 'display: none;') {
      count++;
    }
  }); //if count is less than rowTotal

  if (count < rowTotal) {
    rowTotal = count;
  }

  return rowTotal;
}
/*================================================================================
Definition: Show a counter message
================================================================================*/


function getListCount($, searchText) {
  var $rows = $('#academics-programs-and-majors .list-wrapper .row'),
      $counter = $('#academics-programs-and-majors .search-container .counter');
  $count = 0;
  $rows.each(function (i, el) {
    if ($(el).css('display') === 'block') {
      $count++;
    }
  });

  if (typeof searchText === 'undefined' || searchText === '') {
    $counter.html($count + ' programs');
  } else {
    $counter.html($count + ' results matching &ldquo;' + searchText + '&rdquo;');
  }
}

/***/ }),

/***/ "./resources/assets/js/responsive-table.js":
/*!*************************************************!*\
  !*** ./resources/assets/js/responsive-table.js ***!
  \*************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

var $ = jQuery.noConflict(); // responsive-tables.js

$(document).ready(function () {
  var resizeId;
  setRowHeight($); //on window resize

  $(window).resize(function () {
    clearTimeout(resizeId);
    resizeId = setTimeout(function () {
      setRowHeight($);
    }, 100);
  });
});

function setRowHeight($) {
  $('td:first-child, th:first-child').each(function () {
    //reset rows
    $(this).css('height', '');
    $(this).parent('tr').css('height', ''); //grab heights

    var firstChildHeight = $(this).closest('tr').height(),
        firstCell = $(this).outerHeight(); //set height

    if (firstChildHeight > firstCell) {
      $(this).css('height', firstChildHeight + 'px');
    } else {
      $(this).parent('tr').css('height', firstCell + 'px');
    }
  });
}

/***/ }),

/***/ "./resources/assets/js/search.js":
/*!***************************************!*\
  !*** ./resources/assets/js/search.js ***!
  \***************************************/
/*! no static exports found */
/***/ (function(module, exports) {

var $ = jQuery.noConflict();
$(document).ready(function () {
  setInterval(function () {
    // Remove google branded background image from desktop search input box.
    $('#gsc-i-id2').attr('style', '');
  }, 10);
  /* Pagination control By default, Google displays 10 pages. Per comps, we added previous/left and next/right arrows and collapsed the total number of pages to 5. */

  if ($('#search').length > 0) {
    setInterval(function () {
      if ($('.gsc-cursor-box .gsc-cursor').length > 0) {
        if ($('.pagination-container').length === 0) {
          $('.gsc-cursor-box.gs-bidi-start-align').wrap('<div class="pagination-container"></div>');
          $('.pagination-container').prepend('<div class="gsc-cursor-page arrow-left"></div>');
          $('.pagination-container').append('<div class="gsc-cursor-page arrow-right"></div>');
          $('.gsc-cursor-page.arrow-left').bind('click', function () {
            $('.gsc-cursor-box.gs-bidi-start-align').scrollTo('-=167px', 500);
          });
          $('.gsc-cursor-page.arrow-right').bind('click', function () {
            $('.gsc-cursor-box.gs-bidi-start-align').scrollTo('+=167px', 500);
          });
          $('.gsc-cursor-box.gs-bidi-start-align').scrollTo($('.gsc-cursor-current-page'));
        }
      }
    }, 500);
  }
});

/***/ }),

/***/ "./resources/assets/js/slider.js":
/*!***************************************!*\
  !*** ./resources/assets/js/slider.js ***!
  \***************************************/
/*! no static exports found */
/***/ (function(module, exports) {

var $ = jQuery.noConflict();
$(document).ready(function () {
  // slider for happenings events feed
  var eventsSlider = {
    dots: true,
    arrows: false,
    infinite: false,
    slidesToShow: 1,
    slidesToScroll: 1,
    customPaging: function customPaging(slider, i) {
      return '<button class="visuallyhidden">Slide ' + (i + 1) + '</button>';
    },
    prevArrow: '<div class="button-wrap prev"><button type="button" value="previous" class="slick-prev"><svg viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><title>Arrow Left</title><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><polygon fill="#ffffff" transform="translate(12.295000, 12.000000) scale(-1, 1) translate(-12.295000, -12.000000)" points="8.59 16.59 13.17 12 8.59 7.41 10 6 16 12 10 18"></polygon></g></svg></button></div>',
    nextArrow: '<div class="button-wrap next"><button type="button" value="next" class="slick-next"><svg viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><title>Arrow Right</title><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><polygon fill="#ffffff" points="9 16.59 13.3265857 12 9 7.41 10.3319838 6 16 12 10.3319838 18"></polygon></g></svg></button></div>',
    mobileFirst: true,
    responsive: [{
      breakpoint: 620,
      settings: {
        dots: false,
        arrows: true,
        slidesToShow: 2
      }
    }, {
      breakpoint: 930,
      settings: {
        dots: false,
        arrows: true,
        slidesToShow: 3
      }
    }, {
      breakpoint: 1170,
      settings: {
        dots: false,
        arrows: true,
        slidesToShow: 4,
        slidesToScroll: 2
      }
    }]
  },
      runEventsSlick = function runEventsSlick() {
    $('.events-carousel').not('.slick-initialized').slick(eventsSlider);
  }; // slick initialization while document ready


  runEventsSlick(); // slider for spredfast social feed

  $('.social-tile-container').slick({
    arrows: false,
    dots: true,
    infinite: false,
    slidesToShow: 1,
    slidesToScroll: 1,
    customPaging: function customPaging(slider, i) {
      return '<button class="visuallyhidden">Slide ' + (i + 1) + '</button>';
    },
    speed: 300,
    variableWidth: false,
    mobileFirst: true,
    responsive: [{
      breakpoint: 1024,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 2
      }
    }, {
      breakpoint: 768,
      settings: {
        slidesToShow: 3
      }
    }, {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        dots: true
      }
    }]
  }); //   runSocialSlick = function () {
  //     $('.social-post__feed').not('.slick-initialized').slick(socialSlider);
  //     executeTabFix();
  //   	};
  //
  // /* ADA Tab Fix */
  // function executeTabFix () {
  //   $('.social-post__feed').find('.twitter__url').attr('tabindex', '0');
  //   $('.social-post__feed').find('.instagram__url').attr('tabindex', '0');
  //   // fix double tabbing issue for first item
  //   $('.social-post__feed').find('.twitter').attr('tabindex', '-1');
  //   $('.social-post__feed').find('.instagram').attr('tabindex', '-1');
  // }
  // slick initialization while document ready
  //runSocialSlick();
  // listen to jQuery's window resize
  // $(window).on('resize', function () {
  //   		let width = $(window).width();
  //   if (width < maxWidth) {
  //     // reinit slick while window's width is less than maximum width (1280px)
  //     runSocialSlick();
  // 	    }
  // 		});
  //
  // $('#spredfast .instagram__url, #spredfast .twitter__url').mouseleave(function () {
  //   executeTabFix();
  // });
});

/***/ }),

/***/ "./resources/assets/js/sort-table.js":
/*!*******************************************!*\
  !*** ./resources/assets/js/sort-table.js ***!
  \*******************************************/
/*! no static exports found */
/***/ (function(module, exports) {

var $ = jQuery.noConflict(); // sort-tables.js

$(document).ready(function () {
  var $table = $('#sortTable');
  $table.stupidtable_settings({
    will_manually_build_table: true
  });
  $('#sortTable thead th:first-child').trigger('click');
  /***
   sort by last name, custom data type for stupidtable
   https://github.com/joequery/Stupid-Table-Plugin#creating-your-own-data-types
   definition: sorts column by "Lastname Firstname" instead of the default "string"
   usage: add data-sort="lastname" to the th tag in the table that contains the names, in the applicable blade template
  ***/

  $table.stupidtable({
    'lastname': function lastname(a, b) {
      var pattern = '^[w"-,.][^0-9_!¡?÷?¿/\\+=@#$%ˆ&*(){}|~<>;:[]]{2,}$';
      var re = new RegExp(pattern);
      var aName = re.exec(a);
      var bName = re.exec(b);
      return aName - bName;
    }
  });
  $table.animate({
    opacity: 1
  }, 500, function () {});
});

/***/ }),

/***/ "./resources/assets/js/weather.js":
/*!****************************************!*\
  !*** ./resources/assets/js/weather.js ***!
  \****************************************/
/*! no static exports found */
/***/ (function(module, exports) {

var $ = jQuery.noConflict();
$(document).ready(function () {
  var weatherEndpoint = 'https://weather.atmos.ucla.edu/scripts/wx.php';
  var weatherLink = 'https://weather.atmos.ucla.edu/';
  var fog = ['Fog', 'Haze'];
  var partCloud = ['Partly Cloudy', 'High Clouds', 'Partly Cloudy w/ Gusts', 'Partly Cloudy w/ Wind', 'Cloudy', 'Cloudy w/ Wind Gusts', 'Cloudy w/ Wind', 'Mostly Cloudy', 'Clouds'];
  var overcast = ['Chance of Showers', 'Likely Showers', 'Overcast', 'Smog', 'Smoke', 'Dust', 'Snowflake Cold', 'Sandstorm', 'Tornado', 'Storm Warning', 'Hurricane Warning'];
  var lightRain = ['Raindrops', 'Raindrop'];
  var rain = ['Rain', 'Heavy Rain', 'Rain w/ Wind', 'Sleet', 'Sleet Storm', 'Snow', 'Snow Storms', 'Snow w/ Wind', 'Storm Showers', 'Thunderstorms', 'Hail', 'Lightning', 'Frequent Showers', 'Showers', 'Snow w/ Thunderstorms', 'Sprinkles', 'Storm w/ Showers', 'Mixed Rain', 'Tsunami', 'Hurricane'];
  var partSun = ['Partly Sunny', 'Partly Clear'];
  var sun = ['Sunny', 'Windy', 'Solar Eclipse', 'Hot', 'Sunny w/ Light Wind', 'Clear', 'Clear Skies', 'Strong Winds', 'Earthquake', 'Fire', 'Flood', 'Volcano', 'Small Craft Advisory', 'Gale Warning'];
  var moon = ['Lunar Eclipse', 'Meteor'];
  $.get(weatherEndpoint, function (data) {
    data = JSON.parse(data);
    data.description = data.description.trim();
    data.time = data.time.trim();
    var link = $('<a href="' + weatherLink + '"></a>');
    var icon = 'sun';
    var is_raining = false;

    if ($.inArray(data.description, sun) !== -1) {
      icon = 'sunny';
    } else if ($.inArray(data.description, rain) !== -1) {
      icon = 'rain';
      is_raining = true;
    } else if ($.inArray(data.description, fog) !== -1) {
      icon = 'foggy';
    } else if ($.inArray(data.description, partCloud) !== -1) {
      icon = 'partly-cloudy';
    } else if ($.inArray(data.description, overcast) !== -1) {
      icon = 'overcast';
      is_raining = true;
    } else if ($.inArray(data.description, lightRain) !== -1) {
      icon = 'rain';
      is_raining = true;
    } else if ($.inArray(data.description, partSun) !== -1) {
      icon = 'partly-sunny';
    } else if ($.inArray(data.description, moon) !== -1) {
      icon = 'moon';
    }

    if (!is_raining && data.time !== 'day') {
      icon = 'moon';
    } //link = link.appendTo('#weather');


    link = $('<img src="/img/weather/' + icon + '--black.svg" alt="" /><p>' + data.air_temp + '&deg; and ' + data.description + '</p>');
    link.appendTo('#weather');
  });
});

/***/ }),

/***/ "./resources/assets/js/website-feedback.js":
/*!*************************************************!*\
  !*** ./resources/assets/js/website-feedback.js ***!
  \*************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

/* Removing the website-feedback pop-up modal in favor of opening external link in new window
var $ = jQuery.noConflict();

$(document).ready( function() {

	function setCookie(cname,cvalue,exdays) {
		var d = new Date();
		d.setTime(d.getTime()+(exdays*24*60*60*1000));
		var expires = "expires="+d.toGMTString();
		document.cookie = cname + "=" + cvalue + "; " + expires;
	}

	var surveyClicked = 0;

	//remove cookie, allow surveymonkey pop-up
	setCookie('smcx_0_last_shown_at','',-1);

	//Surveymonkey.com feedback pop-up when the .website-feedback class is clicked
	$(".website-feedback").on( "click", function() {

		surveyClicked++;

		(function(t,e,s,o){var n,c,l;t.SMCX=t.SMCX||[],e.getElementById(o)||(n=e.getElementsByTagName(s),c=n[n.length-1],l=e.createElement(s),l.type="text/javascript",l.async=!0,l.id=o,l.src=["https:"===location.protocol?"https://":"http://","widget.surveymonkey.com/collect/website/js/tRaiETqnLgj758hTBazgd5Qwtp8zVs7_2BfF4TpOvbZovGZ4bR75LGlXBafcIdXi4h.js"].join(""),c.parentNode.insertBefore(l,c));})(window,document,"script","smcx-sdk");

		if(surveyClicked <= 1) {
			$('<div class="survey-backdrop" style="display:none;"></div>').appendTo("body");
			$(".survey-backdrop").fadeIn();
		}

		if(surveyClicked > 1) {
			alert("Thank you for your feedback.");
		}

		$('body').on('DOMNodeInserted', '.smcx-widget', function () {
			$(".smcx-modal-close").on( "click", function() {
				$(".survey-backdrop").fadeOut();
			});
			$(".survey-backdrop").on( "click", function() {
				$(".survey-backdrop").fadeOut();
				$(".smcx-modal-close").trigger("click");
			});
		});
    });

});
*/

/***/ }),

/***/ "./resources/assets/sass/app.scss":
/*!****************************************!*\
  !*** ./resources/assets/sass/app.scss ***!
  \****************************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 0:
/*!************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************!*\
  !*** multi ./resources/assets/js/app.js ./resources/assets/js/dropdown.js ./resources/assets/js/slider.js ./resources/assets/js/weather.js ./resources/assets/js/email-signup.js ./resources/assets/js/events.js ./resources/assets/js/responsive-table.js ./resources/assets/js/programs.js ./resources/assets/js/accordion.js ./resources/assets/js/sort-table.js ./resources/assets/js/search.js ./resources/assets/js/cookie-policy.js ./resources/assets/js/website-feedback.js ./resources/assets/sass/app.scss ***!
  \************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! /opt/atlassian/pipelines/agent/build/www/resources/assets/js/app.js */"./resources/assets/js/app.js");
__webpack_require__(/*! /opt/atlassian/pipelines/agent/build/www/resources/assets/js/dropdown.js */"./resources/assets/js/dropdown.js");
__webpack_require__(/*! /opt/atlassian/pipelines/agent/build/www/resources/assets/js/slider.js */"./resources/assets/js/slider.js");
__webpack_require__(/*! /opt/atlassian/pipelines/agent/build/www/resources/assets/js/weather.js */"./resources/assets/js/weather.js");
__webpack_require__(/*! /opt/atlassian/pipelines/agent/build/www/resources/assets/js/email-signup.js */"./resources/assets/js/email-signup.js");
__webpack_require__(/*! /opt/atlassian/pipelines/agent/build/www/resources/assets/js/events.js */"./resources/assets/js/events.js");
__webpack_require__(/*! /opt/atlassian/pipelines/agent/build/www/resources/assets/js/responsive-table.js */"./resources/assets/js/responsive-table.js");
__webpack_require__(/*! /opt/atlassian/pipelines/agent/build/www/resources/assets/js/programs.js */"./resources/assets/js/programs.js");
__webpack_require__(/*! /opt/atlassian/pipelines/agent/build/www/resources/assets/js/accordion.js */"./resources/assets/js/accordion.js");
__webpack_require__(/*! /opt/atlassian/pipelines/agent/build/www/resources/assets/js/sort-table.js */"./resources/assets/js/sort-table.js");
__webpack_require__(/*! /opt/atlassian/pipelines/agent/build/www/resources/assets/js/search.js */"./resources/assets/js/search.js");
__webpack_require__(/*! /opt/atlassian/pipelines/agent/build/www/resources/assets/js/cookie-policy.js */"./resources/assets/js/cookie-policy.js");
__webpack_require__(/*! /opt/atlassian/pipelines/agent/build/www/resources/assets/js/website-feedback.js */"./resources/assets/js/website-feedback.js");
module.exports = __webpack_require__(/*! /opt/atlassian/pipelines/agent/build/www/resources/assets/sass/app.scss */"./resources/assets/sass/app.scss");


/***/ })

/******/ });
//# sourceMappingURL=main.js.map

jQuery(document).ready(function($){
    $('.my-custom-datepicker-field').datepicker({
        dateFormat: 'dd-mm-yy', //maybe you want something like this
        showButtonPanel: true
    });
});

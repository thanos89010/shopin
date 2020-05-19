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
/******/ 	return __webpack_require__(__webpack_require__.s = 1);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/front.js":
/*!*******************************!*\
  !*** ./resources/js/front.js ***!
  \*******************************/
/*! no static exports found */
/***/ (function(module, exports) {

$(function () {
  $('.shop-detail-carousel').owlCarousel({
    items: 1,
    thumbs: true,
    nav: false,
    dots: false,
    loop: true,
    autoplay: true,
    thumbsPrerendered: true
  });
  $('#main-slider').owlCarousel({
    items: 1,
    nav: false,
    dots: true,
    autoplay: true,
    autoplayHoverPause: true,
    dotsSpeed: 400
  });
  $('#get-inspired').owlCarousel({
    items: 1,
    nav: false,
    dots: true,
    autoplay: true,
    autoplayHoverPause: true,
    dotsSpeed: 400
  });
  $('.product-slider').owlCarousel({
    items: 1,
    dots: true,
    nav: false,
    responsive: {
      480: {
        items: 1
      },
      765: {
        items: 2
      },
      991: {
        items: 3
      },
      1200: {
        items: 5
      }
    }
  }); // productDetailGallery(4000);

  utils(); // ------------------------------------------------------ //
  // For demo purposes, can be deleted
  // ------------------------------------------------------ //

  var stylesheet = $('link#theme-stylesheet');
  $("<link id='new-stylesheet' rel='stylesheet'>").insertAfter(stylesheet);
  var alternateColour = $('link#new-stylesheet');

  if ($.cookie("theme_csspath")) {
    alternateColour.attr("href", $.cookie("theme_csspath"));
  }

  $("#colour").change(function () {
    if ($(this).val() !== '') {
      var theme_csspath = 'css/style.' + $(this).val() + '.css';
      alternateColour.attr("href", theme_csspath);
      $.cookie("theme_csspath", theme_csspath, {
        expires: 365,
        path: document.URL.substr(0, document.URL.lastIndexOf('/'))
      });
    }

    return false;
  });
});
$(window).on('load', function () {
  $(this).alignElementsSameHeight();
});
$(window).resize(function () {
  setTimeout(function () {
    $(this).alignElementsSameHeight();
  }, 150);
});
/* product detail gallery */
// function productDetailGallery(confDetailSwitch) {
//     $('.thumb:first').addClass('active');
//     timer = setInterval(autoSwitch, confDetailSwitch);
//     $(".thumb").click(function(e) {
//
// 	switchImage($(this));
// 	clearInterval(timer);
// 	timer = setInterval(autoSwitch, confDetailSwitch);
// 	e.preventDefault();
//     }
//     );
//     $('#mainImage').hover(function() {
// 	clearInterval(timer);
//     }, function() {
// 	timer = setInterval(autoSwitch, confDetailSwitch);
//     });
//
//     function autoSwitch() {
// 	var nextThumb = $('.thumb.active').closest('div').next('div').find('.thumb');
// 	if (nextThumb.length == 0) {
// 	    nextThumb = $('.thumb:first');
// 	}
// 	switchImage(nextThumb);
//     }
//
//     function switchImage(thumb) {
//
// 	$('.thumb').removeClass('active');
// 	var bigUrl = thumb.attr('href');
// 	thumb.addClass('active');
// 	$('#mainImage img').attr('src', bigUrl);
//     }
// }

function utils() {
  /* click on the box activates the radio */
  $('#checkout').on('click', '.box.shipping-method, .box.payment-method', function (e) {
    var radio = $(this).find(':radio');
    radio.prop('checked', true);
  });
  /* click on the box activates the link in it */

  $('.box.clickable').on('click', function (e) {
    window.location = $(this).find('a').attr('href');
  });
  /* external links in new window*/

  $('.external').on('click', function (e) {
    e.preventDefault();
    window.open($(this).attr("href"));
  });
  /* animated scrolling */

  $('.scroll-to, .scroll-to-top').click(function (event) {
    var full_url = this.href;
    var parts = full_url.split("#");

    if (parts.length > 1) {
      scrollTo(full_url);
      event.preventDefault();
    }
  });

  function scrollTo(full_url) {
    var parts = full_url.split("#");
    var trgt = parts[1];
    var target_offset = $("#" + trgt).offset();
    var target_top = target_offset.top - 100;

    if (target_top < 0) {
      target_top = 0;
    }

    $('html, body').animate({
      scrollTop: target_top
    }, 1000);
  }
}

$.fn.alignElementsSameHeight = function () {
  $('.same-height-row').each(function () {
    var maxHeight = 0;
    var children = $(this).find('.same-height');
    children.height('auto');

    if ($(document).width() > 768) {
      children.each(function () {
        if ($(this).innerHeight() > maxHeight) {
          maxHeight = $(this).innerHeight();
        }
      });
      children.innerHeight(maxHeight);
    }

    maxHeight = 0;
    children = $(this).find('.same-height-always');
    children.height('auto');
    children.each(function () {
      if ($(this).innerHeight() > maxHeight) {
        maxHeight = $(this).innerHeight();
      }
    });
    children.innerHeight(maxHeight);
  });
};

/***/ }),

/***/ 1:
/*!*************************************!*\
  !*** multi ./resources/js/front.js ***!
  \*************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! C:\Users\Anastasia\Desktop\shopin\resources\js\front.js */"./resources/js/front.js");


/***/ })

/******/ });
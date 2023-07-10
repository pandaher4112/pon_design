jQuery(function () {
  //ヒーローの高さを100%に調整
  heroHeight();

  jQuery(window).resize(function () {
    heroHeight();
  });

  function heroHeight() {
    var windowHeight = jQuery(window).height();
    jQuery(".p-hero").height(windowHeight);
  }

  //ページ内スクロール
  jQuery('a[href^="#"]').on("click", function () {
    var speed = 300;
    var href = jQuery(this).attr("href");
    var target = jQuery(href == "#" || href == "" ? "html" : href);
    var position = target.offset().top;
    jQuery("html, body").animate(
      {
        scrollTop: position,
      },
      speed,
      "swing"
    );
    return false;
  });

  //ページトップへ戻る
  var $pageTop = jQuery(".bl-topBtn");
  jQuery(window).scroll(function () {
    if (jQuery(this).scrollTop() > 300) {
      $pageTop.fadeIn();
    } else {
      $pageTop.fadeOut();
    }
  });
  $pageTop.on("click", function () {
    jQuery("body,html").animate(
      {
        scrollTop: 0,
      },
      300
    );
    return false;
  });

  //スクロールに応じてヘッダーの背景色が変化
  jQuery(window).scroll(function () {
    console.log ("top" + jQuery(this).scrollTop());
    if (jQuery(this).scrollTop() > 0) {
      jQuery(".header").addClass("is-active");
    } else {
      jQuery(".header").removeClass("is-active");
    }
  });

  //スクロールに応じてヘッダーの背景色が変化
  jQuery(window).scroll(function () {
    if (jQuery(this).scrollTop() >= 116) {
      jQuery(".p-newsPan").addClass("is-active2");
    } else {
      jQuery(".p-newsPan").removeClass("is-active2");
    }
  });

  //ハンバーガーメニュー
  var btnMenu = jQuery(".openBtn");
  var globalNav = jQuery(".bl-humbergarMenuNav");

  btnMenu.on("click", function () {
    btnMenu.toggleClass("active");
    globalNav.toggleClass("show");
  });

  //IE11対応 sitcky
  if (jQuery(".p-breadcrumb").length) {
    var elements = jQuery(".p-breadcrumb");
    Stickyfill.add(elements);
  }
});

const swiper = new Swiper('.js-swiper', {
  // Optional parameters
  autoplay: {
    delay: 4000,
  },
  speed: 500,
  loop: true,
  effect: "fade",

  // If we need pagination
  pagination: {
    el: ".swiper-pagination",
  },

  // Navigation arrows
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },

  // And if we need scrollbar
  scrollbar: {
    el: ".swiper-scrollbar",
  },
});

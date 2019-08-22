(function($){
  $('ul#primary-menu').addClass('navbar-nav ml-auto my-2 my-lg-0');
  $('ul#primary-menu li').addClass('nav-item');
  $('ul#primary-menu li a').addClass('nav-link js-scroll-trigger');
  $('.menu-all-pages-container').addClass('collapse navbar-collapse');
  $('.menu-all-pages-container').attr("id","navbarResponsive");
})(jQuery);
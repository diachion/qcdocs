// ------------ scroll down ------------
    $(".downarrow").click(function(){
      $("html, body").animate({
          scrollTop: $( $.attr(this, "href") ).offset().top+2
      }, 500);
      return false;
    });

// ------------ navbar changing --------------
$(window).scroll(function(){
  if( $(window).scrollTop() > $("header").height() ){
    $(".navbar").addClass("navbar-default");
    $(".navbar").removeClass("navbar-inverse");
  } else {
    $(".navbar").removeClass("navbar-default");
    $(".navbar").addClass("navbar-inverse");
  }
});
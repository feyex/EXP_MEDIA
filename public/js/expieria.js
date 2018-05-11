function collapseNavbar() {
  $(".navbar").offset().top>50?$(".fixed-top").addClass("top-nav-collapse"): $(".fixed-top").removeClass("top-nav-collapse")
}

$(window).scroll(collapseNavbar),
$(document).ready(collapseNavbar),
$(function() {
  $("a.page-scroll").bind("click", function(e) {
      var t=$(this);
      $("html, body").stop().animate( {
          scrollTop: $(t.attr("href")).offset().top
      }
      , 1500, "easeInOutExpo"), e.preventDefault()
  }
  )
});

$( document ).ready(function() {
    $(".cta").click(function() {
         $(".a").slideDown(250);
         // if form is visible
         if ($("form").is(":visible")) {
             // change .cta cursor to default
             $(".cta").css('cursor', 'default');
         }
         $("#email").focus();
     });
});

$( document ).ready(function() {
    $(".ctb ").click(function() {
         $(".b").slideDown(250);
         // if form is visible
         if ($("form").is(":visible")) {
             // change .cta cursor to default
             $(".ctb").css('cursor', 'default');
         }
         $("#email").focus();
     });
});

$( document ).ready(function() {
    $(".ctc ").click(function() {
         $(".c").slideDown(250);
         // if form is visible
         if ($("form").is(":visible")) {
             // change .cta cursor to default
             $(".ctc").css('cursor', 'default');
         }
         $("#email").focus();
     });
});
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

$(document).ready(function () {
    $("#project_type").change(function () {
        var val = $(this).val();

        switch (val) {

            case 'Script':
                $("#project_category").html("<option value='Film genres'>Film genres</option><option value='TV genres'>TV genres</option>");
                break;

            case 'Book':
                $("#project_category").html("<option value='Action adventure'>Action adventure</option><option value='Biography'>Biography</option><option value='Children’s'>Children’s</option><option value='Comedy'>Comedy</option><option value='Drama'>Drama</option><option value='Romance'>Romance</option><option value='Faith based/ spiritual'>Faith based/ spiritual</option><option value='Family'>Family</option><option value='Historical/period'>Historical/period</option><option value='Sci-fi/ fantasy'>Sci-fi/ fantasy</option><option value='Teens/young adult'>Teens/young adult</option>");
                break;

            case 'Reality':
                $("#project_category").html("<option value='Competition show'>Competition show</option><option value='Talk show'>Talk show</option>");
                break;

            case 'Documentary':
                $("#project_category").html("<option value='Documentary'>Documentary</option>");
                break;
            
            case 'Series':
                $("#project_category").html("<option value='Action adventure'>Action adventure</option><option value='Animation'>Animation</option><option value='Comedy'>Comedy</option><option value='Drama'>Drama</option><option value='Education/learning'>Education/learning</option><option value='Thriller'>Thriller</option><option value='Family'>Family</option><option value='Sci-fi'>Sci-fi</option>");
                break;

            
            case 'Treatment':
                $("#project_category").html("<option value='Book genres'>Book genres</option><option value='Film genres'>Film genres</option><option value='Reality genres'>Reality genres</option><option value='TV genres'>TV genres</option><option value='Web series genres'>Web series genres</option>");
                break;

            case 'Ideation':
                $("#project_category").html("<option value='Book genres'>Book genres</option><option value='Film genres'>Film genres</option><option value='Reality genres'>Reality genres</option><option value='TV genres'>TV genres</option><option value='Web series genres'>Web series genres</option>");
                break;


        
            default:
                $("#project_category").html("<option value=''>-- Select One --</option>");
                break;
        }
    });
});
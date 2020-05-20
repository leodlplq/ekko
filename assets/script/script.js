



$(document).ready(()=>{

    $(window).scroll(function() {
        
        if ($(document).scrollTop() > 150) {
          $(".right").addClass("scrolled");
        } else {
          $(".right").removeClass("scrolled");
        }
      });
});

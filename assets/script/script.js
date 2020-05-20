



$(document).ready(()=>{
    
    $(window).scroll(function() {
        if ($(document).scrollTop() > 50) {
          $(".right").addClass("scrolled");
        } else {
          $(".right").removeClass("scrolled");
        }
      });
});

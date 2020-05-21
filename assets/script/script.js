



$(document).ready(()=>{
    function createGlide(){
      var select = document.querySelector('.glide')

      var glide = new Glide('.glide', {
        type: select.value,
        focusAt: 'center',
        perView: 1
      })
  
      select.addEventListener('change', function (event) {
        glide.update({
          type: event.target.value
        })
      })
  
      glide.mount()
    }
    
    $(window).scroll(function() {
        

        console.log($(document).scrollTop())
        if ($(document).scrollTop() > 150) {
          $(".right").addClass("scrolled");
        } else {
          $(".right").removeClass("scrolled");
        } 

        if ($(document).scrollTop() > 1000) {
            $(".infos").addClass("animate");
          } else {
            $(".infos").removeClass("animate");
          } 

        if ($(document).scrollTop() > 1150) {
            
          setTimeout(()=>{
            createGlide()
            $('.caroussel').show  ();
            $('.caroussel').addClass("scrolledPlusC");
          
          }, 1000);

            $(".right").addClass("scrolledPlus");
          } else {
            $(".right").removeClass("scrolledPlus");
            $('.caroussel').removeClass("scrolledPlusC");
            setTimeout(()=>{
             
              $('.caroussel').hide();
            
            }, 1000);
          } 



      });
});

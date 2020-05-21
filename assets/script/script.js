



$(document).ready(()=>{
    setTimeout(()=>{
      $('.loading').addClass('over');
    },2000);


    setTimeout(()=>{
      $('.loading').hide();
    },3001);

    $('.projectbutton').on('click', ()=>{
      $(document).scrollTop(1673.75);
    });

    $('.accueilbutton').on('click', ()=>{
      $(document).scrollTop(0);
    });
    
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

        if ($(document).scrollTop() > 1200) {
            
          setTimeout(()=>{
            createGlide()
            $('.caroussel').show();
            $('.logoTop').show();
            $('.caroussel').addClass("scrolledPlusC");
            $('.logoTop').addClass("scrolledPlusL");
            
          
          }, 1000);

            $(".right").addClass("scrolledPlus");
          } else {
            $(".right").removeClass("scrolledPlus");
            $('.caroussel').removeClass("scrolledPlusC");
            $('.logoTop').removeClass("scrolledPlusL");
            setTimeout(()=>{
              $('.logoTop').hide();
              $('.caroussel').hide();
            
            },1000);
          } 


          if ($(document).scrollTop() > 2790) {
            
            $(".groupe > .menu").addClass("fixed");
            $(".groupe > .runes").addClass("fixed");
            $(".header").addClass("fixed");
            $(".groupe > .logoTop").addClass("fixed");
          }
          else{
            $(".header").removeClass("fixed");
            $(".groupe .runes").removeClass("fixed");
            $(".groupe .menu").removeClass("fixed");
            $(".groupe .logoTop").removeClass("fixed");
          }
          
          if ($(document).scrollTop() > 3681.25) {
            $(".groupe .link_menu").css("color","white");

          }

          else{
            $(".groupe .link_menu").css("color","black");
          }


      });

      $('.txtb input').ready( function () {
        if ($(this).val() !== "")
        $(this).addClass('focus');
    });
    
    $('.txtb input').on('focus', function () {
        $(this).addClass('focus');
    });
    
    $('.txtb input').on('blur', function () {
        if ($(this).val() == "")
            $(this).removeClass('focus error');
    
    });
    
    $('.txtb textarea').ready( function () {
        if ($(this).val() !== "")
            $(this).addClass('focus');
    });
    
    $('.txtb textarea').on('focus', function () {
        $(this).addClass('focus');
    });
    
    $('.txtb textarea').on('blur', function () {
        if ($(this).val() == "")
            $(this).removeClass('focus error');
    
    });
});

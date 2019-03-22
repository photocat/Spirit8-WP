(function($) {
  //Scroll
  $(document).ready(function(){
    const anchors = $('a.scroll')
    for (let anchor of anchors) {
      anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const blockID = anchor.getAttribute('href')
        document.querySelector('' + blockID).scrollIntoView({
          behavior: 'smooth',
          block: 'start'
        })
      })
    }
  });

  //Carousel
  $(document).ready(function(){
    $('.carousel').slick({
      dots: false,
      arrows: true,
      autoplay: true,
      autoplaySpeed: 3000,
      infinite: true,
      speed: 1500,
      fade: true,
      cssEase: 'linear',
      adaptiveHeight: true,
      prevArrow: '<div class="slick-prev">Previous</div>',
      nextArrow: '<div class="slick-next slick-next-rev">Next</div>'
    });
  });

  //Validation
  $.validate({
      modules : 'date, security'
  });

  //Modal
  $(document).ready(function(){
    var modal = document.querySelector(".modal");
    var btn = document.querySelector(".modalTrigger");
    var span = document.querySelector(".modal__close");

    btn.onclick = function(event) {
        modal.style.display = "block";
    }
    span.onclick = function(event) {
        modal.style.display = "none";
    }
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
  });

  //On mouse over
  $(document).ready(function(){
    $(".preview__box__cont").hover(
      function(){
        $(this).find(".preview__box, .preview__box_add").stop();
        $(this).find(".preview__box").slideUp();
        $(this).find(".preview__box_add").slideDown();
      },
      function(){
        $(this).find(".preview__box, .preview__box_add").stop();
        $(this).find(".preview__box").slideDown();
        $(this).find(".preview__box_add").slideUp();
      }
    )
  });
})(jQuery);

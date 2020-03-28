
jQuery(function ($) 
{
    // slider

     // $('.banner').slick({
     //       autoplay: true,
     //  autoplaySpeed: 2000,
     //  arrows: false   
     // });

    //slider end


    $('.add1').slick({
      infinite: true,
      autoplay: 1000,
      fade: true,
      cssEase: 'linear',
      arrows: false
    });

    $('.card-slide').slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 2000,
      arrows: false
    });
    
    $('#myTabs a').click(function (e) {
  e.preventDefault()
  $(this).tab('show')
})
$('.banner').slick();
});


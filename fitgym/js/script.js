
jQuery(function ($) 
{
    // slider

     // $('.banner').slick({
     //       autoplay: true,
     //  autoplaySpeed: 2000,
     //  arrows: false   
     // });

    //slider end


// $('.card-slide').slick({
//   centerMode: true,
//   centerPadding: '60px',
//   slidesToShow: 3,
//   responsive: [
//     {
//       breakpoint: 768,
//       settings: {
//         arrows: false,
//         centerMode: true,
//         centerPadding: '40px',
//         slidesToShow: 3
//       }
//     },
//     {
//       breakpoint: 480,
//       settings: {
//         arrows: false,
//         centerMode: true,
//         centerPadding: '40px',
//         slidesToShow: 1
//       }
//     }
//   ]
// });
 $('.card-slide').slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 2000,
      arrows: false
    });        
}

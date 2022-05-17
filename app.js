const txtAnim = document.querySelector('h1');
new Typewriter (txtAnim,{
    loop:true,
    deleteSpeed:70
})
.changeDelay(60)
.typeString('Hey, je suis un développeur web.')
.pauseFor(2000)
.deleteChars(5)
.typeString('<span style="color:rgb(241, 24, 102);"> frontend.</span>')
.pauseFor(2000)
.deleteChars(9)
.typeString('<span style="color:rgb(251, 81, 30);"> backend.</span>')
.pauseFor(3000)
.start()

$(document).ready(function(){
    $('.diapo').slick({
        dots: true,
        infinite: false,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 4,
        responsive: [
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 3,
              infinite: true,
              dots: true
            }
          },
          {
            breakpoint: 600,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 2
            }
          },
          {
            breakpoint: 480,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }
        ]
      });
});

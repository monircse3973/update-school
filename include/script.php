    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="js/bootstrap.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" crossorigin="anonymous"></script>

    <script src="https://rawgit.com/fitodac/bsnav/master/dist/bsnav.min.js"></script>
     <script type="text/javascript" src="OwlCarousel2-2.3.4/OwlCarousel2-2.3.4/docs/assets/vendors/jquery.min.js" ></script>
    <script type="text/javascript" src="OwlCarousel2-2.3.4/OwlCarousel2-2.3.4/dist/owl.carousel.min.js"></script>
     
   
    <script type="text/javascript" src="js/main.js" ></script>
    <script src="js/wow.min.js"></script>
              <script>
              new WOW().init();
     </script>
     <script type="text/javascript">
    $('.slider_1').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    autoplay:true,
     stagePadding:30,
     smartSpeed:450,
    autoplayTimeout:9000,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})
      
    </script>

 
 <script type="text/javascript">
 $('.slider_2').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:3
        }
    }
})
 </script>

 <script type="text/javascript">
   var quadimages = document.querySelectorAll("#quad figure");
for(i=0; i<quadimages.length; i++) {
  quadimages[i].addEventListener('click', function(){ this.classList.toggle("expanded"); quad.classList.toggle("full") }); 
}
 </script>

 <script type="text/javascript">
 	$('.slider_3').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    autoplay:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:3
        }
    }
})
 </script>
 <script type="text/javascript">
 	$('.slider_4').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:4
        }
    }
})
 </script>

 <script type="text/javascript">
 	$('.slider_5').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    autoplay:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})
 </script>


 <script type="text/javascript">
  
$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 4000, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});
</script>

<script type="text/javascript">
$(document).ready(function(){
    $('.counter-value').each(function(){
        $(this).prop('Counter',0).animate({
            Counter: $(this).text()
        },{
            duration: 3500,
            easing: 'swing',
            step: function (now){
                $(this).text(Math.ceil(now));
            }
        });
    });
});
</script>
 

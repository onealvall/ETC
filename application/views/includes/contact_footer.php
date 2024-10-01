<footer id="contact" class="footer-height  text-white" style=" background-color: rgba(2, 95, 29,0.8); z-index: 5; position: relative;">

  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2022 Copyright:
    <a class="text-white" href="https://mdbootstrap.com/">E-teleconnect.com</a>
  </div>

</footer>

<!-- End of .container -->
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="<?php echo base_url() ?>/js/scripts.js"></script>
        <!-- <script src="<?php echo base_url() ?>/js/slider.js"></script> -->
        <script src="<?php echo base_url() ?>/js/aos.js"></script>


        <script>
            AOS.init({
                easing: 'ease-in-out-sine'
            });
        </script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="<?php echo base_url() ?>js/particles.js"></script>
        <script src="<?php echo base_url() ?>js/app.js"></script>
        <script src="<?php echo base_url() ?>js/stats.js"></script>
        <script>
            $('#recipeCarousel').carousel({
                interval: 10000
            })
            
            $('.carousel .carousel-item').each(function(){
                var minPerSlide = 3;
                var next = $(this).next();
                if (!next.length) {
                next = $(this).siblings(':first');
                }
                next.children(':first-child').clone().appendTo($(this));
                
                for (var i=0;i<minPerSlide;i++) {
                    next=next.next();
                    if (!next.length) {
                        next = $(this).siblings(':first');
                        }
                    
                    next.children(':first-child').clone().appendTo($(this));
                    }
            });
        </script>

    </body>
</html>

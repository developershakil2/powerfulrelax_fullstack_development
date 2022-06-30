

		<!-- Vendor -->
		<script src="video/lib/jquery/jquery.min.js"></script>
		<script src="video/lib/jquery.appear/jquery.appear.min.js"></script>
		<!--<script src="lib/popper/umd/popper.min.js"></script>-->
		<script src="video/lib/jquery.lazyload/jquery.lazyload.min.js"></script>
		<script src="video/lib/isotope/jquery.isotope.min.js"></script>
		

		<script src="video/assets/main.js"></script>
    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.countdown.min.js"></script>
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <script src="assets/js/jquery.nicescroll.min.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/biolife.framework.js"></script>
    <script src="assets/js/functions.js"></script>

     
    
    <script src="glightbox.min.js"></script>
    
        <script>
            
      /**
       * Initiate glightbox
       */
       const glightbox = GLightbox({
        selector: '.glightbox'
      });
    
      /**
       * Gallery Slider
       */
      new Swiper('.gallery-slider', {
        speed: 400,
        loop: true,
        centeredSlides: true,
        autoplay: {
          delay: 5000,
          disableOnInteraction: false
        },
        slidesPerView: 'auto',
        pagination: {
          el: '.swiper-pagination',
          type: 'bullets',
          clickable: true
        },
        breakpoints: {
          320: {
            slidesPerView: 1,
            spaceBetween: 20
          },
          575: {
            slidesPerView: 2,
            spaceBetween: 20
          },
          768: {
            slidesPerView: 3,
            spaceBetween: 20
          },
          992: {
            slidesPerView: 5,
            spaceBetween: 20
          }
        }
      });
    
      /**
       * Initiate gallery lightbox 
       */
      const galleryLightbox = GLightbox({
        selector: '.gallery-lightbox'
      });





      
        </script>
</body>

</html>
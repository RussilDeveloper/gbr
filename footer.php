<style>
  .fs{
    font: normal normal normal 14px/1 FontAwesome;
    font-size: 20px;
    text-rendering: auto;
    -webkit-font-smoothing: antialiased;
  }
  
    @media only screen and (min-width:320px) and (max-width:1024px)     
   {.mkk{
    display: flex;
    align-items: center;
    justify-content: center;   
      
   margin-bottom: 10px;
   font-size: 16px;  

   }



    }

</style>

<footer class="home-3">
         <div class="container">
            <div class="row">
 
               <div class="row ">
                  <div class="col-md-8 offset-md-2">
                     
                     <div class="row">
                        <div class="col-md-12 col-sm-12 text-center f-logo">
                           <img src="assets/img/GBR-Fertility-Logo.png" class="img-fluid" alt="">
                           <p style="padding: 15px; text-align:center;">GBR Fertility Centre And Hospitals journey started in the year 2005, as a centre 100% dedicated to fertility care with a vision to enable the millions of infertile women to experience the joy of motherhood.</p>
                        </div> 

                        <div class="address">
                           <h5>Address</h5>
                          <p style="padding: 10px; text-align:center;"><b> GBR FERTILITY CENTRE AND HOSPITALS
                           </b> <br> 1027 & 1028 6th Main Road, Mogappair Eri Scheme Mogappair West, Chennai, TN, India 600037.</p>
                           <div>
                              <!-- <div class= "icon-inner" style="display: block; text-align:center;">
                                 <i class="fa fa-phone-square" aria-hidden="true"></i>
                                 <a href="tel:+91 9940105555">+91 99401 05555</a>
                              </div> -->
                              <ul style="display: block">
                              <li class="mkk" style="text-align:center; color:#ffffff"><i class="fs fa-phone-square" aria-hidden="true"></i> <a style="color:#ffffff; padding-left:
                               6px;font-size: 18px;" href="tel:+91 9940105555">+91 99401 05555</a> </li>

                               <li class="mkk" style="text-align:center; color:#ffffff"><i class="fs fa-envelope" aria-hidden="true"></i> <a style="color: #ffffff; padding-left:
                               6px; font-size: 18px;" href="tel:+91 9940105555">contact@gbrclinic.com</a> </li>


                              <!-- <div class="icon-inner">
                                 <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                                 <a href="tel:+91 9940105555">24 x 7</a>
                              </div> -->
                              <!-- <div class="icon-inner">
                                 <i class="fa fa-envelope" aria-hidden="true"></i>
                                 <a href="tel:+91 9940105555">contact@gbrclinic.com</a>
                              </div> -->

                           </div>
                        </div>
                        <div class="f-social">
                           <ul>
                              <li> <a href="https://www.facebook.com/gbrfertilitycentre" target="_blank"> <i class="fa fa-facebook-square" aria-hidden="true"></i> </a> </li>

                              <li> <a href="https://www.instagram.com/gbrfertilitycentre/" target="_blank"> <i class="fa fa-instagram" aria-hidden="true"></i> </a> </li>

                              <li> <a href="https://twitter.com/GBRFertility" target="_blank"> <i class="fa fa-twitter" aria-hidden="true"></i> </a> </li>

                              <li> <a href="https://www.youtube.com/@gbrfertilitycentre" target="_blank"> <i class="fa fa-youtube-play" aria-hidden="true"></i> </a> </li>

                              <li> <a href="https://www.linkedin.com/company/gbrfertilitycentre" target="_blank"> <i class="fa fa-linkedin-square" aria-hidden="true"></i> </a> </li>

                           </ul>
                        </div>

                     </div>

                    <!--  <div class="f-menu">
                        <ul>
                           <li> <a href="">Home</a> </li>
                           <li> <a href="">About us</a> </li>
                           <li> <a href="">Treatments</a> </li>
                           <li> <a href="">Success Stories</a> </li>
                           <li> <a href="">Blog</a> </li>
                           <li> <a href="">Contact us</a> </li>
                        </ul>
                     </div> -->

                     <div class="footer-bottom">
                        <!-- <div class="footer-logo">
                           <a href="index.html">
                              <img src="assets/img/logo-2.png" alt="">
                           </a>
                        </div> -->
                        <p class="copyright-text">Copyright © 2023 GBR Clinic And Fertility Centre Pvt. Ltd.</p>
                     </div>
                  </div>
               </div>
               
            </div>
            <!-- Scroll To Top -->
            <a href="#" class="scrollup"><i class="fa fa-angle-double-up"></i></a>
         </div>
      </footer>


      <script>

   let i=2;

   
   $(document).ready(function(){
      var radius = 200;
      var fields = $('.itemDot');
      var container = $('.dotCircle');
      var width = container.width();
 radius = width/2.5;
 
       var height = container.height();
      var angle = 0, step = (2*Math.PI) / fields.length;
      fields.each(function() {
         var x = Math.round(width/2 + radius * Math.cos(angle) - $(this).width()/2);
         var y = Math.round(height/2 + radius * Math.sin(angle) - $(this).height()/2);
         if(window.console) {
            console.log($(this).text(), x, y);
         }
         
         $(this).css({
            left: x + 'px',
            top: y + 'px'
         });
         angle += step;
      });
      
      
      $('.itemDot').click(function(){
         
         var dataTab= $(this).data("tab");
         $('.itemDot').removeClass('active');
         $(this).addClass('active');
         $('.CirItem').removeClass('active');
         $( '.CirItem'+ dataTab).addClass('active');
         i=dataTab;
         
         $('.dotCircle').css({
            "transform":"rotate("+(360-(i-1)*36)+"deg)",
            "transition":"2s"
         });
         $('.itemDot').css({
            "transform":"rotate("+((i-1)*36)+"deg)",
            "transition":"1s"
         });
         
         
      });
      
      setInterval(function(){
         var dataTab= $('.itemDot.active').data("tab");
         if(dataTab>5||i>5){
         dataTab=1;
         i=1;
         }
         $('.itemDot').removeClass('active');
         $('[data-tab="'+i+'"]').addClass('active');
         $('.CirItem').removeClass('active');
         $( '.CirItem'+i).addClass('active');
         i++;
         
         
         $('.dotCircle').css({
            "transform":"rotate("+(360-(i-2)*36)+"deg)",
            "transition":"2s"
         });
         $('.itemDot').css({
            "transform":"rotate("+((i-2)*36)+"deg)",
            "transition":"1s"
         });
         
         }, 5000);
      
   });





   </script>
   <!-- Js File-->
   <script src="assets/js/jquery.v3.4.1.min.js"></script>
   <script src="assets/js/bootstrap.min.js"></script>
   <script src="assets/js/scrollIt.min.js"></script>
   <script src="assets/js/jquery.slicknav.min.js"></script>
   <script src="assets/js/owl.carousel.min.js"></script>
   <script src="assets/js/jquery.magnific-popup.min.js"></script>
   <script src="assets/js/plugins.js"></script>
   <script src="assets/js/swiper.min.js"></script>
   <script src="assets/js/main.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.0/owl.carousel.js"></script>
  
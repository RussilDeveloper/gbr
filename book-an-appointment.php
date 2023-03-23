<head>
<link rel="shortcut icon" type="image/png" href="assets/img/favicon.png">
   <!-- Stylesheets -->
   <link rel="stylesheet" href="assets/css/font-awesome.min.css">
   <link rel="stylesheet" href="assets/css/animate.min.css">
   <link rel="stylesheet" href="assets/css/slicknav.min.css">
   <link rel="stylesheet" href="assets/css/magnific-popup.css">
   <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
   <link rel="stylesheet" href="assets/css/swiper.min.css">
   <link rel="stylesheet" href="assets/css/bootstrap.min.css">
   <link rel="stylesheet" href="assets/fonts/flaticon.css">
   <link rel="stylesheet" href="assets/css/style.css">
   <link rel="stylesheet" href="assets/css/responsive.css">
   <link rel="stylesheet" href="assets/css/slider.css">
   <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.0/assets/owl.carousel.css" rel="stylesheet">
   <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.css" rel="stylesheet">

   <!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <meta name="viewport" content="width=device-width, initial-scale=1,">

 <style>

   .call-buton p {
    margin-left: 30px;
    font-weight: 700;
    font-size: 23px;
    margin-top: 20px;
    color: #000;
 }

 /*.call-buton{
   min-height: 40px;
    margin-top: 5px;
    height: 70px;
    line-height: 70px;
    font-size: 23px !important;
 }*/

.navbar {
  overflow: hidden;
  background-color: #333;
  font-family: Arial, Helvetica, sans-serif;
}

.navbar a {
  float: left;
  font-size: 18px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/*.dropdown {
  float: left;
  overflow: hidden;
}*/

.dropdown .dropbtn {
  font-size: 20px !important; 
  font-weight: 700 !important; 
  border: none;
  outline: none;
  color: #000;
  padding: 14px 16px;
  background-color: inherit;
  font: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: #ffffff;
  font-weight: 400;


}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  width: 700px;
  left: 0;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 99;
  padding-top: 10px;
  font-weight: 400;
}

.dropdown-content .header {
  background: red;
  padding: 16px;
  color: white;
}

.dropdown:hover .dropdown-content {
  display: block;
  color: #ffffff;
/*  color: #D1F0F1;*/

}

/* Create three equal columns that floats next to each other */
.column {
  float: left;
  width: 33.33%;
  padding: 10px;
  background-color: #dfebeb;
  font-size: 20px;
/*  height: 250px;*/
}

.column a {
  float: none;
  color: black;
  padding: 16px;
  text-decoration: none;
  display: block;
  text-align: left;
  font-weight: 400 !important;

}

.column a:hover {
  background-color: #ddd;
  color: #967C31;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
.hom{
   font-size:20px !important;
}

/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    height: auto;
  }
} 
       

 </style>

</head>

<!-- Header Area Start-->
      <header class="sticky-header home-1">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-2 d-flex align-items-center">
                  <div class="logo" style="width:100% !important;">
                     <a href="index.php">
                        <img class="log" src="assets/img/GBR-Fertility-Logo.png" style="width:285px;" alt="">
                     </a>
                  </div>
               </div>
               <div class="col-md-6"> 
                  <!--<div class="download-btn float-right"> <a href="#" class="black">Download</a>-->
                  <!--</div>-->
                   <div class="main-menu float-right" style="padding-top:20px;">
                     <nav>
                        <ul>
                           <li><a class="hom" href="index.php">Home</a>
                                 
                           </li>
                           <li>
                           <div class="dropdown">
    <button class="dropbtn">Core Specialities 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
       
      <div class="row">
        <div class="column">
         
          <a class="hom" href="iui.php">Intra Uterine Insemination (IUI)</a>
           <a class="hom" href="laparoscopy.php">Laparoscopy</a>
         
        </div>
        <div class="column">        
        <a class="hom" href="ivf.php">In Vitro Fertilisation (IVF)</a> 
          <a class="hom" href="hysteroscopy.php">Hysteroscopy</a>        
        </div>

        <div class="column">         
           <a class="hom" href="icsi.php">Intracytoplasmic Sperm Injection (ICSI)</a>              
        </div>
      
      </div>
    </div>
  </div> 
</li>


                    <li>
                           <div class="dropdown">
    <button class="dropbtn">Other Specialities
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
       
      <div class="row">
        <div class="column">
          
          <a class="hom" href="era.php">Endometrial Receptivity Array</a>
          <a class="hom" href="laser-assisted-hatching.php">Laser-Assisted Hatching</a>
          <a class="hom" href="sperm-freezing.php">Sperm-Freezing</a>
          <a class="hom" href="tubal-recanalization.php">Tubal Recanalization</a>
          <a class="hom" href="myomectomy.php">Myomectomy</a>
          <a class="hom" href="pgd.php">Preimplantation genetic diagnosis and screening</a>
        </div>
        <div class="column">
         
          <a class="hom" href="ovarian-rejuvenation.php">Ovarian Rejuvenation</a>
          <a class="hom" href="uterine-transplant.php">Uterine Transplant</a>
          <a class="hom" href="genetics-and-stem-cell-therapy.php">Genetics and Stem Cell Therapy</a>
          <a class="hom" href="percutaneous-epididymal-sperm-aspiration.php">Percutaneous Epididymal Sperm Aspiration</a>
          <a class="hom" href="computer-assisted-semen-analysis.php">Computer Assisted Semen Analysis</a>
          <a class="hom" href="robotic-surgery.php">Robotic Surgery</a>
        </div>
        <div class="column">
          
          <a class="hom" href="testicular-sperm-aspiration.php">Testicular Sperm Aspiration</a>
          <a class="hom" href="tubal-ligation-reversal.php">Tubal Ligation Reversal</a>
          <a class="hom" href="hysteroscopic-tubal-cornual-cannulation.php">Hysteroscopic Tubal Cornual Cannulation</a>
          <a class="hom" href="uterine-anomalies.php">Uterine Anomalies</a>
          <a class="hom" href="Vaginoplasty.php">Vaginoplasty</a>
          <a class="hom" href="platelet-rich-plasma.php">Platelet Rich Plasma</a>
        </div>
      </div>
    </div>
  </div> 
</li>

                          <!--  <li class="dropdown"><a href="#" data-scroll-nav="1">About Us</a> 
                               <ul>
                                 <li><a href="index.html">Home One</a></li>
                                 <li><a href="index2.html">Home Two</a></li>
                                 <li><a href="index3.html">Home Three</a></li>
                                 <li><a href="index4.html">Apps Landing </a></li>
                              </ul> 
                           </li> -->
                          <!--  <li><a href="#" data-scroll-nav="2">Our Clinics</a>
                           </li> -->
                           
                           <!-- <li class="dropdown"><a href="#" data-scroll-nav="1">Our Services</a>
                              <ul>
                                  <li><a href="primary-services.php">Primary Services</a></li>
                                  <div class="dropdown-container">
                                  <a href="#">Link 1</a>
                                  <a href="#">Link 2</a>
                                  <a href="#">Link 3</a>
                                 </div>                                                                              
                                  <li><a href="additional-services.php">Additional Services</a></li>
                                  <div class="dropdown-container">
                                  <a href="#">Link 1</a>
                                  <a href="#">Link 2</a>
                                  <a href="#">Link 3</a>
                                 </div> 

                              </ul>
                           </li> -->


                           <li><a class="hom" href="blogs.php">Our Blogs</a></li>                                                    
                           <li><a class="hom" href="contact-us.php">Contact Us</a>
                           </li>
                        </ul>
                     </nav>
                  </div>
                  <div id="mobile-menu"></div>
               </div>
             <div class="hide col-md-4">
               <div class="col-md-12 d-flex align-items-center top-right">
                   <a href="" class="book-an-btn">Book appointment</a>
                  <div class="call-buton">
                     <a class="cc-calto-action-ripple call" href="tel:9940105555"><i class="fa fa-phone"></i><span class="num"></span></a>
                  <p>99401 05555</p>
                     
                  </div>
               </div>
             </div>
            </div>
         </div>
      </header> 
      <!-- Header Area End!-->

      




      

        <section class="sec1">
          <div class="container">
             <div class="row" style="">          
                                                                      
            <div class="row" style="display: flex; padding-top: 200px; padding-bottom: 80px;">                                                   
                <div class="col-md-10 p-0" style="margin: 0 auto; border-radius: 10px; vertical-align: middle;">
                       <?php include ('admin/front-end/book-test.php'); ?>
                </div>                                                                                                       
            </div>
             
          </div>
        </section>




          <!-- Footer Area Start-->

          <?php include 'footer.php'; ?>
      
      <!-- Footer Area End!-->

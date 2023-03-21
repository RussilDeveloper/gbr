
<!DOCTYPE html>
<html lang="en">

<head>
   <!-- Meta Tags -->
   <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <meta name="author" content="themesholder">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1,">
   <!-- Page Title -->
   <title>GBR</title>
   <!-- Favicon Icon -->
    <style>
      .pd{padding-top:130px !important;padding-bottom: 40px}                        
      .sec1{background-color:#D1F0F1; padding-bottom:60px;}               
      .hed{color:#ffffff; font-size: 45px; font-weight: normal ;text-align: center;}
      .btn1{margin-top: 20px; border-radius: 50px ; font-size: 18px; padding: 12px;
        width: 100% ;
        color: #ffffff ; background-color: #236e8d; text-align: center;  transition: all 0.5s;
        cursor: pointer;} 

         @media screen and (max-width:768px)
        {
         .flex{flex-direction:column;
            padding: 0px !important;
            }
        .mbl{
            margin-bottom: -30px;
        }
         .hd{
        margin-top: -30px;
        margin-bottom: -20px;
      }
        

        }
    
      
    </style>
</head>

<body>
   <!--[if lte IE 9]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
      <![endif]-->


   <!-- Main Content site -->
   <div class="main-site">
      <!--preloader  -->
      <!--<div id="loader-wrapper">-->
      <!--   <div id="loader"></div>-->
      <!--   <div class="loader-section section-left"></div>-->
      <!--   <div class="loader-section section-right"></div>-->
      <!--</div>-->
      <!--/End preloader  -->

      <?php include 'header.php'; ?>

         <section class="pd" style="background-color:#0e786b">
            <div class="container-fluid">
             <div class="row hd">
               <div class="col-md-12">
                <h1 class="hed">Primary Services</h1>
               </div>
             </div>
            </div>
         </section>

<!--section open--->

        <section class="sec1">
          
            <div class="row flex" style="padding: 70px">
                           
               <div class="col-md-4 mbl" style="padding: 50px"> 
                    <img style="border-radius: 10px; box-shadow: rgba(0, 0, 0, 0.1) 0px 10px 50px;"
                     src="assets/img/iui.jpg" alt="">
                     <a href="iui.php">
                     <div class="btn1">Intra Uterine Insemination</div>
                     </a>                                                    
               </div>  

               <div class="col-md-4 mbl" style="padding: 50px"> 
                    <img style="border-radius: 10px; box-shadow: rgba(0, 0, 0, 0.1) 0px 10px 50px;"
                     src="assets/img/ivf.jpg" alt="">
                     <a href="ivf.php">
                     <div class="btn1">In Vitro Fertilisation</div>
                     </a>                                                    
               </div>   

                <div class="col-md-4 mbl" style="padding: 50px"> 
                    <img style="border-radius: 10px; box-shadow: rgba(0, 0, 0, 0.1) 0px 10px 50px;"
                     src="assets/img/icsi.jpg" alt="">
                     <a href="icsi.php">
                     <div class="btn1">Intracytoplasmic Sperm Injection</div>
                     </a>                                                    
               </div>  

               <div class="col-md-2"></div>

               <div class="col-md-4 mbl" style="padding: 50px"> 
                    <img style="border-radius: 10px; box-shadow: rgba(0, 0, 0, 0.1) 0px 10px 50px;"
                     src="assets/img/laparoscopy.jpg" alt="">
                     <a href="laparoscopy.php">
                     <div class="btn1">Laparoscopy</div>
                     </a>                                                    
               </div>   

               <div class="col-md-4 mbl" style="padding: 50px"> 
                    <img style="border-radius: 10px; box-shadow: rgba(0, 0, 0, 0.1) 0px 10px 50px;"
                     src="assets/img/hysteroscopy.jpg" alt="">
                     <a href="hysteroscopy.php">
                     <div class="btn1">Hysteroscopy</div>
                     </a>                                                    
               </div>   

                <div class="col-md-2"></div>
                



            </div>

             

           
                                                                      
           

               
                <div class="col-md-4 p-0 mbl" style="margin: 0 auto; border-radius: 10px; vertical-align: middle;">
                       <?php include ('admin/front-end/book-test.php'); ?>
                </div>                                                                                                       
            </div>
             
          
        </section>

<!--section close-->       





          <!-- Footer Area Start-->

          <?php include 'footer.php'; ?>
      
      <!-- Footer Area End!-->

   </div><!-- /End Main Site -->

</body>

</html>
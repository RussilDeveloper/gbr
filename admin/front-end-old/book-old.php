
  <meta charset="utf-8">
  <style>
.login-root {
    background: #fff;
    display: block;
    width: 100%;
    overflow: hidden;
}
.loginbackground {
    min-height: 692px;
    position: fixed;
    bottom: 0;
    left: 0;
    right: 0;
    top: 0;
    z-index: 0;
    overflow: hidden;
}
.flex-flex {
    display: flex;
}
.align-center {
  align-items: center; 
}
.center-center {
  align-items: center;
  justify-content: center;
}
.flex-direction--column {
    -ms-flex-direction: column;
    flex-direction: column;
}
.box-divider--light-all-2 {
    box-shadow: inset 0 0 0 2px #e3e8ee;
}
.box-background--blue {
    background-color: #5469d4;
}
.box-background--white {
  background-color: #ffffff; 
}
.box-background--blue800 {
    background-color: #212d63;
}
.box-background--gray100 {
    background-color: #e3e8ee;
}
.box-background--cyan200 {
    background-color: #7fd3ed;
}
.padding-top--64 {
  padding-top: 64px;
}
.padding-top--24 {
  padding-top: 24px;
}
.padding-top--48 {
  padding-top: 48px;
}
.padding-bottom--24 {
  padding-bottom: 24px;
}
.padding-horizontal--48 {
  padding: 48px;
}
.padding-horizontal--24 {
  padding: 10px 24px;
}
.padding-bottom--15 {
  padding-bottom: 15px;
}



.formbg {
    margin: 0px auto;
    width: 100%;
    max-width: 448px;
    background: white;
    border-radius: 4px;
    box-shadow: rgba(60, 66, 87, 0.12) 0px 7px 14px 0px, rgba(0, 0, 0, 0.12) 0px 3px 6px 0px;
}

.grid--50-50 {
    display: grid;
    grid-template-columns: 50% 50%;
    align-items: center;
}

.field input{
    font-size: 16px;
    line-height: 28px;
    width: 100%;
    min-height: 44px;
    border: unset;
    padding:10px;
    border-radius: 50px!important;
    outline-color: rgb(84 105 212 / 0.5);
    background-color: rgb(255, 255, 255);
    box-shadow: rgba(0, 0, 0, 0) 0px 0px 0px 0px, 
                rgba(0, 0, 0, 0) 0px 0px 0px 0px, 
                rgba(0, 0, 0, 0) 0px 0px 0px 0px, 
                rgba(60, 66, 87, 0.16) 0px 0px 0px 1px, 
                rgba(0, 0, 0, 0) 0px 0px 0px 0px, 
                rgba(0, 0, 0, 0) 0px 0px 0px 0px, 
                rgba(0, 0, 0, 0) 0px 0px 0px 0px;
}

.fieldtime input {
    font-size: 15px;
    width: 100%;
    padding:10px;
    border: unset;
    border-radius: 4px;
    outline-color: rgb(84 105 212 / 0.5);
    background-color: rgb(255, 255, 255);
    box-shadow: rgba(0, 0, 0, 0) 0px 0px 0px 0px, 
                rgba(0, 0, 0, 0) 0px 0px 0px 0px, 
                rgba(0, 0, 0, 0) 0px 0px 0px 0px, 
                rgba(60, 66, 87, 0.16) 0px 0px 0px 1px, 
                rgba(0, 0, 0, 0) 0px 0px 0px 0px, 
                rgba(0, 0, 0, 0) 0px 0px 0px 0px, 
                rgba(0, 0, 0, 0) 0px 0px 0px 0px;
}

input[type="submit"] {
    background-color: #040033!important;
    box-shadow: rgba(0, 0, 0, 0) 0px 0px 0px 0px, 
                rgba(0, 0, 0, 0) 0px 0px 0px 0px, 
                rgba(0, 0, 0, 0.12) 0px 1px 1px 0px, 
                rgb(221 221 223) 0px 0px 0px 1px, 
                rgba(0, 0, 0, 0) 0px 0px 0px 0px, 
                rgba(0, 0, 0, 0) 0px 0px 0px 0px, 
                rgba(60, 66, 87, 0.08) 0px 2px 5px 0px;
    color: #fff;
    font-weight: 600!important;
    padding:12px!important;
    cursor: pointer;
}
.field-checkbox input {
    width: 20px;
    height: 15px;
    margin-right: 5px; 
    box-shadow: unset;
    min-height: unset;
}
.field-checkbox label {
    display: flex;
    align-items: center;
    margin: 0;
}


.animationRightLeft {
  animation: animationRightLeft 2s ease-in-out infinite;
}
.animationLeftRight {
  animation: animationLeftRight 2s ease-in-out infinite;
}
.tans3s {
  animation: animationLeftRight 3s ease-in-out infinite;
}
.tans4s {
  animation: animationLeftRight 4s ease-in-out infinite;
}

@keyframes animationLeftRight {
  0% {
    transform: translateX(0px);
  }
  50% {
    transform: translateX(1000px);
  }
  100% {
    transform: translateX(0px);
  }
} 

@keyframes animationRightLeft {
  0% {
    transform: translateX(0px);
  }
  50% {
    transform: translateX(-1000px);
  }
  100% {
    transform: translateX(0px);
  }
} 
.button {
  border-radius: 4px;
  background-color: #236e8d;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 15px;
  padding: 10px;
  width: 100%;
  transition: all 0.5s;
  cursor: pointer;
  margin: 0px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
select {
    width:100%;
   -webkit-appearance:none;
   -moz-appearance:none;
   -ms-appearance:none;
   appearance:none;
   outline:0;
   box-shadow:none;
   border:1px solid #ecedef;
   background-image: none;
   flex: 1;
   padding:10px;
    border-radius: 50px;
   color:#000;
   cursor:pointer;
   outline-color: rgb(84 105 212 / 0.5);
    background-color: rgb(255, 255, 255);
    box-shadow: rgba(0, 0, 0, 0) 0px 0px 0px 0px, 
                rgba(0, 0, 0, 0) 0px 0px 0px 0px, 
                rgba(0, 0, 0, 0) 0px 0px 0px 0px, 
                rgba(60, 66, 87, 0.16) 0px 0px 0px 1px, 
                rgba(0, 0, 0, 0) 0px 0px 0px 0px, 
                rgba(0, 0, 0, 0) 0px 0px 0px 0px, 
                rgba(0, 0, 0, 0) 0px 0px 0px 0px;
   font-family: 'Open Sans', sans-serif;
}
select::-ms-expand {
   display: none;
}
.select {
   position: relative;
   display: flex;
   width: 100%;
   height: 2.5em;
   line-height: 3;
   overflow: hidden;
   border-radius: .25em;
}
.select::after {
   /*content: '\25BC';*/
   position: absolute;
   top: 0;
   right: 0;
   padding: 0 1em;
   background: #2b2e2e;
   cursor:pointer;
   pointer-events:none;
   transition:.25s all ease;
}
.select:hover::after {
   color: #23b499;
}
</style>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <div class="login-root" style="background-color:#d7f1fc;border-radius:10px">
    <div class="box-root flex-flex flex-direction--column" style="flex-grow: 1;">
      
      <div class="box-root flex-flex flex-direction--column" style="flex-grow: 1; z-index: 9;">
        <div class="formbg-outer">
          <div class="">
            <div class="formbg-inner padding-horizontal--24">
                <br>
              <h2 style="font-size:25px;font-weight:bold;font-family: 'Roboto', sans-serif;text-align:center">Book an Appointment</h2> <br>
              <form id="stripe-login" action="https://inhousemedicare.com/admin/front-end/save.php" method="post" enctype="multipart/form-data">
                <div class="field padding-bottom--24">
                  <input type="text" name="name" placeholder="Name" required autocomplete="off">
                  <input type="hidden" id="pagename" value="<?php echo $_SERVER['REQUEST_URI']; ?>">
                </div>
                <div class="field padding-bottom--24">
                  <input type="email" name="email" placeholder="Email" required autocomplete="off">
                </div>
                <div class="field padding-bottom--20">
                  <input type="text" name="phone" placeholder="Phone" required autocomplete="off">
                </div>
               
                    <div class="field padding-bottom--20">
                  <label for="phone" style="font-size:12px!important;">Services</label>
                 
                      <select id="doctor" name="doctor" required autocomplete="off">
                     
                   </select>
                
                  
                </div>
                <div class="field padding-bottom--20">
                  <label for="phone" style="font-size:12px!important;">Appointment Date</label>
                  <input type="date" id="appdate" placeholder="Phone" name="appdate" min="<? echo date('Y-m-d'); ?>"  required autocomplete="off">
                </div>
                <div class="field padding-bottom--20">
                  <label for="phone" style="font-size:12px!important;">Appointment Time</label>
                  
                      <select id="apptime" name="apptime" required autocomplete="off">
                     
                   </select>
                
                  
                </div><br>
                <div class="field padding-bottom--24">
                  <input type="submit" name="submit" value="Book Now">
                </div>
              </form>
            </div>
          </div>
         
        </div>
      </div>
    </div>
  </div>
  <script>
  (function($){
   $( document ).ready(function() {
        var pagename = $('#pagename').val();
    // alert()
	$.ajax({
		 url: 'https://inhousemedicare.com/admin/front-end/ajax/form.php',
		 type: 'POST',
		 data: {
		     pagename:pagename,
	         loadDepartmentDetails:'loadDepartmentDetails'
	   },
		 beforeSend : function() {
		  $('body').css('cursor', 'progress');
		 },
		 success : function(data) {
    
		  $('#doctor').html(data);

		  $('body').css('cursor', 'default');

		 },
		 async : false
	 });
});
 	 
  })(jQuery);
  



 (function($){ $(document).on('change','#appdate',function() {
    var doctorID = $('#doctor').val();
    if(doctorID == ''){
        alert("Select Doctor");
        $('#appdate').val('');
        return false;
    }else{
        var doctorID = $('#doctor').val();
    var appdate = $('#appdate').val();
    // alert(appdate)
  $.ajax({
     url: 'https://inhousemedicare.com/admin/front-end/ajax/app.php',
     type: 'POST',
     data: {
      
       doctorID:doctorID,
       appdate:appdate,
       checkDocAppointment:'checkDocAppointment'
     },
     beforeSend : function() {
      $('body').css('cursor', 'progress');
      //alert(coldCallID);
     },
     success : function(data) {
        //  alert(data);
        if(data == ''){
            alert("Doctor is unavailable! Kindly Choose another date");
            $('#appdate').val('');
            $('#apptime').html('');
        }else{
            $('#apptime').html(data);
        }
      
      
      $('body').css('cursor', 'default');
     },
     async : false
   });
    }
     
});  })(jQuery);

 (function($){ $(document).on('change','#doctor',function() {
    var doctorID = $('#doctor').val();
    $('#appdate').val('');
    $('#apptime').html('');
     
}); })(jQuery);

</script>
<!--<script src="js/appointment.js"></script>-->

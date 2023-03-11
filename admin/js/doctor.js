function loadDoctorList() {

	$.ajax({
		 url: 'ajax/doctor.php',
		 type: 'POST',
		 data: {

		   loadDoctorList:'loadDoctorList'
	   },
		 beforeSend : function() {
		  $('body').css('cursor', 'progress');
		 },
		 success : function(data) {

		  $('#loadDoctorList').html(data);

          $('#alter_pagination').DataTable( {
                "pagingType": "full_numbers",
                "language": {
                    "paginate": {
                      "first": "<i class='flaticon-left-arrow'></i>",
                      "previous": "<i class='flaticon-arrow-left-1'></i>",
                      "next": "<i class='flaticon-arrow-right'></i>",
                      "last": "<i class='flaticon-right-arrow'></i>",
                    },
                    "info": "Showing page _PAGE_ of _PAGES_"
                },
                drawCallback: function () {
                    $(".sparkline").sparkline([5,6,7,9,9,5,3,2,2,4,6,7], {
                        type: 'line',
                        width: '60',
                        height: '20',
                        lineColor: '#1a73e9',
                        fillColor: '#c2d5ff',
                        spotColor: 'transparent',
                        minSpotColor: 'transparent',
                        maxSpotColor: 'transparent',
                        highlightSpotColor: 'transparent',
                        highlightLineColor: 'transparent',
                    });
                }
            });

		  $('body').css('cursor', 'default');
		 },
		 async : false
	 });
}

$(document).ready(function() {
 	 loadDoctorList();
});

function createDoctor() {
  var doctorname = $('.doctorname').val();
  var doctorspec = $('.doctorspec').val();
  $.ajax({
     url: 'ajax/doctor.php',
     type: 'POST',
     data: {
       doctorname:doctorname,
       doctorspec:doctorspec,
       createDoctor:'createDoctor'
     },
     beforeSend : function() {
      $('body').css('cursor', 'progress');
      //alert(coldCallID);
     },
     success : function(data) {

     $('.mdl-textfield__input').val('');
     loadDoctorList();
      
      $('body').css('cursor', 'default');
     },
     async : false
   });
}

$(document).on('click','#doctor',function() {
      createDoctor();
});
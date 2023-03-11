function loadDepartmentDetails() {
    var pagename = $('#pagename').val();
    alert()
	$.ajax({
		 url: 'ajax/form.php',
		 type: 'POST',
		 data: {
		     pagename:pagename,
	         loadDepartmentDetails:'loadDepartmentDetails'
	   },
		 beforeSend : function() {
		  $('body').css('cursor', 'progress');
		 },
		 success : function(data) {
    alert(data);
		  $('#loadDepartmentDetails').html(data);

		  $('body').css('cursor', 'default');

		 },
		 async : false
	 });
}

// $(document).ready(function() {
//     alert()
//  	 loadDepartmentDetails();

// });
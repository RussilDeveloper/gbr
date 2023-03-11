// JavaScript Document
function addUserValidate() {
	if($('#addUserFirstName').val().length == 0 || $('#addUserLastName').val().length == 0 || $('#addUserEmail').val().length < 5) {
		alert('Error! All fields are mandatory.');
		return false;
	} else {
		if(confirm('Save?')) {
			return true;
		} else {
			return false;
		}
	}
}


$(document).ready(function(e) {
    //alert('connected');
});
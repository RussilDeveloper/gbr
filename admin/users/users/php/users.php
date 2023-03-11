<?php include('../../includes/init.php');

if(isset($_POST['addUserSubmit'])) {
	$return = User::addUser($db,$_POST['firstName'],$_POST['lastName'],$_POST['email']);
	if($return == 'exists') {
		$_SESSION['programMessage'] = "<h5 style=\"color:red;\">Error! Email ID already exists.</h5>";
	} else {
		$_SESSION['programMessage'] = "<h5 style=\"color:green;\">New User has been added.</h5>";
	}
	
	header("Location: ../add-user.php");
	exit();
}



if(isset($_POST['newMemberSubmit'])) {
	//echo "inside if";
	//check if email is present and is active
	if(User::checkUserVerifiedActive($db,$_POST['email'])) {		//can be 1 or 2
		$userID = User::getID($db,$_POST['email']);
		$securityString = Security::generateNewSecurity($userID);
		Security::insertSecurity($db,$userID,$securityString);
		Email::newMemberEmail($_POST['email'],$securityString);
		$_SESSION['newMemberMessage'] = "<h4 style=\"color:#FFEECA;\">(Step 1 of 2) Please check your email inbox for a verification email from ".SITE.".</h4>";
		header("Location: ".HOST."/new_member.php");
		exit();
	} else {
		$_SESSION['newMemberMessage'] = "<h4 style=\"color:#FFEECA;\">Sorry.  Your account is not active.  Please write to thomas@rejola.com</h4>";
		header("Location: ".HOST."/new_member.php");
		exit();
	}
	//create security string
	//save security string
	//email security string
	
	//else mention that email id is not active, please contact thomas@rejola.com
}



if(isset($_POST['newMemberPassword'])) {
		//check if 2 new passwords match
		// echo $_POST['email'];
		$mail = User::getEmail1($db,$_POST['email']);

		if($_POST['password'] == $_POST['password2']) {
			//check password should have minimum 4 characters
			if(strlen($_POST['password']) >= 4) {
				//change password
				if(strlen($mail) > 0) {
					$email = $mail;
				} else {
					$email = User::getEmail($db,$_POST['userID']);
				}				
				User::changePassword($db,$email,$_POST['password']);
				//change active to 2 to show that now a full time member
				User::updateActive($db,$email,2);		//2 for joined
				User::updateRights($db,$email,20);
				$_SESSION['logInMessage'] = "<h5 style=\"color:green;\">New Password has been set.  Please log in with new password.</h5>";
			} else {
				$_SESSION['logInMessage'] = "<h5 style=\"color:red;\">New Password must have minimum 4 characters.  Please try again.</h5>";
			}
			
		} else {
			$_SESSION['logInMessage'] = "<h5 style=\"color:red;\">New Password and Retyped Password does not match.  Please try again.</h5>";
		}	
	header("Location: ".HOST."/");
	exit();
}




if(isset($_POST['changePassword'])) {
	//check if old password is correct
	if(User::getPassword($db,$_SESSION['logInID']) == crypt($_POST['oldPassword'],CRYPT)) {
		//check if 2 new passwords match
		if($_POST['newPassword'] == $_POST['retypePassword']) {
			//check password should have minimum 4 characters
			if(strlen($_POST['newPassword']) >= 4) {
				//change password
				User::changePassword($db,$_SESSION['logInID'],$_POST['newPassword']);
				$_SESSION['changePasswordMessage'] = "<h5 style=\"color:green;\">Password changed.</h5>";
			} else {
				$_SESSION['changePasswordMessage'] = "<h5 style=\"color:red;\">New Password must have minimum 4 characters.  Please try again.</h5>";
			}
			
		} else {
			$_SESSION['changePasswordMessage'] = "<h5 style=\"color:red;\">New Password and Retyped Password does not match.  Please try again.</h5>";
		}	
	} else {
		$_SESSION['changePasswordMessage'] = "<h5 style=\"color:red;\">Old Password does not match.  Please try again.</h5>";
	}
	header("Location: ../profile.php");
	exit();
}



if(isset($_POST['userEditSave'])) {
	//checking length to be minimum of 4 characters
	if(strlen($_POST['name']) >= 4 && strlen($_POST['logInID']) >= 4) {
		//checking if log in id already exists
		if(!User::checkLogInIDexists($db,$_POST['logInID']) || User::checkLogInIDofUserID($db,$_POST['logInID'],$_POST['userID'])) {
			//add user
			User::editUser($db,$_POST['name'],$_POST['logInID'],$_POST['userID']);
			$_SESSION['editUserMessage'] = "<h5 style=\"color:green;\">User Edit Complete.</h5>";
		} else {
			$_SESSION['editUserMessage'] = "<h5 style=\"color:red;\">The Log In ID already exists.</h5>";
		}
	} else {
		$_SESSION['editUserMessage'] = "<h5 style=\"color:red;\">Name and Log In ID have to have minimum 4 characters.</h5>";
	}
	header("Location: ../manage-users.php");
	exit();
}



if(isset($_POST['userRoleSave'])) {
	User::roleUpdate($db,$_POST['role'],$_POST['userID']);
	$_SESSION['programMessage'] = "<h5 style=\"color:green;\">Role has been updated.</h5>";
	header("Location: ../manage-users.php");
	exit();
}



if(isset($_POST['userResetPassword'])) {
	User::resetPassword($db,$_POST['userID']);
	$_SESSION['editUserMessage'] = "<h5 style=\"color:green;\">Password has been reset.</h5>";
	header("Location: ../manage-users.php");
	exit();
}



if(isset($_POST['userDeActivate'])) {
	User::deActivate($db,$_POST['userID']);
	$_SESSION['editUserMessage'] = "<h5 style=\"color:brown;\">User has been de-activated.</h5>";
	header("Location: ../manage-users.php");
	exit();
}







<?php include('../includes/init.php');
//only users check
if($_SESSION['loggedIn'] != 1) {
	header("Location: ".HOST."/users/users/logout.php");
	exit();
}
//only rights check

?>
<?php include(ROOT.'/templates/html-links.php');?>

<body class="container">
<?php include(ROOT.'/templates/header.php');?>
<?php include(ROOT.'/users/includes/navbar.php');?>
<div class="row" style="margin-top:20px;">
	<div class="col-sm-3">
    	<h3>Profile:</h3>
    </div>
    <div class="col-sm-1"></div>
    <div class="col-sm-4">
    	<h4>Change Password.</h4>
        <?php echo $_SESSION['changePasswordMessage'];
			$_SESSION['changePasswordMessage'] = '';
		?>
        <form method="post" action="php/users.php" onSubmit="return confirm('Submit?');">
        	<table class="table">
            	<tr>
                	<td>Old Password</td>
                    <td><input type="password" class="form-control" name="oldPassword"></td>
                </tr>
                <tr>
                	<td>New Password</td>
                    <td><input type="password" class="form-control" name="newPassword"></td>
                </tr>
                <tr>
                	<td>Retype Password</td>
                    <td><input type="password" class="form-control" name="retypePassword"></td>
                </tr>
                <tr>
                	<td></td>
                    <td><input type="submit" class="btn btn-success" name="changePassword" value="SAVE"></td>
                </tr>
            </table>
        </form>
    </div>
    <div class="col-sm-4"></div>
</div>

</body>
</html>
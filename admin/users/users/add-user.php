<?php include('../includes/init.php');
//only users check
if($_SESSION['loggedIn'] != 1) {
	header("Location: ".HOST."/users/users/logout.php");
	exit();
}
//only rights check
if(User::rights($db,$_SESSION['email']) < 90) {
	header("Location: ".HOST."/users/users/logout.php");
	exit();
}
?>
<?php include(ROOT.'/templates/html-links.php');?>

<body class="container">
<?php include(ROOT.'/templates/header.php');?>
<?php include(ROOT.'/users/includes/navbar.php');?>
<div class="row" style="margin-top:20px;">
	<div class="col-sm-12">
    	<h3>Add User:</h3>
        <p>Please note that all these values have to be precisely as on BNI Connect.</p>
		<?php echo $_SESSION['programMessage'];
			$_SESSION['programMessage'] = '';
		?>
    </div>
</div>
<div class="row">
    <div class="col-sm-5">
    	<form method="post" action="php/users.php" onSubmit="return addUserValidate();">
        	<table class="table">
            	<tr>
                	<td>First Name</td>
                    <td><input class="form-control" name="firstName" id="addUserFirstName"></td>
                </tr>
                <tr>
                	<td>Last Name</td>
                    <td><input class="form-control" name="lastName" id="addUserLastName"></td>
                </tr>
                <tr>
                	<td>Email ID</td>
                    <td><input class="form-control" name="email" id="addUserEmail"></td>
                </tr>
                <tr>
                	<td></td>
                    <td><input type="submit" class="btn btn-primary" name="addUserSubmit" value="ADD"></td>
                </tr>
            </table>
        </form>
    </div>
</div>

<script src="<?php echo HOST; ?>/users/users/js/users.js"></script>
</body>
</html>
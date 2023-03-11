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
    	<h3>Manage Users:</h3>
    </div>
</div>
<div class="row">
    <div class="col-sm-8">
    	<h4>Existing Users</h4>
        <?php echo $_SESSION['programMessage'];
			$_SESSION['programMessage'] = '';
		?>
        <?php echo User::getList($db,'active','edit'); ?>
    </div>
</div>

</body>
</html>
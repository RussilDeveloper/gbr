<?php include('../includes/init.php');
//only users check
if($_SESSION['loggedIn'] != 1) {
	header("Location: ".HOST."/users/users/logout.php");
	exit();
}
//only rights check
if(User::rights($db,$_SESSION['email']) >= 90 || User::getRole($db,$_SESSION['email']) == 'President' || User::getRole($db,$_SESSION['email']) == 'Vice President' || User::getRole($db,$_SESSION['email']) == 'Secretary Treasurer') {
	//allow
} else {
	header("Location: ".HOST."/users/users/logout.php");
	exit();
}
?>
<?php include(ROOT.'/templates/html-links.php');?>

<body class="container-fluid">
<?php include(ROOT.'/templates/header.php');?>
<?php include(ROOT.'/users/includes/navbar.php');?>
  <script>
  tinymce.init({
    selector: '.rejolaTinyMCE'
  });
  </script>
<div class="row" style="margin-top:20px;">
	<div class="col-sm-12">
    	<h3>Manage Role Description:</h3>
    </div>
</div>
<div class="row">
    <div class="col-sm-10">
        <?php echo $_SESSION['programMessage'];
			$_SESSION['programMessage'] = '';
		?>
        <?php echo Role::roleUpdateForm($db); ?>
    </div>
</div>

</body>
</html>
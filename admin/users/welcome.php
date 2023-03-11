<?php include('includes/init.php');
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
<div class="row" style="margin-top:20px; min-height:300px;">
	<div class="col-sm-3">
    	<h3>Welcome!</h3>        
    </div>
    <div class="col-sm-1"></div>
    <div class="col-sm-8">
    	
    </div>
</div>
<?php include(ROOT.'/templates/footer.php');?>
</body>
</html>
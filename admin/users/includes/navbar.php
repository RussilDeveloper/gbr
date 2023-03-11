<?php 

//home menu
$homeMenu = "";
if(User::rights($db,$_SESSION['email']) >= 20) {
	$homeMenu .= "<li><a href=\"".HOST."/users/welcome.php\">Home</a></li>";
}


$eventMenu = "";
if(User::rights($db,$_SESSION['email']) >= 20) {
	$eventMenu .= "<li><a href=\"".HOST."/users/event/manage-events.php\">Manage Events</a></li>";
	
}


$memberMenu = "";
if(User::rights($db,$_SESSION['email']) >= 20) {
	$memberMenu .= "<li><a href=\"".HOST."/users/member/add-member.php\">Manage Members</a></li>";
	
}


$paymentMenu = "";
if(User::rights($db,$_SESSION['email']) >= 20) {
	$paymentMenu .= "<li><a href=\"".HOST."/users/payment/update-member-payment.php\">Update Member Payment</a></li>";
	
}


$testMenu = "";
if(User::rights($db,$_SESSION['email']) >= 20) {
	$testMenu .= "<li><a href=\"".HOST."/users/test/send-links.php\">Send Links</a></li>";
	$testMenu .= "<li><a href=\"".HOST."/users/test/view-progress.php\">View Progress</a></li>";
}



//right menu
//user menu
/* $userMenu = "";
if(User::rights($db,$_SESSION['email']) >= 90 || User::getRole($db,$_SESSION['email']) == 'President' || User::getRole($db,$_SESSION['email']) == 'Vice President' || User::getRole($db,$_SESSION['email']) == 'Secretary Treasurer') {
	$userMenu .= "<li><a href=\"".HOST."/users/users/manage-role-description.php\">Manage Role Description</a></li>";
}
if(User::rights($db,$_SESSION['email']) >= 90) {
	$userMenu .= "<li><a href=\"".HOST."/users/users/manage-users.php\">Manage Users</a></li>";
	$userMenu .= "<li><a href=\"".HOST."/users/users/add-user.php\">Add User</a></li>";
} */


?>

<nav class="navbar navbar-custom">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <!--<li><a href="#">Link</a></li>-->
        <?php echo $homeMenu; ?>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Event <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <?php echo $eventMenu; ?>           
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Member <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <?php echo $memberMenu; ?>           
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Payment <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <?php echo $paymentMenu; ?>           
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Test <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <?php echo $testMenu; ?>           
          </ul>
        </li>
        
        
        
      </ul>
      <ul class="nav navbar-nav navbar-right">
      	<!--<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Users <span class="caret"></span></a>
          <ul class="dropdown-menu">
          	<?php //echo $userMenu; ?>
          </ul>
        </li>-->
        <!--<li><a href="<?php echo HOST; ?>/users/users/profile.php">Profile</a></li>-->
        <li><a href="<?php echo HOST; ?>/users/users/logout.php">Log Out</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
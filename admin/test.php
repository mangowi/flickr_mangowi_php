<?php
require_once('../../includes/initialize.php');
if (!$session->is_logged_in()) { redirect_to("login.php"); }
?>

<?php include_layout_template('admin_header.php'); ?>

<?php
	$user = new User();
	$user->username = "dansmith";
	$user->password = "abcd12345";
	$user->first_name = "Daniel";
	$user->last_name = "Mangowi";
	$user->create();
?>


<?php include_layout_template('admin_footer.php'); ?>
		

<?php
$pageTitle = "Add New Notice";
$pageHead = "Add New Notice" ;

require_once "template/head.php" ;

?>

<div class="container">
	<br>
	<form action="backend/register.php" method="POST" style="width: 90%; max-width: 400px; display: block; margin: auto;">
	<h3>Create a new account</h3>
			<br>
			<input type="text" name="name" placeholder="Your Name" style='width: 100%;' required>
			<br><br>
			<input type="password" name="password" placeholder="Password" style='width: 100%;' required>
			<br><br>
			<input type="password" name="password_c" placeholder=" Confirm Password" style='width: 100%;' required>
			<br><br>						
			<input type="submit" name="register_s" value='Register'>
		<!-- </div>		 -->
	</form>
</div>

<?php
require_once "template/foot.php" ;
?>

<?php
$pageTitle = "Add New Notice";
$pageHead = "Add New Notice" ;

require_once "template/head.php" ;

?>

<div class="container">
	<br>
	<form action="backend/login.php" method="POST" style="width: 90%; max-width: 400px; display: block; margin: auto;">
	<h3>Login To your account</h3>
			<br>
			<input type="text" name="name" placeholder="Your Name" style='width: 100%;' required>
			<br><br>
			<input type="text" name="password" placeholder="Password" style='width: 100%;' required>
			<br><br>			
			<input type="submit" name="login_s" value='Login'>
		<!-- </div>		 -->
	</form>
</div>

<?php
require_once "template/foot.php" ;
?>

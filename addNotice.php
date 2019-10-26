<?php
$pageTitle = "Add New Notice";
$pageHead = "Add New Notice" ;

require_once "template/head.php" ;

?>

<div class="noticeCont">
	<form action="backend/addNotice.php" method='POST'>
		<div class="form-group">
			<div class="form-title">
				Your Name:
			</div>
			<div class="form-ctrl">
				<input type="text" name='name' placeholder="Enter Your Name" required>
			</div>
		</div>		
		<div class="form-group">
			<div class="form-title">
				Title:
			</div>
			<div class="form-ctrl">
				<input type="text" name='title' placeholder="Enter Notice Title" required>
			</div>
		</div>
		<div class="form-group">
			<div class="form-title">
				Description:
			</div>
			<div class="form-ctrl">
				<textarea name='description' placeholder="Enter Notice Body" cols='30' rows='5' required></textarea>
			</div>
		</div>	
		<div class="form-group">
			<div class="form-ctrl">
				<input type="submit" name='submit' value='Add This Notice'>
			</div>
		</div>			
	</form>
</div>

<?php
require_once "template/foot.php" ;
?>

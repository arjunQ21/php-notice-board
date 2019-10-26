<?php
$pageTitle = "Update Notice";
$pageHead = "Update Notice" ;

if(!(isset($_GET['id']))){
	die("give id from query string.") ;
}
if(!(is_numeric($_GET['id']))){
	die("give valid value of id.") ;
}
$id = $_GET['id'] ;

require_once "template/head.php" ;

//getting values from db
require_once "backend/db_connection.php" ;
$sql = "select * from notices where id = $id" ;
$rslts = mysqli_query($conn, $sql) ;
$previousData = mysqli_fetch_all($rslts, MYSQLI_ASSOC) ;
// print_r($previousData);


?>

<?php 
if(sizeof($previousData) == 0){ ?>
	<div class="msg alert">
		Notice with id = <?= $id ?> not found.
	</div>
<?php } else { ?>

<?php if(authorised()) { ?>
<div class="noticeCont">
	<form action="backend/updateNotice.php" method='POST'>
		<h2 class='pageHead'>Update Notice by <?= $previousData[0]['made_by'] ?></h2>
		<input type="hidden" name="id" value='<?= $id ?>'>
		<div class="form-group">
			<div class="form-title">
				Title:
			</div>
			<div class="form-ctrl">
				<input type="text" name='title' value = "<?= $previousData[0]['title'] ?> " required>
			</div>
		</div>
		<div class="form-group">
			<div class="form-title">
				Description:
			</div>
			<div class="form-ctrl">
				<textarea name='description'  cols='30' rows='5' required>
					<?= trim($previousData[0]['body']) ?>
				</textarea>
			</div>
		</div>	
		<div class="form-group">
			<div class="form-ctrl">
				<input type="submit" name='submit' value='Update'>
			</div>
		</div>			
	</form>
</div>
	
<?php } else { ?>
	<div class="msg alert">
		You cannot update notices. Go to authorisation URL to get admin permissions.
	</div>
<?php } ?>

<?php } ?>

<?php
require_once "template/foot.php" ;
?>

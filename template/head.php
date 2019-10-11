<?php 

?>
<!DOCTYPE html>
<html>
<head>
	<title><?= ($pageTitle)?? "Notices | Arjun Adhikari" ?></title>
	<link rel="stylesheet" type="text/css" href="./styles/main.css">
	<meta name='viewport' content='width=device-width'>
</head>
<body>
<header>
	<h2 class='headText pageHead'>
		<?= ($pageHead)?? "Notices" ?>		
	</h2>
	<nav>
		<a href="index.php">Notice Board</a>
		<a href="addNotice.php">Add Notice</a>
	</nav>
	<!-- <hr> -->
</header>
<div class='cont'>
	<?php 
		$getMessage = ($_GET['msg']) ?? "" ;
		if($getMessage){ ?>
			<div class="msg">
				<?= $getMessage ?>
			</div>
		<?php } ?>

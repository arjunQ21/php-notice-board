<?php 
$pageTitle = 'Notice Board' ;
$pageHead = "Notice Board" ;
require_once "backend/db_connection.php" ;
require_once "template/head.php" ;
$notices = [] ;
 ?>

<?php

//notices

$sql = "select * from notices order by time desc";
$results = mysqli_query($conn, $sql) ;
$notices = mysqli_fetch_all($results, MYSQLI_ASSOC) ;


?>
<?php 
if(!authorised()){
	?>
		<div class="alert">
			You cannot update notices. Go to authorisation URL to get admin permissions.
		</div>
	<?php 
}
?>


<?php if(sizeof($notices) >= 1){ ?>
	<div class="notices_cont">
		<?php foreach($notices as $notice) { ?> 
			<!-- <div> -->
				<div class="notice">
					<div class="n_by">
						<div class='n_by_text'>
							<?= "From: ".$notice['made_by'] ?>
						</div>
							<?php 
								if(authorised()){
									?>
										<div class="edit" >
											<a href='updateNotice.php?id=<?= $notice['id'] ?>' >&#9998;</a>
										</div>
									<?php
								}
							?>
					</div>
					<div class="n_title">
						<?= $notice['title'] ?>
					</div>
					<div class="n_body">
						<?= $notice['body'] ?>
					</div>
					<!-- <div class='n_time_by'> -->
						<div class="n_time">
							<?= "At: ".$notice['time'] ?>
						</div>
					<!-- </div> -->
				</div>
			<!-- </div> -->
		<?php } ?>
	</div>
<?php }else{ ?>
	<div class="msg alert">
		<?= "No Notices Yet." ?>
	</div>
<?php } ?>

<?php 
require_once "template/foot.php" ;
?>
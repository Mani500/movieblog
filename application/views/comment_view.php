<?php
foreach ($comments as $row) {
?>
	<div class="comments">
		Commentaire : <?php echo $row['comment']; ?><br>
		Posté par : <?php echo $row['nickname']; ?><br>
		Date : <?php echo $row['date']; ?>
	</div>
<?php
}
?>
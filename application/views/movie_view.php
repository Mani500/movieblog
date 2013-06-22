<?php
foreach ($movies as $row) {
?>
	<div class="ticket">
		<div class="fiche" style="border: none;">
			<img style="float: left; margin-right: 10px;" src="/uploads/<?php echo $row['affiche']; ?>">
			Nom du film : <?php echo $row['name']; ?><br>
			Réalisateur : <?php echo $row['director']; ?><br>
			Date : <?php echo $row['date']; ?><br>
			Genre : <?php echo $row['genre']; ?>
		</div>
		<?php if (($_SESSION["login"])) { ?>
			<a href="" onclick="display('comments_<?php echo $row['id']; ?>'); return false;"><?php echo count($row["comments"]); ?> commentaire(s)</a> / 
			<a href="" onclick="display('<?php echo $row['id']; ?>'); return false;">Poster un commentaire</a>
			<div id="comments_<?php echo $row['id']; ?>" style="display:none; border: none;">
				<?php
				$this->load->view('comment_view', $row);
				?>
			</div>
			<form style="display:none;" id="<?php echo $row['id']; ?>" method="post" action="/index.php/add_comment_sql/">
				<div>
					<h2>Poster un commentaire</h2><br>
					<input type="hidden" name="movie" value="<?php echo $row['id']; ?>"></input>
					<textarea name="comment"></textarea>
					<input type="submit" name="submit" value="Envoyer"></input>
				</div>
			</form>
		<?php } ?>
	</div>
<?php
}
?>
<header>
	<h1>Ajouter un film</h1>
</header>
<form method="POST" action="/index.php/add_movie_sql/" enctype="multipart/form-data">
	<div align="center">
		Nom du film : <input type="text" name="name"></input><br>
		Année de sortie : <input type="text" name="date"></input><br>
		Réalisateur : <input type="text" name="director"></input><br>
		Genre : <input type="text" name="genre"></input><br>
		Affiche : <input type="file" name="affiche" size="20"></input><br>
		<input type="submit" name="submit" value="Ajouter ce film"></input>
	</div>
</form>
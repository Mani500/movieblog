<header>
	<h1>Créer un compte utilisateur</h1>
</header>
<form method="POST" action="/index.php/add_user_sql/">
	<div align="center">
		Prénom : <input type="text" name="firstname"></input><br>
		Nom : <input type="text" name="lastname"></input><br>
		Pseudonyme : <input type="text" name="nickname"></input><br>
		Mot de passe : <input type="password" name="password"></input><br>
		<input type="submit" name="submit" value="Créer son compte"></input>
	</div>
</form>

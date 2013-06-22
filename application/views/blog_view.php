<html>
    <head>
        <meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="/static/movieblog.css"/>
		<script language="javascript" type="text/javascript">
			function display(bloc) {
			   status=document.getElementById(bloc).style.display;
			   if(status=="none"){
				document.getElementById(bloc).style.display="block";
			   }
			   else {
				document.getElementById(bloc).style.display="none";
			   }
			}
		</script>	
        <title>Mon blog cinéma</title>
    </head>
 
    <body>
		<header>
			<a href="http://127.0.0.1/">
				<h1>Mon blog cinéma</h1>
			</a>
			<?php if ($_SESSION["login"]) { ?>
				<h2>Connecté :)</h2>
			<?php } ?>
        </header>
		<nav>
		<?php if (!$_SESSION["login"]) { ?>
		<a href="/index.php/add_user/">S'inscrire</a><br>
		<a href="/index.php/login/">Se connecter</a><br>
		<?php } else { ?> 
		<a href="/index.php/add_movie/">Ajouter un film</a><br>
		<a href="/index.php/user/logout/">Se déconnecter</a><br> <?php } 
		?>
		</nav>
		<section>
			<?php $this->load->view($page); ?>
		</section>
    </body>
</html>
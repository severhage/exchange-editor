<?php 
	include_once 'header.php';
 ?>

<center>
 	<section class="aanmeldformulier">
 		<h2>Inloggen</h2>
 		<form action="includes/login.inc.php" method="post">
 			<div class="aanmeldformulier-formulier">
 			<input type="text" name="uid" placeholder="Gebruikersnaam/E-mailadres">
 			<input type="password" name="pwd" placeholder="Wachtwoord...">
 			<button type="submit" name="submit">Inloggen</button>
 		</form>
 	</div>
 	</section>
</center>
 	<?php 
 		include_once 'footer.php';
 	 ?>
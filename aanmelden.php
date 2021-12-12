<?php 
	include_once 'header.php';
 ?>

<center>
 	<section class="aanmeldformulier">
 		<h2>Aanmelden</h2>
 		<form action="includes/signup.inc.php" method="post">
 			<div class="aanmeldformulier-formulier">
 			<input type="text" name="name" placeholder="Volledige naam...">
 			<input type="text" name="email" placeholder="E-mailadres">
 			<input type="text" name="uid" placeholder="Gebruikersnaam">
 			<input type="password" name="pwd" placeholder="Wachtwoord...">
 			<input type="password" name="pwdrepeat" placeholder="Herhaal wachtwoord...">
 			<button type="submit" name="submit">Aanmelden</button>
 		</form>
 	</div>
 	</section>
</center>
 	<?php 
 		include_once 'footer.php';
 	 ?>
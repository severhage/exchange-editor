<?php

if (isset($_POST["submit"])) {
	echo "Het werkt!";
}
else {
	header("location: ../aanmelden.php")
}
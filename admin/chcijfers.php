<?php

  include_once "includesUsers/dbhUs.php";

		$Naam = $_POST['Naam'];
		$Achternaam = $_POST['Achternaam'];
		$Frans = $_POST['Frans'];
		$Engels = $_POST['Engels'];
		$Wiskunde = $_POST['Wiskunde'];
		$Nederlands = $_POST['Nederlands'];
		$Natuurkunde = $_POST['Natuurkunde'];
		$Scheikunde = $_POST['Scheikunde'];
		$it = $_POST['it'];
		$ckv = $_POST['ckv'];
		$LO = $_POST['LO'];

		$sql = "INSERT INTO leerlingencijfers (Naam, Achternaam, Frans, Engels, Wiskunde, Nederlands, Natuurkunde, Scheikunde, it, ckv, LO) VALUES ('$Naam', '$Achternaam', '$Frans', '$Engels', '$Wiskunde', '$Nederlands', '$Natuurkunde', '$Scheikunde', '$it', '$ckv', '$LO');";
		mysqli_query($rel, $sql);

		header("Location: updatecijfers.php?cijfers==geupdate")
	?>
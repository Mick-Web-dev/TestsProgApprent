<?php
	$prix = 10;
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Mon document</title>
</head>

<body>

<h1 align="center"><?= $prix; ?> Euros HT</h1>

<form method="post" action="traitement.php">
<p align="center">
	<input type="number" name="qt" placeholder="Quantité" />
    <input type="hidden" name="prix" value="<?= $prix; ?>" />
    <input type="submit" value="Calculer" />
</p>
</form>


</body>
</html>
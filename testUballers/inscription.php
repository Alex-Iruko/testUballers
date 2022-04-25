<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="style.css" />
	<title>Inscription</title>
</head>
<body>
	<div class="connexion">
		<div class="login"><label>Adresse mail</label> <input type="text" name="login" placeholder="login"></div>
		<div class="pwd"><label>Mot de passe</label><input type="password" name="password" placeholder="Votre mot de passe"></div>
		<button class="button-connexion" type="submit" >Connexion</button>
	</div>
	<div class="txt-inscription">
		<h2>Inscription</h2>
		<h4>C'est gratuit (et ça le restera toujours)</h4>
	</div>
	<div class="form-inscription">
		<form action="detailInscription.php" method="post">
			<div class="nom" >
				<input type="text" name="prenom" placeholder="Prénom" required >
				<input type="text" name="nom" placeholder="Nom de famille" required>
			</div>
			<div class="email">
				<input type="email" name="email" placeholder="email"required size="47">
			</div>
			<div class="email2">
				<input type="text" name="Confirm-email" placeholder="Confirmer email"required size="47">
			</div>	
			<div class="password">
				<input type="password" name="password" placeholder="Nouveau mot de passe "required size="47">
			</div>
			<div class="naissance">
				<p>Date de naissance</p>
				<select>
					<option name="jour">Jour</option>
					<?php for($i=1;$i<=31;$i++){echo "<option>$i</option>";}?>
				</select>
				<select>
					<option name="mois">Mois</option>
					<?php for($i=1;$i<=12;$i++){echo "<option>$i</option>";}?>
				</select>
				<select>
					<option name="annee">Année</option>
					<?php for($i=1900;$i<=2100;$i++){echo "<option>$i</option>";}?>
				</select>
			</div>
			<div class="sexe">
				<input type="radio" name="sexe">Homme
				<input type="radio" name="sexe">Femme
			</div>
			<button class="button-inscription" type="submit" >Inscription</button>
		</form>
	</div>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>TUTO JS - #13 Valider des formulaires (avec les événements)</title>
	<link href="css/style.css" type="text/css" rel="stylesheet">
</head>
<body>


<h1>TUTO JS - #13 Valider des formulaires (avec les événements)</h1>

<form method="POST" name="inscription">
	<input type="text" name="pseudo" placeholder="Pseudo"><br>
	<input type="email" name="email" placeholder="Email" id="email"><br>
	<input type="email" name="email-confirmation" placeholder="Confirmation de l'email" id="email2"><br>
	<input type="password" name="mdp" placeholder="Mot de passe"><br>
	<input type="submit" value="Inscription">
</form>

<p style="color: red;" id="erreur"></p>

<script src="js/app.js"></script>
</body>
</html>​
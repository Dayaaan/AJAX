<!DOCTYPE html>
<html lang="FR">
<head>
	<meta charset="UTF-8">
	<title>AJAX</title>
	<script
	  src="https://code.jquery.com/jquery-3.3.1.js"
	  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
	  crossorigin="anonymous">		  	
	</script>

	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
	<h1>AJAX</h1>
	<div>
		<fieldset>
		    <legend>Resultat : </legend>
		    <div class="result">

		    </div>
		 </fieldset>
	</div>

	<form>
		<fieldset>
		    <legend>Votre choix:</legend>
			<label for="getHTML">Recuperer un contenu HTML du serveur</label>
			<input type="radio" name="ajax" id="getHTML" value="html"><br>
			<label for="getJSON">Recuperer un contenu JSON du serveur</label>
			<input type="radio" name="ajax" id="getJSON" value="json"><br>
			<label for="getMOVIE">Recuperer les films</label>
			<input type="radio" name="ajax" id="getMOVIE" value="movie"><br>
			<button type="button" id="btn-submit">Executer</button>
		</fieldset>
		
	</form>
	<script src="js/script.js"></script>
</body>
</html>
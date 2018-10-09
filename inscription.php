<div>
	<form method='POST' action='creation_compte.php'>
		<div>
			nom*
			<input type='text' name='nom'>
		</div>
		<div>
			prenom*
			<input type='text' name='prenom'>
		</div>
		<div>
			nom d'utilisateur*
			<input type='text' name='pseudo'>
		</div>
		<div>
			mot de passe*
			<input type='text' name='mdp'>
		</div>
		<div>
			email*
			<input type='text' name='mail'>
		</div>
		<div>
			telephone*
			<input type='text' name='telephone'>
		</div>
		<div>
			code postale*
			<input type='integer' name='cp'>
		</div>
		<div>
			ville*
			<input type='text' name='ville'>
		</div>
		<div>
			sexe
			<input type='radio' id='f' name='sexe' value='F'><label for='f'>F</label>
			<input type='radio' id='m' name='sexe' value='M' checked><label for='m'>M</label>
			<input type='radio' id='a' name='sexe' value='A'><label for='a'>Autre</label>
		</div>
		<button type='submit'>Valider</button>
	</form>
</div>
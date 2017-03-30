<div class="container">
<h1>Registreer uzelf in ons klantensysteem</h1>
	<form action="<?= URL ?>clients/createSave" method="post">
	    <tr>
            <label for="name">Voornaam:</label>
            <input type="text" name="firstName" placeholder="John">
            
            <label for="name">Tussenvoegsel:</label>
            <input type="text" name="prefix" placeholder="Von">
            
            <label for="name">Achternaam:</label>
            <input type="text" name="lastName" placeholder="Doe">
		</tr>
		<tr>
            <td><input type="submit" value="Verzenden"></td>
	    </tr>
	</form>

</div>
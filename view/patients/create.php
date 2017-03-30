<div class="container">
<h1>Registreer een nieuwe client aan de database</h1>
	<form action="<?= URL ?>patients/createSave" method="post">
	    <tr>
	        <label for="name">Naam</label>
		    <input type="text" name="name" placeholder="John Doe"><br/>
	        <label for="species">Ras</label>
		    <select name="species">
			    <option value="Hond">Hond</option>
			    <option value="Kat">Kat</option>	
			    <option value="Koe">Koe</option>	
		    </select><br/>
	        <label for="status">Status</label>
		    <input type="text" name="status" placeholder="Koorts"><br/>
	        <label for="owner">Baasje</label>
		    <input type="text" name="owner" placeholder="Johanna Doe"><br/>
		</tr>
		<tr>
            <td><input type="submit" value="Verzenden"></td>
	    </tr>
	</form>

</div>
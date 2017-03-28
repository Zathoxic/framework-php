<div class="container">
	<form action="<?= URL ?>hospital/createSave" method="post">
	    <tr>
	        <label for="name">Naam</label>
		    <input type="text" name="name" placeholder="John Doe"><br/>
	        <label for="species">Ras</label>
		    <select name="species">
			    <option value="dog">Dog</option>
			    <option value="cat">Cat</option>	
			    <option value="cow">Cow</option>	
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
<div class="container">
    <h1>Verander de gegevens van uw huisdier</h1>
    <br/>
    
	<form method="post">
        <?php 
        foreach($species as $speciesEdit) {
        ?>
	    <tr>
	        <label for="species">Diersoort</label>
		    <input type="text" name="species" value="<?= $speciesEdit['species']; ?>"><br/>
	        
		</tr>
        <?php } ?>
        <input type="submit" name="submit" value="Verzenden"></td>
    </form>
</div>
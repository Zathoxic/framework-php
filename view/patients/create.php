<div class="container">
<h1>Registreer een nieuwe client aan de database</h1>
	<form action="<?= URL ?>patients/createSave" method="post">
        <label for="name">Naam:</label>
        <input type="text" name="name" placeholder="Naam">
        
        <label for="species">Diersoort:</label>
        <select name="species">
           <option value="default">Selecteer een diersoort</option>
            <?php foreach($species as $specie){ ?>
            <option value="<?= $specie['species'];?>"><?= $specie['species'];?></option>
            <?php } ?>
        </select>
        <label for="status">Status:</label>
        <input type="text" name="status" placeholder="Status">
        
        <label for="owner">Baasje:</label>
        <select name="owner">
            <option value="default" disabled selected>Selecteer uw naam</option>
            <?php foreach($clients as $client){ ?>
            <option value="<?= $client['firstName'], " ", $client['prefix'], " ", $client['lastName']; ?>"><?= $client['firstName'], " " , $client['prefix'], $client['lastName']; ?></option>
            <?php } ?>
        </select>
        
        <label for="gender">Mannelijk</label>
        <input label="Mannelijk" type="radio" name="gender" value="Mannelijk" checked="checked">
        <label for="gender">Vrouwelijk</label>
        <input label="Vrouwelijk" type="radio" name="gender" value="Vrouwelijk">
        <br/>
        <br/>
        <input type="submit" name="submit" value="Verzenden"></td>
	</form>

</div>
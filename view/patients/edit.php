
<div class="container">
    <h1>Verander de gegevens van uw huisdier</h1>
    <br/>
    
	<form method="post">
        <?php 
        foreach($patient as $patientEdit) { 
        ?>
        <input type="hidden" name="id" value="<?= $patientEdit['id']; ?>">
        <label for="name">Naam:</label>
        <input type="text" name="name" value="<?= $patientEdit['name']; ?>">
        
        <label for="species">Diersoort:</label>
        <select name="species">
        <?php foreach($species as $specie){ ?>
        <option value="<?= $specie['species'] ?>"><?= $specie['species'] ?></option>
        <?php } ?>
        </select>
        
        <label for="status">Status:</label>
        <input type="text" name="status" value="<?= $patientEdit['status']; ?>">
        
        <label for="owner">Baasje:</label>
        <select name="owner">
            <option value="default" disabled selected>Selecteer uw naam</option>
            <?php foreach($clients as $client){ ?>
            <option value="<?= $client['firstName'], " ", $client['prefix'], $client['lastName']; ?>"><?= $client['firstName'], " " , $client['prefix'], $client['lastName']; ?></option>
            <?php } ?>
        </select>
        
        <label for="gender">Geslacht:</label>
        <label for="gender">Mannelijk</label>
        <input label="Mannelijk" type="radio" name="gender" value="Mannelijk" checked="checked">
        <label for="gender">Vrouwelijk</label>
        <input label="Vrouwelijk" type="radio" name="gender" value="Vrouwelijk">
        <?php } ?>
        <br/>
        <br/>
        <input type="submit" name="submit" value="Verzenden"></td>
    </form>
</div>
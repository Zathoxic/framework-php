
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
        
        <label for="species">Ras:</label>
        <select name="species" value="<?= $patientEdit['species'];?>">
            <option value="hond">Hond</option>
            <option value="kat">Kat</option>
            <option value="koe">Koe</option>
        </select>
        
        <label for="status">Status:</label>
        <input type="text" name="status" value="<?= $patientEdit['status']; ?>">
        
        <label for="owner">Baasje:</label>
        <input type="text" name="owner" value="<?= $patientEdit['owner']; ?>">
        <br/>
        <br/>
        <?php } ?>
        <input type="submit" name="submit" value="Verzenden"></td>
    </form>
    
    <a href="' . URL . 'patients/index"><button>Ga terug naar het begin scherm</button></a>
</div>
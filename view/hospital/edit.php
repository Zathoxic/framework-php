
<div class="container">
    <h1>Verander de gegevens van uw huisdier</h1>
    <br/>
    
	<form action="<?= URL ?>hospital/editPatient" method="post">
        <?php 
        foreach($patient as $patientEdit) { 
        ?>
        <input type="hidden" value="<?= $patientEdit['id']; ?>">
        <label for="name">Naam:</label>
        <input type="text" name="name" value="<?= $patientEdit['name']; ?>">
        
        <label for="species">Ras:</label>
        <select name="species" ?>">
            <option value="dog">Hond</option>
            <option value="cat">Kat</option>
            <option value="cow">Koe</option>
        </select>
        
        <label for="status">Status:</label>
        <input type="text" name="status" value="<?= $patientEdit['status']; ?>">
        
        <label for="owner">Baasje:</label>
        <input type="text" name="owner" value="<?= $patientEdit['owner']; ?>">
        <br/>
        <br/>
        <?php } ?>
        <input type="submit" value="Verzenden"></td>
    </form>
</div>
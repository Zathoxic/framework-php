
<div class="container">
    <h1>Verander de gegevens van uw huisdier</h1>
    <br/>
    
	<form method="post">
        <?php 
        foreach($species as $speciesEdit) { 
        ?>
        <input type="hidden" name="id" value="<?= $speciesEdit['id']; ?>">
        <label for="name">Naam:</label>
        <input type="text" name="name" value="<?= $speciesEdit['name']; ?>">
        
        <label for="species">Ras:</label>
        <select name="species" value="<?= $speciesEdit['species'];?>">
            <option value="hond">Hond</option>
            <option value="kat">Kat</option>
            <option value="koe">Koe</option>
        </select>
        
        <label for="status">Status:</label>
        <input type="text" name="status" value="<?= $speciesEdit['status']; ?>">
        
        <label for="owner">Baasje:</label>
        <input type="text" name="owner" value="<?= $speciesEdit['owner']; ?>">
        <br/>
        <br/>
        <?php } ?>
        <input type="submit" name="submit" value="Verzenden"></td>
    </form>
    
    <a href="' . URL . 'species/index"><button>Go back to home screen</button></a>
</div>
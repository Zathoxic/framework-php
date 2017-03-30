
<div class="container">
    <h1>Verander uw gegevens</h1>
    <br/>
    
	<form method="post">
        <?php 
        foreach($clients as $clientEdit) { 
        ?>
        <input type="hidden" name="id" value="<?= $clientEdit['id']; ?>">
        <label for="name">Voornaam:</label>
        <input type="text" name="firstName" value="<?= $clientEdit['firstName']; ?>">
        
        
        <label for="name">Tussenvoegsel:</label>
        <input type="text" name="prefix" value="<?= $clientEdit['prefix']; ?>">
        
        <label for="name">Achternaam:</label>
        <input type="text" name="lastName" value="<?= $clientEdit['lastName']; ?>">
        <br/>
        <br/>
        <?php } ?>
        <input type="submit" name="submit" value="Verzenden"></td>
    </form>
</div>
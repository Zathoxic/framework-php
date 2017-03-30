<div class="container">
<h1>Clienten</h1>
	<table border="1">
		<tr>
			<th>Voornaam</th>
			<th>Tussenvoegsel</th>
			<th>Achternaam</th>
		</tr>
		
		<?php foreach ($clients as $client) { ?>
		<tr>			
		    <td style="display: none; padding:2px 5px;"><?= $client['id']; ?></td>
			<td style=" padding:2px 5px;;"><?= $client['firstName']; ?></td>
			<td style=" padding:2px 5px;"><?= $client['prefix']; ?></td>
			<td style=" padding:2px 5px;"><?= $client['lastName']; ?></td>
			<td style=" padding:2px 5px;"><a href="<?= URL ?>client/edit/<?= $client['id'] ?>">Bewerk</a></td>
			<td style=" padding:2px 5px;"><a href="<?= URL ?>client/delete/<?= $client['id'] ?>">Verwijder</a></td>
		</tr>
		<?php } ?>

	</table>
	<a href="<?= URL ?>clients/create">Toevoegen</a>
</div>
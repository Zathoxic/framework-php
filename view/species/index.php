<div class="container">
	<table border="1">
		<tr>
			<th>Naam</th>
			<th>Diersoort</th>
			<th>Status</th>
			<th>Baasje</th>
		</tr>
		
		<?php foreach ($species as $specie) { ?>
		<tr>			
		    <td style="display: none; padding:2px 5px;"><?= $specie['id']; ?></td>
			<td style=" padding:2px 5px;;"><?= $specie['name']; ?></td>
			<td style=" padding:2px 5px;"><?= $specie['species']; ?></td>
			<td style=" padding:2px 5px;"><?= $specie['status']; ?></td>
			<td style=" padding:2px 5px;"><?= $specie['owner']; ?></td>
			<td style=" padding:2px 5px;"><a href="<?= URL ?>species/edit/<?= $specie['id'] ?>">Edit</a></td>
			<td style=" padding:2px 5px;"><a href="<?= URL ?>species/delete/<?= $specie['id'] ?>">Delete</a></td>
		</tr>
		<?php } ?>

	</table>
	<a href="<?= URL ?>species/create">Toevoegen</a>
</div>
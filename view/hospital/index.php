<div class="container">
	<table border="1">
		<tr>
			<th>Naam</th>
			<th>Diersoort</th>
			<th>Status</th>
			<th>Baasje</th>
		</tr>
		
		<?php foreach ($hospital as $patient) { ?>
		<tr>			
		    <td style="display: none; padding:2px 5px;"><?= $patient['id']; ?></td>
			<td style=" padding:2px 5px;;"><?= $patient['name']; ?></td>
			<td style=" padding:2px 5px;"><?= $patient['species']; ?></td>
			<td style=" padding:2px 5px;"><?= $patient['status']; ?></td>
			<td style=" padding:2px 5px;"><?= $patient['owner']; ?></td>
			<td style=" padding:2px 5px;"><a href="<?= URL ?>hospital/edit/<?= $patient['id'] ?>">Edit</a></td>
			<td style=" padding:2px 5px;"><a href="<?= URL ?>hospital/delete/<?= $patient['id'] ?>">Delete</a></td>
		</tr>
		<?php } ?>

	</table>
	<a href="<?= URL ?>hospital/create">Toevoegen</a>
</div>
<div class="container">
	<table border="1">
		<tr>
			<th>#</th>
			<th>Naam</th>
			<th>Diersoort</th>
			<th>Status</th>
			<th>Baasje</th>
			<th colspan="2">Actie</th>
		</tr>
		
		<?php foreach ($hospital as $patient) { ?>
		<tr>
			<td><?= $patient['id']; ?></td>
			<td><?= $patient['name']; ?></td>
			<td><?= $patient['species']; ?></td>
			<td><?= $patient['status']; ?></td>
			<td><?= $patient['owner']; ?></td>
			<td><a href="<?= URL ?>hospital/edit/<?= $patient['id'] ?>">Edit</a></td>
			<td><a href="<?= URL ?>hospital/delete/<?= $patient['id'] ?>">Delete</a></td>
		</tr>
		<?php } ?>

	</table>
	<a href="<?= URL ?>hospital/create">Toevoegen</a>
</div>
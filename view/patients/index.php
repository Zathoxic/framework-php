<div class="container">
<h1>Patienten</h1>
	<table border="1">
		<tr>
			<th>Naam</th>
			<th>Diersoort</th>
			<th>Status</th>
			<th>Baasje</th>
		</tr>
		
		<?php foreach ($patients as $patient) { ?>
		<tr>			
		    <td style="display: none; padding:2px 5px;"><?= $patient['id']; ?></td>
			<td style=" padding:2px 5px;;"><?= $patient['name']; ?></td>
			<td style=" padding:2px 5px;"><?= $patient['species']; ?></td>
			<td style=" padding:2px 5px;"><?= $patient['status']; ?></td>
			<td style=" padding:2px 5px;"><?= $patient['owner']; ?></td>
			<td style=" padding:2px 5px;"><a href="<?= URL ?>patients/edit/<?= $patient['id'] ?>">Bewerk</a></td>
			<td style=" padding:2px 5px;"><a href="<?= URL ?>patients/delete/<?= $patient['id'] ?>">Verwijder</a></td>
		</tr>
		<?php } ?>

	</table>
	<a href="<?= URL ?>patients/create">Toevoegen</a>
</div>
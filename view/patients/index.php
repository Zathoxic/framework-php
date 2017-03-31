<div class="container">
<h1>Patienten</h1>
	<table border="1">
		<tr>
			<th><a href="?order=name&&sort=<?= $sort ?>" name="orderByName">Naam</a></th>
			<th><a href="?order=species&&sort=<?= $sort ?>" name="orderBySpecies">Diersoort</a></th>
			<th><a href="?order=status&&sort=<?= $sort ?>" name="orderByStatus">Status</a></th>
			<th><a href="?order=owner&&sort=<?= $sort ?>" name="orderByOwner">Baasje</a></th>
			<th><a href="?order=gender&&sort=<?= $sort ?>" name="orderByGender">Geslacht</a></th>
		</tr>
		
		<?php foreach ($patients as $patient) { ?>
		<tr>			
		    <td style="display: none; padding:2px 5px;"><?= $patient['id']; ?></td>
			<td style=" padding:2px 5px;;"><?= $patient['name']; ?></td>
			<td style=" padding:2px 5px;"><?= $patient['species']; ?></td>
			<td style=" padding:2px 5px;"><?= $patient['status']; ?></td>
			<td style=" padding:2px 5px;"><?= $patient['owner']; ?></td>
			<td style=" padding:2px 5px;"><?= $patient['gender']; ?></td>
			<td style=" padding:2px 5px;"><a href="<?= URL ?>patients/edit/<?= $patient['id'] ?>">Bewerk</a></td>
			<td style=" padding:2px 5px;"><a href="<?= URL ?>patients/delete/<?= $patient['id'] ?>">Verwijder</a></td>
		</tr>
		<?php } ?>

	</table>
	<a href="<?= URL ?>patients/create">Toevoegen</a>
</div>
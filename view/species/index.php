<div class="container">
<h1>Diersoorten</h1>
	<table border="1">
		<tr>
			<th>Diersoort</th>
		</tr>
		
		<?php foreach ($species as $specie) { ?>
		<tr>			
		    <td style="display: none; padding:2px 5px;"><?= $specie['id']; ?></td>
			<td style=" padding:2px 5px;"><?= $specie['species']; ?></td>
			<td style=" padding:2px 5px;"><a href="<?= URL ?>species/edit/<?= $specie['id'] ?>">Edit</a></td>
			<td style=" padding:2px 5px;"><a href="<?= URL ?>species/delete/<?= $specie['id'] ?>">Delete</a></td>
		</tr>
		<?php } ?>

	</table>
	<a href="<?= URL ?>species/create">Toevoegen</a>
</div>
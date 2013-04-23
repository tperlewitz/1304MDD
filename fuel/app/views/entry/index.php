<h2>Your Shows</h2>
<br>
<?php if ($entries): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Artist</th>
			<th>Venue</th>
			<th>City</th>
			<th>Opener</th>
			<th>Review</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($entries as $entry): ?>		<tr>

			<td><?php echo $entry->artist; ?></td>
			<td><?php echo $entry->venue; ?></td>
			<td><?php echo $entry->city; ?></td>
			<td><?php echo $entry->opener; ?></td>
			<td><?php echo $entry->review; ?></td>
			<td>
				<?php echo Html::anchor('entry/view/'.$entry->id, 'View'); ?> |
				<?php echo Html::anchor('entry/edit/'.$entry->id, 'Edit'); ?> |
				<?php echo Html::anchor('entry/delete/'.$entry->id, 'Delete', array('onclick' => "return confirm('Are you sure?')")); ?>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Entries.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('entry/create', 'Add new Entry', array('class' => 'btn btn-success')); ?>

</p>

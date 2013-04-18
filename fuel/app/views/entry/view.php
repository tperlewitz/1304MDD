<h2>Viewing #<?php echo $entry->id; ?></h2>

<p>
	<strong>Artist:</strong>
	<?php echo $entry->artist; ?></p>
<p>
	<strong>Venue:</strong>
	<?php echo $entry->venue; ?></p>
<p>
	<strong>City:</strong>
	<?php echo $entry->city; ?></p>
<p>
	<strong>Opener:</strong>
	<?php echo $entry->opener; ?></p>
<p>
	<strong>Review:</strong>
	<?php echo $entry->review; ?></p>

<?php echo Html::anchor('entry/edit/'.$entry->id, 'Edit'); ?> |
<?php echo Html::anchor('entry', 'Back'); ?>
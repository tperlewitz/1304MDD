<h2>Viewing #<?php echo $review->id; ?></h2>

<p>
	<strong>Artist:</strong>
	<?php echo $review->artist; ?></p>
<p>
	<strong>Album:</strong>
	<?php echo $review->album; ?></p>
<p>
	<strong>Review:</strong>
	<?php echo $review->review; ?></p>
<p>
	<strong>Author id:</strong>
	<?php echo $review->author_id; ?></p>

<?php echo Html::anchor('review/edit/'.$review->id, 'Edit'); ?> |
<?php echo Html::anchor('review', 'Back'); ?>
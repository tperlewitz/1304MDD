<h2>Listing Reviews</h2>
<br>
<?php if ($reviews): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Artist</th>
			<th>Album</th>
			<th>Review</th>
			<th>Author id</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($reviews as $review): ?>		<tr>

			<td><?php echo $review->artist; ?></td>
			<td><?php echo $review->album; ?></td>
			<td><?php echo $review->review; ?></td>
			<td><?php echo $review->author_id; ?></td>
			<td>
				<?php echo Html::anchor('review/view/'.$review->id, 'View'); ?> |
				<?php echo Html::anchor('review/edit/'.$review->id, 'Edit'); ?> |
				<?php echo Html::anchor('review/delete/'.$review->id, 'Delete', array('onclick' => "return confirm('Are you sure?')")); ?>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Reviews.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('review/create', 'Add new Review', array('class' => 'btn btn-success')); ?>

</p>

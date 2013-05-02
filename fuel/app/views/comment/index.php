<h2>Listing Comments</h2>
<br>
<?php if ($comments): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Author id</th>
			<th>Comment</th>
			<th>Post id</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($comments as $comment): ?>		<tr>

			<td><?php echo $comment->author_id; ?></td>
			<td><?php echo $comment->comment; ?></td>
			<td><?php echo $comment->post_id; ?></td>
			<td>
				<?php echo Html::anchor('comment/view/'.$comment->id, 'View'); ?> |
				<?php echo Html::anchor('comment/edit/'.$comment->id, 'Edit'); ?> |
				<?php echo Html::anchor('comment/delete/'.$comment->id, 'Delete', array('onclick' => "return confirm('Are you sure?')")); ?>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Comments.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('comment/create', 'Add new Comment', array('class' => 'btn btn-success')); ?>

</p>

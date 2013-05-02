<h2>Viewing #<?php echo $comment->id; ?></h2>

<p>
	<strong>Author id:</strong>
	<?php echo $comment->author_id; ?></p>
<p>
	<strong>Comment:</strong>
	<?php echo $comment->comment; ?></p>
<p>
	<strong>Post id:</strong>
	<?php echo $comment->post_id; ?></p>

<?php echo Html::anchor('comment/edit/'.$comment->id, 'Edit'); ?> |
<?php echo Html::anchor('comment', 'Back'); ?>
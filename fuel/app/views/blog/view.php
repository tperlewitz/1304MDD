<h2><?php echo $review->artist ?></h2>

<p class="meta">Posted by <?php echo Html::anchor('users/view/'.$review->user->id, $review->user->username) ?> on <?php echo date('f d, Y', $review->created_at) ?>
	&nbsp;•&nbsp; Comments (<?php echo count($review->comments) ?>)</a></p>

<?php echo $review->review ?>

<h3>Comments</h3>

<?php foreach ($review->comments as $comment); ?>
	
	<h4><?php echo $comment->user->username ?></h4>
	<p><?php echo $comment->comment ?></p>

<?php endforeach ?>

<p>Reviews: <?php echo count($user->reviews) ?></p>

<hr />

<h3>Reviews</h3>

</php foreach ($user->reviews as $reviews): ?>

	<h3><?php echo Html::anchor('blog/view/'.$review->id, $review->artist) ?></h3>

	<p><?php echo $review->review ?></p>

<?php endforeach ?>
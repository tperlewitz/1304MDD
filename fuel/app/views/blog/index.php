<h2>TuneGenius</h2>

<?php foreach ($reviews as $review): ?>
	<h3><?php echo Html::anchor('blog/view/'.$review->artist) ?></h3>
	<p class="meta">Posted by <?php echo $review->user->username ?> on <?php echo date('F d, Y', $review->created_at) ?>
	&nbsp;•&nbsp; Comments (<?php echo count($review->comments) ?>)</a> &nbsp;•&nbsp; <?php echo Html::anchor('blog/view/'.$review->id, 'Full article', array('class' => 'permalink')) ?></a></p>
	<p><?php echo $review->review ?></p>
<?php endforeach ?>
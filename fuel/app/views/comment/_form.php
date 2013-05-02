<?php echo Form::open(); ?>

	<fieldset>
		<div class="clearfix">
			<?php echo Form::label('Author id', 'author_id'); ?>

			<div class="input">
				<?php echo Form::input('author_id', Input::post('author_id', isset($comment) ? $comment->author_id : ''), array('class' => 'span4')); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('Comment', 'comment'); ?>

			<div class="input">
				<?php echo Form::textarea('comment', Input::post('comment', isset($comment) ? $comment->comment : ''), array('class' => 'span8', 'rows' => 8)); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('Post id', 'post_id'); ?>

			<div class="input">
				<?php echo Form::input('post_id', Input::post('post_id', isset($comment) ? $comment->post_id : ''), array('class' => 'span4')); ?>

			</div>
		</div>
		<div class="actions">
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>

		</div>
	</fieldset>
<?php echo Form::close(); ?>
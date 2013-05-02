<?php echo Form::open(); ?>

	<fieldset>
		<div class="clearfix">
			<?php echo Form::label('Artist', 'artist'); ?>

			<div class="input">
				<?php echo Form::input('artist', Input::post('artist', isset($review) ? $review->artist : ''), array('class' => 'span4')); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('Album', 'album'); ?>

			<div class="input">
				<?php echo Form::input('album', Input::post('album', isset($review) ? $review->album : ''), array('class' => 'span4')); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('Review', 'review'); ?>

			<div class="input">
				<?php echo Form::textarea('review', Input::post('review', isset($review) ? $review->review : ''), array('class' => 'span8', 'rows' => 8)); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('Author id', 'author_id'); ?>

			<div class="input">
				<?php echo Form::input('author_id', Input::post('author_id', isset($review) ? $review->author_id : ''), array('class' => 'span4')); ?>

			</div>
		</div>
		<div class="actions">
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>

		</div>
	</fieldset>
<?php echo Form::close(); ?>
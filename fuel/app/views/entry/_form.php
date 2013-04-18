<?php echo Form::open(); ?>

	<fieldset>
		<div class="clearfix">
			<?php echo Form::label('Artist', 'artist'); ?>

			<div class="input">
				<?php echo Form::input('artist', Input::post('artist', isset($entry) ? $entry->artist : ''), array('class' => 'span4')); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('Venue', 'venue'); ?>

			<div class="input">
				<?php echo Form::input('venue', Input::post('venue', isset($entry) ? $entry->venue : ''), array('class' => 'span4')); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('City', 'city'); ?>

			<div class="input">
				<?php echo Form::input('city', Input::post('city', isset($entry) ? $entry->city : ''), array('class' => 'span4')); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('Opener', 'opener'); ?>

			<div class="input">
				<?php echo Form::input('opener', Input::post('opener', isset($entry) ? $entry->opener : ''), array('class' => 'span4')); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('Review', 'review'); ?>

			<div class="input">
				<?php echo Form::textarea('review', Input::post('review', isset($entry) ? $entry->review : ''), array('class' => 'span8', 'rows' => 8)); ?>

			</div>
		</div>
		<div class="actions">
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>

		</div>
	</fieldset>
<?php echo Form::close(); ?>
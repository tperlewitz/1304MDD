<h2>Contact us</h2>

<?php echo Form::open('') ?>
<fieldset>

	<?php if ( ! empty($error)): ?>
	<p><?php echo $error ?></p>
	<?php endif; ?>

	<p>
		<label for="name">Your name</label>
		<?php echo Form::input('name', '', array('placeholder' => 'Your name')) ?>
	</p>
	<p>
		<label for="name">Your email</label>
		<?php echo Form::input('email', '', array('placeholder' => 'Your email address')) ?>
	</p>
	<p>
		<label for="name">Message</label>
		<?php echo Form::textarea('message', '', array('rows' => 10, 'cols' => 50)) ?>
	</p>

	<?php echo Form::submit('submit', 'Submit'); ?>

</fieldset>
</form>
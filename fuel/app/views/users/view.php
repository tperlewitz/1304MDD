<h2>Viewing #<?php echo $user->id; ?></h2>

<p>
	<strong>Username:</strong>
	<?php echo $user->username; ?></p>
<p>
	<strong>Password:</strong>
	<?php echo $user->password; ?></p>

<?php echo Html::anchor('users/edit/'.$user->id, 'Edit'); ?> |
<?php echo Html::anchor('users', 'Back'); ?>
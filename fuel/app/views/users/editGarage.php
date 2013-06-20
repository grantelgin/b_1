<h2>Editing <span class='muted'>User</span></h2>
<br>

<?php echo render('users/_formGarage'); ?>
<p>
	<?php echo Html::anchor('users/view/'.$user->id, 'View'); ?> |
	<?php echo Html::anchor('users', 'Back'); ?></p>

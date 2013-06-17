<h2>Editing <span class='muted'>City</span></h2>
<br>

<?php echo render('cities/_form'); ?>
<p>
	<?php echo Html::anchor('cities/view/'.$city->id, 'View'); ?> |
	<?php echo Html::anchor('cities', 'Back'); ?></p>

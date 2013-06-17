<h2>Editing <span class='muted'>Regulator</span></h2>
<br>

<?php echo render('regulators/_form'); ?>
<p>
	<?php echo Html::anchor('regulators/view/'.$regulator->id, 'View'); ?> |
	<?php echo Html::anchor('regulators', 'Back'); ?></p>

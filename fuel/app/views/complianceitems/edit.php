<h2>Editing <span class='muted'>ComplianceItem</span></h2>
<br>

<?php echo render('complianceitems/_form'); ?>
<p>
	<?php echo Html::anchor('complianceitems/view/'.$complianceItem->id, 'View'); ?> |
	<?php echo Html::anchor('complianceitems', 'Back'); ?></p>

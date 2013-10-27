<div class="whiteContainer">
<h2>Viewing <span class='muted'>#<?php echo $complianceItem->id; ?></span></h2>

<h3 style="border-bottom:1px solid #b0b0b0;"><?php echo $complianceItem->ciname; ?></h3>
<h4><?php echo Html::anchor('regulators/view/'.$complianceItem->regulator_id, $complianceItem->regulatorName); ?></h4>

<div>
	<p><?php echo $complianceItem->cidesc; ?></p>
	
</div>
<div>
	Fee: <?php echo $complianceItem->cifee; ?>
</div>
<div>
	Frequency: <?php echo $complianceItem->cifreq; ?>
</div>
<div>&nbsp;</div>

<!--
<p>
	<strong>Regulator id:</strong>
	<?php echo $complianceItem->regulator_id; ?></p>
<p>
	<strong>Ciname:</strong>
	<?php echo $complianceItem->ciname; ?></p>
<p>
	<strong>Cidesc:</strong>
	<?php echo $complianceItem->cidesc; ?></p>
<p>
	<strong>Cicar:</strong>
	<?php echo $complianceItem->cicar; ?></p>
<p>
	<strong>Cihome:</strong>
	<?php echo $complianceItem->cihome; ?></p>
<p>
	<strong>Cibusiness:</strong>
	<?php echo $complianceItem->cibusiness; ?></p>
<p>
	<strong>Cidriverslic:</strong>
	<?php echo $complianceItem->cidriverslic; ?></p>
<p>
	<strong>Cibizlic:</strong>
	<?php echo $complianceItem->cibizlic; ?></p>
<p>
	<strong>Cifreq:</strong>
	<?php echo $complianceItem->cifreq; ?></p>
<p>
	<strong>Cifee:</strong>
	<?php echo $complianceItem->cifee; ?></p>
<p>
	<strong>Cipenaltyfee:</strong>
	<?php echo $complianceItem->cipenaltyfee; ?></p>
<p>
	<strong>Cipenaltydesc:</strong>
	<?php echo $complianceItem->cipenaltydesc; ?></p>
-->

<?php echo Html::anchor('complianceitems/edit/'.$complianceItem->id, 'Edit'); ?> |
<?php echo Html::anchor('complianceitems', 'Back'); ?>
</div>

<h2>Viewing <span class='muted'>#<?php echo $map_regulatorsCity->id; ?></span></h2>

<p>
	<strong>Regulator id:</strong>
	<?php echo $map_regulatorsCity->regulator_id; ?></p>
<p>
	<strong>City id:</strong>
	<?php echo $map_regulatorsCity->city_id; ?></p>

<?php echo Html::anchor('map/regulatorscities/edit/'.$map_regulatorsCity->id, 'Edit'); ?> |
<?php echo Html::anchor('map/regulatorscities', 'Back'); ?>
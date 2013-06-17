<h2>Viewing <span class='muted'>#<?php echo $city->id; ?></span></h2>

<p>
	<strong>Zipcode:</strong>
	<?php echo $city->zipcode; ?></p>
<p>
	<strong>State:</strong>
	<?php echo $city->state; ?></p>
<p>
	<strong>City:</strong>
	<?php echo $city->city; ?></p>
<p>
	<strong>County:</strong>
	<?php echo $city->county; ?></p>
<p>
	<strong>Latitude:</strong>
	<?php echo $city->latitude; ?></p>
<p>
	<strong>Longitude:</strong>
	<?php echo $city->longitude; ?></p>

<?php echo Html::anchor('cities/edit/'.$city->id, 'Edit'); ?> |
<?php echo Html::anchor('cities', 'Back'); ?>
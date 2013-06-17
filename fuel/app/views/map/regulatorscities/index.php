<h2>Listing <span class='muted'>Map_regulatorsCities</span></h2>
<br>
<?php if ($map_regulatorsCities): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Regulator id</th>
			<th>City id</th>
			<th>&nbsp;</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($map_regulatorsCities as $map_regulatorsCity): ?>		<tr>

			<td><?php echo $map_regulatorsCity->regulator_id; ?></td>
			<td><?php echo $map_regulatorsCity->city_id; ?></td>
			<td>
				<?php echo Html::anchor('map/regulatorscities/view/'.$map_regulatorsCity->id, '<i class="icon-eye-open" title="View"></i>'); ?> |
				<?php echo Html::anchor('map/regulatorscities/edit/'.$map_regulatorsCity->id, '<i class="icon-wrench" title="Edit"></i>'); ?> |
				<?php echo Html::anchor('map/regulatorscities/delete/'.$map_regulatorsCity->id, '<i class="icon-trash" title="Delete"></i>', array('onclick' => "return confirm('Are you sure?')")); ?>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Map_regulatorsCities.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('map/regulatorscities/create', 'Add new Map regulatorsCity', array('class' => 'btn btn-success')); ?>

</p>

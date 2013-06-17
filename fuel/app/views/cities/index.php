<h2>Listing <span class='muted'>Cities</span></h2>
<br>
<?php if ($cities): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Zipcode</th>
			<th>State</th>
			<th>City</th>
			<th>County</th>
			<th>Latitude</th>
			<th>Longitude</th>
			<th>&nbsp;</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($cities as $city): ?>		<tr>

			<td><?php echo $city->zipcode; ?></td>
			<td><?php echo $city->state; ?></td>
			<td><?php echo $city->city; ?></td>
			<td><?php echo $city->county; ?></td>
			<td><?php echo $city->latitude; ?></td>
			<td><?php echo $city->longitude; ?></td>
			<td>
				<?php echo Html::anchor('cities/view/'.$city->id, '<i class="icon-eye-open" title="View"></i>'); ?> |
				<?php echo Html::anchor('cities/edit/'.$city->id, '<i class="icon-wrench" title="Edit"></i>'); ?> |
				<?php echo Html::anchor('cities/delete/'.$city->id, '<i class="icon-trash" title="Delete"></i>', array('onclick' => "return confirm('Are you sure?')")); ?>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Cities.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('cities/create', 'Add new City', array('class' => 'btn btn-success')); ?>

</p>

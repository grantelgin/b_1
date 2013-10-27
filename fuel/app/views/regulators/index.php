<div class="whiteContainer">
<h2>Listing <span class='muted'>Regulators</span></h2>
<br>
<?php if ($regulators): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Regname</th>
			<th>Regweb</th>
			<th>Regadddesc</th>
			<th>Regstreet1</th>
			<th>Regstreet2</th>
			<th>Regcityid</th>
			<th>Regadddesc2</th>
			<th>Regaddstreet12</th>
			<th>Regaddstreet22</th>
			<th>Regcity2</th>
			<th>Regadddesc3</th>
			<th>Regaddstreet13</th>
			<th>Regaddstreet23</th>
			<th>Regcity3</th>
			<th>Regphone</th>
			<th>Reglogo</th>
			<th>&nbsp;</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($regulators as $regulator): ?>		<tr>

			<td><?php echo $regulator->regname; ?></td>
			<td><?php echo $regulator->regweb; ?></td>
			<td><?php echo $regulator->regadddesc; ?></td>
			<td><?php echo $regulator->regstreet1; ?></td>
			<td><?php echo $regulator->regstreet2; ?></td>
			<td><?php echo $regulator->regcityid; ?></td>
			<td><?php echo $regulator->regadddesc2; ?></td>
			<td><?php echo $regulator->regaddstreet12; ?></td>
			<td><?php echo $regulator->regaddstreet22; ?></td>
			<td><?php echo $regulator->regcity2; ?></td>
			<td><?php echo $regulator->regadddesc3; ?></td>
			<td><?php echo $regulator->regaddstreet13; ?></td>
			<td><?php echo $regulator->regaddstreet23; ?></td>
			<td><?php echo $regulator->regcity3; ?></td>
			<td><?php echo $regulator->regphone; ?></td>
			<td><?php echo $regulator->reglogo; ?></td>
			<td>
				<?php echo Html::anchor('regulators/view/'.$regulator->id, '<i class="icon-eye-open" title="View"></i>'); ?> |
				<?php echo Html::anchor('regulators/edit/'.$regulator->id, '<i class="icon-wrench" title="Edit"></i>'); ?> |
				<?php echo Html::anchor('regulators/delete/'.$regulator->id, '<i class="icon-trash" title="Delete"></i>', array('onclick' => "return confirm('Are you sure?')")); ?>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Regulators.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('regulators/create', 'Add new Regulator', array('class' => 'btn btn-success')); ?>

</p>
</div>

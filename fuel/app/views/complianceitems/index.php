<div class="whiteContainer">
<h2>Listing <span class='muted'>ComplianceItems</span></h2>
<br>
<?php if ($complianceItems): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Item name</th>
			<th>Fee</th>
			<th>Frequency</th>
			<th>Reminder</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($complianceItems as $complianceItem): ?>		

 <tr>
			<td>
				<h3><?php echo Html::anchor('complianceitems/view/'.$complianceItem->id, $complianceItem->ciname); ?></h3>
				<h4><?php echo Html::anchor('regulators/view/'.$complianceItem->regulator_id, $complianceItem->regulatorName); ?></h4>
			</td>
			<td>
				<?php if ($complianceItem->cifee) echo $complianceItem->cifee; ?>
			</td>
			<td>
				<?php echo $complianceItem->cifreq; ?>
			</td>
			<td>
				<?php echo Html::anchor('complianceitems/view/'.$complianceItem->id, '<i class="glyphicon glyphicon-time glyphicon-white" title="Set reminder"></i> Set reminder', array('class' => 'btn btn-primary')); ?>
			</td>
			<!--	<?php if ($complianceItem->cicar == 1) echo("Because you own a car<br/>"); ?>
				<?php if ($complianceItem->cihome == 1) echo("Because you own a home<br/>"); ?>
				<?php if ($complianceItem->cibusiness == 1) echo("Because you own a business<br/>"); ?>
				<?php if ($complianceItem->cidriverslic== 1) echo("Because you have a driver's license<br/>"); ?>
				<?php if ($complianceItem->cibizlic == 1) echo("Because you have a business license<br/>"); ?>
			-->
					
			
			<!--<td><?php echo $complianceItem->ciname; ?></td>
			<td><?php echo $complianceItem->cidesc; ?></td>
			<td><?php echo $complianceItem->cicar; ?></td>
			<td><?php echo $complianceItem->cihome; ?></td>
			<td><?php echo $complianceItem->cibusiness; ?></td>
			<td><?php echo $complianceItem->cidriverslic; ?></td>
			<td><?php echo $complianceItem->cibizlic; ?></td>
			<td><?php echo $complianceItem->cifreq; ?></td>
			<td><?php echo $complianceItem->cifee; ?></td>
			<td><?php echo $complianceItem->cipenaltyfee; ?></td>
			<td><?php echo $complianceItem->cipenaltydesc; ?></td> -->

			<!--	<?php echo Html::anchor('complianceitems/view/'.$complianceItem->id, '<i class="icon-eye-open" title="View"></i>'); ?> |
				<?php echo Html::anchor('complianceitems/edit/'.$complianceItem->id, '<i class="icon-wrench" title="Edit"></i>'); ?> |
				<?php echo Html::anchor('complianceitems/delete/'.$complianceItem->id, '<i class="icon-trash" title="Delete"></i>', array('onclick' => "return confirm('Are you sure?')")); ?>
			-->


		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No ComplianceItems.</p>

<?php endif; ?><p>
	<!-- <?php echo Html::anchor('complianceitems/create', 'Add new ComplianceItem', array('class' => 'btn btn-success')); ?> -->

</p>
</div>
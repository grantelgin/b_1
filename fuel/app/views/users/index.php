<div class="whiteContainer">
<h2>Listing <span class='muted'>Users</span></h2>
<br>
<?php if ($users): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Password</th>
			<th>Email</th>
			<th>Home city</th>
			<th>Home st</th>
			<th>Homecity id</th>
			<th>Work city</th>
			<th>Work st</th>
			<th>Workcity id</th>
			<th>Ownshome</th>
			<th>Hasdriverslic</th>
			<th>Hasautomobile</th>
			<th>Garage city</th>
			<th>Garage st</th>
			<th>Garagecity id</th>
			<th>Hasbiz</th>
			<th>Hasbizlic</th>
			<th>First name</th>
			<th>Last name</th>
			<th>&nbsp;</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($users as $user): ?>		<tr>

			<td><?php echo $user->password; ?></td>
			<td><?php echo $user->email; ?></td>
			<td><?php echo $user->home_city; ?></td>
			<td><?php echo $user->home_st; ?></td>
			<td><?php echo $user->homecity_id; ?></td>
			<td><?php echo $user->work_city; ?></td>
			<td><?php echo $user->work_st; ?></td>
			<td><?php echo $user->workcity_id; ?></td>
			<td><?php echo $user->ownshome; ?></td>
			<td><?php echo $user->hasdriverslic; ?></td>
			<td><?php echo $user->hasautomobile; ?></td>
			<td><?php echo $user->garage_city; ?></td>
			<td><?php echo $user->garage_st; ?></td>
			<td><?php echo $user->garagecity_id; ?></td>
			<td><?php echo $user->hasbiz; ?></td>
			<td><?php echo $user->hasbizlic; ?></td>
			<td><?php echo $user->first_name; ?></td>
			<td><?php echo $user->last_name; ?></td>
			<td>
				<?php echo Html::anchor('users/view/'.$user->id, '<i class="icon-eye-open" title="View"></i>'); ?> |
				<?php echo Html::anchor('users/edit/'.$user->id, '<i class="icon-wrench" title="Edit"></i>'); ?> |
				<?php echo Html::anchor('users/delete/'.$user->id, '<i class="icon-trash" title="Delete"></i>', array('onclick' => "return confirm('Are you sure?')")); ?>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Users.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('users/createAccount', 'Add new User', array('class' => 'btn btn-success')); ?>

</p>
</div>

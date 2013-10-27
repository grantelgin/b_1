<div class="whiteContainer">
<h2>Viewing <span class='muted'>#<?php echo $user->id; ?></span></h2>


<p>
	<strong>Password:</strong>
	<?php echo $user->password; ?></p>
<p>
	<strong>Email:</strong>
	<?php echo $user->email; ?></p>
<p>
	<strong>Home city:</strong>
	<?php echo $user->home_city; ?></p>
<p>
	<strong>Home st:</strong>
	<?php echo $user->home_st; ?></p>
<p>
	<strong>Homecity id:</strong>
	<?php echo $user->homecity_id; ?></p>
<p>
	<strong>Work city:</strong>
	<?php echo $user->work_city; ?></p>
<p>
	<strong>Work st:</strong>
	<?php echo $user->work_st; ?></p>
<p>
	<strong>Workcity id:</strong>
	<?php echo $user->workcity_id; ?></p>
<p>
	<strong>Ownshome:</strong>
	<?php echo $user->ownshome; ?></p>
<p>
	<strong>Hasdriverslic:</strong>
	<?php echo $user->hasdriverslic; ?></p>
<p>
	<strong>Hasautomobile:</strong>
	<?php echo $user->hasautomobile; ?></p>
<p>
	<strong>Garage city:</strong>
	<?php echo $user->garage_city; ?></p>
<p>
	<strong>Garage st:</strong>
	<?php echo $user->garage_st; ?></p>
<p>
	<strong>Garagecity id:</strong>
	<?php echo $user->garagecity_id; ?></p>
<p>
	<strong>Hasbiz:</strong>
	<?php echo $user->hasbiz; ?></p>
<p>
	<strong>Hasbizlic:</strong>
	<?php echo $user->hasbizlic; ?></p>
<p>
	<strong>First name:</strong>
	<?php echo $user->first_name; ?></p>
<p>
	<strong>Last name:</strong>
	<?php echo $user->last_name; ?></p>

<?php echo Html::anchor('users/edit/'.$user->id, 'Edit'); ?> |
<?php echo Html::anchor('users', 'Back'); ?>

</div>
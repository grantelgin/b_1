<div class="whiteContainer">
<h2>Viewing <span class='muted'>#<?php echo $regulator->id; ?></span></h2>

<h3 style="border-bottom:1px solid #b0b0b0;"><?php echo $regulator->regname; ?></h3>
<div class="row">
	<div class="span2">
		<img src="../../../../assets/img/<?php echo $regulator->reglogo ?>.jpeg" class="img-rounded" style="width:140px;" />
	</div>
	<div class="span4">
		<?php echo $regulator->regweb; ?><br/>
		<?php echo $regulator->regphone; ?>
	</div>
</div>
<div class="row-fluid">
	
	<div class="span4">
	<address class="well">
		<?php echo $regulator->regadddesc; ?><br/>
		<?php echo $regulator->regstreet1; ?><br/>
		<?php echo $regulator->regstreet2; ?><br/>
		<?php echo $regulator->regcityid; ?>
	</address>
	<address class="well">
		<?php echo $regulator->regadddesc2; ?><br/>
		<?php echo $regulator->regaddstreet12; ?><br/>
		<?php echo $regulator->regaddstreet22; ?><br/>
		<?php echo $regulator->regcity2; ?>

	</address>
	<address class="well">
		<?php echo $regulator->regadddesc3; ?><br/>
		<?php echo $regulator->regaddstreet13; ?><br/>
		<?php echo $regulator->regaddstreet23; ?><br/>
		<?php echo $regulator->regcity3; ?>
	</address>
	</div>
	<div class="span8">
	<ul class="nav nav-tabs">
		<li class="active"><a href="#">If you are NOT sending a payment</a></li>
		<li><a href="#">If you ARE sending a payment</a></li>
	</ul>
	next compliance item here<br/><br/>
	
	list of all compliance items below that
	<div
	</div>
	
</div>

<!--
<p>
	<strong>Regname:</strong>
	<?php echo $regulator->regname; ?></p>
<p>
	<strong>Regweb:</strong>
	<?php echo $regulator->regweb; ?></p>
<p>
	<strong>Regadddesc:</strong>
	<?php echo $regulator->regadddesc; ?></p>
<p>
	<strong>Regstreet1:</strong>
	<?php echo $regulator->regstreet1; ?></p>
<p>
	<strong>Regstreet2:</strong>
	<?php echo $regulator->regstreet2; ?></p>
<p>
	<strong>Regcityid:</strong>
	<?php echo $regulator->regcityid; ?></p>
<p>
	<strong>Regadddesc2:</strong>
	<?php echo $regulator->regadddesc2; ?></p>
<p>
	<strong>Regaddstreet12:</strong>
	<?php echo $regulator->regaddstreet12; ?></p>
<p>
	<strong>Regaddstreet22:</strong>
	<?php echo $regulator->regaddstreet22; ?></p>
<p>
	<strong>Regcity2:</strong>
	<?php echo $regulator->regcity2; ?></p>
<p>
	<strong>Regadddesc3:</strong>
	<?php echo $regulator->regadddesc3; ?></p>
<p>
	<strong>Regaddstreet13:</strong>
	<?php echo $regulator->regaddstreet13; ?></p>
<p>
	<strong>Regaddstreet23:</strong>
	<?php echo $regulator->regaddstreet23; ?></p>
<p>
	<strong>Regcity3:</strong>
	<?php echo $regulator->regcity3; ?></p>
<p>
	<strong>Regphone:</strong>
	<?php echo $regulator->regphone; ?></p>
<p>
	<strong>Reglogo:</strong>
	<?php echo $regulator->reglogo; ?></p>
-->



<?php echo Html::anchor('regulators/edit/'.$regulator->id, 'Edit'); ?> |
<?php echo Html::anchor('regulators', 'Back'); ?>
</div>
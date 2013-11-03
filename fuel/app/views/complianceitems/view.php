<!-- <div class="whiteContainer" style="width:940px;"> -->
<!-- <h2>Viewing <span class='muted'>#<?php echo $complianceItem->id; ?></span></h2> -->

<div class="whiteContainer">
<div class="row">
          <div class="col-lg-12">
            <h1><?php echo $complianceItem->ciname; ?><br/> 
            	<small><?php echo Html::anchor('regulators/view/'.$complianceItem->regulator_id, $complianceItem->regulatorName); ?></small>
            </h1>
          </div>
</div>


<div class="row">
          <div class="col-lg-3">
            <div class="panel panel-info">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-xs-6">
                    <i class="glyphicon glyphicon-usd" style="font-size:5em;"></i>
                  </div>
                  <div class="col-xs-6 text-right">
                    <p class="announcement-heading"><?php echo $complianceItem->cifee; ?></p>
                    <p class="announcement-text">per $1,000</p>
                  </div>
                </div>
              </div>
              <a href="#">
                <div class="panel-footer announcement-bottom">
                  <div class="row">
                    <div class="col-xs-6">
                      View Fee details
                    </div>
                    <div class="col-xs-6 text-right">
                      <i class="glyphicon glyphicon-circle-arrow-right"></i>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="panel panel-success">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-xs-6">
                    <i class="glyphicon glyphicon-calendar" style="font-size:5em;"></i>
                  </div>
                  <div class="col-xs-6 text-right">
                    <p class="announcement-heading"><?php echo $complianceItem->cifreq; ?></p>
                    <p class="announcement-text">every</p>
                  </div>
                </div>
              </div>
              <a href="#">
                <div class="panel-footer announcement-bottom">
                  <div class="row">
                    <div class="col-xs-6">
                      View calendar
                    </div>
                    <div class="col-xs-6 text-right">
                      <i class="glyphicon glyphicon-circle-arrow-right"></i>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="panel panel-danger">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-xs-6">
                    <i class="glyphicon glyphicon-warning-sign" style="font-size:5em;"></i>
                  </div>
                  <div class="col-xs-6 text-right">
                    <p class="announcement-heading"><?php echo $complianceItem->cipenaltyfee; ?></p>
                    <p class="announcement-text">penalty</p>
                  </div>
                </div>
              </div>
              <a href="#">
                <div class="panel-footer announcement-bottom">
                  <div class="row">
                    <div class="col-xs-6">
                      View details
                    </div>
                    <div class="col-xs-6 text-right">
                      <i class="glyphicon glyphicon-circle-arrow-right"></i>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>


</div>
<h4>Description</h4>
<div><p><?php echo $complianceItem->cidesc; ?></p></div>

	<?php if ($complianceItem->homeSt != null) echo 
		'<div class="panel panel-default">
			<div class="panel-heading">
                <div class="row">
                  <div class="col-xs-6">
                    <p class="announcement-heading">'.$complianceItem->homeSt.'</p>
                  </div>
                  <div class="col-xs-6 text-right">
                    <p class="announcement-heading">State</p>
                    <p class="announcement-text">per $1,000</p>
                  </div>
                </div>
              </div>
         </div>'
	?>
	<?php if ($complianceItem->cihome == 1) echo 
		'<div class="panel panel-default">
			<div class="panel-heading">
                <div class="row">
                  <div class="col-xs-6">
                    <i class="glyphicon glyphicon-home" style="font-size:5em;"></i>
                  </div>
                  <div class="col-xs-6 text-right">
                    <p class="announcement-heading">Home</p>
                    <p class="announcement-text">per $1,000</p>
                  </div>
                </div>
              </div>
         </div>'	
	?>
	
	<?php if ($complianceItem->cicar == 1) echo 
		'<div class="panel panel-default">
			<div class="panel-heading">
                <div class="row">
                  <div class="col-xs-6">
                    <i class="glyphicon glyphicon-tree-deciduous" style="font-size:5em;"></i>
                  </div>
                  <div class="col-xs-6 text-right">
                    <p class="announcement-heading">car</p>
                    <p class="announcement-text">per $1,000</p>
                  </div>
                </div>
              </div>
         </div>'	
	?>
	<?php if ($complianceItem->cidriverslic == 1) echo 
		'<div class="panel panel-default">
			<div class="panel-heading">
                <div class="row">
                  <div class="col-xs-6">
                    <i class="glyphicon glyphicon-tree-deciduous" style="font-size:5em;"></i>
                  </div>
                  <div class="col-xs-6 text-right">
                    <p class="announcement-heading">Driver\'s license</p>
                    <p class="announcement-text">per $1,000</p>
                  </div>
                </div>
              </div>
         </div>'	
	?>
	<?php if ($complianceItem->cibusiness == 1) echo 
		'<div class="panel panel-default">
			<div class="panel-heading">
                <div class="row">
                  <div class="col-xs-6">
                    <i class="glyphicon glyphicon-tree-deciduous" style="font-size:5em;"></i>
                  </div>
                  <div class="col-xs-6 text-right">
                    <p class="announcement-heading">Business</p>
                    <p class="announcement-text">per $1,000</p>
                  </div>
                </div>
              </div>
         </div>'	
	?>
	<?php if ($complianceItem->cibizlic == 1) echo 
		'<div class="panel panel-default">
			<div class="panel-heading">
                <div class="row">
                  <div class="col-xs-6">
                    <i class="glyphicon glyphicon-tree-deciduous" style="font-size:5em;"></i>
                  </div>
                  <div class="col-xs-6 text-right">
                    <p class="announcement-heading">Business license</p>
                    <p class="announcement-text">per $1,000</p>
                  </div>
                </div>
              </div>
         </div>'	
	?>
	<?php if ($complianceItem->cidog == 1) echo 
		'<div class="panel panel-default">
			<div class="panel-heading">
                <div class="row">
                  <div class="col-xs-6">
                    <i class="glyphicon glyphicon-tree-deciduous" style="font-size:5em;"></i>
                  </div>
                  <div class="col-xs-6 text-right">
                    <p class="announcement-heading">Dog</p>
                    <p class="announcement-text">per $1,000</p>
                  </div>
                </div>
              </div>
         </div>'	
	?>






<?php echo Html::anchor('complianceitems/edit/'.$complianceItem->id, 'Edit'); ?> |
<?php echo Html::anchor('complianceitems', 'Back'); ?>
</div>

<!--
<div class="row">
<div class="span6">
<h3 style="border-bottom:1px solid #b0b0b0;"><?php echo $complianceItem->ciname; ?></h3>
</div>
<div class="span2">
	<span style="font-size:32px; opacity: 0.5;">$</span>&nbsp;<?php echo $complianceItem->cifee; ?>
</div>
<div class="span2">
	<span style="padding-right:20px;"><i class="icon-time" title="Frequency" style="opacity:0.5;"></i></span><?php echo $complianceItem->cifreq; ?>
</div>
<div class="span2">
	<span style="padding-right:20px;"><i class="icon-warning-sign" title="Penalty" style="opacity:0.5;"></i></span><?php echo $complianceItem->cipenaltyfee; ?>
</div>

</div>
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
-->

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


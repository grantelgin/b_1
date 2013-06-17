<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
		<div class="control-group">
			<?php echo Form::label('Regname', 'regname', array('class'=>'control-label')); ?>

			<div class="controls">
				<?php echo Form::input('regname', Input::post('regname', isset($regulator) ? $regulator->regname : ''), array('class' => 'span4', 'placeholder'=>'Regname')); ?>

			</div>
		</div>
		<div class="control-group">
			<?php echo Form::label('Regweb', 'regweb', array('class'=>'control-label')); ?>

			<div class="controls">
				<?php echo Form::input('regweb', Input::post('regweb', isset($regulator) ? $regulator->regweb : ''), array('class' => 'span4', 'placeholder'=>'Regweb')); ?>

			</div>
		</div>
		<div class="control-group">
			<?php echo Form::label('Regadddesc', 'regadddesc', array('class'=>'control-label')); ?>

			<div class="controls">
				<?php echo Form::input('regadddesc', Input::post('regadddesc', isset($regulator) ? $regulator->regadddesc : ''), array('class' => 'span4', 'placeholder'=>'Regadddesc')); ?>

			</div>
		</div>
		<div class="control-group">
			<?php echo Form::label('Regstreet1', 'regstreet1', array('class'=>'control-label')); ?>

			<div class="controls">
				<?php echo Form::input('regstreet1', Input::post('regstreet1', isset($regulator) ? $regulator->regstreet1 : ''), array('class' => 'span4', 'placeholder'=>'Regstreet1')); ?>

			</div>
		</div>
		<div class="control-group">
			<?php echo Form::label('Regstreet2', 'regstreet2', array('class'=>'control-label')); ?>

			<div class="controls">
				<?php echo Form::input('regstreet2', Input::post('regstreet2', isset($regulator) ? $regulator->regstreet2 : ''), array('class' => 'span4', 'placeholder'=>'Regstreet2')); ?>

			</div>
		</div>
		<div class="control-group">
			<?php echo Form::label('Regcityid', 'regcityid', array('class'=>'control-label')); ?>

			<div class="controls">
				<?php echo Form::input('regcityid', Input::post('regcityid', isset($regulator) ? $regulator->regcityid : ''), array('class' => 'span4', 'placeholder'=>'Regcityid')); ?>

			</div>
		</div>
		<div class="control-group">
			<?php echo Form::label('Regadddesc2', 'regadddesc2', array('class'=>'control-label')); ?>

			<div class="controls">
				<?php echo Form::input('regadddesc2', Input::post('regadddesc2', isset($regulator) ? $regulator->regadddesc2 : ''), array('class' => 'span4', 'placeholder'=>'Regadddesc2')); ?>

			</div>
		</div>
		<div class="control-group">
			<?php echo Form::label('Regaddstreet12', 'regaddstreet12', array('class'=>'control-label')); ?>

			<div class="controls">
				<?php echo Form::input('regaddstreet12', Input::post('regaddstreet12', isset($regulator) ? $regulator->regaddstreet12 : ''), array('class' => 'span4', 'placeholder'=>'Regaddstreet12')); ?>

			</div>
		</div>
		<div class="control-group">
			<?php echo Form::label('Regaddstreet22', 'regaddstreet22', array('class'=>'control-label')); ?>

			<div class="controls">
				<?php echo Form::input('regaddstreet22', Input::post('regaddstreet22', isset($regulator) ? $regulator->regaddstreet22 : ''), array('class' => 'span4', 'placeholder'=>'Regaddstreet22')); ?>

			</div>
		</div>
		<div class="control-group">
			<?php echo Form::label('Regcity2', 'regcity2', array('class'=>'control-label')); ?>

			<div class="controls">
				<?php echo Form::input('regcity2', Input::post('regcity2', isset($regulator) ? $regulator->regcity2 : ''), array('class' => 'span4', 'placeholder'=>'Regcity2')); ?>

			</div>
		</div>
		<div class="control-group">
			<?php echo Form::label('Regadddesc3', 'regadddesc3', array('class'=>'control-label')); ?>

			<div class="controls">
				<?php echo Form::input('regadddesc3', Input::post('regadddesc3', isset($regulator) ? $regulator->regadddesc3 : ''), array('class' => 'span4', 'placeholder'=>'Regadddesc3')); ?>

			</div>
		</div>
		<div class="control-group">
			<?php echo Form::label('Regaddstreet13', 'regaddstreet13', array('class'=>'control-label')); ?>

			<div class="controls">
				<?php echo Form::input('regaddstreet13', Input::post('regaddstreet13', isset($regulator) ? $regulator->regaddstreet13 : ''), array('class' => 'span4', 'placeholder'=>'Regaddstreet13')); ?>

			</div>
		</div>
		<div class="control-group">
			<?php echo Form::label('Regaddstreet23', 'regaddstreet23', array('class'=>'control-label')); ?>

			<div class="controls">
				<?php echo Form::input('regaddstreet23', Input::post('regaddstreet23', isset($regulator) ? $regulator->regaddstreet23 : ''), array('class' => 'span4', 'placeholder'=>'Regaddstreet23')); ?>

			</div>
		</div>
		<div class="control-group">
			<?php echo Form::label('Regcity3', 'regcity3', array('class'=>'control-label')); ?>

			<div class="controls">
				<?php echo Form::input('regcity3', Input::post('regcity3', isset($regulator) ? $regulator->regcity3 : ''), array('class' => 'span4', 'placeholder'=>'Regcity3')); ?>

			</div>
		</div>
		<div class="control-group">
			<?php echo Form::label('Regphone', 'regphone', array('class'=>'control-label')); ?>

			<div class="controls">
				<?php echo Form::input('regphone', Input::post('regphone', isset($regulator) ? $regulator->regphone : ''), array('class' => 'span4', 'placeholder'=>'Regphone')); ?>

			</div>
		</div>
		<div class="control-group">
			<?php echo Form::label('Reglogo', 'reglogo', array('class'=>'control-label')); ?>

			<div class="controls">
				<?php echo Form::input('reglogo', Input::post('reglogo', isset($regulator) ? $regulator->reglogo : ''), array('class' => 'span4', 'placeholder'=>'Reglogo')); ?>

			</div>
		</div>
		<div class="control-group">
			<label class='control-label'>&nbsp;</label>
			<div class='controls'>
				<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>			</div>
		</div>
	</fieldset>
<?php echo Form::close(); ?>
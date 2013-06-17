<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
		<div class="control-group">
			<?php echo Form::label('Regulator id', 'regulator_id', array('class'=>'control-label')); ?>

			<div class="controls">
				<?php echo Form::input('regulator_id', Input::post('regulator_id', isset($map_regulatorsCity) ? $map_regulatorsCity->regulator_id : ''), array('class' => 'span4', 'placeholder'=>'Regulator id')); ?>

			</div>
		</div>
		<div class="control-group">
			<?php echo Form::label('City id', 'city_id', array('class'=>'control-label')); ?>

			<div class="controls">
				<?php echo Form::input('city_id', Input::post('city_id', isset($map_regulatorsCity) ? $map_regulatorsCity->city_id : ''), array('class' => 'span4', 'placeholder'=>'City id')); ?>

			</div>
		</div>
		<div class="control-group">
			<label class='control-label'>&nbsp;</label>
			<div class='controls'>
				<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>			</div>
		</div>
	</fieldset>
<?php echo Form::close(); ?>
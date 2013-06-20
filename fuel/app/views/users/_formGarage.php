<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
<div class="control-group">
			<?php echo Form::label('Garage city', 'garage_city', array('class'=>'control-label')); ?>

			<div class="controls">
				<?php echo Form::input('garage_city', Input::post('garage_city', isset($user) ? $user->garage_city : ''), array('class' => 'span4', 'placeholder'=>'Garage city')); ?>

			</div>
		</div>
		<div class="control-group">
			<?php echo Form::label('Garage st', 'garage_st', array('class'=>'control-label')); ?>

			<div class="controls">
				<?php echo Form::input('garage_st', Input::post('garage_st', isset($user) ? $user->garage_st : ''), array('class' => 'span4', 'placeholder'=>'Garage st')); ?>

			</div>
		</div>
		<div class="control-group">
			<?php echo Form::label('Garagecity id', 'garagecity_id', array('class'=>'control-label')); ?>

			<div class="controls">
				<?php echo Form::input('garagecity_id', Input::post('garagecity_id', isset($user) ? $user->garagecity_id : ''), array('class' => 'span4', 'placeholder'=>'Garagecity id')); ?>

			</div>
		</div>


				<div class="control-group">
			<label class='control-label'>&nbsp;</label>
			<div class='controls'>
				<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>			</div>
		</div>
	</fieldset>
<?php echo Form::close(); ?>






		